


@extends('User.layout.user_header')
<!DOCTYPE html>
<html lang="en">
    <body class="horizontal">
        @include('User.user_header_files')
@section('content')

<br>
<section class="container">
{{-- card-primary ||   card-success --}}
    <div class="row">
        @forelse ($categories as $category)
           <div class="col-md-3">
            <div class="card price-box">
                <div class="card-header card-default">
                   {{$category->name}}

                </div>
                <div class="price-amount">
                    <sup> {{ $category->currency->symbol }}</sup> {{$category->contribution}} <br><sub>{{ $category->periodicals}}</sub>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled price-features">
                        <li>Your Return: {{$category->return_amount}}</li>
                        <li>Person Limit: {{$category->person_limit}}</li>
                         <li>Reservation left: 22</li>
                          <li>Loan Apply Limit: {{$category->loan_limit}}</li>

                    </ul>
                </div>
                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" role="form">


                    <input type="hidden" name="metadata" value="{{ json_encode($array = ['Category_id' => $category->id ]) }}" >


                    <input type="hidden" name="email" value="{{ auth()->user()->email}}"> {{-- Auth::user()->email required --}}


                    <input type="hidden" name="amount" value="{{$category->contribution * 100}}"> {{-- required in kobo --}}

                    <input type="hidden" name="currency" value="{{ $category->currency->short_name }}">

                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                                                                {{ csrf_field() }}

                    <div class="card-footer">
                        {{-- <a href="page-register.html" class="btn btn-border  btn-primary"></a> --}}
                        <input class="btn btn-border  btn-primary" type="submit" value="Get Started" >
                        {{-- <i class="fa fa-plus-circle fa-lg"></i> Get Started</button> --}}
                    </div>


                    {{-- <a href="page-register.html" class="btn btn-border  btn-primary"></a> --}}


            </form>
            </div>
        </div>

        @empty

        @endforelse

         {{-- <div class="col-md-3">
            <div class="card price-box">
                <div class="card-header  ">
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
                <div class="card-header ">
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
        </div> --}}
    </div>

    <footer class="footer">
        <span>Copyright &copy; 2018 FixedPlus</span>
    </footer>


</section>


@include('User.script_files')
@endsection

</body>
</html>
