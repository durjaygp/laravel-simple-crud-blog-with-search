<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="{{route('admin')}}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                    <span class="arrow">
                        <i class="anticon anticon-arrow-right"></i>
                    </span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-tags"></i>
                    </span>
                    <span class="title">Category</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (\Request::route()->getName() == 'add.category') ? 'active' : '' }}">
                        <a href="{{route('add.category')}}">Add Category</a>
                    </li>
                    <li class="{{(\Request::route()->getName() == 'manage.category'? 'active': '')}}">
                        <a href="{{route('manage.category')}}">Manage Category</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-bell"></i>
                    </span>
                    <span class="title">Blogs</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{(\Request::route()->getName() == 'add.blog'? 'active': '')}}">
                        <a href="{{route('add.blog')}}">Add Blogs</a>
                    </li>
                    <li class="{{(\Request::route()->getName() == 'manage.blog'? 'active': '')}}">
                        <a href="{{route('manage.blog')}}">Manage Blogs</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
