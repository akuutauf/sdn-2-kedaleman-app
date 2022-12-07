<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;

    protected $table = 'arsips';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama_file_arsip', 'kode_file_arsip', 'jenis_file_arsip', 'tanggal_upload_arsip', 'desc_file_arsip'];

    // relasi one to many ke model pengumuman (not fix)
    public function pengumuman()
    {
        return $this->hasMany(Pengumuman::class);
    }
}
