<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <a class="close-canvas-menu"><i class="fa fa-times"></i></a>
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">IAI-Cameroun</strong>
                            </span> <span class="text-muted text-xs block">Salle classe <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IAI
                </div>
            </li>

            <li class="{{ request()->is('welcome') ? 'active' : ''}}">
                <a href="{{route('welcome')}}"><i class="fa fa-star"></i> <span class="nav-label">Compétir </span></a>
            </li>
            <li class="{{ request()->is('/home') ? 'active' : ''}}">
                <a  href="{{route('home')}}"><i class="fa fa-info"></i> <span class="nav-label">A propos</span></a>
            </li>
        </ul>

    </div>
</nav>