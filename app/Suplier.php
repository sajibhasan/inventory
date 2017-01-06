<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $fillable = ['id','suplier_name'];
    
    public function product(){
    return $this->hasMany('App\Product');
    }
}
