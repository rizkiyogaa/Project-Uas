<div class="main-wrapper">
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Category</span>
                    </li>
                    <li class="{{Request::is('category') ? 'active' : '' }}">
                        <a href="#">
                            <span>Appetizer</span>
                        </a>
                    </li>
                    <li class="{{Request::is('category') ? 'active' : '' }}">
                        <a href="#">
                            <span>Seafood</span>
                        </a>
                    </li>
                    <li class="{{Request::is('category') ? 'active' : '' }}">
                        <a href="#">
                            <span>Vegetables</span>
                        </a>
                    </li>
                    <li class="{{Request::is('category') ? 'active' : '' }}">
                        <a href="#">
                            <span>Dessert</span>
                        </a>
                    </li>
                    <li class="{{Request::is('category') ? 'active' : '' }}">
                        <a href="#">
                            <span>Drink</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
