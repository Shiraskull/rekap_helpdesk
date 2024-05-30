<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RekapResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nama' => $this->nama,
            'email' => $this->email,
            'kel_kec'=>$this->kecamatan_kelurahan,
            'jenjang'=>$this->jenjang->nama_jenjang,
            'kota'=>$this->kota->nama_kota,
            'topik'=>$this->topik->nama_topik,
            'pesan'=>$this->pesan
        ];
    }
}
