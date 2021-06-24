<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class=" d-flex justify-content-center collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Food and Drinks</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {{-- @foreach($cate as $ct)
                        <li><a class="dropdown-item" href="/">{{ $ct->name }}</a></li>
                        @endforeach --}}
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Travel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Elements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Inner Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <form action="{{ url('/page') }}" method="GET">
            <div class="input-group custom-search-form">
                <input type="search" name="search" class="form-control" placeholder="search...">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-secondary">Search</button>
                </span>
            </div>
        </form>
    </div>
</nav>



