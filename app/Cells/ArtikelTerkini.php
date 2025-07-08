<?php

namespace App\Cells;

use App\Models\ArtikelModel;

class ArtikelTerkini
{
    public function render($kategori = null)
    {
        $model = new ArtikelModel();
        $query = $model->orderBy('created_at', 'DESC')->limit(5);

        if ($kategori) {
            $query->where('id_kategori', $kategori);

        }

        $artikel = $query->findAll();

        return view('components/artikel_terkini', ['artikel' => $artikel]);
    }
}
