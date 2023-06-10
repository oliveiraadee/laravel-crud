<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\Professional;
use App\Models\Patient;
use App\Models\Appointment;

class PatientController extends Controller
{
    private $objProfissional;
    private $objPatient;
    private $objAppointment;
    private $appointmentView;

    public function __construct()
    {
        $this->objProfissional = new Professional();
        $this->objPatient = new Patient();
        $this->objAppointment = new Appointment();
    }

    public function index()
    {
        $relAppointments = Appointment::appointments();
        return view('welcome', compact('relAppointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = $this->objPatient->all();
        $profissionals = $this->objProfissional->all();
        return view('create', compact('patients', 'profissionals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        $relAppointments = Appointment::appointments();
        $this->objAppointment->create([
            'patient_id'=> $request->patient_id,
            'professional_id'=> $request->professional_id,
            'datetime'=>$request->datetime
        ]);
        return view('welcome', compact('relAppointments'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointment = $this->objAppointment::find($id);
        $id_patient = $appointment->patient_id;
        $id_professional = $appointment->professional_id;
        $patient = $this->objPatient->find($id_patient);
        $profissional = $this->objProfissional->find($id_professional);

        return view('view', compact('appointment', 'patient', 'profissional'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, $id)
    {
        echo $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo $id;
    }
}
