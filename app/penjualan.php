<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $table ='penjualan';
    protected $guarded=["id"];
    public $timestamps=false;

    public function pelanggan()
    {
        return $this->belongsTo('App\pelanggan');
    }
}
