<?php

namespace App\Controllers;

class Komik extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Komik'
        ];
        return view('komik/index', $data);
    }
}