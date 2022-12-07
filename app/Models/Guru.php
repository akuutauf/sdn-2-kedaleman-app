<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama_guru', 'foto_guru', 'nik_guru', 'nuptk_guru', 'nip_guru', 'gender_guru', 'tempat_lahir_guru', 'tanggal_lahir_guru', 'jabatan_guru', 'email_guru', 'no_telp_guru', 'alamat_guru', 'status_guru'];

    // relasi one to one ke model motivasi (not fix)
    public function motivasi()
    {
        return $this->hasOne(Motivasi::class);
    }
}
