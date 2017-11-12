@extends('admin.layout.admin')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white; min-height: 100px;">
        <a class="navbar-brand" href="#">
            Categories
        </a>
        <ul class="nav navbar-nav">
            @if(!empty($categories))
                @forelse($categories as $category)
            <li class="nav-item">
                <a  href="{{route('category.show',$category->id)}}">
                    {{$category->name}}
                </a>
            </li>
                @empty
                <li>No Data</li>
                @endforelse
            @endif
        </ul>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Category
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                {!! Form::open(['route'=>'category.store','method'=>'post']) !!}

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="form-group">
                    {{Form::label('name','Name')}}
                    {{Form::text('name',null,array('class'=>'form-controls'))}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>

    </nav>
    @if(!empty($products))
    <section>
        <h3>
            Products
        </h3>
        <table class="table table-hover table-inverse">
            <thead>
            <tr>
                <th>Products</th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $product)
            <tr>
                <td>{{$product->name}}</td>
            </tr>
            @empty
            <tr>
                <td>No Data</td>
            </tr>
            @endforelse
            </tbody>
        </table>
    </section>
    @endif


@endsection