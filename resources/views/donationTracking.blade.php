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
            <header class="card-header"> Donation Tracking </header>
            <div class="card-body">
                <article class="card">
                    <div class="card-body row">
                        <div class="col"> <strong>Donation Type:</strong> <br> {{$donationRecords[0]['type']}} </div>
                        <div class="col"> <strong>Delivery Method:</strong> <br> {{$donationRecords[0]['method']}} </div>
                        <div class="col"> <strong>Status:</strong> <br> {{$donationRecords[0]['status']}} </div>
                        <div class="col"> <strong>Donation Details:</strong> <br> {{$donationRecords[0]['donation_detail']}} </div>
                    </div>
                </article>
                <hr>
                <div class="card-body">
                    <strong>Comments:</strong> <br> {{$donationRecords[0]['comment']}}
                </div>
                <hr>
                <strong>Donated Items:</strong>
                <table class="table">
                    <tr>
                        <th style="width:100px">#</th>
                        <th>Item</th>
                        <th style="width:100px">Qty</th>
                    </tr>
                    @foreach ($donationRecords as $key=>$donationRecord)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$donationRecord->detail}}</td>
                        <td>{{$donationRecord->quantity}} {{$donationRecord->unit}}</td>
                    <tr>
                        @endforeach
                    </tr>
                </table> 
                <hr>
                <article class="card">
                    <div class="card-body row">
                        <div class="col"> <strong>From:</strong> <br>
                            <h4>{{ Auth::user()->name }}</h4>
                            <p>{{ $userProfile[0]['contact_num'] }}</p>
                            <p>{{ $userProfile[0]['address'] }}</p>
                        </div>
                        <div class="col"> <strong>To:</strong> <br>
                            <h4>{{$donationRecording[0]['description']}}</h4>
                            <p>{{$donationRecording[0]['contact_num']}}</p>
                            <p>{{$donationRecording[0]['location']}}</p>
                        </div>
                    </div>
                </article>
                <a href="javascript:history.back()" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
            </div>
        </article>
    </div>
    @include('layouts.footer')
</body>

</html>