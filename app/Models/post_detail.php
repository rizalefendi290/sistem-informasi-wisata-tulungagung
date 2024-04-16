<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_detail extends Model
{
    public function post(){
        return $this->belongsTo('App\post','id_post', 'id');
    }
    public function post_detail(){
        return $this->belongsTo('App\post', 'id_post', 'id');
    }
}
