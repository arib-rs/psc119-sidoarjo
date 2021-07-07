<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'medicine_packaging_id',
        'medicine_category_id',
        'keterangan'
    ];

    public function category()
    {
        return $this->belongsTo(MedicineCategory::class, 'medicine_category_id');
    }
    public function packaging()
    {
        return $this->belongsTo(MedicinePackaging::class, 'medicine_packaging_id');
    }
}
