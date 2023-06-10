@extends('templates.template')

@section('title')
  Hospital Appointments
@endsection

@section('content')
<span class="h1">Appointments</span>
<button type="button" class="btn btn-success float-right align-middle m-2">+ Cadastrar</button>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Paciente</th>
      <th scope="col">Profissional</th>
      <th scope="col">Data da Consulta</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($relAppointments as $appointments)
    <tr>
      <td>{{$appointments->patientName}}<br/>{{' CPF:'}}{{$appointments->patientCPF}}</td>
      <td>{{$appointments->professionalName}}<br/>{{$appointments->professionalRegister}}<br/>{{strtoupper($appointments->professionalSpeciality)}}</td>
      <td>{{$appointments->datetime}}</td>
      <td><button type="button" class="btn btn-primary float-right align-middle">&#x270E; Editar</button></td>
      <td><button type="button" class="btn btn-danger float-right align-middle">- Remover</button></td>
    </tr>
    @endforeach
  </tbody>
</table> 
@endsection