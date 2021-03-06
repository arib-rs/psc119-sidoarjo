<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_kategori',
        'is_medis',
        'is_emergency'
    ];

    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
