<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumumans';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'judul_pengumuman', 'pembuat_pengumuman', 'penerima_pengumuman', 'perihal_pengumuman', 'tanggal_pengumuman', 'isi_pengumuman', 'lampiran_pengumuman'];
}
