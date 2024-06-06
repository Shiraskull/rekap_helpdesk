<?php

namespace App\Http\Controllers;

use App\Models\Jenjang;
use App\Models\Kota;
use App\Models\Rekap;
use App\Models\Topik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $rekap = Rekap::with('kota','jenjang','topik')->get();
       return view('/rekap.index',compact('rekap'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       


       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
             'kota' =>'required',
             'jenjang' =>'required',
             'kecamatan_kelurahan' =>'required',
             'topik' =>'required',
             'email' =>'required',
             'pesan' =>'required',
        ]); 

        Rekap::create([
                 'nama' => $request->nama,
                 'id_kota' => $request->kota,
                 'id_jenjang' => $request->jenjang,
                 'kecamatan_kelurahan' => $request->kecamatan_kelurahan,
                 'id_topik' => $request->topik,
                 'email' => $request->email,
                 'pesan' => $request->pesan,
                ]);;
         return response()->json('ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('rekap.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
