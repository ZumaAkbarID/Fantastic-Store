<?php

namespace App\Controllers;

class Barang extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
        $this->barangModel = new \App\Models\BarangModel();
        $this->TipeBarangModel = new \App\Models\TipeBarangModel();
        $this->barang = new \App\Entities\Barang();
        $this->transaksiModel = new \App\Models\TransaksiModel();
    }

    public function index()
    {
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to(base_url('auth/login'));
        }

        $barangs = $this->barangModel->orderBy('id', 'DESC')->findAll();

        $jsLibraries = '<script src="/stisla/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
        <br>
        <script src="/stisla/assets/modules/jquery-ui/jquery-ui.min.js"></script>';
        $cssLibraries = '<link rel="stylesheet" href="/stisla/assets/modules/chocolat/dist/css/chocolat.css">';

        $data = [
            'title' => 'Barang | Fantastic',
            'barangs' => $barangs,
            'cssLibraries' => $cssLibraries,
            'jsLibraries' => $jsLibraries,
            'page' => 'barang',
            'subpage' => 'list barang',
            'notifikasi' => $this->transaksiModel->findAll()
        ];

        return view('barang/index', $data);
    }

    public function view()
    {
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to(base_url('auth/login'));
        }

        $id = $this->request->uri->getSegment(3);

        $barang = $this->barangModel->find($id);

        $jsLibraries = '<script src="/stisla/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
        <br>
        <script src="/stisla/assets/modules/jquery-ui/jquery-ui.min.js"></script>';
        $cssLibraries = '<link rel="stylesheet" href="/stisla/assets/modules/chocolat/dist/css/chocolat.css">';

        $data = [
            'title' => 'View Barang | Fantastic',
            'barang' => $barang,
            'cssLibraries' => $cssLibraries,
            'jsLibraries' => $jsLibraries,
            'notifikasi' => $this->transaksiModel->findAll()
        ];
        return view('barang/view', $data);
    }

    public function create()
    {
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to(base_url('auth/login'));
        }

        if ($this->request->getPost()) {
            $request = $this->request->getPost();
            $this->validation->run($request, 'barang');
            $errors = $this->validation->getErrors();
            if (!$errors) {

                $barang = $this->barang;
                $barang->fill($request);
                $barang->status = 1;
                $barang->gambar = $this->request->getFile('gambar');
                $barang->created_by = $this->session->get('userId');
                $barang->created_date = date('Y-m-d H:i:s');

                $p = $this->barangModel->save($barang);

                $id = $this->barangModel->InsertID();

                $segments = ['barang', 'view', $id];

                return redirect()->to(base_url($segments));
            }
            $this->session->setFlashdata('errors', $errors);
        }

        $cssLibraries = '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="/stisla/assets/modules/summernote/summernote-bs4.css">
        <link rel="stylesheet" href="/stisla/assets/modules/jquery-selectric/selectric.css">';

        $jsLibraries = '<script src="/stisla/assets/modules/summernote/summernote-bs4.js"></script>
        <script src="/stisla/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>';

        $data = [
            'title' => 'Create Barang | Fantastic',
            'page' => 'barang',
            'subpage' => 'tambah barang',
            'cssLibraries' => $cssLibraries,
            'jsLibraries' => $jsLibraries,
            'tipebarang' => $this->TipeBarangModel->findAll(),
            'notifikasi' => $this->transaksiModel->findAll()
        ];

        return view('barang/create', $data);
    }

    public function update()
    {
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to(base_url('auth/login'));
        }

        $id = $this->request->uri->getSegment(3);
        $barang = $this->barangModel->find($id);

        $jsLibraries = '<script src="/stisla/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
        <script src="/stisla/assets/modules/jquery-ui/jquery-ui.min.js"></script>
        <script src="/stisla/assets/modules/summernote/summernote-bs4.js"></script>
        <script src="/stisla/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>';

        $cssLibraries = '<link rel="stylesheet" href="/stisla/assets/modules/chocolat/dist/css/chocolat.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="/stisla/assets/modules/summernote/summernote-bs4.css">
        <link rel="stylesheet" href="/stisla/assets/modules/jquery-selectric/selectric.css">';

        if ($this->request->getPost()) {
            $request = $this->request->getPost();
            $this->validation->run($request, 'barangupdate');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $b = $this->barang;
                $b->id = $id;
                $b->fill($request);

                if ($this->request->getFile('gambar')->isValid()) {
                    unlink('uploads/barang/img/' . $barang->gambar);
                    $b->gambar = $this->request->getFile('gambar');
                }

                $b->status = $this->request->getPost('status') + 0;

                $b->updated_by = $this->session->get('userId');
                $b->updated_date = date('Y-m-d H:i:s');

                $this->barangModel->save($b);

                $segments = ['barang', 'view', $id];
                return redirect()->to(base_url($segments));
            }
            $this->session->setFlashdata('errors', $errors);
        }

        $data = [
            'title' => 'Update Barang | Fantastic',
            'barang' => $barang,
            'jsLibraries' => $jsLibraries,
            'cssLibraries' => $cssLibraries,
            'tipebarang' => $this->TipeBarangModel->findAll(),
            'notifikasi' => $this->transaksiModel->findAll()
        ];

        return view('barang/update', $data);
    }

    public function delete()
    {
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to(base_url('auth/login'));
        }

        $id = $this->request->uri->getSegment(3);
        unlink('uploads/barang/img/' . $this->barangModel->find($id)->gambar);
        $this->barangModel->delete($id);
        return redirect()->to(base_url('barang'));
    }
}