<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicinePackaging extends Model
{
    use HasFactory;

    protected $fillable = [
        'kemasan'
    ];

    public function medicine()
    {
        return $this->hasMany(Medicine::class);
    }
}
