<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = "tb_siswa";
    protected $primaryKey = "siswa_id";
    protected $fillable = ['siswa_id', 'siswa_nis', 'siswa_nama', 'siswa_kelas'];

    public function tabungan()
    {
       return $this->hasMany(Tabungan::class); 
    }
}
