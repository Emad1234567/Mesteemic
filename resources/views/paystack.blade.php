<!DOCTYPE html>
<html lang="en">
    <body class="horizontal">

<br>


<section class="container">

    <div class="row">
        <div class="col-md-12">

                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal d-none" role="form">


                    <input type="hidden" name="metadata" value="{{ json_encode($array = ['invoiceId' => 1]) }}" >


                    <input type="hidden" name="email" value="{{'syedmaisam97@gmail.com'}}"> {{-- Auth::user()->email required --}}

                    <input type="hidden" name="orderID" value="345">


                    <input type="hidden" name="amount" value="{{"5000"}}"> {{-- required in kobo --}}

                    <input type="hidden" name="currency" value="NGN">

                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                                                                {{ csrf_field() }}


                     <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">

                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now!</button>
                    </form>

        </div>
    </div>




</section>



</body>
</html>
