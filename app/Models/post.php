<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $table = "post";
    public $timestamps = true;

    public $fillable = [
        'nama_tempat','jarak_tempuh','lokasi_tempat','keterangan', 'ulasan','gambar'
    ];

    
    public function post_detail(){
        return $this->hasMany('App\post_detail', 'id');
    }

    public function destinasi(){
        return $this->hasMany('App\Destination', 'id');
    }
    
}
