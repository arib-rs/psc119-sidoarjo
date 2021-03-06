<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'gender',
        'skill',
        'phone_num',
        'health_facility_id',
        'profession_id'
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }
    public function healthFacility()
    {
        return $this->belongsTo(HealthFacility::class);
    }
}
