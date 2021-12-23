<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web ADM'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Web ADM'
        ];
        return view('pages/about' , $data);
    }
    
    public function contact()
    {
        $data = [
            'title' => 'Kontak | Web ADM',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jln abc no 123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'jln setiabudhi no 123',
                    'kota' => 'Jakarta'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }


}
