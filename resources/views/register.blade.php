<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Dec 2021 10:24:13 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FixedPlus - Bootstrap Admin Dashboard Template</title>

        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Css-->
        <link href="assets/scss/style.css" rel="stylesheet">
		
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            html,body{
                height: 100%;
            }
        </style>
    </head>
    <body class="bg-light">

        <div class="misc-wrapper">
            <div class="misc-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-xl-4 ">
                            <div class="misc-header text-center">
								<img alt="" src="assets/img/icon.png" class="logo-icon margin-r-10">
								<img alt="" src="assets/img/logo-dark.png" class="toggle-none hidden-xs">
                            </div>
                            <div class="misc-box">   
                                 <p class="text-center">Sign up to get instant access.</p>
                                <form role="form" method="post" action="{{route('register')}}">
                                   @csrf
                                   <div class="form-group">
                                    <label for="eampleuser1">User Name</label>
                                    <div class="group-icon">
                                   <input id="eampleuser1" type="text" value="user" name="user_name" placeholder="User Name" class="form-control" required="">
                                   <span class="fa fa-user text-muted icon-input"></span>
                                    </div>
                               </div>
                                   <div class="form-group">
                                    <label for="eampleuser1">First Name</label>
                                    <div class="group-icon">
                                   <input id="eampleuser1" type="text" value="user" name="name" placeholder="First Name" class="form-control" required="">
                                   <span class="fa fa-user text-muted icon-input"></span>
                                    </div>
                               </div>
                               <div class="form-group">
                                <label for="eampleuser1">Last Name</label>
                                <div class="group-icon">
                               <input id="eampleuser1" type="text" value="user" name="last_name" placeholder="Last Name" class="form-control" required="">
                               <span class="fa fa-user text-muted icon-input"></span>
                                </div>
                           </div>
                                     <div class="form-group">
                                         <label for="eampleuser1">Email</label>
                                         <div class="group-icon">
                                        <input id="eampleuser1" type="text" value="user@gmail.com" name="email" placeholder="Enter Email" class="form-control" required="">
                                        <span class="icon-envelope text-muted icon-input"></span>
                                         </div>
                                    </div>
                                    <div class="form-group group-icon">
                                         <label for="exampleInputPassword1">Password</label>
                                         <div class="group-icon">
                                        <input id="exampleInputPassword1" type="password" value="12345678" name="password" placeholder="Password" class="form-control">
                                        <span class="icon-lock text-muted icon-input"></span>
                                         </div>
                                    </div>
                                     {{-- <div class="form-group group-icon">
                                         <label for="exampleInputPassword2">Confirm Password</label>
                                         <div class="group-icon">
                                        <input id="exampleInputPassword2" type="password" value="12345678" placeholder="Confirm Password" class="form-control">
                                        <span class="icon-lock text-muted icon-input"></span>
                                         </div>
                                    </div> --}}
                                    <div class="clearfix">
                                        <div class="float-left">
											<div class="checkbox checkbox-primary margin-r-5">
												<input id="checkbox2" type="checkbox" checked="">
												<label for="checkbox2"> I Agree with Terms <a href="#">Terms</a> </label>
											</div> 
                                        </div>
                                    </div>
									 <button type="submit" class="btn btn-block btn-primary btn-rounded box-shadow mt-10">Register Now</button>
                                    <hr>
									
                                    <p class=" text-center">Have an account?</p>
                                    <a href="{{route('login')}}" class="btn btn-block btn-success btn-rounded box-shadow">Login</a>
                                </form>
                            </div>
                            <div class="text-center">
                                 <p>Copyright &copy; 2018 FixedPlus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Common Plugins -->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Dec 2021 10:24:13 GMT -->
</html>
