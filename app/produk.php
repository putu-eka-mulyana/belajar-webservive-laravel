<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public $timestamps=false;
    protected $guarded =["id"];
    public function kategori()
    {
        return $this->belongsTo('App\kategori');
    }
}
