<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $table ='profissional';

    public function patient()
    {
        return $this->belongsToMany(Patient::class, 'appointment');
    }
}
