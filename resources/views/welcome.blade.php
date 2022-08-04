<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="donate">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://yastgroup.com.my/en/">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
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
                    </li>
                </ul>
                <a class="btn btn btn-dark btn-outline-light" href="/login" role="submit">Login</a>
            </div>
        </div>
    </nav>

    <!-- Carousel Banner-->
    <div id="carouselMainPage" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselMainPage" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselMainPage" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselMainPage" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset("images/Old-folks-home.jpg")}}" class="d-block w-100" alt="First Slide Image">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Do a Good Deed, Give to Those in Need.</h5>
                    <p>Donate food to our welfare centre today!</p>
                    <div class="slider-btn">
                        <button class="btn btn-1">Donate Now</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset("images/Beneficiary.jpg")}}" class="d-block w-100" alt="Second Slide Image">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Need Resource Support? We Can Help.</h5>
                    <p>Become a beneficiary to receive resources support.</p>
                    <div class="slider-btn">
                        <button class="btn btn-2">More Info</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset("images/Volunteer.jpg")}}" class="d-block w-100" alt="Third Slide Image">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Volunteer to Aid Us with Our Charitable Causes.</h5>
                    <p>Volunteer today to help us achieve more!</p>
                    <div class="slider-btn">
                        <button class="btn btn-3">More Info</button>
                    </div>
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
        <h2>Be a Donor</h2>
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="http://www.geocities.ws/lcs/lcsing/orphanage_malaysia2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Campaign 1</h5>
                        <p class="card-text">State: Negeri Sembilan</p>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="card-button">
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                            <button type="button" class="btn btn-outline-dark">Donate</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="https://media2.malaymail.com/uploads/articles/2019/2019-04/mansid1504.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Campaign 2</h5>
                        <p class="card-text">State: Penang</p>
                        <p class="card-text">Nunc sed blandit libero volutpat sed cras. Tortor dignissim convallis aenean et. Vel pretium lectus quam id leo in vitae. Purus in massa tempor nec feugiat nisl pretium fusce. Vel quam elementum pulvinar etiam non quam lacus suspendisse. Quis hendrerit dolor magna eget est lorem ipsum dolor. Vitae congue eu consequat ac felis donec et. Ac ut consequat semper viverra nam libero justo laoreet sit. Ut ornare lectus sit amet est placerat in egestas. Iaculis nunc sed augue lacus viverra. Velit aliquet sagittis id consectetur purus ut faucibus pulvinar. Viverra maecenas accumsan lacus vel facilisis volutpat est velit egestas.</p>
                    </div>
                    <div class="card-button">
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                            <button type="button" class="btn btn-outline-dark">Donate</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="https://assets.hmetro.com.my/images/articles/21hm62ra1_1526867754.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Campaign 3</h5>
                        <p class="card-text">State: Selangor</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="card-button">
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                            <button type="button" class="btn btn-outline-dark">Donate</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a href="..." class="d-grid gap-2" style="text-decoration:none">
                <button type="button" class="btn btn-dark" style="padding:15px">View All >></button>
            </a>
        </div>
    </div>

    <!-- Be a Volunteer Section-->
    <div class="volunteer-contributor">
        <h2>Be a Part of Us</h2>
        <div class="volunteer">
            <h3>Be a Volunteer</h3>
            <p>Volunteer today to join us as we move forward with our charitable causes.</p>
            <button type="button" class="btn btn-outline-light">More Info</button>
        </div>
        <div class="contributor">
            <h3>Be a Contributor</h3>
            <p>Register as a contributor, sponsor and aid us in gathering resources to assist those in need.</p>
            <button type="button" class="btn btn-outline-dark">More Info</button>
        </div>
    </div>

    <!-- Footer-->
    <div class="footer">
        <p>© 2022 YAST Group. All Rights Reserved.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>