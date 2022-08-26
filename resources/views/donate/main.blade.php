<head>
    @include('layouts.nav-bar-all')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <title>Resource Management System</title>


    @foreach ($beneficiary as $b)
        <div class="row pt-5 px-5 pb-3">
            <div class="col-6">
                <img src="/images/{{ $b['photo'] }}" alt="{{ $b['photo'] }}" style="width:100%;height:100%">
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center p-3" style="background-color:#2d363e;color:white">
                        <h2> {{ $b['name'] }}</h2>
                    </div>
                    <div class="card-body">
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
                            <h4>Address Information</h4>
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
                            <h4>Visit Hour</h4>
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
                    <h4>Resources Needed</h4>
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
            </div>
        </div>

        <div class="d-grid gap-2 col-2 mx-auto">
            <button class="btn btn-outline-dark py-2" type="button" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Donate Now</button>
        </div>


        <!-- Modal -->
        <div class="modal fade text-center" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">捐赠选项 Donation Option</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-5">
                        <a href="/donate/self" class="btn btn-outline-dark">手动寄出 Self-Delivery</a>
                        <p class="mb-2 text-muted p-2">手动寄出物品并且填写寄件单号。<br>Send the resources to the address below and
                            fill in the tracking number.</p>
                        <a href="/donate/shop" class="btn btn-outline-dark">网上购物 Shop Online</a>
                        <p class="mb-2 text-muted p-2">在网上购物并且将以下资料设置为收件人。<br>Set the given information as order
                            recipient.</p>
                        <br>
                        <div class="text-left">
                            <h6 class="text-left">邮寄资料 Recipient Information</h6>
                            <p class="text-left">{{$b['name']}}<br>{{$b['contact_num']}}<br>{{$b['location']}}</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @include('layouts.footer')




</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
