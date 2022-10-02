@extends('adminlte::page')

@section('title')
     Employe information 
@endsection

@section('content_header')
   <h1 class="text-center ">Employe information</h1>

@endsection
@section('content')
@include('layouts.alerts') 
<div class="container">
  
    <div class="row">
        <div class="col-md-10 mx-auto">
             
            <div class="card my-5">
                <div class="card-header">
              
                    <div class="text-center ">
                       <h3>{{$employe->fullname}}</h3>
                    </div>
                    <div class="text-center ">
                        <a href="{{route('work.certaficate',$employe->registration_number)}}"class="btn btn-outline-danger mr-3">Work certaficate</a>
                        <a href="{{route('vacation.request',$employe->registration_number)}}"class="btn btn-outline-dark">Vacation request</a>
                     </div>
                </div>
                <div class="card-body">
                 
                        <div class="form-group mb-3">
                            <label for="r">Rgistration number</label>
                            <input type="text" disabled id="r" class="form-control" name="registration_number" placeholder="Rgistration number" value="{{$employe->registration_number}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname">FullName</label>
                            <input type="text" class="form-control" disabled name="fullname" placeholder="Fullname" value="{{$employe->fullname}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="h_date">Hire Date</label>
                            <input type="date" class="form-control" disabled id="h-date" name="hire_date" placeholder="hire date" value="{{$employe->hire_date}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="h_date">Phone</label>
                            <input type="tel" class="form-control" disabled id="h-date" name="phone" placeholder="phone" value="{{$employe->phone}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="h_date">Adresse</label>
                            <input type="text" class="form-control" disabled id="h-date" name="adreese" placeholder="address" value="{{$employe->adreese}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="city">Depart</label>
                            <input type="text" class="form-control" disabled id="city" name="departement" placeholder="Depart" value="{{$employe->departement}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="h_date">City</label>
                            <input type="text" class="form-control" disabled id="city" name="city" placeholder="City" value="{{$employe->city}}">

                        </div>
                     
                </div>
                 
            </div>
            
        </div>
    </div>
</div>

@endsection

