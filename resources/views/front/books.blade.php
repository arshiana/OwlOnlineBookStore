@extends('layout.main')
@section('title','Books')
@section('content')
        <!-- products listing -->
         <!-- Latest SHirts -->
        <div class="row">
            @forelse($books as $book)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="item-wrapper">
                    <div class="img-wrapper">

                        <a href="#">
                            <img src="{{url('images',$book->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('book')}}">
                        <h3>
                            {{$book->name}}
                        </h3>
                    </a>
                    <h5>
                        {{$book->price}}
                    </h5>
                    <p>
                        {{$book->description}}
                    </p>
                    <a class="btn" style="background-color: black; color: #5bc0de" href="{{route('cart.addItem',$book->id)}}">
                        Add to Cart
                    </a>
                </div>
            </div>
            @empty
            <h3>No Books</h3>
            @endforelse
        </div>
@endsection