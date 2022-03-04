@extends('Admin.layout.admin_header')
<!DOCTYPE html>
<html lang="en">
<body>
    <title>Payment Methods</title>
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
            <center> <h2>Payment Methods</h2> </center>
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
                                        <th>Type</th>
                                        <th>Currency</th>
                                        <th>Public Key</th>
                                        <th>Private Key</th>
                                        <th>Account Number</th>
                                        <th>Account Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($payment_methods as $payment_method)
                                    <tr>
                                        <td>{{$payment_method->name}}</td>
                                        <td>{{$payment_method->type}}</td>
                                        <td>₦</td>
                                        <td>{{$payment_method->public_key}}</td>
                                        <td>{{$payment_method->private_key}}</td>
                                        <td>{{$payment_method->account_number}}</td>
                                        <td>{{$payment_method->account_name}}</td>
                                        <td>@if($payment_method->status == 0)
                                            <h5>Active</h5>
                                            @else
                                            <h5>Inactive</h5>
                                         @endif
                                        </td>
                                        <td>
                                            @if($payment_method->status == 0)
                                            <a href="/Admin/pay_method_active_deactive/{{$payment_method->id}}" class="btn btn-warning">Deactivate</a>
                                            @else
                                            <a href="/Admin/pay_method_active_deactive/{{$payment_method->id}}" class="btn btn-primary">Active</a>
                                            @endif
                                            <a href="#" data-toggle="modal" data-target="#loginModal-{{$payment_method->id}}" class="btn btn-primary">Edit</a>

                                            <br>
                                            <br>
                                            <a href="/Admin/delete_payment_method/{{$payment_method->id}}" class="btn btn-danger">Delete</a>
                                            {{-- <a href="/Admin/user_delete/{{$user->id}}" class="btn btn-danger">Delete</a>  --}}
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="loginModal-{{$payment_method->id}}">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                                              <h5 class="modal-title" id="exampleModalLabel">Edit Paymnet Method</h5>
                                            </div>
                                            <div class="modal-body">
                                                  <form role="form" method="post" action="/Admin/edit_payment_methods/{{$payment_method->id}}">
                                                      @csrf
                                                      <div class="form-group">
                                                          <label>Name</label>
                                                          <input type="text" name="name" value="{{$payment_method->name}}" class="form-control" placeholder="Method Name">
                                                      </div>

                                                    <div class="form-group">
                                                        <label>Type </label>
                                                    <select name="type"  class="form-control">
                                                        <option>Select Type</option>

                                                    <option value="card" @if($payment_method->type == "card") selected @endif>Card</option>
                                                    <option value="bank" @if($payment_method->type == "bank") selected @endif >Bank </option>
                                                  </select>
                                                </div>
                                                    <div class="form-group">
                                                        <label>Public Key </label>
                                                        <input type="text" name="public_key" value="{{$payment_method->public_key}}" class="form-control" placeholder="Public Key" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Private Key </label>
                                                        <input type="text" name="private_key" value="{{$payment_method->private_key}}" class="form-control" placeholder="Private Key" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Account Number </label>
                                                        <input type="text" name="acc_number" value="{{$payment_method->account_number}}"  class="form-control" placeholder="Account Number">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Account Name </label>
                                                        <input type="text" name="acc_name" value="{{$payment_method->account_name}}" class="form-control" placeholder="Account Name">
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
                                      <h5 class="modal-title" id="exampleModalLabel">Add Payment Mehtods</h5>
                                    </div>
                                    <div class="modal-body">
                                          <form role="form" method="post" action="/Admin/add_payment_methods">
                                              @csrf
                                              <div class="form-group">
                                                <label>Name </label>
                                                <input type="text" name="name"  class="form-control" placeholder="Method Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Type </label>
                                            <select name="type"  class="form-control">
                                                <option>Select Type</option>

                                            <option value="card" >Card</option>
                                            <option value="bank" >Bank </option>
                                            <option value="wallet" >Wallet </option>
                                          </select>
                                        </div>
                                            <div class="form-group">
                                                <label>Public Key </label>
                                                <input type="text" name="public_key"  class="form-control" placeholder="Public Key" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Private Key </label>
                                                <input type="text" name="private_key"  class="form-control" placeholder="Private Key" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Account Number </label>
                                                <input type="text" name="acc_number"  class="form-control" placeholder="Account Number">
                                            </div>
                                            <div class="form-group">
                                                <label>Account Name </label>
                                                <input type="text" name="acc_name"  class="form-control" placeholder="Account Name">
                                            </div>

                                              <div class="clearfix">
                                                  {{-- <div class="checkbox checkbox-inline checkbox-primary">
                                                                  <input id="checkbox11" type="checkbox" checked="">
                                                                  <label for="checkbox11"> Option one </label>
                                                              </div> --}}
                                                  <button type="submit" class="btn  btn-primary float-right">Save</button>
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
