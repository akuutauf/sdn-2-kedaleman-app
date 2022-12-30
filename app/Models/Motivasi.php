<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motivasi extends Model
{
    use HasFactory;

    protected $table = 'motivasis';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'id_guru', 'pesan_motivasi', 'status_motivasi'];
    public $timestamps = false;

    // relasi one to one ke model guru (not fix)
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru','id');
    }
}
