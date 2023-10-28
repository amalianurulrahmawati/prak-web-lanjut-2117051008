<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function profile()
    {
        $data = [
            'nama' => 'Amalia Nurul Rahmawati',
            'kelas' => 'AB',
            'npm' => '2117051008'

        ];
        return view('profile', $data);
    }
}
