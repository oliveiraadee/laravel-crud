@extends('templates.template')

@section('title')
  Hospital Appointments
@endsection

@section('content')
@csrf
<table class="table">
<thead class="thead-dark">
    <tr>
      <th scope="col"><span class="h1">Appointments</span>
</th>
<th scope="col"></th>
<th scope="col"></th>

      <th scope="col">
      <a href="{{url("appointment/create")}}">
  
      <button type="button" class="btn btn-success float-right align-middle">Cadastrar</button>
</a>
</th>
    </tr>
  </thead>
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
      <a href="{{url("appointments/$appointments->appoinmentID")}}">
          <button    class="btn btn-secondary"
                                data-bs-toggle="modal"
                                data-bs-target="#contactModal" type="button" class="btn btn-secondary align-middle m-1">View</button>
        </a>
        <a href="{{url("appointments/$appointments->appoinmentID/edit")}}">
          <button type="button" class="btn btn-primary align-middle m-1">Edit</button>
        </a>
        <a href="{{url("appointments/$appointments->appoinmentID")}}" class="js-del">
          <button type="button" class="btn btn-danger align-middle m-1">Remove</button></td>
        </a>
    </tr>
    @endforeach
  </tbody>
</table> 
@endsection