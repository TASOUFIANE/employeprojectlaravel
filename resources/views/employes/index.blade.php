@extends('adminlte::page')

@section('plugins.Datatables',true)



@section('title')
    Employes List
@endsection

@section('content_header')
   <h1>Dashboard</h1>

@endsection
@section('content')

<div class="container">
    <div class="row my-5">
        <div class="col-md-8 mx-auto">   
            <div class="card my-4">
                <div class="card-header">
                    <div class="text-center text-uppercase">
                       <h3> Employes</h3>
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-borderd table-stipped  " >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fullname</th>
                                <th>Departement</th>
                                <th>Hired</th>
                                <th>Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $employes as $key => $employe)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{$employe->fullname}}</td>
                                    <td>{{$employe->departement}}</td>
                                    <td>{{$employe->hire_date}}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{route('employes.show',$employe->registration_number)}}" class="btn btn-sm btn-primary ">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('employes.edit',$employe->registration_number)}}" class="btn btn-sm btn-warning mx-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form id="deleteForm" action="{{route('employes.destroy',$employe->registration_number)}}" method="POST">
                                         @method('DELETE')
                                         @csrf
                                           
                                        </form>
                                        <button onclick="deleteEmp()" type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>

                                        </button>
      
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
    
                    </table>
                </div>   
            </div>
            
        </div>
    </div>
</div>

@endsection

@section('js')
        <script>
           $(document).ready(function(){
               $('#myTable').DataTable({
                   dom :'Bfrtip',
                   buttons:['copy','excel','csv','pdf','print','colvis']
               });
           });

           function deleteEmp(){
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                document.getElementById('deleteForm').submit();
                    Swal.fire(
                    'Deleted!',
                    'Employe has been deleted.',
                    'success'
                    )
                }
                })
           }
         </script>


            @if(session()->has('success'))
            <script>
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title:"{{session()->get('success')}}",
                        showConfirmButton: false,
                        timer: 1500
                    });
            </script>
            @endif
@endsection