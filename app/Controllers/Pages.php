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
                'Alamat' => 'Kota Malang',
                'Deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
            ]
        ];
        return view('pages/about', $data);
    }
}
