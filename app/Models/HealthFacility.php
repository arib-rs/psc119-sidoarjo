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
        'is_active'
    ];
    public function bed()
    {
        return $this->hasMany(Bed::class);
    }
    public function bloodBag()
    {
        return $this->hasMany(BloodBag::class);
    }
    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }
    public function profession()
    {
        return $this->hasMany(HFProfession::class);
    }
    public function resource()
    {
        return $this->hasMany(Resource::class);
    }
}
