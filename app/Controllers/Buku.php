<?php
namespace App\Controllers;
use App\Models\BukuModel;
use CodeIgniter\Controller;

class Buku extends Controller
{
    public function __construct()
    {
        if (!session()->get('isLoggedIn')) {
            header('Location: '.base_url('auth/login'));
            exit;
        }
    }

    public function index()
    {
        $model = new BukuModel();
        $kataKunci = $this->request->getGet('cari');
        $perHalaman = 5;

        if ($kataKunci) {
            $data = [
                'buku' => $model->cari($kataKunci)->paginate($perHalaman),
                'pager' => $model->pager,
                'kataKunci' => $kataKunci
            ];
        } else {
            $data = [
                'buku' => $model->paginate($perHalaman),
                'pager' => $model->pager,
                'kataKunci' => ''
            ];
        }
        return view('buku/index', $data);
    }

    public function tambah()
    {
        return view('buku/tambah');
    }

    public function simpan()
    {
        $model = new BukuModel();
        $data = $this->request->getPost();
        if ($model->save($data)) {
            return redirect()->to(base_url('buku'))->with('pesan', 'Buku berhasil ditambahkan!');
        }
        return redirect()->back()->withInput()->with('errors', $model->errors());
    }

    public function edit($id)
    {
        $model = new BukuModel();
        $data['buku'] = $model->find($id);
        return view('buku/edit', $data);
    }

    public function perbarui($id)
    {
        $model = new BukuModel();
        $model->update($id, $this->request->getPost());
        return redirect()->to(base_url('buku'))->with('pesan', 'Buku berhasil diperbarui!');
    }

    public function hapus($id)
    {
        $model = new BukuModel();
        $model->delete($id);
        return redirect()->to(base_url('buku'))->with('pesan', 'Buku berhasil dihapus!');
    }
}