<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<!-- Navigation Bar-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>

            @auth
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            @else
                <a class="btn btn btn-dark btn-outline-light mx-2" href="/register" role="submit">Register</a>
                <a class="btn btn btn-dark btn-outline-light mx-2" href="/login" role="submit">Login</a>
                @endif


            </div>
        </div>
    </nav>

    <div class="card mx-2">
        <div class="card-body">
            <h2 style="text-align: center">
                RMS Administrator Page
            </h2>
            <h6 style="text-align: center">
                to manage beneficiaries application.
            </h6>


            <div class="card" style="background-color:lightgrey">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">no.
                        </div>
                        <div class="col-1">image
                        </div>
                        <div class="col-6">name
                        </div>
                        <div class="col-2">state
                        </div>
                        <div class="col-1">date
                        </div>
                        <div class="col-1">view
                        </div>
                    </div>
                </div>
            </div>


            <div class="card mb-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">1
                        </div>
                        <div class="col-1">

                            <img src="images/beneficiary.jpg" alt="Generic placeholder image" style="width:100px;height:100px">

                        </div>
                        <div class="col-6">Station Love and Caring.
                        </div>
                        <div class="col-2">Penang
                        </div>
                        <div class="col-1">23-8-2022 11:11:45
                        </div>
                        <div class="col-1"><button class="btn btn-primary">detail</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">2
                        </div>
                        <div class="col-1">

                            <img src="images/Volunteer.jpg" alt="Generic placeholder image" style="width:100px;height:100px">

                        </div>
                        <div class="col-6">Pusat Kasih Sayang.
                        </div>
                        <div class="col-2">Kuala Lunpur
                        </div>
                        <div class="col-1">23-8-2022 11:11:45
                        </div>
                        <div class="col-1"><button class="btn btn-primary">detail</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">3
                        </div>
                        <div class="col-1">

                            <img src="images/Old-folks-home.jpg" alt="Generic placeholder image" style="width:100px;height:100px">

                        </div>
                        <div class="col-6">Sekolah Jenis Kebangsaan Jkk.
                        </div>
                        <div class="col-2">Kedah
                        </div>
                        <div class="col-1">23-8-2022 11:11:45
                        </div>
                        <div class="col-1"><button class="btn btn-primary">detail</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">4
                        </div>
                        <div class="col-1">

                            <img src="images/Volunteer.jpg" alt="Generic placeholder image" style="width:100px;height:100px">

                        </div>
                        <div class="col-6">Pusat Kasih Sayang.
                        </div>
                        <div class="col-2">Kuala Lunpur
                        </div>
                        <div class="col-1">23-8-2022 11:11:45
                        </div>
                        <div class="col-1"><button class="btn btn-primary">detail</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">5
                        </div>
                        <div class="col-1">

                            <img src="images/Volunteer.jpg" alt="Generic placeholder image" style="width:100px;height:100px">

                        </div>
                        <div class="col-6">Pusat Kasih Sayang.
                        </div>
                        <div class="col-2">Kuala Lunpur
                        </div>
                        <div class="col-1">23-8-2022 11:11:45
                        </div>
                        <div class="col-1"><button class="btn btn-primary">detail</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">6
                        </div>
                        <div class="col-1">

                            <img src="images/beneficiary.jpg" alt="Generic placeholder image" style="width:100px;height:100px">

                        </div>
                        <div class="col-6">Station Love and Caring.
                        </div>
                        <div class="col-2">Penang
                        </div>
                        <div class="col-1">23-8-2022 11:11:45
                        </div>
                        <div class="col-1"><button class="btn btn-primary">detail</button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>
