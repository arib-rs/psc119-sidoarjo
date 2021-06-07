<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_kasus',
        'calltaker_id',
        'waktu',
        'lokasi',
        'detail_lokasi',
        'longitude',
        'latitude',
        'lanjutan_kasus',
        'nama_pelapor',
        'telp_pelapor',
        'alamat_pelapor',
        'category_id',
        'jumlah_pasien',
        'keterangan',
        'sumber_informasi',
        'status',
        'is_polres',
        'is_pmk',
        'is_bpbd',
        'is_komando',
        'deleted_at',
        'alasan_delete',
    ];
    public function log()
    {
        return $this->hasMany(LogIncident::class, 'kode_kasus', 'kode_kasus');
    }
    public function patient()
    {
        return $this->hasMany(Patient::class, 'kode_kasus', 'kode_kasus');
    }
    public function trip()
    {
        return $this->hasMany(Trip::class, 'kode_kasus', 'kode_kasus');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
