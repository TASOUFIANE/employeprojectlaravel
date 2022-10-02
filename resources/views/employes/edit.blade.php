@extends('adminlte::page')

@section('title')
    Update Employe 
@endsection

@section('content_header')
   <h1>Edit Employe</h1>

@endsection
@section('content')
@include('layouts.alerts') 
<div class="container">
  
    <div class="row">
        <div class="col-md-10 mx-auto">
             
            <div class="card my-5">
                <div class="card-header">
              
                    <div class="text-center ">
                       <h3>Edit Employe </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('employes.update',$employe->registration_number)}}" method="post" class="mt-3">
                      
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="r">Rgistration number</label>
                            <input type="text" id="r" class="form-control" name="registration_number" placeholder="Rgistration number" value="{{old('registration_number',$employe->registration_number)}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname">FullName</label>
                            <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="{{old('fullname',$employe->fullname)}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="h_date">Hire Date</label>
                            <input type="date" class="form-control" id="h-date" name="hire_date" placeholder="hire date" value="{{old('hire_date',$employe->hire_date)}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="h_date">Phone</label>
                            <input type="tel" class="form-control" id="h-date" name="phone" placeholder="phone" value="{{old('phone',$employe->phone)}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="h_date">Adresse</label>
                            <input type="text" class="form-control" id="h-date" name="adreese" placeholder="address" value="{{old('adreese',$employe->adreese)}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="city">Depart</label>
                            <input type="text" class="form-control" id="city" name="departement" placeholder="Depart" value="{{old('departement',$employe->departement)}}">

                        </div>
                        <div class="form-group mb-3">
                            <label for="h_date">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{old('City',$employe->city)}}">

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

