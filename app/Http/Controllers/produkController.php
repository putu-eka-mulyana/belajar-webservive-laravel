<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
use App\kategori;
class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = produk::all();
        return view('produk.index',["produk" => $produk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();
        return view('produk.insert',["kategori"=> $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'nama'=>'required',
            'qty'=>'required',
            'harga_beli'=>'required',
            'harga_jual'=>'required',
            'kategori'=>'required'
        ]);
      
        produk::create([
            'nama'=>$request->nama,
            'qty'=>$request->qty,
            'harga_beli'=>$request->harga_beli,
            'harga_jual'=>$request->harga_jual,
            'kategori_id'=>$request->kategori
        ]);
    
       return redirect('/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = kategori::all();
        $data = produk::find($id);
        return view('produk.update',["produk" => $data,"kategori"=>$kategori]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        produk::find($id)->update([
            'nama'=>$request->nama,
            'qty'=>$request->qty,
            'harga_beli'=>$request->harga_beli,
            'harga_jual'=>$request->harga_jual,
            'kategori_id'=>$request->kategori
        ]);
        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        produk::find($id)->delete();
        return redirect('/produk');
    }
}
