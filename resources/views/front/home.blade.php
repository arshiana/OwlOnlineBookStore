@extends('layout.main')

@section('content')
       <section class="text-center" style="height: 490px;
    background: #3d3d3d url(https://images2.alphacoders.com/261/thumb-1920-26102.jpg) center center no-repeat;
    background-color: rgb(61, 61, 61);
    background-image: url(https://images2.alphacoders.com/261/thumb-1920-26102.jpg);
       background-repeat: no-repeat;
       background-attachment: scroll;
       background-clip: border-box;
       background-origin: padding-box;
       background-position-x: center;
       background-position-y: center;
       background-size: cover;">
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong style="color: dodgerblue">
                    Hey! Welcome to OWL Online BookStore
                </strong>
            </h2>
            <br>
            <a href="{{url('/books')}}"><button class="btn success" style="background-color: dodgerblue;">Check Out Books</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            OWL&rsquo;s Latest Books
        </h2>
        </div>

        <!-- Latest Books -->

           @forelse($books->chunk(4) as $chunk)
               <div class="row">
               @foreach($chunk as $book)
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
                           ${{$book->price}}
                       </h5>

                       <a href="{{route('cart.addItem',$book->id)}}" class="btn" style="background-color: black; color: #5bc0de">
                           Add to Cart
                       </a>
                   </div>
               </div>
               @endforeach
               </div>
           @empty
               <h3>No Books</h3>
           @endforelse

        <!-- Footer -->
        <br>
@endsection