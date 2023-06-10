@extends('templates.template')

@section('title')
  Hospital Appointments
@endsection

@section('content')
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col"><h1>Appointment</h1></th>
            <th scope="col">
              <a href="{{url("appointments")}}">
                <button    class="btn btn-secondary float-right align-middle m-2" data-bs-toggle="modal" data-bs-target="#contactModal" type="button" class="btn btn-secondary align-middle m-1">Back</button>
              </a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Patient's Name</td>
            <td>{{$patient->name}}</td>
          </tr>
          <tr>
            <td>Patient's Number</td>
            <td>{{$patient->CPF}}</td>
          </tr>
          <tr>
            <td>Professional's Name</td>
            <td>{{$profissional->name}}</td>
          </tr>
          <tr>
            <td>Professional's Register</td>
            <td>{{$profissional->register}}</td>
          </tr>
          <tr>
            <td>Professional's Speciality</td>
            <td>{{$profissional->speciality}}</td>
          </tr>
          <tr>
            <td>Date</td>
            <td>{{$appointment->datetime}}</td>
          </tr>
        </tbody>
    </table>        
@endsection
