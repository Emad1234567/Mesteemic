


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
                        <a href="javascript: void(0);" class="btn btn-success btn-icon"><i class="fa fa-plus"></i> View Plans</a>
                    </div>
                    My Current Plan
                    {{-- <p class="text-muted">Lorem Ipsum is simply dummy text of the <code>printing and typesetting</code> industry.</p> --}}
                </div>



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
                                     <th>
                                        <strong>Subject</strong>
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
                                    <td>1434</td>
                                    <td>
                                        {{-- <img alt="user" class="media-box-object rounded-circle mr-2" src="assets/img/avtar-1.png" width="30"> --}}
                                        John Doe
                                    </td>
                                    <td>john-doe@domain.com</td>
                                    <td>How to change colors</td>
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


    {{-- ============================================================ --}}

    <div class="col-md-12">
        <div class="card">
         <div class="card-header card-default">
                <div class="float-right mt-10">
                    <a href="javascript: void(0);" class="btn btn-success btn-icon"><i class="fa fa-plus"></i> View Plans</a>
                </div>
                My Active Invoice
                {{-- <p class="text-muted">Lorem Ipsum is simply dummy text of the <code>printing and typesetting</code> industry.</p> --}}
            </div>



                    <table id="datatable" class="table table-striped nowrap dataTable no-footer dtr-inline" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    <strong>Invoice ID</strong>
                                </th>
                                {{-- <th>
                                    <strong>Name</strong>
                                </th> --}}
                                <th>
                                    <strong>Amount</strong>
                                </th>
                                 <th>
                                    <strong>Invoice turn</strong>
                                </th>
                                <th>
                                    <strong>Status</strong>
                                </th>
                                <th>
                                    <strong>Due Date</strong>
                                </th>
                                <th>
                                    <strong>Pay</strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody>


{{--  --}}
                            <tr>
                                <td>1434</td>
                                {{-- <td>
                                    John Doe
                                </td> --}}
                                <td>500  ₦</td>
                                <td>How to change colors</td>
                                <td class="text-center">
                                    <span class="label label-danger">Pending</span>
                                </td>
                                <td>15/04/2022</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-success"><i class="fa fa-credit-card"></i></button>
                                    {{-- <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button> --}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>



    {{-- ----------------------------------------------------------------------------------- --}}



    <div class="card">
        <div class="card-header card-default">
               <div class="float-right mt-10">
                   <a href="javascript: void(0);" class="btn btn-success btn-icon"><i class="fa fa-plus"></i> View Plans</a>
               </div>
               My Past Transaction
               {{-- <p class="text-muted">Lorem Ipsum is simply dummy text of the <code>printing and typesetting</code> industry.</p> --}}
           </div>



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
                                <th>
                                   <strong>Subject</strong>
                               </th>
                               <th>
                                   <strong>Status</strong>
                               </th>
                               <th>
                                   <strong>Date</strong>
                               </th>
                               {{-- <th>
                                   <strong>Action</strong>
                               </th> --}}
                           </tr>
                       </thead>
                       <tbody>



                           <tr>
                               <td>1434</td>
                               <td>
                                   John Doe
                               </td>
                               <td>john-doe@domain.com</td>
                               <td>How to change colors</td>
                               <td class="text-center">
                                   <span class="label label-danger">Pending</span>
                               </td>
                               <td>15/07/2018</td>

                           </tr>


                           <tr>
                            <td>1434</td>
                            <td>
                                John Doe
                            </td>
                            <td>john-doe@domain.com</td>
                            <td>How to change colors</td>
                            <td class="text-center">
                                <span class="label label-danger">Pending</span>
                            </td>
                            <td>15/07/2018</td>

                        </tr>

                        <tr>
                            <td>1434</td>
                            <td>
                                John Doe
                            </td>
                            <td>john-doe@domain.com</td>
                            <td>How to change colors</td>
                            <td class="text-center">
                                <span class="label label-danger">Pending</span>
                            </td>
                            <td>15/07/2018</td>

                        </tr>
                       </tbody>
                   </table>
           </div>
       </div>

</div>

        </div>
    </div>













</section>


@include('User.script_files')
@endsection

</body>
</html>
