<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'prestasis';
    protected $primaryKey = 'id';
    protected $fillable = ['id','judul_prestasi','foto_prestasi','nama_perlombaan','tanggal_prestasi','peraih_prestasi','desc_prestasi'];
    public $timestamps = false;
    protected $guarded =[];
}
