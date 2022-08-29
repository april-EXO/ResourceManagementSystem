<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>Resource Management System</title>
</head>

<body>
    @include('layouts.nav-bar-all')

    <ul class="nav nav-pills nav-fill mx-5 mt-5">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/beneficiary-profile">Info Edit</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/donation-received">Donation Received</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/donation-history">Donation History</a>
        </li>
    </ul>

    <div class="card mx-5 mt-5 mb-1">
        <div class="card-body" style="background-color:#2d363e;color:white">
            <div class="row">
                <div class="col-2">
                    <h6>Donation Type</h6>
                </div>
                <div class="col-2">
                    <h6>Date</h6>
                </div>
                <div class="col-5">

                </div>
                <div class="col-1">
                    <h6>Donor</h6>
                </div>
                <div class="col-1">
                    <h6>Status</h6>
                </div>
                <div class="col-1">
                    <h6>View</h6>
                </div>
            </div>
        </div>
    </div>


    @foreach ($donationRecords as $key => $donationRecord)
        @if ($donationRecord->status == 'pending')
            <div class="card mx-5 mb-1">
                <div class="card-body" style="background-color: rgb(243, 246, 250)">
                    <div class="row">
                        <div class="col-2">
                            <h6>{{ $donationRecord->type }}</h6>
                        </div>
                        <div class="col-2">
                            <h6>{{ $donationRecord->created_at }}</h6>
                        </div>
                        <div class="col-5">
                        </div>
                        <div class="col-1">
                            <h6>{{ $donationRecord->name }}</h6>
                        </div>
                        <div class="col-1">
                            <h6 style="color:rgb(190, 129, 17);font-weight:bold">{{ $donationRecord->status }}</h6>
                        </div>
                        <div class="col-1">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                                data-bs-target="#exampleModal-{{ $key }}">
                                Detail
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-{{ $key }}" data-bs-backdrop="static"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel-{{ $key }}">
                                            Donation Status</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    @if ($donationRecord->type == 'shop')
                                        <div class="modal-body">
                                            <h3 style="text-align: center">Purchase from <span
                                                    style="color: rgb(223, 152, 20)">Lotus'S</span></h3>
                                        @else
                                            <div class="modal-body">
                                                <h3 style="text-align: center">Self-Delivery</h3>
                                    @endif


                                    @if ($donationRecord->date != 'nil')
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label class="form-label">Estimate Receive Date</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $donationRecord->date }}" disabled>
                                            </div>
                                            <div class="mb-3 col">
                                                <label class="form-label">Estimate Receive Time</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $donationRecord->time }}" disabled>
                                            </div>
                                        </div>
                                    @else
                                        <div class="mb-3 col">
                                            <label class="form-label">Delivery Method</label>
                                            <input type="text" class="form-control"
                                                value="{{ $donationRecord->method }}" disabled>
                                        </div>
                                    @endif

                                    <div class="mb-3">
                                        <label class="form-label">Donor</label>
                                        <input type="text" class="form-control" value="{{ $donationRecord->name }}"
                                            disabled>
                                    </div>

                                    @if ($donationRecord->donation_detail != 'nil')
                                        <div class="mb-3 col">
                                            <label class="form-label">Donation Detail</label>
                                            <input type="text" class="form-control pb-5"
                                                value="{{ $donationRecord->donation_detail }}" disabled>
                                        </div>
                                    @endif

                                    <div class="card my-3">
                                        <h6 class="card-header">Item Donated</h6>
                                        <ol class="list-group">
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-1">No.</div>
                                                    <div class="col-7">Resource</div>
                                                    <div class="col-2">Quantity</div>
                                                    <div class="col-2">Unit</div>
                                                </div>
                                            </li>

                                            @foreach ($donationRecord->getDonationResourcesRelation as $key => $resource)
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-1">{{ $key + 1 }}</div>
                                                        <div class="col-7">{{ $resource->detail }}</div>
                                                        <div class="col-2">{{ $resource->quantity }}</div>
                                                        <div class="col-2">{{ $resource->unit }}</div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ol>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <form name="notReceived" id="notReceived" action={{ url('/donation/receivedFailed') }}
                                                method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$donationRecord->id}}">
                                                <div class="btn-group col-12">
                                                    <button type="submit" class="btn btn-danger">Not Received</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-6">
                                            <form name="received" id="received" action={{ url('/donation/receivedSuccess') }}
                                                 method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$donationRecord->id}}">
                                                <div class="btn-group col-12">
                                                    <button type="submit" class="btn btn-primary">Received</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        @endif
    @endforeach

    <div style="margin-top: 450px">
        @include('layouts.footer')
    </div>
</body>
