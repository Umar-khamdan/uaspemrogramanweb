<?php
namespace App\Models;
use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'penulis', 'penerbit', 'tahun_terbit', 'isbn', 'deskripsi'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function cari($kataKunci)
    {
        return $this->groupStart()
                    ->like('judul', $kataKunci)
                    ->orLike('penulis', $kataKunci)
                    ->orLike('penerbit', $kataKunci)
                 ->groupEnd();
    }
}