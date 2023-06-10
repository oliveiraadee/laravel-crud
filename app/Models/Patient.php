<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table ='patient';

    public function professional()
    {      
        return $this->belongsToMany(Professional::class, 'appointment');
    }
}
