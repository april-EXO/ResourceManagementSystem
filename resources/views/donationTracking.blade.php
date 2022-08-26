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
                        <div class="col"> <strong>Donation Type:</strong> <br> {{$donationRecords[0]['type']}} </div>
                        <div class="col"> <strong>Delivery Method:</strong> <br> {{$donationRecords[0]['method']}} </div>
                        <div class="col"> <strong>Status:</strong> <br> {{$donationRecords[0]['status']}} </div>
                        <div class="col"> <strong>Donation Details:</strong> <br> {{$donationRecords[0]['donation_detail']}} </div>
                    </div>
                </article>
                <div class="track">
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Donation created</span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Donation on its way to Beneficiary</span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> Received by Beneficiary </span> </div>
                </div>
                <hr>
                <ul class="row">
                    @foreach ($donationRecords as $donationRecord)
                    <li class="col-md-4">
                        <figure class="itemside mb-3">
                            <figcaption class="info align-self-center">
                                <p class="title">{{$donationRecord->detail}} </p> <span class="text-muted">{{$donationRecord->quantity}} {{$donationRecord->unit}} </span>
                            </figcaption>
                        </figure>
                    </li>
                    @endforeach
                </ul>
                <hr>
                <a href="#" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
            </div>
        </article>
    </div>
</body>

</html>