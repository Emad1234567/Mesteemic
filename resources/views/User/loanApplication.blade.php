


@extends('User.layout.user_header')
<!DOCTYPE html>
<html lang="en">
    <body class="horizontal">
        @include('User.user_header_files')
@section('content')

<br>

<section class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
             <div class="card-header card-default">
                    <div class="float-right mt-10">
                        <a href="{{ route('apply-loan')}}" class="btn btn-success btn-icon"><i class="fa fa-plus"></i> Apply For loan</a>
                    </div>
                    My Loan Application
                    {{-- <p class="text-muted">Lorem Ipsum is simply dummy text of the <code>printing and typesetting</code> industry.</p> --}}
                </div>



                        <table id="datatable" class="table table-striped nowrap dataTable no-footer dtr-inline" width="100%">
                            <thead>
                                <tr>
                                    <th>
                                        <strong>Application ID</strong>
                                    </th>
                                    <th>
                                        <strong>Application Title</strong>
                                    </th>
                                    {{-- <th>
                                        <strong>Short Desctription</strong>
                                    </th> --}}
                                     <th>
                                        <strong>Type</strong>
                                    </th>
                                    <th>
                                        <strong>Status</strong>
                                    </th>
                                    <th>
                                        <strong>Date</strong>
                                    </th>
                                    <th>
                                        <strong>Action</strong>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1425</td>
                                    <td>
                                        {{-- <img alt="user" class="media-box-object rounded-circle mr-2" src="assets/img/avtar-2.png" width="30"> --}}
                                        REF: Small Business Loan Request for 5000 ₦
                                    </td>
                                    <td>Cash</td>
                                    {{-- <td>How to change colors</td> --}}
                                    <td class="text-center">
                                        <span class="label label-warning">New</span>
                                    </td>
                                    <td>15/07/2021</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-success"><i class="fa fa-reply"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                               <tr>
                                    <td>1426</td>
                                    <td>
                                        {{-- <img alt="user" class="media-box-object rounded-circle mr-2" src="assets/img/avtar-1.png" width="30"> --}}
                                        Sub: Application for Loan to purchase a New Bicycle.
                                    </td>
                                    {{-- <td>govinda-doe@domain.com</td> --}}
                                    <td>Product</td>
                                    <td class="text-center">
                                        <span class="label label-success">Complete</span>
                                    </td>
                                    <td>09/07/2021</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-success"><i class="fa fa-reply"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>1432</td>
                                    {{-- <td>
                                        <img alt="user" class="media-box-object rounded-circle mr-2" src="assets/img/avtar-8.png" width="30">
                                        Megan Doe
                                    </td> --}}
                                    <td>REF: Small Business Loan Request for [Dollar Amount]</td>
                                    <td>Cash</td>
                                    <td class="text-center">
                                        <span class="label label-danger">Rejected</span>
                                    </td>
                                    <td>12/07/2021</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-success"><i class="fa fa-reply"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>



    {{-- <footer class="footer">
        <span>Copyright &copy; 2018 FixedPlus</span>
    </footer> --}}


</section>


@include('User.script_files')
@endsection

</body>
</html>
