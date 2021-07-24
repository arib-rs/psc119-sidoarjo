<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HFProfession extends Model
{
    use HasFactory;
    protected $fillable = ['health_facility_id', 'profession_id'];
    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }
}
