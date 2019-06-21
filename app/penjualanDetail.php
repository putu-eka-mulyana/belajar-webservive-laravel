<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualanDetail extends Model
{
    protected $table="penjualan_detail";
    protected $guarded=["id"];

    public $timestamps=false;
    public function produk()
    {
        return $this->belongsTo('App\produk');
    }
    public function penjualan()
    {
        return $this->belongsTo('App\penjualan');
    }
}
