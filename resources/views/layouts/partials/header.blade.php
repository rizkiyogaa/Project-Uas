<div class="header">

    <!-- Header Title -->
    <div class="page-title-box">
        <h3>Rental UAS IF430</h3>
    </div>
    <!-- /Header Title -->

    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

    <!-- Header Menu -->
    <ul class="nav user-menu">
        @if ((Auth::user()))
            @if(Auth::user()->role != 'Admin')
            <li class="nav-item">
                <a href="{{ route('orders.index') }}" class="nav-link">Order Saya</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('cart.index') }}" class="nav-link"> <span><i class="la la-cart-plus"></i></span>Keranjang</a>
            </li>
            @endif
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
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
