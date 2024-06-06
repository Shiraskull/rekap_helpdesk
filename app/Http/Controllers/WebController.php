<?php

namespace App\Http\Controllers;

use App\Http\Resources\RekapResource;
use App\Models\Jenjang;
use App\Models\Kota;
use App\Models\Rekap;
use App\Models\Topik;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class WebController extends Controller
{
    public function index(){
        $rekap=Rekap::all();
        $kota = Kota::all();
        return RekapResource::collection($rekap);
    }
    public function store(Request $request){
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
    public function create(){
      $kota = Kota::all();
      $jenjang = Jenjang::all();
      $topik = Topik::latest()->get();
      return response()->json([
        'kota' => $kota,
        'jenjang' => $jenjang,
        'topik' => $topik,
      ]);
    }
    public function login(Request $request){
      
      $request->validate([
        'email' => 'required','email',
        'password' => 'required'
      ]);
  
      $user = User::where('email', $request->email)->first();
      if (! $user || ! Hash::check($request->password, $user->password)) {
        return response()->json(['error' => 'Email Atau Password Salah_'], 401);
      };
      return $user->createToken('user login')->plainTextToken;
    }
    public function logout(Request $request){
      $request->user()->currentAccessToken()->delete();
      return response()->json('logout');
    }
    public function kota(){
      $kota = Kota::all();
      return $kota;
    }
    public function rekap(Request $request){
      $request->validate([
        'nama' => 'required',
         'kota' =>'required',
         'jenjang' =>'required',
         'kec_kel' =>'required',
         'topik' =>'required',
         'email' =>'required',
         'pesan' =>'required',
    ]); 
    

    Rekap::create([
             'nama' => $request->nama,
             'id_kota' => $request->kota,
             'id_jenjang' => $request->jenjang,
             'kec_kel' => $request->kec_kel,
             'id_topik' => $request->topik,
             'email' => $request->email,
             'pesan' => $request->pesan,
            ]);;
     return response()->json('ok');
    }
}

