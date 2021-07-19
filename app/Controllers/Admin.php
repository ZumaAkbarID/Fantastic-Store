<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = session();
        $this->transaksiModel = new \App\Models\TransaksiModel();
    }

    public function index()
    {
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to(base_url('auth/login'));
        }

        $data = [
            'title' => 'Admin Dashboard | Fantastic',
            'page' => 'dashboard',
            'subpage' => 'general dashboard',
            'notifikasi' => $this->transaksiModel->findAll()
        ];

        return view('admin/index', $data);
    }
}