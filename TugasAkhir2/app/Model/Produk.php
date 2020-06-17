<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use SoftDeletes;
    // protected $table = 'produks';
    protected $fillable=['id','produk','deskripsi','type'];

    public function galleries(){
        return $this->hasMany(Gallery::class,'produks_id','id');
    }
}
