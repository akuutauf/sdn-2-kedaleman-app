<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumumans';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'id_arsip', 'judul_pengumuman', 'pembuat_pengumuman', 'penerima_pengumuman', 'perihal_pengumuman', 'tanggal_pengumuman', 'isi_pengumuman'];

    // relasi many to one ke model arsip (not fix)
    public function arsip()
    {
        return $this->belongsTo(Arsip::class);
    }
}
