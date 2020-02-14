@extends('backend.layouts.app')

@section('title',"$patient->patient_name")

@section('content')
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
      <a href="{{route('home')}}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Overview</li>
    </ol>

  
   

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Patient Details
      <a href="{{route('patients.index')}}" class="btn btn-primary float-right">Back</a>
    </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped" >
            <tr>
              <th>Patient Name</th>
              <td>{{$patient->patient_name}}</td>
            </tr>
            <tr>
              <th>Guardian Name</th>
              <td>{{$patient->guardian_name}}</td>
            </tr>
            <tr>
              <th>Guardian Phone</th>
              <td>{{$patient->guardian_phone}}</td>
            </tr>
            <tr>
              <th>Address</th>
              <td>{{$patient->address}}</td>
            </tr>
            <tr>
              <th>NID Number</th>
              <td>{{$patient->nid}}</td>
            </tr>
            <tr>
              <th>Age</th>
              <td>{{$patient->age}}</td>
            </tr>
            <tr>
              <th>Patient Type</th>
              <td>{{$patient->type}}</td>
            </tr>
            <tr>
              <th>Drug Type</th>
              <td>{{$patient->drug}}</td>
            </tr>
            <tr>
              <th>Contruct Period</th>
              <td>{{$patient->contruct_period}} Months</td>
            </tr>
            <tr>
              <th>Contruct Amount</th>
              <td>{{$patient->contruct_amount}} BDT</td>
            </tr>
            <tr>
              <th>Advance Amount</th>
              <td>{{$patient->advance_amount}} BDT</td>
            </tr>
            <tr>
              <th>Joining Date</th>
              <td>{{$patient->joining_date}} </td>
            </tr>
            <tr>
              <th>Photo</th>
            <td><img src="{{asset('images/patients/'.$patient->image)}}" width="10%" alt=""> </td>
            </tr>
            <tr>
              <th>Comments</th>
              <td>{{$patient->comments}} </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

  </div>

@endsection