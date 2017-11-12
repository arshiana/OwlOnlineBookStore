{{-- Side Navigation --}}
<div class="col-md-2" style="background-color: white">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <span class="glyphicon glyphicon-list"></span> Products

                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul style="display: none">
                    <li><a href="{{route('product.create')}}">Add Product</a></li>
                    <li><a href="{{route('product.index')}}">Product</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <span class="glyphicon glyphicon-list"></span> Category

                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul style="display: none">
                    <li><a href="{{route('category.index')}}">Add Category</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->