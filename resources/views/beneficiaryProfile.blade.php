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
            <a class="nav-link active" aria-current="page" href="/beneficiary-profile">Update Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/donation-received">Donation Received</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/donation-history">Donation History</a>
        </li>
    </ul>

    @foreach ($beneficiary as $b)
        <div class="row pt-5 px-5 pb-3">
            <div class="col-6">
                <img src="/images/{{ $b['photo'] }}" alt="{{ $b['photo'] }}" style="width:100%;height:100%">
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center p-4" style="background-color:#2d363e;color:white">
                        <h2> {{ $b['name'] }}</h2>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                                    data-bs-target="#basicInfoEdit">
                                    Edit
                                </button>
                            </div>
                        </div>

                        <h5 class="card-title mt-3">Description</h5>
                        <p class="card-text text-muted mb-4"> {{ $b['description'] }}</p>
                        <h6 class="card-title">Website</h6>
                        <p class="card-text"><a href="{{ $b['website'] }}">{{ $b['website'] }}</a></p>
                        <h6 class="card-title">Webpage</h6>
                        <p class="card-text"><a href="{{ $b['webpage'] }}">{{ $b['webpage'] }}</a></p>
                        <h6 class="card-title">Contact Person</h6>
                        <p class="card-text text-muted">{{ $b['contact_person'] }}</p>
                        <h6 class="card-title">Contact Number</h6>
                        <p class="card-text text-muted">{{ $b['contact_num'] }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row px-5">
            <div class="col-6">

                <div class="card" style="height: 100% ">
                    <div class="card-header" style="background-color:#2d363e;color:white">
                        <div class="row">
                            <div class="col-10">
                                <h4>Address Information</h4>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
                                    data-bs-target="#addressEdit">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h6 class="card-title">Address</h6>
                                <p class="card-text text-muted">{{ $b['location'] }}</p>
                            </div>
                            <div class="col-2">
                                <h6 class="card-title">State</h6>
                                <p class="card-text text-muted">{{ $b['state'] }}</p>
                            </div>
                            <div class="col-2">
                                <h6 class="card-title">Postcode</h6>
                                <p class="card-text text-muted">{{ $b['postcode'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">

                <div class="card" style="height: 100%">
                    <div class="card-header" style="background-color:#2d363e;color:white">
                        <div class="row">
                            <div class="col-10">
                                <h4>Visit Hour</h4>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
                                    data-bs-target="#visitHourEdit">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class=col-6>
                                <h6 class="card-title">Date</h6>
                                <p class="card-text text-muted">{{ $b['date'] }}</p>
                            </div>
                            <div class="col-6">
                                <h6 class="card-title">Time</h6>
                                <p class="card-text text-muted">{{ $b['time'] }}</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="card mx-5 my-5">
            <div class="card-header" style="background-color:#2d363e;color:white">
                <div class="row">
                    <div class="col-11">
                        <h4>Resources Needed</h4>
                    </div>

                    <div class="col-1">
                        <button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
                            data-bs-target="#resourceEdit">
                            Edit
                        </button>

                    </div>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-1">No.</div>
                    <div class="col-9">Resources</div>
                    <div class="col-1">Quantity</div>
                    <div class="col-1">Unit</div>
                </div>
                <hr>

                @foreach ($b->getResourcesRelation as $key => $resource)
                    <div class="row">
                        <div class="col-1">{{ $key + 1 }}</div>
                        <div class="col-9">{{ $resource->detail }}</div>
                        <div class="col-1">{{ $resource->quantity }}</div>
                        <div class="col-1">{{ $resource->unit }}</div>
                    </div>
                @endforeach

                <div class="row mt-5">
                    <div class="col-10">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-dark" type="button" data-bs-toggle="modal"
                            data-bs-target="#addResource">Add new resource</button>
                    </div>
                </div>

            </div>
        </div>



        <!-- EditResourceModal -->
        <div class="modal fade" id="resourceEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Resource Needed</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <form action="/beneficiaryProfile/editResource" method="POST" class="formContainer">
                        @csrf
                        <div class="modal-body">
                            @foreach ($b->getResourcesRelation as $key => $resource)
                                <div class="row">

                                    <div class="col-1">
                                        <div class="mt-2">
                                            <a class="btn btn-outline-danger" style="font-weight: bold"
                                                href="/deleteResource/{{ $resource['id'] }}"
                                                onclick="return confirm('Are You Sure You Want To Delete? Press OK To Comfirm Delete.')">-</a>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="detail[]" class="form-control"
                                                value="{{ $resource['detail'] }}" required>
                                            <label for="date">Resource</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-floating mb-3">
                                            <input type="number" name="quantity[]" class="form-control"
                                                value="{{ $resource['quantity'] }}" min="1" required>
                                            <label for="time">Quantity</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="unit[]" class="form-control"
                                                value="{{ $resource['unit'] }}" required>
                                            <label for="time">Unit</label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="id[]" class="form-control"
                                    value="{{ $resource['id'] }}">
                            @endforeach

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Comfirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- AddResourceModal -->
        <div class="modal fade" id="addResource" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Resource Needed</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <form action="/addNewResource" method="POST" class="formContainer">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="item" class="form-control" required>
                                        <label for="item">Item</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-floating mb-3">
                                        <input type="number" name="quantity" class="form-control" min="1" required>
                                        <label for="number">Quantity</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="unit" class="form-control" required>
                                        <label for="item">Unit</label>
                                    </div>
                                </div>
                                <input type="hidden" name="id" class="form-control"
                                    value="{{ $b['id'] }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Comfirm</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <!-- EditBaiscInfoModal -->
        <div class="modal fade" id="basicInfoEdit" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Basic Info</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="/beneficiaryProfile/editBasicInfo" method="POST" class="formContainer">
                        @csrf
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control"
                                    value="{{ $b['name'] }}" required>
                                <label for="name" class="form-label">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea name="description" class="form-control" style="height: 100px" required>{{ $b['description'] }}</textarea>
                                <label for="description" class="form-label">Description</label>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="website" class="form-control"
                                            value="{{ $b['website'] }}" required>
                                        <label for="website">Website</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="contact_person" class="form-control"
                                            value="{{ $b['contact_person'] }}" required>
                                        <label for="contact_person">Contact Person</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="webpage" class="form-control"
                                            value="{{ $b['webpage'] }}" required>
                                        <label for="webpage">Webpage</label>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="tel" name="contact_num" class="form-control"
                                            value="{{ $b['contact_num'] }}" required>
                                        <label for="contact_num">Contact Number</label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" class="form-control" value="{{ $b['id'] }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Comfirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- EditAddressModal -->
        <div class="modal fade" id="addressEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Address</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="/beneficiaryProfile/editAddress" method="POST" class="formContainer">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="location" class="form-control"
                                            value="{{ $b['location'] }}" required>
                                        <label for="location">address</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="state" class="form-control"
                                            value="{{ $b['state'] }}" required>
                                        <label for="state">State</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-floating mb-3">
                                        <input type="number" name="postcode" class="form-control"
                                            value="{{ $b['postcode'] }}" required>
                                        <label for="postcode">Postcode</label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" class="form-control" value="{{ $b['id'] }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Comfirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- EditVisitHourModal -->
        <div class="modal fade" id="visitHourEdit" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Visit Hour</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <form action="/beneficiaryProfile/editVisitHour" method="POST" class="formContainer">
                        @csrf
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input type="text" name="date" class="form-control"
                                    value="{{ $b['date'] }}" required>
                                <label for="date">Date</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="time" class="form-control"
                                    value="{{ $b['time'] }}" required>
                                <label for="time">Time</label>
                            </div>
                            <input type="hidden" name="id" class="form-control" value="{{ $b['id'] }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Comfirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    @include('layouts.footer')
</body>
