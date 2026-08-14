<?php

namespace App\Controllers;

use App\Models\PenggunaModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    // Halaman Form Login
    public function index()
    {
        // Jika sudah login → langsung ke halaman buku
        if (session()->get('isLoggedIn')) {
            return redirect()->to(base_url('buku'));
        }

        // Tampilkan form login
        return view('auth/login');
    }

    // Proses Login
    public function login()
    {
        $model = new PenggunaModel();

        // Ambil data dari form
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Cari pengguna berdasarkan email
        $pengguna = $model->where('email', $email)->first();

        // Cek apakah pengguna ada DAN kata sandi cocok
        if ($pengguna && password_verify($password, $pengguna['password'])) {
            // Simpan data ke Session
            session()->set([
                'id'         => $pengguna['id'],
                'nama'       => $pengguna['nama'],
                'email'      => $pengguna['email'],
                'isLoggedIn' => true
            ]);

            // Berhasil → pindah ke halaman daftar buku
            return redirect()->to(base_url('buku'))
                             ->with('pesan', 'Selamat datang, ' . $pengguna['nama']);
        }

        // Gagal → kembali ke form dengan pesan error
        return redirect()->back()
                         ->with('pesan', 'Email atau kata sandi salah!');
    }

    // Proses Logout
    public function logout()
    {
        // Hapus semua data Session
        session()->destroy();

        // Kembali ke halaman login
        return redirect()->to(base_url('auth/login'))
                         ->with('pesan', 'Anda telah berhasil keluar.');
    }
}