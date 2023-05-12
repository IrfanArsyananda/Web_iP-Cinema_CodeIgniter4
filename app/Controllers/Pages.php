<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // echo "Controller Pages Method Index";
        $data = [
            'title' => 'Home | First Project CI'
        ];
        return view('pages/home', $data);
    }

    public function contact()
    {
        // echo "Controller Pages Method About";
        $data = [
            'title' => 'Contact | First Project CI',
            'dataContact' => [
                [
                    'wa' => 'Whatsapp 1',
                    'em' => 'E-mail 1',
                    'ig' => 'Istagram 1'
                ],
                [
                    'wa' => 'Whatsapp 2',
                    'em' => 'E-mail 2',
                    'ig' => 'Instagram 2'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }

    public function about()
    {
        // echo "Controller Pages Method About";
        $data = [
            'title' => 'About | First Project CI',
            'dataAbout' => [
                'Nama' => 'Irfan Arsyananda',
                'Kelas' => 'TI-6A',
                'Kota' => 'Tulungagung',
                'Deskripsi' => 'Tidak ada'
            ]
        ];
        return view('pages/about', $data);
    }
}
