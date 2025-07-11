<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Artikel extends BaseController
{
    public function index()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model
            ->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
            ->select('artikel.*, kategori.nama_kategori')
            ->findAll();

        return view('artikel/index', compact('artikel', 'title'));
    }

    public function view($slug)
    {
        $model = new ArtikelModel();
        $artikel = $model
            ->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
            ->select('artikel.*, kategori.nama_kategori')
            ->where('slug', $slug)
            ->first();

        if (!$artikel) {
            throw PageNotFoundException::forPageNotFound();
        }

        $title = $artikel['judul'];
        return view('artikel/detail', compact('artikel', 'title'));
    }

    public function admin_index()
    {
        $title = 'Daftar Artikel';
        $q     = $this->request->getVar('q') ?? '';
        $kategori_id = $this->request->getVar('kategori_id') ?? '';
        $model = new ArtikelModel();

        $builder = $model
            ->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
            ->select('artikel.*, kategori.nama_kategori');

        if ($q !== '') {
            $builder->like('artikel.judul', $q);
        }

        if ($kategori_id !== '') {
            $builder->where('artikel.id_kategori', $kategori_id);
        }

        $data = [
            'title'       => $title,
            'q'           => $q,
            'kategori_id' => $kategori_id,
            'artikel'     => $builder->paginate(10),
            'pager'       => $model->pager,
            'kategori'    => (new KategoriModel())->findAll(),
        ];

        return view('artikel/admin_index', $data);
    }

    public function add()
{
    $validation = \Config\Services::validation();
    $validation->setRules([
        'judul'       => 'required',
        'isi'         => 'required',
        'id_kategori' => 'required|integer',
        'gambar'      => 'uploaded[gambar]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]'
    ]);

    if (!$validation->withRequest($this->request)->run()) {
        $kategoriModel = new KategoriModel();
        return view('artikel/form_add', [
            'title'      => 'Tambah Artikel',
            'kategori'   => $kategoriModel->findAll(),
            'validation' => $validation
        ]);
    }

    // upload file
    $file = $this->request->getFile('gambar');
    $namaFile = $file->getRandomName();
    $file->move(ROOTPATH . 'public/gambar', $namaFile);

    $artikelModel = new ArtikelModel();
    $artikelModel->insert([
        'judul'       => $this->request->getPost('judul'),
        'isi'         => $this->request->getPost('isi'),
        'slug'        => url_title($this->request->getPost('judul'), '-', true),
        'gambar'      => $namaFile,
        'id_kategori' => $this->request->getPost('id_kategori'),
        'created_at'  => date('Y-m-d H:i:s')
    ]);

    return redirect()->to('/admin/artikel');
}

    public function edit($id)
    {
        $artikel = new ArtikelModel();
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul'       => 'required',
            'id_kategori' => 'required|integer',
            'gambar'      => 'permit_empty|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]'
        ]);

        $dataLama = $artikel->find($id);
        if (!$dataLama) {
            throw PageNotFoundException::forPageNotFound("Artikel tidak ditemukan.");
        }

        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $updateData = [
                'judul'       => $this->request->getPost('judul'),
                'isi'         => $this->request->getPost('isi'),
                'id_kategori' => $this->request->getPost('id_kategori')
            ];

            $file = $this->request->getFile('gambar');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $namaFile = $file->getRandomName();
                $file->move(ROOTPATH . 'public/gambar', $namaFile);

                if (!empty($dataLama['gambar']) && file_exists(ROOTPATH . 'public/gambar/' . $dataLama['gambar'])) {
                    unlink(ROOTPATH . 'public/gambar/' . $dataLama['gambar']);
                }

                $updateData['gambar'] = $namaFile;
            }

            $artikel->update($id, $updateData);
            return redirect('admin/artikel');
        }

        $data = $artikel->find($id);
        $title = "Edit Artikel";
        $kategori = (new KategoriModel())->findAll();

        return view('artikel/form_edit', compact('title', 'data', 'validation', 'kategori'));
    }

    public function delete($id)
    {
        $artikel = new ArtikelModel();
        $artikel->delete($id);
        return redirect('admin/artikel');
    }
}
