<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-user-astronaut"></i> {{$title}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('map')}}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('tabel')}}"><i class="fa-solid fa-table-list"></i> Tabel</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-database"></i> Data
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('api.points')}}" target="blank" > <i class="fa-solid fa-location-dot"></i >   Marker GeoJSON</a></li>

                        <li><a class="dropdown-item" href="{{route('api.polyline')}}"> <i class="fa-solid fa-grip-lines"></i >   Polyline GeoJSON</a></li>

                        <li><a class="dropdown-item" href="{{route('api.polygon')}}"> <i class="fa-solid fa-draw-polygon"></i >   Polygon GeoJSON</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> --}}
            </ul>
            {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
        </div>
    </div>
</nav>
