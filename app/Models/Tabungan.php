<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;

    protected $table = "tb_tabungan";
    protected $primaryKey = "tab_id";
    protected $guarded = [];
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);    
    }
}
