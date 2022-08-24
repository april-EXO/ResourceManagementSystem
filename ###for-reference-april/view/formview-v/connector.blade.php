@include('layouts.nav-bar-all')
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>View Request - Connectors</title>
    <div class="p-5">
        <div class="card text-center">
            <div class="card-header">
                <h5 class="card-title">Check Request List</h5>
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="/form/beneficiary-view" aria-disabled="true"> Resource Request<br>寻求物资 </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form/contributor-view">Join as contributor<br>成为贡献者</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form/volunteer-view">Join as volunteer<br>成为志愿者</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/form/connector-view">Apply for volunteers helps<br>召唤志愿者</a>
                    </li>
                </ul>
            </div>
            <div class="p-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Call for Volunteers 活动号召</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Basic Infomation 基本资料</h6>
                    </div>
                </div>
            </div>
</head>

<body>
    <div class="p-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Project title<br>项目名称</th>
                    <th scope="col">Initiated by organization/<br>Individual name<br>活动发起组织/发起人</th>
                    <th scope="col">Beneficiary organization/<br>Individual name<br>活动收益组织/收益人</th>
                    <th scope="col">State<br>州属</th>
                    <th scope="col">Location<br>地区</th>
                    <th scope="col">Date<br>日期</th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($connector as $i => $b)
                <tr>
                    <td scope="col">{{$b['projecttitle']}}</td>
                    <td scope="col">{{$b['orgname']}}</td>
                    <td scope="col">{{$b['beneficiaryname']}}</td>
                    <td scope="col">{{$b['state']}}</td>
                    <td scope="col">{{$b['location']}}</td>
                    <td scope="col">{{$b['date']}}</td>
                    <td scope="col">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$i}}">
                            View
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-{{$i}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel-{{$i}}">Beneficiary details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @include('/formview-u/connector', ['connector' => $b])
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>


</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>