<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;
    protected $fillable = ['id','produks_id','nama_gambar','image'];

    public function produk(){
        return $this->belongsTo(Produk::class, 'produks_id', 'id' );
    }
}
