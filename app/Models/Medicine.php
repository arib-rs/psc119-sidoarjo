<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(MedicineCategory::class);
    }
    public function packaging()
    {
        return $this->belongsTo(MedicinePackaging::class);
    }
}
