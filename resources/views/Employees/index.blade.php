@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('title')
  Employees
@endsection

@section('content_header')
    Employees list
@endsection

@section('content')
<div class="container">
  
  <div class="row">
    <div class="col-md-10 mx-auto">
    <div class="card">
    <div class="card-header text-center text-uppercase">
      <h3>Employees</h3>
    </div>
    <div class="card-body">

      
      <table border="2px" class="table table-bordered" id="table">
      <thead>
          <tr>
            <th>id</th>
            <th>full name</th>
            <th>departement</th>
            <th>hired at</th>
            <th>Actions</th>
          </tr>
      </thead>
      <tbody>
      @foreach($employees as  $key => $employee)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$employee->full_name}}</td>
              <td>{{$employee->departement}}</td>
              <td>{{$employee->hired_at}}</td>
              <td class="d-flex justify-content-center align-items-center" id="damned">
                <a href="{{route('employees.show',$employee->id)}}" class="btn btn-sm btn-primary">
                  <i class="fas fa-eye"></i>
                </a>
                <a href="{{route('employees.edit',$employee->id)}}" class="btn btn-sm btn-warning mx-3">
                  <i class="fas fa-pen"></i>
                </a>

                <form id="{{$employee->id}}" action="{{route('employees.destroy',$employee->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                </form>
                <button 
                onclick="clickHandler({{$employee->id}})"
                type="submit" class="btn btn-sm btn-danger">
                  <i class="fas fa-trash"></i>
                </button>
              </td>
            </tr>
      @endforeach
      </tbody>
</table>
      <a href={{ url('admin/home') }} class="btn btn-outline-primary"> Home</a>
    </div>
    </div>
  </div>

  </div>
  </div>
    @endsection
@section('js')
 <script>
  $(document).ready(()=>{
    $('#table').DataTable(
      {
        dom: 'Bfrtip',
        buttons :[
          'colvis',
                    {
                        text: 'csv',
                        extend: 'csvHtml5',
                    },
                    {
                        text: 'excel',
                        extend: 'excelHtml5',
                    },
                    {
                        text: 'pdf',
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: ':visible:not(#damned)'
                        }
                    },
                    {
                        text: 'print',
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible:not(#damned)'
                        }
                    },  
                ],
      }
    )})
    function clickHandler(x){
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
          document.getElementById(x).submit();
          // Swal.fire(
          //   'Deleted!',
          //   'Your file has been deleted.',
          //   'success'
          // )
        }
      })
    }
 </script>
 @if(session()->has('success'))
    <script>
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: "{{session()->get('success')}}",
        showConfirmButton: false,
        timer: 2300
      })
    </script>
 @endif
@endsection