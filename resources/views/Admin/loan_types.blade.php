@extends('Admin.layout.admin_header')
<!DOCTYPE html>
<html lang="en">
<body>
    <title>Categories</title>
    @include('Admin.admin_header_files')  
   
@section('content')

<div class="row">
  
    <div class="col-md-12">
        <div class="card">
            <br>
            <div class="col-lg-12 align-self-center text-right">
                <a href="#" class="btn btn-success box-shadow btn-icon btn-rounded" data-toggle="modal" data-target="#loginModal"><i class="fa fa-plus"></i> Create New </a>
            </div> 
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
                                        <th>Cash Loan</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($loan_types as $loan_type)
                                    <tr>
                                        <td>{{$loan_type->cash_loan}}</td>
                                        <td>{{$loan_type->product_loan}}</td>
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

                                    <div class="modal fade" id="loginModal-{{$loan_type->id}}">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                                              <h5 class="modal-title" id="exampleModalLabel">Edit Loan Type</h5>
                                            </div>
                                            <div class="modal-body">
                                                  <form role="form" method="post" action="/Admin/edit_loanType/{{$loan_type->id}}">
                                                      @csrf
                                                      <div class="form-group">
                                                          <label>Product Loan </label>
                                                          <input type="text" name="product_loan" value="{{$loan_type->product_loan}}" class="form-control" placeholder="Currency Name">
                                                      </div>
                                                      <div class="form-group">
                                                          <label>Cash Loan</label>
                                                          <input type="text" name="cash_loan" value="{{$loan_type->cash_loan}}" class="form-control" placeholder="Symbol">
                                                        </div>
                                                  
                                                      <div class="clearfix">
                                                          {{-- <div class="checkbox checkbox-inline checkbox-primary">
                                                                          <input id="checkbox11" type="checkbox" checked="">
                                                                          <label for="checkbox11"> Option one </label>
                                                                      </div> --}}
                                                          <button type="submit" class="btn  btn-primary float-right">Save Changes</button>
                                                      </div>
                                                  </form>
                                                  <hr>
                                                  {{-- <div class="text-center">
                                                      <p><a href="#">Forget</a> password?</p>
                                                      <p>Don't have an Account, <a href='#'>Login</a></p>
                                                  </div> --}}
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    
                        @endforeach
                                </tbody>
                            </table>

                            <div class="modal fade" id="loginModal">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                                      <h5 class="modal-title" id="exampleModalLabel">Add Loan Type</h5>
                                    </div>
                                    <div class="modal-body">
                                          <form role="form" method="post" action="/Admin/add_loanType">
                                              @csrf
                                              <div class="form-group">
                                                <label>Product Loan </label>
                                                <input type="text" name="product_loan"  class="form-control" placeholder="Product Loan">
                                            </div>
                                            <div class="form-group">
                                                <label>Cash Loan</label>
                                                <input type="text" name="cash_loan"  class="form-control" placeholder="Cash Loan">
                                              </div>
                                              <div class="clearfix">
                                                  {{-- <div class="checkbox checkbox-inline checkbox-primary">
                                                                  <input id="checkbox11" type="checkbox" checked="">
                                                                  <label for="checkbox11"> Option one </label>
                                                              </div> --}}
                                                  <button type="submit" class="btn  btn-primary float-right">Add Loan Type</button>
                                              </div>
                                          </form>
                                          <hr>
                                          {{-- <div class="text-center">
                                              <p><a href="#">Forget</a> password?</p>
                                              <p>Don't have an Account, <a href='#'>Login</a></p>
                                          </div> --}}
                                    </div>
                                  </div>
                                </div>
                              </div>
            </div>
        </div>
    </div>
</div>
   


@include('Admin.script_files')
@endsection

</body>     
 </html>       