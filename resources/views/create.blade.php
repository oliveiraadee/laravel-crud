@extends('templates.template')

@section('title')
  Hospital Appointments
@endsection

@section('content')
<form name="formAppointment" id="formAppointment" method="post" action="{{url('appointments')}}">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col"><h1>New Appointments</h1></th>
        <th scope="col">
          <a href="{{url("appointments")}}">
            <input class="btn btn-success float-right align-middle" type="submit" data-bs-toggle="modal" data-bs-target="#contactModal" type="button" class="btn btn-secondary align-middle m-1"/>
          </a>
        </th>
        <th> 
          <a href="{{url("appointments")}}">
            <button class="btn btn-secondary float-left align-middle" data-bs-toggle="modal" data-bs-target="#contactModal" type="button" class="btn btn-secondary align-middle m-1">Back</button>
          </a>            
        </th>
      </tr>
    </thead>
    <tbody>
          <tr>
            <td>Select a Patient</td>
            <td>
              <select class="form-select form-control" aria-label="Disabled select example">
                @foreach($profissionals as $profissional)
                <option value="1">{{$profissional->name}}</option>
                @endforeach
              </select>
            </td>
          </tr>
          <tr>
            <td>Select a Professional</td>
            <td> 
              <select class="form-select form-control" aria-label="Disabled select example">
                @foreach($patients as $patient)
                <option value="1">{{$patient->name}}</option>
                @endforeach
              </select>
            </td>
          </tr>
          <tr>
            <td>Select a Date</td>
            <td> 
              <input class="form-control" type="date" id="birthday" name="birthday">
            </td>
          </tr>
        </tbody>
  </table>   
</form>
     
@endsection
