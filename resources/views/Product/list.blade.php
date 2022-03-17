@extends('User.layout.user_header')
<!DOCTYPE html>
<html lang="en">
    <body class="horizontal">
        @include('User.user_header_files')
@section('content')

    <div class="row">
        <div class="col-lg-8 col-xlg-9">
            <div class="card">
                <div class="card-header card-default">
                    <div class="float-right mt-10">
                        <a href="javascript: void(0);" class="btn btn-success btn-icon"><i class="fa fa-plus"></i> Create Post</a>
                    </div>
                Products
                {{-- <p class="text-muted">Lorem ipsum dolor sit amet</p> --}}
                </div>
                <div class="card-body">

                    <div class="profiletimeline">
                        <div class="sl-item">
                            <div class="sl-left"> <img src="{{ asset('assets/img/avtar-1.png') }}"  alt="user" class="rounded-circle"> </div>
                            <div class="sl-right">
                                <div><a href="#" class="link">John Doe</a> <span class="sl-date">12 minutes ago</span><br><br> <a href="#" class="link">Price: 3000 ₦</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 mb-2"><img src="{{ asset('assets/img/gallery/1s.jpg') }}" alt="user" class="img-fluid rounded"></div>
                                        <div class="col-lg-3 col-md-6 mb-2"><img src="{{ asset('assets/img/gallery/2s.jpg') }}" alt="user" class="img-fluid rounded"></div>
                                        <div class="col-lg-3 col-md-6 mb-2"><img src="{{ asset('assets/img/gallery/3s.jpg') }}" alt="user" class="img-fluid rounded"></div>
                                        <div class="col-lg-3 col-md-6 mb-2"><img src="{{ asset('assets/img/gallery/4s.jpg') }}" alt="user" class="img-fluid rounded"></div>
                                    </div>
                                    <div class="like-comm">
                                        {{-- <a href="javascript:void(0)" class="link mr-2">385 comment</a> --}}
                                        <a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 174 Love</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="sl-item">
                            <div class="sl-left"> <img src="{{ asset('assets/img/avtar-2.png') }}"  alt="user" class="rounded-circle"> </div>
                            <div class="sl-right">
                                <div> <a href="#" class="link">John Doe</a> <span class="sl-date">8 minutes ago</span>
                                    <div class="mt-2 row">
                                        <div class="col-md-3 col-xs-12"><img src="{{ asset('assets/img/gallery/1s.jpg') }}" alt="user" class="img-fluid rounded"></div>
                                        <div class="col-md-9 col-xs-12">
                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> </div>
                                    </div>
                                    <div class="like-comm mt-2">
                                    {{-- <a href="javascript:void(0)" class="link mr-2">248 comment</a> --}}
                                    <a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 84 Love</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="sl-item">
                            <div class="sl-left"> <img src="{{ asset('assets/img/avtar-3.png') }}"  alt="user"> </div>
                            <div class="sl-right">
                                <div><a href="#" class="link">John Doe</a> <span class="sl-date">6 minutes ago</span>
                                    <p class="mt-1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                </div>
                                <div class="like-comm mt-2">
                                {{-- <a href="javascript:void(0)" class="link mr-2">68 comment</a> --}}
                                <a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 36 Love</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        {{-- <div class="sl-item">
                            <div class="sl-left"> <img src="{{ asset('assets/img/avtar-4.png') }}"  alt="user" class="rounded-circle"> </div>
                            <div class="sl-right">
                                <div><a href="#" class="link">John Doe</a> <span class="sl-date">4 minutes ago</span>
                                    <blockquote class="mt-1">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    </blockquote>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
        {{-- <div class="card weather">
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
            </div> --}}


            <div class="card">
                <div class="card-header card-default">
                Product Categories
                {{-- <p class="text-muted">Lorem ipsum dolor sit amet</p> --}}
                </div>
                <div class="card-body">
                    <table class="table browser no-border">
                        <tbody>
                            @forelse ($categories as $category)
                            <tr>
                                <td><img src="{{ asset('assets/img/box_cat.png') }}" style="
                                    height: 30px;
                                " alt="logo"></td>
                                <td>{{$category->name}}</td>
                                <td class="text-right"><span class="label label-primary">10</span></td>
                            </tr>

                            @empty
                            <div class="alert bg-success alert-dismissible " role="alert"> Categories will be available Soon. </div>

                            @endforelse

                            {{-- <tr>
                                <td><img src="{{ asset('assets/img/browser/firefox-logo.png') }}"  alt="logo"></td>
                                <td>Mozila Firefox</td>
                                <td class="text-right"><span class="label label-success">27%</span></td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('assets/img/browser/safari-logo.png') }}"  alt="logo"></td>
                                <td>Apple Safari</td>
                                <td class="text-right"><span class="label label-info">17%</span></td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('assets/img/browser/internet-logo.png') }}"  alt="logo"></td>
                                <td>Internet Explorer</td>
                                <td class="text-right"><span class="label label-warning">11%</span></td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('assets/img/browser/opera-logo.png') }}"  alt="logo"></td>
                                <td>Opera mini</td>
                                <td class="text-right"><span class="label label-danger">8%</span></td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('assets/img/browser/internet-logo.png') }}"  alt="logo"></td>
                                <td>Microsoft edge</td>
                                <td class="text-right"><span class="label label-indigo">4%</span></td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    </div>
</div>
@include('User.script_files')
@endsection

</body>
</html>
