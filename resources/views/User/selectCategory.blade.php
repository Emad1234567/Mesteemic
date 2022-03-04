


@extends('User.layout.user_header')
<!DOCTYPE html>
<html lang="en">
    <body class="horizontal">
        @include('User.user_header_files')
@section('content')

<br>
<section class="container">

    <div class="row">
        <div class="col-md-3">
            <div class="card price-box">
                <div class="card-header card-default">
                    Basic
                </div>
                <div class="price-amount">
                    <sup>$</sup> 9.99 <sub>/PM</sub>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled price-features">
                        <li>Lorem ipsum dolor</li>
                         <li>dummy text of the printing</li>
                          <li>Dolor sit amet</li>
                           <li>Printing text of industry</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="page-register.html" class="btn btn-border  btn-primary">Sing Up</a>
                </div>
            </div>
        </div>
         <div class="col-md-3">
            <div class="card price-box">
                <div class="card-header card-primary ">
                    Standard
                </div>
                <div class="price-amount">
                    <sup>$</sup> 21.99 <sub>/PM</sub>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled price-features">
                        <li>Lorem ipsum dolor</li>
                         <li>dummy text of the printing</li>
                          <li>Dolor sit amet</li>
                           <li>Printing text of industry</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="page-register.html" class="btn  btn-primary">Sing Up</a>
                </div>
            </div>
        </div>
         <div class="col-md-3">
            <div class="card price-box">
                <div class="card-header card-success">
                    Professional
                </div>
                <div class="price-amount">
                    <sup>$</sup> 33.99 <sub>/PM</sub>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled price-features">
                        <li>Lorem ipsum dolor</li>
                         <li>dummy text of the printing</li>
                          <li>Dolor sit amet</li>
                           <li>Printing text of industry</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="page-register.html" class="btn btn-success">Sing Up</a>
                </div>
            </div>
        </div>
         <div class="col-md-3">
            <div class="card price-box">
                <div class="card-header card-default">
                    Extended
                </div>
                <div class="price-amount">
                    <sup>$</sup> 49.99 <sub>/PM</sub>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled price-features">
                        <li>Lorem ipsum dolor</li>
                         <li>dummy text of the printing</li>
                          <li>Dolor sit amet</li>
                           <li>Printing text of industry</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="page-register.html" class="btn btn-border  btn-primary">Sing Up</a>
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
