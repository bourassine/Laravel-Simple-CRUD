@extends('crud.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Crud Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $crud->name }}</h5>
        <p class="card-text">Address : {{ $crud->address }}</p>
        <p class="card-text">Mobile : {{ $crud->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>