@extends('Admin.layout.admin_header')
<!DOCTYPE html>
<html lang="en">
<body>
    <title>Loan Types</title>
    @include('Admin.admin_header_files')

@section('content')

<div class="row">

    <div class="col-md-12">
        <div class="card">
            <br>
            {{-- <div class="col-lg-12 align-self-center text-right">
                <a href="#" class="btn btn-success box-shadow btn-icon btn-rounded" data-toggle="modal" data-target="#loginModal"><i class="fa fa-plus"></i> Create New </a>
            </div> --}}
            <div class="card-header card-default">
            <center> <h2>Loan Types</h2> </center>
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
                                        <th>Prodcut Loan</th>
                                        {{-- <th>Cash Loan</th> --}}
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($loan_types as $loan_type)
                                    <tr>
                                        <td>{{$loan_type->name}}</td>
                                        {{-- <td>{{$loan_type->product_loan}}</td> --}}
                                        <td>@if($loan_type->status == 0)
                                            <h5>Active</h5>
                                            @else
                                            <h5>Inactive</h5>
                                         @endif
                                        </td>
                                        <td>
                                            @if($loan_type->status == 0)
                                            <a href="/Admin/loan_active_deactive/{{$loan_type->id}}" class="btn btn-warning">Deactivate</a>
                                            @else
                                            <a href="/Admin/loan_active_deactive/{{$loan_type->id}}" class="btn btn-primary">Active</a>
                                            @endif
                                            <a href="#" data-toggle="modal" data-target="#loginModal-{{$loan_type->id}}" class="btn btn-primary">Edit</a>


                                            <a href="/Admin/delete_type/{{$loan_type->id}}" class="btn btn-danger">Delete</a>
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
@endsection

</body>
 </html>
