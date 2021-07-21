<?php

namespace App\Controllers;

class Etalase extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->validation = \Config\Services::validation();
        $this->barang = new \App\Models\BarangModel();
        $this->user = new \App\Models\UserModel();
        $this->transaksi = new \App\Entities\Transaksi();
        $this->transaksiModel = new \App\Models\TransaksiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Produk | Fantastic',
            'barang' => $this->barang->where(['status' => 1])->orderBy('id', 'DESC')->findAll()
        ];

        return view('etalase/index', $data);
    }

    public function view()
    {
        $tipe = $this->request->uri->getSegment(3);

        if ($tipe == null) {
            return redirect()->to(base_url('etalase'));
        }

        $data = [
            'title' => 'List Produk | Fantastic',
            'barang' => $this->barang->where(['tipe' => $tipe, 'status' => 1])->orderBy('id', 'DESC')->findAll()
        ];

        return view('etalase/index', $data);
    }

    public function detail()
    {
        $id = $this->request->uri->getSegment(3);

        if ($id == null) {
            return redirect()->to(base_url('etalase'));
        }

        $barang = $this->barang->find($id);

        if ($barang->status == 0) {
            return redirect()->to(base_url('etalase'));
        }

        if ($barang->updated_by !== null) {
            $seller = $this->user->find($barang->updated_by);
        } else {
            $seller = $this->user->find($barang->created_by);
        }

        $data = [
            'title' => 'Detail Produk | Fantastic',
            'barang' => $barang,
            'seller' => $seller->username
        ];

        return view('etalase/detail', $data);
    }

    public function beli()
    {
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to(base_url('auth/login'));
        }

        $id = $this->request->uri->getSegment(3);

        $data = [
            'title' => 'Beli | Fantastic',
            'model' => $this->barang->find($id)
        ];

        return view('etalase/beli', $data);
    }

    public function process()
    {
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to(base_url('auth/login'));
        }

        if ($this->request->getPost()) {
            $barang = $this->barang->find($this->request->getPost('id_barang'));

            $this->transaksi->id_barang = $this->request->getPost('id_barang');
            $this->transaksi->id_pembeli = $this->session->get('userId');
            $this->transaksi->no_order = $this->request->getPost('no_order');
            $this->transaksi->tujuan = $this->request->getPost('acc');
            $this->transaksi->jumlah = 1;
            $this->transaksi->total_harga = $barang->harga + rand(100, 300);
            // Status [0 => 'failed', 1 => 'canceled', 2 => 'pending', 3 => 'success']
            $this->transaksi->pembayaran = $this->request->getPost('pembayaran');
            $this->transaksi->status = 2;
            $this->transaksi->created_by = 2; // System
            $this->transaksi->created_date = date('Y-m-d H:i:s');


            $this->transaksiModel->save($this->transaksi);

            $segments = ['etalase', 'success', $this->request->getPost('no_order')];

            return redirect()->to(base_url($segments));
        } else {
            return redirect()->back();
        }
    }

    public function success()
    {
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to(base_url('auth/login'));
        }

        $no_order = $this->request->uri->getSegment(3);

        $invoice = $this->transaksiModel->where(['no_order' => $no_order])->first();

        if ($no_order == null) {
            return redirect()->to(base_url('etalase'));
        }

        if ($this->session->get('userId') !== $invoice->id_pembeli) {
            return redirect()->to(base_url('etalase'));
        }

        $barang = $this->barang->where(['id' => $invoice->id_barang])->first();

        $data = [
            'title' => 'Tagihan Pembayaran | Fantastic',
            'invoice' => $invoice,
            'barang' => $barang
        ];

        return view('etalase/billing', $data);
    }

    public function riwayat()
    {
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to(base_url('auth/login'));
        }

        $riwayat = $this->transaksiModel->where(['id_pembeli' => $this->session->get('userId')])->orderBy('id', 'DESC')->findAll();
        $allBarang = $this->barang->findAll();

        $data = [
            'title' => 'Riwayat Pesanan | Fantastic',
            'riwayat' => $riwayat,
            'allBarang' => $allBarang
        ];

        return view('etalase/riwayat', $data);
    }

    public function testimoni()
    {
        $testimoni = $this->transaksiModel->where(['status' => 3]);
        $allBarang = $this->barang->findAll();
        $allUser = $this->user->findAll();

        $data = [
            'title' => 'Riwayat Pesanan | Fantastic',
            'testimoni' => $testimoni->orderBy('id', 'DESC')->findAll(),
            'testimoniCount' => $testimoni->countAll(),
            'allBarang' => $allBarang,
            'allUser' => $allUser
        ];

        return view('etalase/testimoni', $data);
    }
}