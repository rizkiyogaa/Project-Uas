<div class="main-wrapper">
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="{{Request::is('category') ? 'active' : '' }}">
                        <a href="#">
                            <i class="la la-edit"></i>
                            <span>Category </span><span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none">
                            <li>
                                <a href="" class="">List</a>
                            </li>
                        </ul>
                    </li>
                    @foreach ($menus as $menu)
                    <li class="{{ count($menu->childs) ? 'submenu' : ''}} {{ !count($menu->childs) && Request::is($menu->link.'*') ? 'active' : '' }}">
                        <a href="{{ count($menu->childs) ? '#' : url($menu->link) }}">
                            <i class="{{ $menu->icon }}"></i> 
                            <span> {{ $menu->name }}</span> 
                            {!! count($menu->childs) 
                                ? '<span class="menu-arrow"></span>'
                                : '' !!}
                        </a>
                        @if (count($menu->childs))
                            <ul style="display: none">
                                @foreach ($menu->childs as $child)
                                <li>
                                    <a class="{{ Request::is($child->link) ? 'active' : '' }}"
                                        href="{{ url($child->link) }}">
                                        {{ $child->name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
