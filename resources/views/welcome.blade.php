@extends('templates.template')

@section('title')
  Hospital Appointments
@endsection

@section('content')
<span class="h1">Appointments</span>
<button type="button" class="btn btn-success float-right align-middle m-2">Cadastrar</button>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Paciente</th>
      <th scope="col">Profissional</th>
      <th scope="col">Data da Consulta</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($relAppointments as $appointments)
    <tr>
      <td>{{$appointments->patientName}}</td>
      <td>{{$appointments->professionalName}}</td>
      <td>{{$appointments->datetime}}</td>
      <td>
          <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#contactModalView" type="button" class="btn btn-secondary align-middle m-1">View</button>
        
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactModalEdit" type="button" class="btn btn-secondary align-middle m-1">Update</button>

          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#contactModalRemove" type="button" class="btn btn-secondary align-middle m-1">Remove</button>
    </tr>
    @endforeach
  </tbody>
</table> 
@endsection
<div class="modal fade" id="contactModalView" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="contactModalLabel">Appointment Info</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="contactModalEdit" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="contactModalLabel">Update Appointment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="contactModalRemove" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="contactModalLabel">Delete Appointment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>