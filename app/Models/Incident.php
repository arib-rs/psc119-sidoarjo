<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;
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
