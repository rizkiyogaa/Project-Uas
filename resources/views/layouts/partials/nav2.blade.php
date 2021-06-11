<div class="main-wrapper">
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Category</span>
                    </li>
                    @foreach ($categories as $category)
                    <li class="{{Request::get('category') == $category->name ? 'active' : '' }}">
                        <a href="{{ route('dashboard.index', ['category' => $category->name]) }}">
                            <span>{{ $category->name }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
