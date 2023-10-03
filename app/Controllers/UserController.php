<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class UserController extends BaseController{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }


    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view ('list_user', $data);

    }

    public function profile($nama = '', $kelas = '', $npm = ''){
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view('profile', $data);
    }

    public function create(){
        // $kelas = [
        //     [
        //         'id' => 1,
        //         'nama_kelas' => 'A'
        //     ],
        //     [
        //         'id' => 2,
        //         'nama_kelas' => 'B'  
        //     ],
        //     [
        //         'id' => 3,
        //         'nama_kelas' => 'C'
        //     ],
        //     [
        //         'id' => 4,
        //         'nama_kelas' => 'D'
        //     ],
        // ];

        //$kelasModel = new KelasModel();
        $kelas = $kelasModel->getKelas();
        $kelas = $this->kelasModel->getKelas();


        // session();
        // if (session('validation') != null) {
        //     $validation = session('validation');
        // } else {
        //     $validation = \Config\Services::validation();
        // }

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
            //'validation' => $validation
        ];

        return view('create_user', $data);
    }

    public function store(){
        //dd($this->request->getVar());
        //$userModel = new UserModel();
        // dd($this->request->getVar('kelas'));
        // if(!$this->validate([
        //     'npm' => [
        //         'rules' => 'required|is_unique[user.npm]',
        //         'errors' => [
        //             'required' => '{field} NPM harus diisi',
        //             'is_unique' => '{field} NPM sudah ada'
        //      ]
        //    ]
        // ]))
        // {
        //     $validation = \Config\Services::validation();
        //     return redirect()->to('/user/create')->withInput()->with('validation', $validation);
        // }

        // $userModel->saveUser([
        //     'nama' => $this->request->getVar('nama'),
        //     'id_kelas'=> $this->request->getvar('kelas'),
        //     'npm'=> $this->request->getVar('npm'),
        // ]);

        // $data = [
        //     'nama' => $this->request->getVar('nama'),
        //     'kelas' => $this->request->getVar('kelas'),
        //     'npm' => $this->request->getVar('npm'),
        // ];
        
        // return view('profile', $data);
        
        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
           ]);
    
            return redirect()->to('/user');
    
    }
}