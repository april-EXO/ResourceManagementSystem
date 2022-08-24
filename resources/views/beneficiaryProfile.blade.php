<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Resource Management System</title>
</head>

<body>
    @include('layouts.nav-bar-all')
    <h2>Beneficiary Profile</h2>
    @foreach ($beneficiary as $b)
        {{ $b['name'] }}
        {{ $b['description'] }}
        {{ $b['postcode'] }}
        {{ $b['state'] }}
        {{ $b['location'] }}
        {{ $b['contact_person'] }}
        {{ $b['contact_num'] }}
        {{ $b['website'] }}
        {{ $b['webpage'] }}
        {{ $b['photo'] }}
        {{ $b['date'] }}
        {{ $b['time'] }}

        @foreach ($b->getResourcesRelation as $key => $resource)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-1">{{ $key + 1 }}</div>
                    <div class="col-7">{{ $resource->detail }}</div>
                    <div class="col-2">{{ $resource->quantity }}</div>
                    <div class="col-2">{{ $resource->unit }}</div>
                </div>
            </li>
        @endforeach
    @endforeach




    
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
