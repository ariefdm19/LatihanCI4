<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        $komik = $this->komikModel->findAll();


        $data = [
            'title' => 'Daftar Komik',
            'komik' => $komik
        ];

        // $komikModel = new \App\Models\KomikModel();
    
        

        return view('komik/index', $data);
    }
}