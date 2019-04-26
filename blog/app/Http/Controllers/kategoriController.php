<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;

class kategoriController extends Controller
{
    public function index()
    {
    	$kategori_produk = kategori::all();
    	return view('kategori/index', compact('kategori_produk'));
    }

    public function store()
    {
    	//add with eloquent orm
    	$kategori = new kategori;
    	$kategori->kategori = 'Alat Dapur';
    	$kategori->keterangan = 'Alat Dapur 1';
    	$kategori->save();
    
    	//add with eloquent ORM mass Assignment
    	kategori::create([
    		'kategori' => 'Bahan Bangunan',
    		'keterangan' => 'bahan Bangunan Atas',
    	]);

    	echo "Horra!! add data with Eloquent successfully!";
    }

    public function update()
    {
    	$kategori = kategori::where('id',3)->first();
    	$kategori->kategori='bahan bahan bangunan';
    	$kategori->keterangan='bahan bangunan bagian atas';
    	$kategori->save();

    	kategori::where('id',2)->update([
    		'kategori' => 'Alat-alat dapur',
    	]);

    	return redirect('/kategori');
    }

    public function delete()
    {

    	//update data with Eloquent ORM
    	$kategori = kategori::where('id',1)->first();
    	$kategori->delete();

    	//update data with Eloquent ORM Mass Assignment
    	kategori::where('id',2)->delete();
    	return redirect('/kategori');
    }

}


