<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $fillable = ['id','judul_event','foto_event','tanggal_event','penyelenggara_event','penanggung_jawab_event','lokasi_event','desc_event','status_event'];
    public $timestamps = false;
    protected $guarded =[];
}
