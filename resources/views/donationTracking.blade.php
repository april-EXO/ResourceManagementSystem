<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/tracking.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Resource Management System</title>

    <style>
        .download {
            background-color: DodgerBlue;
            border: none;
            color: white;
            cursor: pointer;
        }

        /* Darker background on mouse-over */
        .download:hover {
            background-color: RoyalBlue;
        }
    </style>

</head>

<body>
    @include('layouts.nav-bar-all')
    <div class="container">
        <article class="card">
            <header class="card-header">
                <a href="javascript:history.back()" class="btn btn-warning" data-abc="true"> <i
                        class="fa fa-chevron-left"></i> back</a>

                <h4 class="mt-4"><strong>Donation Tracking</strong></h4>
            </header>
            <div class="card-body">
                <article class="card">
                    <div class="card-body row">
                        <div class="col"> <strong>Donation Type:</strong> <br> {{ $donationRecords[0]['type'] }}
                        </div>
                        <div class="col"> <strong>Delivery Method:</strong> <br> {{ $donationRecords[0]['method'] }}
                        </div>
                        <div class="col"> <strong>Status:</strong> <br> {{ $donationRecords[0]['status'] }} </div>
                        <div class="col"> <strong>Donation Details:</strong> <br>
                            {{ $donationRecords[0]['donation_detail'] }} </div>
                    </div>
                </article>
                <hr>
                <div class="card-body">
                    <strong>Comments:</strong> <br> {{ $donationRecords[0]['comment'] }}
                </div>
                <hr>
                <strong>Donated Items:</strong>
                <table class="table">
                    <tr>
                        <th style="width:100px">#</th>
                        <th>Item</th>
                        <th style="width:100px">Qty</th>
                    </tr>
                    @foreach ($donationRecords as $key => $donationRecord)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $donationRecord->detail }}</td>
                            <td>{{ $donationRecord->quantity }} {{ $donationRecord->unit }}</td>
                        <tr>
                    @endforeach
                    </tr>
                </table>
                <hr>
                <article class="card">
                    <div class="card-body row">
                        <div class="col"> <strong>From:</strong>
                            <hr />
                            <h4><strong>{{ Auth::user()->name }}</strong></h4>
                            <br>
                            <p>{{ $userProfile[0]['contact_num'] }}</p>
                            <p>{{ $userProfile[0]['address'] }}</p>
                        </div>
                        <div class="col"> <strong>To:</strong>
                            <hr />
                            <h4><strong>{{ $donationRecording[0]['name'] }}</strong></h4>
                            <br>
                            <p>{{ $donationRecording[0]['contact_num'] }}</p>
                            <p>{{ $donationRecording[0]['location'] }}</p>
                        </div>
                    </div>
                </article>




                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                </svg>

                @if ($donationRecords[0]['status'] == 'success')
                    <div class="alert alert-success d-flex align-items-center mt-3" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                            aria-label="Success:">
                            <use xlink:href="#check-circle-fill" />
                        </svg>
                        <div>
                            Donation has been received by {{ $donationRecording[0]['name'] }}. Here's your donation
                            receipt.
                        </div>
                    </div>

                    <form name="received" id="received" action={{ url('/download') }} method="POST">
                        @csrf
                        <input type="hidden" name='id' value="{{ $donationRecords[0]['donation_records_id'] }}">
                        <button class="btn download"><i class="fa fa-download"></i> download</button>
                    </form>
                @endif

            </div>
        </article>
    </div>
    @include('layouts.footer')
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
