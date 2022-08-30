

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
@include('layouts.nav-bar-all')
    <!-- Be a Donor Section-->
    <div class="container">
        <h2>Be a Donor</h2>
        <div class="row g-3">
            @foreach($beneficiaries as $beneficiary)
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card ">
                        <img src="images/{{ $beneficiary->photo }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $beneficiary->name }}</h5>
                            <p class="card-text">{{ $beneficiary->state }}</p>
                            <p class="card-text">{{ $beneficiary->description }}</p>
                        </div>
                        <div class="card-button">
                            <a href="beneficiary/{{ $beneficiary->id }}/detail">
                                <button type="button" class="btn btn-dark mb-3">Donate Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

     <!-- Footer-->
     <div class="footer">
        <p>© 2022 YAST Group. All Rights Reserved.</p>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>