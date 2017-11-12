<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0a0a0a; min-height: 50px;">
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                    <h3><a href="{{route('admin.index')}}" style="color: #e7e7e7">Admin</a></h3>
                </div>
            </div>

            <div class="col-md-2 pull-right">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color: black;color: floralwhite">{{Auth::user()->name}} <b
                                            class="caret"></b></a>
                                <ul class="dropdown-menu animated fadeInUp" style="background-color: black">
                                    <li><a href="{{url('/')}}" style="background-color: black; color: #e7e7e7">Front End</a></li>
                                    <li><a href="{{url('/logout')}}" style="background-color: black; color: #e7e7e7">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
</nav>