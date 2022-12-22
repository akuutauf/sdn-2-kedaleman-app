<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banners';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nama_banner','foto_banner','status_banner'];
    public $timestamps = false;
    protected $guarded =[];
}
