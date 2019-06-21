<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table="kategori";
    protected $guarded =["id"];
    public function produks()
    {
        return $this->hasMany('App\produk');
    }
}
