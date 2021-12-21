<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo 'Ini Controller Coba Method Index';
    }

    public function about($nama = '')
    {
        echo "Halo, nama saya $nama";
    }

}
