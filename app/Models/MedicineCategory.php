<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori'
    ];

    public function medicine()
    {
        return $this->hasMany(Medicine::class);
    }
}
