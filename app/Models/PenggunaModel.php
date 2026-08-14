<?php
namespace App\Models;
use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'password'];
    protected $useTimestamps = false; // ❗ TIDAK pakai timestamp otomatis
}