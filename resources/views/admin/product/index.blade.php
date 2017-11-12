@extends('admin.layout.admin')

@section('content')

    <h3>Products</h3>

    <ul>
        @forelse($products as $product)
        <li>
             <h4>Name Of Product:{{$product->name}}</h4>
            <h4>Category:{{count($product->category)?$product->category->name:"N/A"}}</h4>
            <form action="{{route('product.destroy',$product->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input style="color: white; background-color: black"  type="submit" class="btn" value="Delete">
            </form>
        </li>

            @empty
            <h3>No Products</h3>
            @endforelse
    </ul>


@endsection