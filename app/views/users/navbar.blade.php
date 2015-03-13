<!--NAVIGATION-->
<nav class="navbar navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">UNLINK</a>
        </div>

        <div class="collapse navbar-collapse" id="navigation">
            <div class="row">
                <div class="col-md-2">
                    <ul class="nav navbar-nav text-center">
                        <li><a href="#"><i class="fa fa-exclamation-circle"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i></a> </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="set-center nav navbar-nav text-center">
                        <li><a href="#">Discover</a></li>
                        <li class="{{ set_active_by_route('user.index') }}"><a href="{{ route('user.index') }}">My Portfolio</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="nav navbar-nav navbar-right text-center">
                        <li><a><i class="fa fa-search"></i></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('user.index') }}" data-toggle="modal" data-target=".user-profile-box-modal"><i class="fa fa-users"></i> My Portfolio</a></li>
                                {{--<li><a href="#"><i class="fa fa-cogs"></i> Account Settings</a></li>--}}
                                <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!--NAVIGATION END-->