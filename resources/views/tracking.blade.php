<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/tracking.css') }}">
    <title>Resource Management System</title>
</head>

<body>
@include('layouts.nav-bar-all')
    <div class="container">
        <article class="card">
            <header class="card-header"> My Donation / Tracking </header>
            <div class="card-body">
                <h6>Donation ID: OD45345345435</h6>
                <article class="card">
                    <div class="card-body row">
                        <div class="col"> <strong>Donation Type:</strong> <br> Self Purchase </div>
                        <div class="col"> <strong>Shipping BY:</strong> <br> JNT, | <i class="fa fa-phone"></i> +01298675986 </div>
                        <div class="col"> <strong>Status:</strong> <br> Arrived at our warehouse </div>
                        <div class="col"> <strong>Tracking #:</strong> <br> BD045903594059 </div>
                    </div>
                </article>
                <div class="track">
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Donation confirmed</span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Arrived at our warehouse</span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> Distributed to beneficiaries </span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Distributed to: </span> </div>
                </div>
                <hr>
                <ul class="row">
                    <li class="col-md-4">
                        <figure class="itemside mb-3">
                            <div class="aside"><img src="https://i.imgur.com/iDwDQ4o.png" class="img-sm border"></div>
                            <figcaption class="info align-self-center">
                                <p class="title">Hup Seng Cream Crackers <br> 20 Unit</p> <span class="text-muted">RM 80 </span>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="col-md-4">
                        <figure class="itemside mb-3">
                            <div class="aside"><img src="https://i.imgur.com/tVBy5Q0.png" class="img-sm border"></div>
                            <figcaption class="info align-self-center">
                                <p class="title">Rice <br> 5 KG</p> <span class="text-muted">RM 11.50 </span>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="col-md-4">
                        <figure class="itemside mb-3">
                            <div class="aside"><img src="https://i.imgur.com/Bd56jKH.png" class="img-sm border"></div>
                            <figcaption class="info align-self-center">
                                <p class="title">Detergent <br> 3 L</p> <span class="text-muted">RM 21.50 </span>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
                <hr>
                <a href="#" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
            </div>
        </article>
    </div>
</body>

</html>