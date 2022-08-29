@include('layouts.nav-bar-all')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>网上购物 Order-Online</title>
    <div class="p-5">
        @foreach ($beneficiary as $b)
            <div class="p-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title mb-3"><br>网上购物 Order-Online<br></h2>
                        <p class="card-text">在<a href="https://www.lotuss.com.my/"
                                class="link-primary">Lotus</a>下单并且将以下资料设置为收件人。<br>Order from <a
                                href="https://www.lotuss.com.my/" class="link-primary">Lotus</a> and set the Recipient
                            information as below.<br>
                        </p>
                        <div class="alert alert-warning" role="alert">
                            请把送货时间设置在早上9点至下午5点 9.00AM ~ 5.00PM。 <br>
                            Please set the deliver time in between 9.00AM ~ 5.00PM.
                        </div>
                        <br><br>
                        <p class="card-text">
                        <div class="card mb-3">
                            <div class="card-body"><br>
                                <h5 class="card-title text-center">邮寄资料 Recipient Information</h5>
                            </div>
                            <table class="text-center mb-5">
                                <tr>
                                    <td class="float-end">
                                        收件人/ Recipient:
                                    </td>
                                    <td>
                                        <p class="card-text text-muted">{{ $b['name'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="float-end">
                                        联络号码/ Contact no.:
                                    </td>
                                    <td>
                                        <p class="card-text text-muted">{{ $b['contact_num'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="float-end">
                                        地址/ Address:
                                    </td>
                                    <td>
                                        <p class="card-text text-muted">{{ $b['location'] }} , {{ $b['postcode'] }} ,
                                            {{ $b['state'] }}</p>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>

</head>

<body>

    <div class="p-5">
        <form action="/beneficiary/{{ $b['id'] }}/detail/shop" method="POST" class="formContainer"
            enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="beneficiary_id" value="{{ $b['id'] }}">
            <input type="hidden" name="type" value="shop">
            <input type="hidden" name="method" value="shop">
            <input type="hidden" name="status" value="pending">
            <input type="hidden" name="donation_detail" value="nil">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h6 class="card-title">捐献详情 Donation Details</h6>
                </div>
            </div>
            <div class="form-floating mb-3">
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="date" id="date" name="date" class="form-control" required>
                            <label for="date">配送日期 Delivery Date:</label>
                        </div>
                    </div>
                    <div class="col">

                        <div class="form-floating mb-3">
                            <select class="form-select" id="timeSlot" name="time" aria-label="timeSlot" required>
                                <option selected disabled></option>
                                <option value="10-12">10:00 - 12:00</option>
                                <option value="12-14">12:00 - 14:00</option>
                                <option value="14-16">14:00 - 16:00</option>
                                <option value="16-18">16:00 - 18:00</option>
                            </select>
                            <label for="timeSlot">派送时间 Time slot:</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h6 class="card-title">捐赠物资 Donate Resource</h6>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-1">No.</div>
                                <div class="col-7">Item</div>
                                <div class="col-2">Quantity</div>
                                <div class="col-2">Unit</div>
                            </div>
                            <hr>

                            @foreach ($b->getResourcesRelation as $key => $resource)
                                @if ($resource->quantity > 0)
                                    <div class="row">
                                        <div class="col-1">{{ $key + 1 }}</div>
                                        <div class="col-7">{{ $resource->detail }}</div>
                                        <div class="col-2">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" name="q[]"
                                                    min="1">
                                            </div>
                                        </div>
                                        <div class="col-2">{{ $resource->unit }}</div>
                                        <input type="hidden" name="resd[]" value="{{ $resource->detail }}">
                                        <input type="hidden" name="u[]" value="{{ $resource->unit }}">
                                        <input type="hidden" name="rid[]" value="{{ $resource->id }}">
                                    </div>
                                @endif
                            @endforeach
                            <br>

                            <div class="row mb-3">
                                <div class="card-header">
                                    其他物品 Other items
                                </div>
                                <hr>
                                <table class="table" id="dataTable">
                                    <tr>
                                        <td class="col-1">No.</th>
                                        <td class="col-7">Item</td>
                                        <td class="col-2">Quantity</td>
                                        <td class="col-2">Unit</td>
                                    </tr>
                                    <tr>
                                        <td class="col-1">1</th>
                                        <td class="col-7"><input type="item" class="form-control"
                                                name="item[]">
                                        </td>
                                        <td class="col-2"><input type="number" class="form-control"
                                                name="quantity[]" min="1">
                                        </td>
                                        <td class="col-2"><input type="text" class="form-control"
                                                name="unit[]" />
                                        </td>
                                    </tr>
                                </table>


                                <br><br>
                                <div class="btn-group p-3" role="group">
                                    <button type="button" onclick="addRow('dataTable')"
                                        class="btn btn-outline-primary mb-3">Add
                                        Row</button>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="message" style="height: 100px" name="comment"></textarea>
                <label for="message">其他备注 Other remark:</label>
            </div>

            <div class="col-12 mb-3 text-center">
                <button type="submit" class="btn btn-primary" onclick="submitted(event)">Submit</button>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    @include('layouts.footer')
</body>
@endforeach


<script>
    function addRow(tableID) {

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;

        var row = table.insertRow(rowCount);


        var cell2 = row.insertCell(0);
        cell2.innerHTML = rowCount;

        var cell3 = row.insertCell(1);
        var element2 = document.createElement("input");
        element2.type = "text";
        element2.name = "item[]";
        element2.classList.add("form-control");
        cell3.appendChild(element2);



        var cell4 = row.insertCell(2);
        var element3 = document.createElement("input");
        element3.type = "text";
        element3.name = "quantity[]";
        element3.classList.add("form-control");
        element3.min = 1;
        cell4.appendChild(element3);



        var cell5 = row.insertCell(3);
        var element4 = document.createElement("input");
        element4.type = "text";
        element4.name = "unit[]";
        element4.classList.add("form-control");
        cell5.appendChild(element4);
    }

    function submitted(e) {
        if (!confirm('Confirm submission?')) {
            e.preventDefault();
        }
    }

    var msg = '{{ Session::get('alert') }}';
    var exist = '{{ Session::has('alert') }}';
    if (exist) {
        alert(msg);
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
