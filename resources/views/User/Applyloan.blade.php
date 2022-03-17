@extends('User.layout.user_header')
<!DOCTYPE html>
<html lang="en">
    <body class="horizontal">
        @include('User.user_header_files')
@section('content')

<br>


<section class="container">

    {{-- <div class="alert bg-success alert-dismissible " role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Success!</strong> Product successfully added. </div> --}}

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header card-default">
                    My Loan Applications
                    {{-- <p class="text-muted">Lorem ipsum dolor sit amet</p> --}}
                </div>
                <div class="card-body">

                    <form method="get" action="" class="form-horizontal">

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" placeholder="Title of application" class="form-control form-control-rounded">
                            </div>

                            <div class="form-group">
                                <label>Loan Type</label>
                                <select name="account" class="form-control m-b">
                                    <option value="Cash">Cash</option>
                                    <option value="Loan">Loan</option>
                                </select>
                                <small class="text-muted">We are offering Cash loan as well as product loan</small>
                            </div>
                            <div class="form-group">
                                <label>Current Price</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon">.00</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Previous Price</label>
                                <div class="input-group col-md-4">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon">.00</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Stock</label>
                                <input type="text" class="form-control form-control-rounded col-md-4">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <div class="summernote" style=""><p>Hello Summernote</p></div>
                            </div>

                            {{-- <div class="form-group">
                                <label>Featured Image</label>
                                <div class="fileinput-new" data-provides="fileinput">
                                  <div class="fileinput-preview" data-trigger="fileinput" style="width: 200px; height:150px;"></div>
                                    <span class="btn btn-primary  btn-file">
                                        <span class="fileinput-new">Select</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" id="image" name="image">
                                    </span>
                                    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div> --}}


                            <div class="form-group">
                                <label>Gallery Images</label>
                                <div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
                                      <div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
                                      <span class="input-group-addon btn btn-primary btn-file ">
                                      <span class="fileinput-new">Select</span>
                                      <span class="fileinput-exists">Change</span>
                                      <input type="file"  name="image">
                                      </span>
                                      <a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                    <div class="row">
                                        <div class="radio radio-success">
                                            <input type="radio" name="radio4" id="radio12" value="option4" checked="">
                                            <label for="radio12"> Stock </label>
                                        </div>
                                        <div class="radio radio-danger">
                                            <input type="radio" name="radio4" id="radio13" value="option4">
                                            <label for="radio13"> Removed </label>
                                        </div>
                                        <div class="radio radio-warning">
                                            <input type="radio" name="radio4" id="radio14" value="option4">
                                            <label for="radio14"> Out of Stock </label>
                                        </div>
                                  </div>
                            </div>

                            <a href="#" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Save</a>
                            {{-- <a href="#" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Back</a>
                            <a href="#" class="btn btn-danger btn-icon"><i class="fa fa-times"></i>Cancel</a> --}}

                    </form>
                </div>
            </div>
        </div>
    </div>





</section>


@include('User.script_files')
@endsection

</body>
</html>
