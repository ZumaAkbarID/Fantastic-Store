<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function register()
    {
        if (session()->has('isLoggedIn')) {
            return redirect()->to(base_url('home'));
        }
        if ($this->request->getPost()) {
            $request = $this->request->getPost();
            $validate = $this->validation->run($request, 'register');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $userModel = new \App\Models\UserModel();
                $user = new \App\Entities\User();

                $user->username = $this->request->getPost('username');
                $user->password = $this->request->getPost('password');

                $user->created_by = 'Register Form';
                $user->created_date = date('Y-m-d H:i:s');

                $userModel->save($user);

                $this->session->setFlashdata('success', 'Register berhasil, silahkan login');
            }

            $this->session->setFlashdata('errors', $errors);
        }

        $data = [
            'title' => 'Register | Fantastic'
        ];

        return view('auth/register', $data);
    }

    public function login()
    {
        if (session()->has('isLoggedIn')) {
            return redirect()->to(base_url('home'));
        }
        if ($this->request->getPost()) {
            $request = $this->request->getPost();
            $validate = $this->validation->run($request, 'login');
            $errors = $this->validation->getErrors();

            $userModel = new \App\Models\UserModel();
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $userModel->where('username', $username)->first();

            if ($user) {
                $salt = $user->salt;
                if ($user->password !== md5($salt . $password)) {
                    $this->session->setFlashdata('errors', ['Password Salah']);
                } else {
                    $sessData = [
                        'username' => $user->username,
                        'userId' => $user->id,
                        'userRole' => $user->role,
                        'isLoggedIn' => TRUE
                    ];

                    $this->session->set($sessData);
                    // $this->session->setFlashdata('success', ['Login Berhasil, Anda Akan Otomatis Dialihkan']);
                    return redirect()->to(base_url('home'));
                }
            } else {
                $this->session->setFlashdata('errors', ['User Tidak Ditemukan']);
            }
        }

        $data = [
            'title' => 'Login | Fantastic'
        ];

        return view('auth/login', $data);
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url('auth/login'));
    }
}