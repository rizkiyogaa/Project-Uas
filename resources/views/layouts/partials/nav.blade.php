<div class="main-wrapper">
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="{{Request::is('items') ? 'active' : '' }}">
                        <a href="{{ route('items.index') }}">
                            <i class="la la-edit"></i>
                            <span>Items </span>
                        </a>
                    </li>
                    <li class="{{Request::is('orders') ? 'active' : '' }}">
                        <a href="{{ route('orders.index') }}">
                            <i class="la la-shopping-cart"></i>
                            <span>Order </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
