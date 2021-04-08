<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function healthFacility()
    {
        return $this->belongsTo(HealthFacility::class);
    }
}
