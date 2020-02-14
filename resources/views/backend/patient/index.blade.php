@extends('backend.layouts.app')

@section('title','Patient')

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
        All Patients
      <a href="{{route('patients.create')}}" class="btn btn-primary float-right">Add New</a>
    </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th width="10%">SL No</th>
                <th width="10%">Name</th>
                <th width="10%">Guardian</th>
                <th width="10%">Phone</th>
                <th width="10%">Contruct Period</th>
                <th width="10%">Contruct Amount</th>
                <th width="10%">Due Payment</th>
                <th width="20%">Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>SL No</th>
                <th>Name</th>
                <th>Guardian</th>
                <th>Phone</th>
                <th>Contruct Period</th>
                <th>Contruct Amount</th>
                <th>Payment</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              @forelse($patients as $key=>$patient) 
              <tr>
                <td>{{$key + 1}}</td>
            <td>{{$patient->patient_name}}</td>
            <td>{{$patient->guardian_name}}</td>
            <td>{{$patient->guardian_phone}}</td>
            <td>{{$patient->contruct_period}}</td>
            <td>{{$patient->contruct_amount}}</td>
            <td>{{($patient->contruct_amount - $patient->advance_amount)}}</td>
            <td>
            <a href="{{route('patients.show',$patient->id)}}" class="btn btn-success btn-sm">Details</a>
            <a href="{{route('patients.edit',$patient->id)}}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{route('patients.destroy',$patient->id)}}" class="d-inline-block" method="post">
              @csrf 
              @method('delete')
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
            </td>
              </tr>
              @empty 
              
              @endforelse 
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

  </div>

@endsection