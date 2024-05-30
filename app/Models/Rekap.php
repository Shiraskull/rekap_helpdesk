<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rekap extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'id_topik',
        'id_jenjang',
        'id_kota',
        'kecamatan_kelurahan',
        'pesan',
    ];

    public function jenjang(): BelongsTo
    {
        return $this->belongsTo(Jenjang::class, 'id_jenjang', 'id');
    }
    public function kota(): BelongsTo
    {
        return $this->belongsTo(Kota::class, 'id_kota', 'id');
    }
    public function topik(): BelongsTo
    {
        return $this->belongsTo(Topik::class, 'id_topik', 'id');
    }
}
