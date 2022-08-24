@include('layouts.nav-bar-all')
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>View Request - Resource Request</title>
    <div class="p-5">
        <div class="card text-center">
            <div class="card-header">
                <h5 class="card-title">Check Request List</h5>
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/form/beneficiary-view" aria-disabled="true"> Resource Request<br>寻求物资 </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form/contributor-view">Join as contributor<br>成为贡献者</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form/volunteer-view">Join as volunteer<br>成为志愿者</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form/connector-view">Apply for volunteers helps<br>召唤志愿者</a>
                    </li>
                </ul>
            </div>
            <div class="p-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Resource Request 寻求物资</h5>
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
                    <th scope="col">Individual/<br>Organization name<br>个人/组织/机构 名称</th>
                    <th scope="col">State<br>州属</th>
                    <th scope="col">Location<br>地区</th>
                    <th scope="col">Monetary Contribution<br>金钱捐赠</th>
                    <th scope="col">Goods or products allocation<br>物资</th>
                    <th scope="col">Services<br>服务</th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beneficiary as $i => $b)
                <tr>
                    <td scope="col">{{$b['name']}}</td>
                    <td scope="col">{{$b['state']}}</td>
                    <td scope="col">{{$b['location']}}</td>
                    <td scope="col">{{$b['moneyamount']}}</td>
                    <td scope="col">
                        <ul class="list-group list-group-flush">
                            <?php if ($b['goodsFoodGroceries'] == "1") echo "<li class=\"list-group-item\">Essential foods or daily groceries 每日粮食</li>"; ?>
                            <?php if ($b['goodsFurnitureFixing'] == "1") echo "<li class=\"list-group-item\">Furniture and fixing 家具配备</li>"; ?>
                            <?php if ($b['goodsElectricalItemsGadgets'] == "1") echo "<li class=\"list-group-item\">Electrical items and gadgets 家电</li>"; ?>
                            <?php if ($b['goodsTranspotation'] == "1") echo "<li class=\"list-group-item\">Transportation 运输</li>"; ?>
                            <?php if ($b['goodsEducationalMaterial'] == "1") echo "<li class=\"list-group-item\">Educational materials 教育产品</li>"; ?>
                            <?php if ($b['other1'] == "1") echo "<li class=\"list-group-item\">Other 其他</li>"; ?>
                        </ul>
                    </td>
                    <td scope="col">
                        <ul class="list-group list-group-flush">
                            <?php if ($b['cleaning'] == "1") echo "<li class=\"list-group-item\">Cleaning 清洗</li>"; ?>
                            <?php if ($b['moving'] == "1") echo "<li class=\"list-group-item\">Moving 搬运</li>"; ?>
                            <?php if ($b['education'] == "1") echo "<li class=\"list-group-item\">Education 教育</li>"; ?>
                            <?php if ($b['other2'] == "1") echo "<li class=\"list-group-item\">Other 其他</li>"; ?>
                        </ul>
                    </td>
                    <td scope="col">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$i}}">
                            View
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-{{$i}}" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel-{{$i}}">Beneficiary details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @include('/formview-u/beneficiary', ['beneficiary' => $b])
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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