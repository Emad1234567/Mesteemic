@extends('header_files')
@extends('User.layout.user_header')
@section('content')
<div class="row">
			
    <div class="col-md-3">
        <div class="widget  bg-light">
            <div class="row row-table ">
                <div class="margin-b-30">
                    <h2 class="margin-b-5">Product</h2>
                    <p class="text-muted">Total Product</p>
                    <span class="float-right text-primary widget-r-m">37859</span>
                </div>
                <div class="progress margin-b-10  progress-mini">
                    <div style="width:50%;" class="progress-bar bg-primary"></div>
                </div>
                <p class="text-muted float-left margin-b-0">Change</p>
                <p class="text-muted float-right margin-b-0">50%</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="widget  bg-light">
            <div class="row row-table ">
                <div class="margin-b-30">
                    <h2 class="margin-b-5">Sales</h2>
                    <p class="text-muted">Total Sales</p>
                    <span class="float-right text-indigo widget-r-m">1758</span>
                </div>
                <div class="progress margin-b-10 progress-mini">
                    <div style="width:45%;" class="progress-bar bg-indigo"></div>
                </div>
                <p class="text-muted float-left margin-b-0">Change</p>
                <p class="text-muted float-right margin-b-0">450%</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="widget  bg-light">
            <div class="row row-table ">
                <div class="margin-b-30">
                    <h2 class="margin-b-5">Orders</h2>
                    <p class="text-muted">Total Orders</p>
                    <span class="float-right text-success widget-r-m">1385</span>
                </div>
                <div class="progress margin-b-10 progress-mini">
                    <div style="width:85%;" class="progress-bar bg-success"></div>
                </div>
                <p class="text-muted float-left margin-b-0">Change</p>
                <p class="text-muted float-right margin-b-0">85%</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="widget  bg-light">
            <div class="row row-table ">
                <div class="margin-b-30">
                    <h2 class="margin-b-5">Visitors</h2>
                    <p class="text-muted">Total Visitors</p>
                    <span class="float-right text-warning widget-r-m">98421</span>
                </div>
                <div class="progress margin-b-10 progress-mini">
                    <div style="width:38%;" class="progress-bar bg-warning"></div>
                </div>
                <p class="text-muted float-left margin-b-0">Change</p>
                <p class="text-muted float-right margin-b-0">38%</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
      <div class="card ">
            <div class="card-header">
                Sales Overview			
                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing</p>
            </div>
            <div class="card-body">
                <div>
                    <canvas id="myChart"  height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
      <div class="card">
            <div class="card-header">
                 Current Visitors
                <p class="text-muted">Different Devices Used to Visit</p>
            </div>
            <div class="card-body">

                 <div id="world-map-markers" style="height: 472px"></div>

            </div>
        </div>
    </div>
    
    <div class="col-md-4">
      <div class="card">
            <div class="card-header">
                Our Visitors
                <p class="text-muted">Different Devices Used to Visit</p>
            </div>
            <div class="card-body">
                <div id="donut"></div>
                <ul class="list-1 list-group">
                  <li class="list-group-item">Desktop <span class="float-right text-indigo"><i class="fa fa-arrow-up"></i> 45.0%</span></li>
                  <li class="list-group-item">Mobile <span class="float-right text-primary"><i class="fa fa-minus"></i> 25.0%</span></li>
                  <li class="list-group-item">Tablet <span class="float-right text-teal"><i class="fa fa-arrow-down"></i> 15.0%</span></li>
                  <li class="list-group-item">Other <span class="float-right text-muted"><i class="fa fa-arrow-up"></i> 15.0%</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Recent Comments
            <p class="text-muted">Latest Comments on users</p>
          </div>
            <div class="comment-widgets">
              <div class="d-flex flex-row comment-row">
                <div class="mr-2"><img alt="user" class="rounded-circle" src="assets/img/avtar-1.png" width="50"></div>
                <div class="comment-text w-100">
                  <h5>John Doe</h5>
                  <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                  <div class="comment-footer">
                    <span class="text-muted pull-right">April 8, 2018</span> 
                    <span class="label label-info">Pending</span> 
                    <span class="action-icons">
                        <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> 
                        <a href="javascript:void(0)"><i class="ti-check"></i></a>
                        <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                    </span>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-row comment-row active">
                <div class="mr-2">
                  <span class="round"><img alt="user" src="assets/img/avtar-2.png" width="50"></span>
                </div>
                <div class="comment-text active w-100">
                  <h5>John Doe</h5>
                  <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                  <div class="comment-footer">
                    <span class="text-muted pull-right">April 7, 2018</span> 
                    <span class="label label-success">Approved</span> 
                    <span class="action-icons">
                        <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> 
                        <a href="javascript:void(0)"><i class="ti-check"></i></a>
                        <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                    </span>
                  </div>
                </div>
              </div><!-- Comment Row -->
              <div class="d-flex flex-row comment-row">
                <div class="mr-2">
                  <span class="round"><img alt="user" src="assets/img/avtar-3.png" width="50"></span>
                </div>
                <div class="comment-text w-100">
                  <h5>John Doe</h5>
                  <p class="m-b-5">Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                  <div class="comment-footer">
                    <span class="text-muted pull-right">April 6, 2018</span> <span class="label label-danger">Rejected</span> <span class="action-icons"><a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> <a href="javascript:void(0)"><i class="ti-check"></i></a> <a href="javascript:void(0)"><i class="ti-heart"></i></a></span>
                  </div>
                </div>
              </div><!-- Comment Row -->
              <div class="d-flex flex-row comment-row">
                <div class="mr-2">
                  <span class="round"><img alt="user" src="assets/img/avtar-4.png" width="50"></span>
                </div>
                <div class="comment-text w-100">
                  <h5>John Doe</h5>
                  <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                  <div class="comment-footer">
                    <span class="text-muted pull-right">April 5, 2018</span> <span class="label label-info">Pending</span> <span class="action-icons"><a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> <a href="javascript:void(0)"><i class="ti-check"></i></a> <a href="javascript:void(0)"><i class="ti-heart"></i></a></span>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-row comment-row">
                <div class="mr-2">
                  <span class="round"><img alt="user" src="assets/img/avtar-2.png" width="50"></span>
                </div>
                <div class="comment-text active w-100">
                  <h5>John Doe</h5>
                  <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                  <div class="comment-footer">
                    <span class="text-muted pull-right">April 7, 2018</span> 
                    <span class="label label-success">Approved</span> 
                    <span class="action-icons">
                        <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> 
                        <a href="javascript:void(0)"><i class="ti-check"></i></a>
                        <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                    </span>
                  </div>
                </div>
              </div>
            </div>

        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="row">
                <div class="col-md-6">
                    Todo List
                    <p class="text-muted">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="col-md-6">
                    <a href="javascript: void(0);" class="btn btn-success  pull-right"><i class="fa fa-plus"></i></a>
                </div>
                 </div>
            </div>
            <div class="card-body">
                <div class="scrollDiv">
                    <ul class="todo-list">
                      <li>
                           <div class="checkbox checkbox-primary margin-r-5">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Lorem Ipsum is simply dummy text of the printing <small class="label label-info">Today</small></label>
                            </div>
                        </li>
                        <li>
                           <div class="checkbox checkbox-primary margin-r-5">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2"> Lorem Ipsum is simply dummy text of the printing  dummy text of the printing and typesetting industry. <small class="label label-danger">Yesterday</small></label>
                            </div>
                        </li>
                        <li>
                           <div class="checkbox checkbox-primary margin-r-5">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3"> Lorem Ipsum is simply dummy text of the printing  dummy text of the <small class="label label-info">1 Week</small></label>
                            </div>
                        </li>
                        <li>
                           <div class="checkbox checkbox-primary margin-r-5">
                                <input id="checkbox1" type="checkbox" >
                                <label for="checkbox1"> Lorem Ipsum is simply dummy text of the 	<small class="label label-primary"><i class="fa fa-clock-o"></i> 3 Mins</small></label>
                            
                            </div>
                        </li>
                        <li>
                           <div class="checkbox checkbox-primary margin-r-5">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4"> Lorem Ipsum is simply dummy text of the printing  dummy text of the printing<small class="label label-warning">2 Week</small></label>
                            </div>
                        </li>
                        <li>
                           <div class="checkbox checkbox-primary margin-r-5">
                                <input id="checkbox5" type="checkbox">
                                <label for="checkbox5"> Lorem Ipsum is simply dummy text of the<small class="label label-info">Today</small></label>
                            </div>
                        </li>
                       <li>
                           <div class="checkbox checkbox-primary margin-r-5">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1"> Lorem Ipsum is simply dummy text of the printing  dummy text of<small class="label label-danger">Yesterdat</small></label>
                            </div>
                        </li>
                        <li>
                           <div class="checkbox checkbox-primary margin-r-5">
                                <input id="checkbox4" type="checkbox" >
                                <label for="checkbox4"> Lorem Ipsum is simply dummy text of the printing  dummy text of the printing<small class="label label-info"><i class="fa fa-clock-o"></i> 3 Mins</small></label>
                            </div>
                        </li>
                        <li>
                           <div class="checkbox checkbox-primary margin-r-5">
                                <input id="checkbox5" type="checkbox" >
                                <label for="checkbox5"> Lorem Ipsum is simply dummy text of the<small class="label label-danger"><i class="fa fa-clock-o"></i> 1 Week</small></label>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="card-footer">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Add Todo...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            Add</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header card-default">
                Chat
                <p class="text-muted">Lorem ipsum dolor sit amet</p>
            </div>
            
            <div class="card-body">
                <div class="scrollDiv">
                    <ul class="chat-list list-unstyled">
                        <li class="clearfix chat-element media">
                            <a href='javascript: void(0);' class="float-left">
                                <img src="assets/img/avtar-2.png" alt="" class="rounded-circle">
                            </a>
                            <div class="media-body ">
                                <div class="speech-box">
                                    <small class="float-right text-primary">1m ago</small>
                                    <strong>John Doe</strong>
                                    <p class="margin-b-0">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                    </p>
                                    <small class="text-info">Today 12:31 pm - 10.08.2018</small>
                                </div>
                            </div>
                        </li>

                        <li class="clearfix chat-element right media">
                            <div class="media-body text-right float-left">
                                <div class="speech-box">
                                    <strong class="float-left">John Doe</strong>
                                    <small class="text-right text-primary">1m ago</small>
                                    <p class="margin-b-0 text-left">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                    </p>
                                    <small class="text-info">Today 12:31 pm - 10.08.2018</small>
                                </div>
                            </div>
                            <a href='javascript: void(0);' class="float-right">
                                <img src="assets/img/avtar-2.png" alt="" class="rounded-circle">
                            </a>
                        </li>
                        <li class="clearfix chat-element media">
                            <a href='javascript: void(0);' class="float-left">
                                <img src="assets/img/avtar-2.png" alt="" class="rounded-circle">
                            </a>
                            <div class="media-body ">
                                <div class="speech-box">
                                    <small class="float-right text-primary">1m ago</small>
                                    <strong>John Doe</strong>
                                    <p class="margin-b-0">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                    </p>
                                    <small class="text-info">Today 12:31 pm - 10.08.2018</small>
                                </div>
                            </div>
                        </li>
                         <li class="clearfix chat-element media">
                            <a href='javascript: void(0);' class="float-left">
                                <img src="assets/img/avtar-2.png" alt="" class="rounded-circle">
                            </a>
                            <div class="media-body ">
                                <div class="speech-box">
                                    <small class="float-right text-primary">1m ago</small>
                                    <strong>John Doe</strong>
                                    <p class="margin-b-0">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                    </p>
                                    <small class="text-info">Today 12:31 pm - 10.08.2018</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-footer">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type your message here...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary"><i class="fa fa-send"></i></button>
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>

                
    <div class="row">
        <div class="col-lg-8 col-xlg-9">
            <div class="card">
                <div class="card-header card-default">
                Activity Timeline
                <p class="text-muted">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="card-body">

                    <div class="profiletimeline">
                        <div class="sl-item">
                            <div class="sl-left"> <img src="assets/img/avtar-1.png" alt="user" class="rounded-circle"> </div>
                            <div class="sl-right">
                                <div><a href="#" class="link">John Doe</a> <span class="sl-date">12 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 mb-2"><img src="assets/img/gallery/1s.jpg" alt="user" class="img-fluid rounded"></div>
                                        <div class="col-lg-3 col-md-6 mb-2"><img src="assets/img/gallery/2s.jpg" alt="user" class="img-fluid rounded"></div>
                                        <div class="col-lg-3 col-md-6 mb-2"><img src="assets/img/gallery/3s.jpg" alt="user" class="img-fluid rounded"></div>
                                        <div class="col-lg-3 col-md-6 mb-2"><img src="assets/img/gallery/4s.jpg" alt="user" class="img-fluid rounded"></div>
                                    </div>
                                    <div class="like-comm">
                                        <a href="javascript:void(0)" class="link mr-2">385 comment</a> 
                                        <a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 174 Love</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="sl-item">
                            <div class="sl-left"> <img src="assets/img/avtar-2.png" alt="user" class="rounded-circle"> </div>
                            <div class="sl-right">
                                <div> <a href="#" class="link">John Doe</a> <span class="sl-date">8 minutes ago</span>
                                    <div class="mt-2 row">
                                        <div class="col-md-3 col-xs-12"><img src="assets/img/gallery/1s.jpg" alt="user" class="img-fluid rounded"></div>
                                        <div class="col-md-9 col-xs-12">
                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> </div>
                                    </div>
                                    <div class="like-comm mt-2"> 
                                    <a href="javascript:void(0)" class="link mr-2">248 comment</a> 
                                    <a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 84 Love</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="sl-item">
                            <div class="sl-left"> <img src="assets/img/avtar-3.png" alt="user"> </div>
                            <div class="sl-right">
                                <div><a href="#" class="link">John Doe</a> <span class="sl-date">6 minutes ago</span>
                                    <p class="mt-1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                </div>
                                <div class="like-comm mt-2"> 
                                <a href="javascript:void(0)" class="link mr-2">68 comment</a> 
                                <a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 36 Love</a> 
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="sl-item">
                            <div class="sl-left"> <img src="assets/img/avtar-4.png" alt="user" class="rounded-circle"> </div>
                            <div class="sl-right">
                                <div><a href="#" class="link">John Doe</a> <span class="sl-date">4 minutes ago</span>
                                    <blockquote class="mt-1">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
        <div class="card weather">
                <div class="city-selected">
                    <div class="weather-box">
                        <div class="info">
                            <div class="city">Ankara</div>
                            <div class="night">Night - 22:07 PM</div>
                            <div class="temp text-primary">3°</div>
                            <div class="wind">
                                <i class="wi wi-windy"></i>
                                <span>25 km/h</span>
                            </div>
                        </div>
                        <div class="icon text-primary">
                            <i class="wi wi-night-alt-hail"></i>
                        </div>
                    </div>
                </div>

                <div class="days">
                    <div class="row row-no-gutter">
                        <div class="col-md-4">
                            <div class="day">
                                <h1>Monday</h1>
                                <i class="wi wi-day-rain"></i>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="day">
                                <h1>Tuesday</h1>
                                <i class="wi wi-day-storm-showers"></i>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="day">
                                <h1>Wednesday</h1>
                                <i class="wi wi-solar-eclipse"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    
            <div class="card">
                <div class="card-header card-default">
                Browser Stats
                <p class="text-muted">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="card-body">
                    <table class="table browser no-border">
                        <tbody>
                            <tr>
                                <td><img src="assets/img/browser/chrome-logo.png" alt="logo"></td>
                                <td>Google Chrome</td>
                                <td class="text-right"><span class="label label-primary">33%</span></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/browser/firefox-logo.png" alt="logo"></td>
                                <td>Mozila Firefox</td>
                                <td class="text-right"><span class="label label-success">27%</span></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/browser/safari-logo.png" alt="logo"></td>
                                <td>Apple Safari</td>
                                <td class="text-right"><span class="label label-info">17%</span></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/browser/internet-logo.png" alt="logo"></td>
                                <td>Internet Explorer</td>
                                <td class="text-right"><span class="label label-warning">11%</span></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/browser/opera-logo.png" alt="logo"></td>
                                <td>Opera mini</td>
                                <td class="text-right"><span class="label label-danger">8%</span></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/browser/internet-logo.png" alt="logo"></td>
                                <td>Microsoft edge</td>
                                <td class="text-right"><span class="label label-indigo">4%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        
        </div>
        
    </div>
</div>
@endsection