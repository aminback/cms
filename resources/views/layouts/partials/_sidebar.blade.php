<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('users.index')}}">
                    <span data-feather="file"></span>
                   All Users
                </a>
                <a class="nav-link" href="{{route('users.create')}}">
                    <span data-feather="file"></span>
                    Add Users
                </a>
            </li>
            <li class="nav-item">
                <p class="nav-link" >
                    -----------------
                </p>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('posts.index')}}">
                    <span data-feather="shopping-cart"></span>
                   All Posts
                </a>
                <a class="nav-link" href="{{route('posts.create')}}">
                    <span data-feather="shopping-cart"></span>
                   Add Post
                </a>
            </li>
            <li class="nav-item">
                <p class="nav-link" >
                    -----------------
                </p>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('categories.index')}}">
                    <span data-feather="users"></span>
                   All Categories
                </a>
                <a class="nav-link" href="{{route('categories.create')}}">
                    <span data-feather="users"></span>
                    Create Category
                </a>
            </li>
            <li class="nav-item">
                <p class="nav-link" >
                    -----------------
                </p>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('media.index')}}">
                    <span data-feather="bar-chart-2"></span>
                    All Media
                </a>
                <a class="nav-link" href="{{route('media.create')}}">
                    <span data-feather="bar-chart-2"></span>
                    Upload Media
                </a>
            </li>
            <li class="nav-item">
                <p class="nav-link" >
                    -----------------
                </p>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers"></span>
                    Integrations
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                </a>
            </li>
        </ul>
    </div>
</nav>