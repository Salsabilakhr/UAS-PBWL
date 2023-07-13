<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = "tb_users";
    protected $primaryKey = "user_id";
    protected $fillable = [
        'user_id', 'user_jabatan', 'user_nama', 'user_alamat'
    ];

    public function tabungan()
    {
       return $this->hasMany(Tabungan::class); 
    }
}
