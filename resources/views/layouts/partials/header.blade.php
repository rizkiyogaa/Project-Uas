<div class="header">

    <!-- Header Title -->
    <div class="page-title-box">
        <h3>Restoran UTS IF430</h3>
    </div>
    <!-- /Header Title -->

    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

    <!-- Header Menu -->
    <ul class="nav user-menu">
        @if ((Auth::user() && Auth::user()->role != 'Admin'))
        <li class="nav-item">
            <a href="{{ route('order.index') }}" class="nav-link">My Order</a>
        </li>
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="dropdown-item" type="submit">Logout</button>
            </form>
        </li>        
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}" role="button" aria-expanded="false">
                Login
            </a>
        </li>
        @endif
    </ul>

</div>
