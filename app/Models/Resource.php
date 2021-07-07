<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis',
        'nomor_polisi',
        'kode',
        'kelas',
        'tahun_produksi',
        'merk',
        'tahun_pakai',
        'pict_url',
        'klasifikasi',
        'status',
        'gps_id',
        'health_facility_id',
        'is_active'
    ];

    public function healthfacility()
    {
        return $this->belongsTo(HealthFacility::class, 'health_facility_id');
    }

    public function rshift()
    {
        return $this->hasMany(RShift::class);
    }
}
