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
            <center> <h2>Categories</h2> </center>
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
                                        <th>Contribution</th>
                                        <th>Timeline</th>
                                        <th>Currency</th>
                                        <th>Status</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($categorys as $category)
                                        
                                      @php
                                          $currency = App\Models\Currency::where('id',$category->currency_id)->first();
                                      @endphp
                                    <tr>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->contribution}}</td>
                                        <td>{{$category->timeline}}</td>
                                        <td>{{$currency->symbol ?? 'No Currency'}} </td>
                                        <td>status</td>
                                        <td>
                                            @if($category->status == 0) 
                                            <a href="/Admin/category_active_deactive/{{$category->id}}" class="btn btn-warning">Deactivate</a> 
                                            @else
                                            <a href="/Admin/category_active_deactive/{{$category->id}}" class="btn btn-primary">Active</a> 
                                            @endif
                                            <a href="#" data-toggle="modal" data-target="#loginModal1-{{$category->id}}" class="btn btn-primary">Edit</a> 
                                            <a href="/Admin/delete_category/{{$category->id}}" class="btn btn-danger">Delete</a> 
                                            {{-- <a href="/Admin/user_delete/{{$user->id}}" class="btn btn-danger">Delete</a>  --}}
                                        </td>
                                    </tr>

                                    
                            <div class="modal fade" id="loginModal1-{{$category->id}}">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                                      <h5 class="modal-title" id="exampleModalLabel">Edit Category </h5>
                                    </div>
                                    <div class="modal-body">
                                          <form role="form" method="post" action="/Admin/edit_category/{{$category->id}}">
                                              @csrf
                                              <div class="form-group">
                                                  <label>Name</label>
                                                  <input type="text" name="name" value="{{$category->name}}" class="form-control" placeholder="Category Name">
                                              </div>
                                              <div class="form-group">
                                                  <label>Contribution Amount</label>
                                                  <input type="text" name="contribution" value="{{$category->contribution}}" class="form-control" placeholder="Contribution Amount">
                                                </div>
                                                <div class="form-group">
                                                  <label>Timeline</label>
                                                    <input type="date" name="date" value="{{$category->timeline}}" class="form-control" placeholder="Timeline">
                                                </div>
                                                <div class="form-group">
                                                    @php
                                                        $currencys = App\Models\Currency::get();
                                                    @endphp
                                                     <label>Currency</label>
                                                  <select name="currency" class="form-control">
                                                      <option>Select Currency</option>
                                                  @foreach ($currencys as $currency)
                                                  <option value="{{$currency->id}}" @if($category->currency_id == $currency->id) selected @endif>{{$currency->symbol}}</option>
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
                                      <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                    </div>
                                    <div class="modal-body">
                                          <form role="form" method="post" action="/Admin/Add-Category">
                                              @csrf
                                              <div class="form-group">
                                                  <label>Name</label>
                                                  <input type="text" name="name" class="form-control" required placeholder="Category Name">
                                              </div>
                                              <div class="form-group">
                                                  <label>Contribution Amount</label>
                                                  <input type="text" name="contribution" class="form-control" required placeholder="Contribution Amount">
                                                </div>
                                                <div class="form-group">
                                                  <label>Timeline</label>
                                                    <input type="date" name="date" class="form-control" required placeholder="Timeline">
                                                </div>
                                                <div class="form-group">
                                                    @php
                                                        $currencys = App\Models\Currency::get();
                                                    @endphp
                                                     <label>Currency</label>
                                                  <select name="currency" class="form-control" required>
                                                      <option>Select Currency</option>
                                                  @foreach ($currencys as $currency)
                                                  <option value="{{$currency->id}}">{{$currency->symbol}}</option>
                                                  @endforeach
                                                </select>
                                                  </div>
                                              <div class="clearfix">
                                                  {{-- <div class="checkbox checkbox-inline checkbox-primary">
                                                                  <input id="checkbox11" type="checkbox" checked="">
                                                                  <label for="checkbox11"> Option one </label>
                                                              </div> --}}
                                                  <button type="submit" class="btn  btn-primary float-right">Add Category</button>
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