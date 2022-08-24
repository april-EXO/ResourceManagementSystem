<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                    <div class="col-1">
                    </div>
                    <div class="col-1">
                    </div>
                    <div class="col-6">Name
                    </div>
                    <div class="col-2">Application Date
                    </div>
                    <div class="col-1">Status
                    </div>
                    <div class="col-1">
                    </div>
                </div>
            </div>
        </div>


        @foreach ($application as $i => $b)
        <div class="card mb-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-1">{{$i+1}}
                    </div>
                    <div class="col-1">

                        <img src="images/{{$b['photo']}}" alt="{{$b['photo']}}" style="width:100px;height:100px">

                    </div>
                    <div class="col-6">{{$b['name']}}
                    </div>
                    <div class="col-2">{{$b['created_at']}}
                    </div>
                    <div class="col-1">{{$b['status']}}
                    </div>
                    <div class="col-1">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$i}}">
                            Detail
                        </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal-{{$i}}" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel-{{$i}}">Application details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                   @include('adminpage-application', ['beneficiary' => $b])
                                </div>
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>