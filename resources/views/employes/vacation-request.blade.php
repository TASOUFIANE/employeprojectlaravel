@extends('adminlte::page')

@section('title')
   Vacation Request
@endsection



@section('content')

 <div class="container ">
     <div class="row ">
         <div class="col-md-8 mx-auto py-5 ">
            <div class="card p-3 my-5">
                <div class="card-header"><h3 class="text-center">Vacation certaficate</h3></div>
                <p class="lead">
                    <b>{{$employe->fullname}}</b>  is presently employed with me in the following:
                </p>
                <p class="lead">
                    <b>{{$employe->departement}}</b> departement.
                </p>
                <p class="lead">
                He is requesting a vacation starting from <b>_________________</b>
                </p>
                <p class="lead">
                And ends on <b>_______________</b>
                </p>
                <p class="m-5">
                    ____________
                    ____________
                </p>
                <div class="my-4">
                    <a href="#" onclick="document.getElementById('printBtn').style.display='none';window.print(); setTimeout(function(){document.getElementById('printBtn').style.display='inline'},  1000);window.print();" class="btn btn-sm btn-primary" id="printBtn"><i class="fas fa-print" ></i></a>.
                </div>
          </div>
         </div>
     </div>
 </div>
@endsection