<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('home')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->



        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-basket"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="category-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{route('categories.index')}}">
                        <i class="bi bi-circle"></i><span>Categories Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('productPeople.index')}}">
                        <i class="bi bi-circle"></i><span>Accessories for people</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('productMoto.index')}}">
                        <i class="bi bi-circle"></i><span>Items for motors</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#blogs-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-pencil-square"></i>
                <span>Blogs </span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="blogs-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('blogs.create')}}">
                        <i class="bi bi-circle"></i><span>Design Blog</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('blogs.index')}}">
                        <i class="bi bi-circle"></i><span>List Blogs</span>
                    </a>
                </li>
            </ul>
        </li><!-- End News Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('users.index')}}">
                <i class="bi bi-person"></i>
                <span>Users Management</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('orders.index')}}">
                <i class="bi bi-card-list"></i>
                <span>Order Management</span>
            </a>
        </li><!-- End Register Page Nav -->



        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('/')}}">
                <i class="bi bi-backspace-fill"></i>
                <span>Back HomePage</span>
            </a>
        </li><!-- End Profile Page Nav -->
    </ul>



</aside><!-- End Sidebar-->
