<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthFacility extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'pict_url',
        'kategori',
        'is_fullday',
        'is_has_ekg',
        'jumlah_shift',
        'keterangan',
        'phone_num',
        'contact_person',
        'email',
        'status',
        'is_active',
        'lng', 'lat'
    ];

    public function beds()
    {
        return $this->hasMany(Bed::class);
    }

    public function bloodBags()
    {
        return $this->hasMany(BloodBag::class);
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    public function professions()
    {
        return $this->hasMany(HFProfession::class);
    }

    public function resources()
    {
        return $this->hasMany(Resource::class);
    }

    public function rshifts()
    {
        return $this->hasMany(RShift::class);
    }
}
