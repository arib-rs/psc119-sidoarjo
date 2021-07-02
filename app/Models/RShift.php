<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RShift extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'health_facility_id',
        'resource_id',
        'driver_id',
        'paramedic_id'
    ];

    public function healthfacility()
    {
        return $this->belongsTo(HealthFacility::class, 'health_facility_id');
    }
    public function resource()
    {
        return $this->belongsTo(Resource::class, 'resource_id');
    }
    public function driver()
    {
        return $this->belongsTo(People::class, 'driver_id');
    }
    public function paramedic()
    {
        return $this->belongsTo(People::class, 'paramedic_id');
    }
}
