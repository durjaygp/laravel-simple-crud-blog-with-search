<header class="main_header_area">

    <!-- Navigation Bar -->
    <div class="header_menu" id="header_menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('frontEnd')}}/images/logo.png" alt="image">
                            <img src="{{asset('frontEnd')}}/images/logo-white.png" alt="image">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" id="responsive-menu">
                            <li class="dropdown submenu active">

                            <li class="active"><a href="about.html">Home</a></li>

                            <li class="submenu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category
                                    <i class="icon-arrow-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    @foreach($categories as $cat)
                                    <li><a href="{{route('category',['slug'=>$cat->slug])}}">{{$cat->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="search-main d-flex">
                        <form method="post" action="{{route('search')}}" class="search-main d-flex">
                            @csrf
                            <input type="text" name="search" id="" placeholder="Search Blog">
                            <button type="submit" class="btn-sm btn-primary"><i class="fa fa-search">Search</i></button>
                        </form>
                    </div>
                    <div id="slicknav-mobile"></div>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <!-- Navigation Bar Ends -->
</header>
