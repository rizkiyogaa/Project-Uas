<div class="main-wrapper">
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="{{Request::is('menu') ? 'active' : '' }}">
                        <a href="{{ route('menu.index') }}">
                            <i class="la la-edit"></i>
                            <span>Menu </span>
                        </a>
                    </li>
                    <li class="{{Request::is('category') ? 'active' : '' }}">
                        <a href="{{ route('category.index') }}">
                            <i class="la la-object-ungroup"></i>
                            <span>Category </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
