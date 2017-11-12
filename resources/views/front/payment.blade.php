@extends('layout.main')

@section('content')
    <div class="container">
        <br>
        <h3>Payment</h3>
        <br>

        <br>
        <div class="from-row">
            <div class="small-6 small-centered col-lg-6" >
                <form action="{{route('payment.store')}}" method="post" id="payment-form">
                    {{csrf_field()}}
                    <div class="form-row">
                        <label for="card-element">
                            Credit or debit card
                        </label>
                        <div>
                            <div style="width: 30em" class="stripecardelement" id="card-element"></div>
                        </div>
                        <div>
                            <!-- Used to display Element errors -->
                            <span style="width: 30em; height: 2em; letter-spacing: 0em" id="card-errors" role="alert"></span>
                        </div>
                    </div>

                    <button>Submit Payment</button>
                </form>
                <br>
                <br>
            </div>
        </div>
    </div>
@endsection