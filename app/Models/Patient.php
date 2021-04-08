<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function triage()
    {
        return $this->hasOne(Triage::class);
    }
    public function action()
    {
        return $this->hasOne(Action::class);
    }
    public function vitalsign()
    {
        return $this->hasOne(VitalSign::class);
    }
}
