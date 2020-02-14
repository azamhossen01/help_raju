@extends('backend.layouts.app')

@section('title','Add New')

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
        Add New Patient
      <a href="{{route('patients.index')}}" class="btn btn-primary float-right">Back</a>
    </div>
      <div class="card-body">
      <form action="{{route('patients.store')}}" method="post" enctype="multipart/form-data">
          @csrf 
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="patient_name">Patient Name</label>
                <input type="text" name="patient_name" id="patient_name" class="form-control" placeholder="Patient Name" required>
              </div>
              <div class="form-group">
                <label for="guardian_name">Guardian Name</label>
                <input type="text" name="guardian_name" id="guardian_name" class="form-control" placeholder="Guardian Name" required>
              </div>
              <div class="form-group">
                <label for="guardian_phone">Guardian Phone</label>
                <input type="text" name="guardian_phone" id="guardian_phone" class="form-control" placeholder="Guardian Phone" required>
              </div>
              <div class="form-group">
                <label for="address">Patient Address</label>
                <textarea name="address" id="address" class="form-control" placeholder="Patient Address" cols="30" rows="5" required></textarea>
              </div>
              <div class="form-group">
                <label for="nid">NID Number</label>
                <input type="text" name="nid" id="nid" class="form-control" placeholder="NID Number" required>
              </div>
              <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" class="form-control" placeholder="Age" required>
              </div>
              <div class="form-group">
                <label for="type">Patient Type</label>
                <select name="type" id="type" class="form-control">
                  <option value="fresher">Fresher</option>
                  <option value="older">Older</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="drug">Drug Type</label>
                <select name="drug" id="drug" class="form-control">
                  <option value="none">None</option>
                  <option value="yaba">Yaba</option>
                  <option value="alchohol">Alchohol</option>
                  <option value="marijuana">Marijuana</option>
                </select>
              </div>
              <div class="form-group">
                <label for="contruct_period">Contract Period</label>
                <select name="contruct_period" id="contruct_period" class="form-control">
                  <option value="less_then_one_month">Less than one month</option>
                  <option value="1">One Month</option>
                  <option value="2">Two Months</option>
                  <option value="3">Three Months</option>
                  <option value="4">Four Months</option>
                  <option value="5">Five Months</option>
                  <option value="6">Six Months</option>
                </select>
              </div>
              <div class="form-group">
                <label for="contruct_amount">Contract Amount</label>
                <input type="number" name="contruct_amount" id="contruct_amount" class="form-control" placeholder="Contruct Amount" required>
              </div>
              <div class="form-group">
                <label for="advance_amount">Advance Amount</label>
                <input type="number" name="advance_amount" id="advance_amount" class="form-control" placeholder="Contruct Amount" required>
              </div>
              <div class="form-group">
                <label for="joining_date">Joining Date</label>
                <input type="date" name="joining_date" id="joining_date" class="form-control" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
              </div>
              <div class="form-group">
                <label for="comments">Comments</label>
                <textarea name="comments" id="comments" class="form-control" placeholder="Comments" cols="30" rows="5" required></textarea>
              </div>
            </div>

          </div>
          
         
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

  </div>

@endsection