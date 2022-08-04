<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
      <title>Resource Management System</title>
  </head>

<body> 
      <!-- Navigation Bar-->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">RMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="donate">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://yastgroup.com.my/en/">About Us</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> --}}
                </ul>

                @auth
                <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/profile">My Profile</a></li>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route( 'logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>    
                        </li>
                    </ul>
                </li>
            </ul>
                
                @else
                <a class="btn btn btn-dark btn-outline-light mx-2" href="/register" role="submit">Register</a>
                <a class="btn btn btn-dark btn-outline-light mx-2" href="/login" role="submit">login</a>
                @endif
               

            </div>
        </div>
    </nav>  
<div class="p-3">
          <div class="card">
            <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">

              <div style="width:150px; height:150px; background-color:green; margin:25px">
                <img src="profilepic.png"
                alt="Generic placeholder image" class="img-thumbnail"
              style="width:100%">       
              </div>

              <div class="ms-3" style="margin-top: 110px;">
                <h4>{{ Auth::user()->name }}</h4>
                <p>{{ Auth::user()->email }}</p>
              </div>

            </div>
            <div class="p-4 text-black" style="background-color: #f8f9fa;">
                
              <div class="d-flex justify-content-end text-center py-1">
                
                <div>
                  <p class="mb-1 h5">3</p>
                  <p class="small text-muted mb-0">Donation</p>
                </div>
                <div class="px-3">
                  <p class="mb-1 h5">0</p>
                  <p class="small text-muted mb-0">qwer</p>
                </div>
                <div>
                  <p class="mb-1 h5">0</p>
                  <p class="small text-muted mb-0">qwer</p>
                </div>
              </div>
            </div>
            

            <div class="card-body p-4 text-black">
              <div class="mb-5">
                <h3 class="fw-normal mb-1">About</h3>
                <div class="p-4" style="background-color: #f8f9fa;">
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                            <div class="col-2 ">
                                <p class="font-italic mb-3">Role:</p>
                                <p class="font-italic mb-3">Name:</p>
                                <p class="font-italic mb-3">Email:</p>
                                <p class="font-italic mb-3">Gender:</p>
                            </div>
                            <div class="col">
                                <p class="font-italic mb-3">{{ Auth::user()->role }} </p>
                                <p class="font-italic mb-3">{{ Auth::user()->name }} </p>
                                <p class="font-italic mb-3">{{ Auth::user()->email }} </p>
                                <p class="font-italic mb-3">Female</p>
                            </div>
                        </div>
                        </div>

                        <div class="col-6">
                            <div class="row">
                            <div class="col-2">
                                <p class="font-italic mb-3">Age:</p>
                                <p class="font-italic mb-3">HP no.:</p>
                                <p class="font-italic mb-3">Birthday:</p>
                                <p class="font-italic mb-3">Address:</p>
                            </div>
                            <div class="col">
                                <p class="font-italic mb-3">22 </p>
                                <p class="font-italic mb-3">011-35520430 </p>
                                <p class="font-italic mb-3">30 April 2000 </p>
                                <p class="font-italic mb-3">17, Jalan SL17, Bandar Sungai Long, Selangor </p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
              </div>

              
              
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class=" fw-normal mb-0">Donation Record</h3>
                <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
              </div>

              <div class="card mb-3">
                <div class="card-header">
                  1
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-11">
                            <h5 class="card-title">Donation to Pusat Kebajikan Sayang on 21 Febuary 2022</h5>
                            <p class="card-text">Total: RM 500</p>
                        </div>
                        <div class="col align-self-end">
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>        
                </div>
              </div>

              <div class="card mb-3">
                <div class="card-header">
                  2
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-11">
                            <h5 class="card-title">Donation to Pusat Kebajikan Love & Care on 6 August 2022</h5>
                            <p class="card-text">Total: RM 400</p>
                        </div>
                        <div class="col align-self-end">
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>        
                </div>
              </div>
             
                          
              {{-- <div class="row g-2">
                <div class="col mb-2">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp"
                    alt="image 1" class="w-100 rounded-3">
                </div>
                <div class="col mb-2">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(107).webp"
                    alt="image 1" class="w-100 rounded-3">
                </div>
              </div> --}}
            </div>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>         
      </body>      

<style>
body {
/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1))
}
</style>