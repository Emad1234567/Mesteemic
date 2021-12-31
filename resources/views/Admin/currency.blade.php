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
            <center> <h2>Currency</h2> </center>
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
                                        <th>Symbol</th>
                                        <th>State</th>
                                      
                                        <th>Status</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($currencies as $currency)
                                        
                                      @php
                                          $state = App\Models\Country::where('id',$currency->state)->first();
                                      @endphp
                                    <tr>
                                        <td>{{$currency->name}}</td>
                                        <td>{{$currency->symbol}}</td>
                                        <td>{{$state->name}}</td>
                                       
                                         <td>status</td>
                                        <td>
                                            @if($currency->status == 0) 
                                            <a href="/Admin/active_deactive_curreny/{{$currency->id}}" class="btn btn-warning">Deactivate</a> 
                                            @else
                                            <a href="/Admin/active_deactive_curreny/{{$currency->id}}" class="btn btn-primary">Active</a> 
                                            @endif
                                            <a href="#" data-toggle="modal" data-target="#loginModal-{{$currency->id}}" class="btn btn-primary">Edit</a> 
                                            
                                            
                                            <a href="/Admin/delete_currency/{{$currency->id}}" class="btn btn-danger">Delete</a> 
                                            {{-- <a href="/Admin/user_delete/{{$user->id}}" class="btn btn-danger">Delete</a>  --}}
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="loginModal-{{$currency->id}}">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                                              <h5 class="modal-title" id="exampleModalLabel">Edit Currency</h5>
                                            </div>
                                            <div class="modal-body">
                                                  <form role="form" method="post" action="/Admin/edit_currency/{{$currency->id}}">
                                                      @csrf
                                                      <div class="form-group">
                                                          <label>Name</label>
                                                          <input type="text" name="name" value="{{$currency->name}}" class="form-control" placeholder="Currency Name">
                                                      </div>
                                                      <div class="form-group">
                                                          <label>Currency Symbol </label>
                                                          <input type="text" name="symbol" value="{{$currency->symbol}}" class="form-control" placeholder="Symbol">
                                                        </div>
                                                        <div class="form-group">
                                                            @php
                                                                $countrys = App\Models\Country::get();
                                                            @endphp
                                                             <label>State</label>
                                                          <select name="state" class="form-control">
                                                              <option>Select State</option>
                                                          @foreach ($countrys as $country)
                                                          <option value="{{$country->id}}"  @if($currency->state == $country->id) selected @endif>{{$country->name}}</option>
                                                          @endforeach
                                                        </select>
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
                                      <h5 class="modal-title" id="exampleModalLabel">Add Currency</h5>
                                    </div>
                                    <div class="modal-body">
                                          <form role="form" method="post" action="/Admin/add_currency">
                                              @csrf
                                              <div class="form-group">
                                                  <label>Name</label>
                                                  <input type="text" name="name" class="form-control" placeholder="Currency Name">
                                              </div>
                                              <div class="form-group">
                                                  <label>Currency Symbol </label>
                                                  <input type="text" name="symbol" class="form-control" placeholder="Symbol">
                                                </div>
                                                <div class="form-group">
                                                    @php
                                                        $countrys = App\Models\Country::get();
                                                    @endphp
                                                     <label>State</label>
                                                  <select name="state" class="form-control">
                                                      <option>Select State</option>
                                                  @foreach ($countrys as $country)
                                                  <option value="{{$country->id}}">{{$country->name}}</option>
                                                  @endforeach
                                                </select>
                                                  </div>
                                              <div class="clearfix">
                                                  {{-- <div class="checkbox checkbox-inline checkbox-primary">
                                                                  <input id="checkbox11" type="checkbox" checked="">
                                                                  <label for="checkbox11"> Option one </label>
                                                              </div> --}}
                                                  <button type="submit" class="btn  btn-primary float-right">Add Currency</button>
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