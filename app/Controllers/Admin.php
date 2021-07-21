<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = session();
        $this->transaksiModel = new \App\Models\TransaksiModel();
        $this->barangModel = new \App\Models\BarangModel();
        $this->user = new \App\Models\UserModel();
        $this->transaksi = new \App\Entities\Transaksi();
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
            'allUser' => $this->user->countAll(),
            'allBarang' => $this->barangModel->countAll(),
            'allTransaksi' => $this->transaksiModel->countAll(),
            'transaksiPending' => $this->transaksiModel->where(['status' => 2])->countAllResults(),
            'transaksiSukses' => $this->transaksiModel->where(['status' => 3])->countAllResults(),
            'transaksi' => $this->transaksiModel->findAll()
        ];

        return view('admin/index', $data);
    }

    public function transaksi()
    {
        $testimoni = $this->transaksiModel;
        $allBarang = $this->barangModel->findAll();
        $allUser = $this->user->findAll();

        $data = [
            'title' => 'Riwayat Pesanan | Fantastic',
            'testimoni' => $testimoni->orderBy('id', 'DESC')->findAll(),
            'testimoniCount' => $testimoni->countAll(),
            'allBarang' => $allBarang,
            'allUser' => $allUser,
            'notifikasi' => $this->transaksiModel->findAll()
        ];

        return view('admin/transaksi', $data);
    }

    // public function ubahtransaksi()
    // {
    //     if (!$this->session->get('isLoggedIn')) {
    //         return redirect()->to(base_url('auth/login'));
    //     }

    //     $code = $this->request->uri->getSegment(3);

    //     if ($this->request->getPost()) {

    //         $b = $this->transaksiModel;

    //         $request = [
    //             'status' => $this->request->getPost('status') + 0,
    //             'updated_by' => 2,
    //             'updated_date' => date('Y-m-d H:i:s')
    //         ];

    //         $b->save($request)->where('no_order', $code);

    //         return redirect()->to(base_url('admin/transaksi'));
    //     }


    //     if ($code == null) {
    //         return redirect()->to(base_url('admin/transaksi'));
    //     }

    //     $data = [
    //         'title' => 'Ubah Status | Fantastic',
    //         'transaksi' => $this->transaksiModel->where(['no_order' => $code])->first(),
    //         'notifikasi' => $this->transaksiModel->findAll()
    //     ];
    //     return view('admin/ubahtransaksi', $data);
    // }
}