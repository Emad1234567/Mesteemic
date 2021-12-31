
@extends('Admin.layout.admin_header')
<!DOCTYPE html>
<html lang="en">
<body>
    <title>All Users</title>
    @include('Admin.admin_header_files')   
@section('content')
			    <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-default">
                            <center> <h2>All Users</h2> </center>
                            </div>
                            <div class="card-body">
                                @if(session('msg'))
                                <div class="alert alert-danger">
                                    {{session('msg')}}
                                </div>
                                @endif
                                @if(session('mssg'))
                                <div class="alert alert-primary">
                                    {{session('mssg')}}
                                </div>
                                @endif
                                <table id="datatable2" class="table table-striped dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Profile Image</th>
                                                        <th>UserName</th>
                                                        <th>Email</th>
                                                        <th>Level</th>
                                                        <th>Currency</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
    
                                                <tbody>
                                                    @foreach ($users as $user)
                                                        
                                                      @php
                                                          $currency = App\Models\Currency::where('id',$user->currency_id)->first();
                                                      @endphp
                                                    <tr>
                                                        <td>{{$user->first_name .' '. $user->last_name}}</td>
                                                        <td>Image</td>
                                                        <td>{{$user->username}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>{{$user->level}}</td>
                                                        <td>{{$currency->symbol ?? 'No Currency'}} </td>
                                                        <td>
                                                            @if($user->status == 0) 
                                                            <a href="/Admin/user_deactivate/{{$user->id}}" class="btn btn-warning">Deactivate</a> 
                                                            @else
                                                            <a href="/Admin/user_activate/{{$user->id}}" class="btn btn-primary">Active</a> 
                                                            @endif
                                                            <a href="/Admin/user_delete/{{$user->id}}" class="btn btn-danger">Delete</a> 
                                                            {{-- <a href="/Admin/user_delete/{{$user->id}}" class="btn btn-danger">Delete</a>  --}}
                                                        </td>
                                                    </tr>
                                        @endforeach
                                                </tbody>
                                            </table>
    
                            </div>
                        </div>
                    </div>
                </div>
@include('Admin.script_files')
<script>
    
    $(document).ready(function () {
       
        $('#datatable2').DataTable({
       
             dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
        
     
    });
    
</script>

@endsection


</body>
                
 </html>              