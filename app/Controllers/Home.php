<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Selamat Datang di Website',
            'content' => 'Ini adalah halaman utama menggunakan layout.'
        ];

        return view('home', $data);
    }
}
