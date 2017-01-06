<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'brand_id','suplier_id','product_name', 'suplier_id', 'product_type','_token'
    ];
    
   
    public function brand(){
        return $this->belongsTo('App\Brand');
    }
    public function suplier(){
        return $this->belongsTo('App\Suplier');
        
    }
}
