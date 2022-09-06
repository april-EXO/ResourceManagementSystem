<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <title>Resource Management System</title>
</head>

<body>
    
    @can('isAdmin')
        <script type="text/javascript">
            window.location.href = '/admin/pending';
        </script>
    @endcan


    @include('layouts.nav-bar-all')

    @if (session()->get('donation-submitted'))
        <script>
                alert('{{Session::get('donation-submitted')}}');
        </script>
    @endif

    <!-- Carousel Banner-->
    <div id="carouselMainPage" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselMainPage" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselMainPage" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselMainPage" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/homepageImages/Old-folks-home.jpg') }}" class="d-block w-100" alt="First Slide Image">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Do a Good Deed, Give to Those in Need.</h5>
                    <p>Donate food to our welfare centre today!</p>
                    {{-- <div class="slider-btn">
                        <button class="btn btn-1">Donate Now</button>
                    </div> --}}
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/homepageImages/Beneficiary.jpg') }}" class="d-block w-100" alt="Second Slide Image">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Need Resource Support? We Can Help.</h5>
                    <p>Become a beneficiary to receive resources support.</p>
                    {{-- <div class="slider-btn">
                        <button class="btn btn-2">More Info</button>
                    </div> --}}
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/homepageImages/Volunteer.jpg') }}" class="d-block w-100" alt="Third Slide Image">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Volunteer to Aid Us with Our Charitable Causes.</h5>
                    <p>Volunteer today to help us achieve more!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMainPage" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMainPage" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Be a Donor Section-->
    <div class="container">
        <h2>Start Your Donate Today</h2>
        <div class="row g-3">

            @if ($count < 6)

                @for ($i = 0; $i < $count; $i++)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">                       
                            <img src="images/{{ $beneficiaries[$i]->photo }}" class="card-img-top">                        
                            <div class="card-body">
                                <h5 class="card-title">{{ $beneficiaries[$i]->name }}</h5>
                                <p class="card-text">{{ $beneficiaries[$i]->state }}</p>
                                <p class="card-text">{{ $beneficiaries[$i]->description }}</p>
                            </div>
                            <div class="card-button">
                                <a href="beneficiary/{{ $beneficiaries[$i]->id }}/detail">
                                    <button type="button" class="btn btn-outline-dark  mb-3">Donate Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endfor
            @else
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img src="images/{{ $beneficiaries[$i]->photo }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $beneficiaries[$i]->name }}</h5>
                                <p class="card-text">{{ $beneficiaries[$i]->state }}</p>
                                <p class="card-text">{{ $beneficiaries[$i]->description }}</p>
                            </div>
                            <div class="card-button">
                                <a href="beneficiary/{{ $beneficiaries[$i]->id }}/detail">
                                    <button type="button" class="btn btn-outline-dark mb-3">Donate Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endfor

            @endif
        </div>
		<br><br>
        <div>
            <a href="/viewAllBeneficiaries" class="d-grid gap-2" style="text-decoration:none">
                <button type="button" class="btn btn-dark" style="padding:15px">View All >></button>
            </a>
        </div>

    </div>

    <!-- Become a Beneficiary -->
    <div class="beneficiary">
        <h2>Become a Beneficiary</h2>
        <div class="row g-3">
            <div class="col">
                <img src="{{ asset('images/homepageImages/beneficiaryleft.png') }}" class="beni-image">
            </div>
            <div class="beneficiary-info">
                <h3>Need Resource Support?</h3>
                <p>Register as a beneficiary on our website and receive help from the public.</p>
            </div>
            <div class="col">
                <img src="{{ asset('images/homepageImages/beneficiaryright.jpg') }}" class="beni-image">
            </div>
        </div>
    </div>

    <!-- Footer-->
    <div class="footer">
        <p>© 2022 YAST Group. All Rights Reserved.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
