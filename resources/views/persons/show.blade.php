@extends('persons.layout')
@section('content')
<link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
 
<div class="card showcard">
  <div class="card-header"><h2>Details of User</h2></div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : <strong>{{ $persons->name }}</strong></h5>
        <p class="card-text">Email : <strong>{{ $persons->email }}</strong></p>
        <p class="card-text">Roles : <strong>{{ $persons->roles }}</strong></p>
        <!-- <button className="btn btn-success">Update</button> -->
        <a href="{{ url('/person/' . $persons->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button></a>

        <a href="{{ '/person'}}" title="Edit User"><button class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Back</button></a>
  </div>
       
    </hr>
  
  </div>
</div>