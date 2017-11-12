@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">
        <h3>Cart Items</h3>


        <table class="table table-hover table-inverse">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
                <tr>
                    <td>{{$cartItem->name}}</td>
                    <td>${{$cartItem->price}}</td>
                    <td>
                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                        <input name="qty" type="text" value="{{$cartItem->qty}}">
                    </td>
                    <td>
                        <input style="color: white; background-color: black"  type="submit" class="btn" value="Ok">
                        {!! Form::close() !!}
                    </td>
                    <td>
                        <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input style="color: white; background-color: black"  type="submit" class="btn" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td>
                    Total Price: ${{Cart::total()}}
                </td>
                <td>Total Item: {{Cart::count()}}</td>
            </tr>
            </tbody>
        </table>

        <a href="{{route('checkout.shipping')}}" class="btn" style="background-color: black;color: white">CheckOut</a>

    </div>


</div>



@endsection