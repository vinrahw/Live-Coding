<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Peminjaman Lab'
        ];

        return view('pages/login', $data);
    }

  
}