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
        $response = Http::get('http://127.0.0.1:8001/api/rekap');
        if ($response->successful()) {
        
            $rekap = $response->json();
         
            return view('rekap.index',['rekap' => $rekap['data']]);
        } else {
            // Tangani error di sini, misalnya dengan menampilkan pesan error
           dd('gagal');
        }
        $rekap = Rekap::all();
        return view('rekap.index',compact('rekap'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $response = Http::get('http://127.0.0.1:8001/api/rekap/create');
        if ($response->successful()) {
        
            $data = $response->json();
         $jenjang=$data['jenjang'];
         $kota=$data['kota'];
         $topik=$data['topik'];

         return view('rekap.create',[
            'jenjang' => $jenjang,
            'kota' => $kota,
            'topik' => $topik
        ]);
        } else {
            // Tangani error di sini, misalnya dengan menampilkan pesan error
           dd('gagal');
        }


       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8001/api/rekap', $request->all());
        if ($response->successful()) {
      
            return redirect()->route('rekap.index');
        } else {
            // Tangani error di sini, misalnya dengan menampilkan pesan error
          return back();
        }
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
