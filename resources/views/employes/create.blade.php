@extends('adminlte::page')

@section('title')
    Employes List
@endsection

@section('content_header')
   <h1>Dashboard</h1>

@endsection
@section('content')
@include('layouts.alerts') 
<div class="container">
  
    <div class="row">
        <div class="col-md-10 mx-auto">
             
            <div class="card my-5">
                <div class="card-header">
              
                    <div class="text-center ">
                       <h3> Add New Employe </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('employes.store')}}" method="post" class="mt-3">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="r">Rgistration number</label>
                            <input type="text" id="r" maxlength="8" class="form-control" name="registration_number" placeholder="Rgistration number" value="{{old('rg-nbr')}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname">FullName</label>
                            <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="{{old('fname')}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="h_date">Hire Date</label>
                            <input type="date" class="form-control" id="h-date" name="hire_date" placeholder="hire date" value="{{old('h_date')}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="h_date">Phone</label>
                            <input type="tel" class="form-control" id="h-date" name="phone" placeholder="phone" value="{{old('phone')}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="h_date">Adresse</label>
                            <input type="text" class="form-control" id="h-date" name="adreese" placeholder="address" value="{{old('address')}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="city">Depart</label>
                            <input type="text" class="form-control" id="city" name="departement" placeholder="Depart" value="{{old('City')}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="h_date">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{old('City')}}">

                        </div>
                        <div class="form-group ">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                 
            </div>
            
        </div>
    </div>
</div>

@endsection

