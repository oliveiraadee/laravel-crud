<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Appointment extends Model
{
    protected $table ='appointment';
    protected $fillable = ['professional_id', 'patient_id', 'datetime'];

    public function appointments()
    {
        return $appointement = DB::select('SELECT
                A.id as appoinmentID,
                P.name as professionalName,
                P.register as professionalRegister,
                P.speciality as professionalSpeciality,
                PT.CPF as patientCPF,
                PT.name as patientName,
                A.datetime
                FROM
                    appointment A
                INNER JOIN
                patient PT
                ON PT.id = A.patient_id
                INNER JOIN
                profissional P
                ON P.id = A.professional_id');	
    }


}
