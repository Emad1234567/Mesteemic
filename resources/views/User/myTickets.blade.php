


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
                        <a href="javascript: void(0);" class="btn btn-success btn-icon"><i class="fa fa-plus"></i> Create New</a>
                    </div>
                    Support Ticket
                    {{-- <p class="text-muted">Lorem Ipsum is simply dummy text of the <code>printing and typesetting</code> industry.</p> --}}
                </div>

                {{-- <div class="card-body">
                    <div class="row">
                    <div class="col">
                        <div class="widget bg-primary padding-15">
                            <div class="row row-table">
                                <div class="col-xs-8 padding-15 text-center">
                                    <h4 class="mv-0">4758</h4>
                                    <div class="margin-b-0 ">Total Tickets</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="widget bg-warning padding-15">
                            <div class="row row-table">
                                <div class="col-xs-8 padding-15 text-center">
                                    <h4 class="mv-0">785</h4>
                                    <div class="margin-b-0">New</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="widget bg-success padding-15">
                            <div class="row row-table">
                                <div class="col-xs-8 padding-15 text-center">
                                    <h4 class="mv-0">1235</h4>
                                    <div class="margin-b-0">Complete</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="widget bg-danger padding-15">
                            <div class="row row-table">
                                <div class="col-xs-8 padding-15 text-center">
                                    <h4 class="mv-0">2558</h4>
                                    <div class="margin-b-0">Pending</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                        <table id="datatable" class="table table-striped nowrap dataTable no-footer dtr-inline" width="100%">
                            <thead>
                                <tr>
                                    <th>
                                        <strong>ID</strong>
                                    </th>
                                    <th>
                                        <strong>Name</strong>
                                    </th>
                                    <th>
                                        <strong>Email</strong>
                                    </th>
                                     {{-- <th>
                                        <strong>Subject</strong>
                                    </th> --}}
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
                                    <td>1433</td>
                                    <td>
                                        {{-- <img alt="user" class="media-box-object rounded-circle mr-2" src="assets/img/avtar-3.png" width="30"> --}}
                                        Hritic Doe
                                    </td>
                                    <td>hritic-doe@domain.com</td>
                                    {{-- <td>How to change colors</td> --}}
                                    <td class="text-center">
                                        <span class="label label-warning">New</span>
                                    </td>
                                    <td>16/07/2018</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-success"><i class="fa fa-reply"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1434</td>
                                    <td>
                                        {{-- <img alt="user" class="media-box-object rounded-circle mr-2" src="assets/img/avtar-1.png" width="30"> --}}
                                        John Doe
                                    </td>
                                    <td>john-doe@domain.com</td>
                                    {{-- <td>How to change colors</td> --}}
                                    <td class="text-center">
                                        <span class="label label-danger">Pending</span>
                                    </td>
                                    <td>15/07/2018</td>
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



    <footer class="footer">
        <span>Copyright &copy; 2018 FixedPlus</span>
    </footer>


</section>


@include('User.script_files')
@endsection

</body>
</html>
