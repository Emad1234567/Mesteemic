@extends('User.layout.user_header')
<!DOCTYPE html>
<html lang="en">
    <body class="horizontal">
        @include('User.user_header_files')
@section('content')

<br>
<section class="container">

    <div class="row">
        <div class="col-md-4">
            <div class="widget white-bg">
                <div class="padding-20 text-center">
                 <img alt="Profile Picture" width="140" class="rounded-circle mar-btm margin-b-10 circle-border " src=" {{ asset('/img/avtar-2.png') }}">
                    <p class="lead font-500 margin-b-0">John Doe</p>
                    <p class="text-muted">Administrator</p>
                    <p class="text-sm margin-b-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                    <hr>
                    <ul class="list-unstyled margin-b-0 text-center row">
                        <li class="col-4">
                            <span class="font-600">1,345</span>
                            <p class="text-muted text-sm margin-b-0">Following</p>
                        </li>
                        <li class="col-4">
                            <span class="font-600">23K</span>
                            <p class="text-muted text-sm margin-b-0">Followers</p>
                        </li>
                        <li class="col-4">
                            <span class="font-600">278</span>
                            <p class="text-muted text-sm margin-b-0">Post</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class='widget white-bg friends-group clearfix'>
                    <small class="text-muted">Email address </small>
                    <p>john-doe@domain.com</p>
                    <small class="text-muted">Phone</small>
                    <p>+90 (0241) 256-52-58</p>
                    <small class="text-muted">Address</small>
                    <p>Ataturk district Turkey, P 06582</p>
                        <div class="map-box">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195868.3954179315!2d32.746964926889376!3d39.90908623136076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d347d520732db1%3A0xbdc57b0c0842b8d!2sAnkara%2C+T%C3%BCrkiye!5e0!3m2!1str!2sin!4v1523713774785" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <small class="text-muted">Social Profile</small>
                    <br>
                    <button class="btn btn-facebook"><i class="fa fa-facebook"></i></button>
                    <button class="btn btn-twitter"><i class="fa fa-twitter"></i></button>
                    <button class="btn btn-youtube"><i class="fa fa-youtube"></i></button>

            </div>
        </div>
        <div class="col-8">
                <div class="card">
                 <div class="card-header card-default">
                    Update Status
                </div>
                <div class="card-body">

                   <form method="post" class="well well-default">
                    <div class="input-icon margin-b-10">
                        <textarea rows="2" class="form-control" placeholder="What's in your mind?"></textarea>
                    </div>
                    <div class=" float-right">
                        <a href="#" class="btn btn-primary">Send</a>
                    </div>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-location-arrow"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class=" fa fa-camera"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-smile-o"></i></a>
                        </li>
                    </ul>
                </form>
                </div>
            </div>
             <div class="card">
                <div class="card-body">
                <div class="tabs">
                <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link  active" href="#timeline" aria-controls="timeline" role="tab" data-toggle="tab">Timeline</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
               </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="timeline">
                        <div class="widget white-bg">
                            <ul class="comments-list list-unstyled clearfix">
                                <li class="clearfix">
                                    <img src=" {{ asset('/img/avtar-2.png') }}" alt="" width="70" class="rounded-circle circle-border">
                                    <div class="content">
                                        <div class="comments-header">
                                            <strong>John Doe</strong>
                                            <small class="text-muted">30 Minutes Ago</small>
                                        </div>
                                        <p>Lorem ipsum industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                                        <ul class="list-inline row">
                                            <li><a href="#">
                                                    <img alt="" src=" {{ asset('/img/gallery/1s.jpg') }}"   class="img-fluid rounded" width="100">
                                                </a></li>
                                            <li><a href="#">
                                                    <img alt="" src=" {{ asset('/img/gallery/2s.jpg') }}"   class="img-fluid rounded" width="100">
                                                </a></li>
                                            <li><a href="#">
                                                    <img alt="" src=" {{ asset('/img/gallery/3s.jpg') }}"   class="img-fluid rounded" width="100">
                                                </a></li>
                                        </ul>
                                        <ul class="list-inline row">
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-comments text-primary"></i> 94</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-thumbs-up text-danger"></i> 145</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-reply text-danger"></i> Reply</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src=" {{ asset('/img/avtar-3.png') }}" alt="" width="70" class="rounded-circle circle-border">
                                    <div class="content">
                                        <div class="comments-header">
                                            <strong>John Doe</strong>
                                            <small class="text-muted">30 Minutes Ago</small>
                                        </div>
                                        <p>Lorem ipsum industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                                       <ul class="list-inline row">
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-comments text-primary"></i> 94</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-thumbs-up text-danger"></i> 145</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-reply text-danger"></i> Reply</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src=" {{ asset('/img/avtar-4.png') }}" alt="" width="70" class="rounded-circle circle-border">
                                    <div class="content">
                                        <div class="comments-header">
                                            <strong>John Doe</strong>
                                            <small class="text-muted">30 Minutes Ago</small>
                                        </div>
                                        <p>Lorem ipsum industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                                        <ul class="list-inline row">
                                            <li><a href="#">
                                                    <img alt="" src=" {{ asset('/img/gallery/1s.jpg') }}"   class="img-fluid rounded" width="100">
                                                </a></li>
                                            <li><a href="#">
                                                    <img alt="" src=" {{ asset('/img/gallery/2s.jpg') }}"   class="img-fluid rounded" width="100">
                                                </a></li>

                                        </ul>
                                        <ul class="list-inline row">
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-comments text-primary"></i> 94</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-thumbs-up text-danger"></i> 145</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-reply text-danger"></i> Reply</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                       <div class="widget white-bg">
                            <div class="row">
                                    <div class="col-md-2 col-xs-6 b-r"> <strong>Full Name</strong>
                                        <br>
                                        <p class="text-muted">John Deo</p>
                                    </div>
                                    <div class="col-md-4 col-xs-6 b-r"> <strong>Mobile</strong>
                                        <br>
                                        <p class="text-muted">+90 (0241) 256-52-58</p>
                                    </div>
                                    <div class="col-md-4 col-xs-6 b-r"> <strong>Email</strong>
                                        <br>
                                        <p class="text-muted">john-doe@domain.com</p>
                                    </div>
                                    <div class="col-md-2 col-xs-6"> <strong>Location</strong>
                                        <br>
                                        <p class="text-muted">Ankara</p>
                                    </div>
                            </div>
                            <hr>
                            <p class="mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <h5 class="font-medium mt-20">Skill Set</h5>
                            <hr>
                            <div class="mt-20">
                                <span>Php & Mysql</span>
                                <small class="float-right">85%</small>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width:85%;" class="progress-bar bg-warning"></div>
                            </div>
                            <div class="mt-20">
                                <span>HTML 5</span>
                                <small class="float-right">100%</small>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width:100%;" class="progress-bar bg-success"></div>
                            </div>
                            <div class="mt-20">
                                <span>jQuery</span>
                                <small class="float-right">60</small>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width:60%;" class="progress-bar bg-danger"></div>
                            </div>
                            <div class="mt-20">
                                <span>Photoshop</span>
                                <small class="float-right">70%</small>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width:70%;" class="progress-bar bg-primary"></div>
                            </div>
                      </div>
                    </div>

                </div>
            </div>
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
