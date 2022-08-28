<html>

<head>

    @include('layouts.nav-bar-all')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Resource Request</title>
    <style>
        td input[type="checkbox"] {
            margin: 0 auto;
            width: 100%;
        }
    </style>
    <div class="p-5">

        <div class="p-5">
            <div class="card">
                <div class="card-header text-center">
                    <h5 class="card-title">Resource Request 寻求物资</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Basic Infomation 基本资料</h6>
                    <p class="card-text">To be filled up by potential beneficiary individual or organization looking for
                        resources from the public.</p>
                    <p class="card-text">需要物资协助的个人或组织/机构。</p>
                </div>

</head>


<body>
    <div class="p-5">
        <form action="/beneficiary-application" method="POST" class="formContainer" enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" class="form-control" name="beneficiary_id" value="{{ Auth::user()->id }}">
            <input type="hidden" class="form-control" name="status" value="pending">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name">
                <label for="name">Individual/ Organization name 个人/组织/机构 名称 :</label>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <textarea class="form-control" style="height: 100px" name="description"></textarea>
                        <label for="description">Description 简介 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="photo" class="form-label">Cover Image 封面照片</label>
                        <input class="form-control" type="file" id="photo" name="photo">
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="state" name="state" aria-label="state">
                            <option selected disabled></option>
                            <option value="Johor">Johor</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Melaka">Melaka</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Penang">Penang</option>
                            <option value="Perak">Perak</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Terangganu">Terangganu</option>
                            <option value="KualaLumpur">Wilayah Persekutuan Kuala Lumpur</option>
                            <option value="Putrajaya">Putrajaya</option>
                        </select>
                        <label for="state">State 州属 :</label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="number" id="postcode" name="postcode" class="form-control">
                        <label for="postcode">Postcode 邮区编号 :</label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="text" id="location" name="location" class="form-control">
                <label for="location">Location 地区 : (eg: JB, Sepang, Butterworth, etc.)</label>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" id="contact_person" name="contact_person" class="form-control">
                        <label for="contact_person">Contact Person 联络人 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="phone" id="contact_num" name="contact_num" class="form-control">
                        <label for="contact_num">Contact Number 联络号码 :</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" id="website" name="website" class="form-control">
                        <label for="website">Website 网站 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" id="webpage" name="webpage" class="form-control">
                        <label for="webpage">Social media page 社交媒体链接 : (eg. FB, Instagram. etc.)</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" id="date" name="date" class="form-control">
                        <label for="date">Operation day 营业天 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" id="time" name="time" class="form-control">
                        <label for="time">Operation time 营业时间 :</label>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-body p-3">
                    <h5 class="card-title text-center">Resources Needed 所需物资</h5>
                </div>
                <table class="table" id="dataTable" width="350px" border="0">
                    <tr>
                        <th></th>
                        <th>No.</th>
                        <th>Item 物品</th>
                        <th>Quantity 数量</th>
                        <th>Unit 单位</th>
                    </tr>
                    <tr>
                        <td class="fw-light">Example:</td>
                        <td class="fw-light"> 0.</td>
                        <td class="fw-light">Rice</td>
                        <td class="fw-light">50</td>
                        <td class="fw-light">kg</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> 1 </td>
                        <td> <input type="text" name="item[]" /> </td>
                        <td> <input type="number" name="quantity[]" /> </td>
                        <td> <input type="text" name="unit[]" /> </td>
                    </tr>
                </table>
                <div class="btn-group p-3" role="group">
                    <button type="button" onclick="addRow('dataTable')" class="btn btn-outline-primary mb-3">Add
                        Row</button>
                    {{-- <button type="button" onclick="deleteRow('dataTable')"
                        class="btn btn-outline-danger mb-3">Delete Row</button> --}}
                </div>
                <input type="hidden" id="rc" class="form-control" name="rowCount" value="3" />


            </div>
            <br>


            <div class="col-12 mb-3 text-center">
                <button type="submit" class="btn btn-primary" onclick="submitted(event);">Submit</button>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>

    @include('layouts.footer')
</body>

<script>
    function addRow(tableID) {

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;

        var row = table.insertRow(rowCount);
        var rowNum = rowCount - 1;

        var cell1 = row.insertCell(0);
        var element1 = document.createElement("input");
        element1.type = "hidden";
        element1.name = "chkbox[]";
        cell1.appendChild(element1);

        var cell2 = row.insertCell(1);
        cell2.innerHTML = rowCount - 1;

        var cell3 = row.insertCell(2);
        var element2 = document.createElement("input");
        element2.type = "text";
        element2.name = "item[]";
        cell3.appendChild(element2);



        var cell4 = row.insertCell(3);
        var element3 = document.createElement("input");
        element3.type = "number";
        element3.name = "quantity[]";
        cell4.appendChild(element3);



        var cell5 = row.insertCell(4);
        var element4 = document.createElement("input");
        element4.type = "text";
        element4.name = "unit[]";
        cell5.appendChild(element4);

        document.getElementById("rc").value = rowNum;
    }


    // function deleteRow(tableID) {
    //     try {
    //         var table = document.getElementById(tableID);
    //         var rowCount = table.rows.length;


    //         for (var i = 0; i < rowCount; i++) {
    //             var row = table.rows[i];
    //             var chkbox = row.cells[0].childNodes[0];
    //             if (null != chkbox && true == chkbox.checked) {
    //                 table.deleteRow(i);
    //                 rowCount--;
    //                 i--;
    //             }
    //         }

    //     } catch (e) {
    //         alert(e);
    //     }
    //     var rowNum = rowCount - 2;
    //     document.getElementById("rc").value = rowNum;
    // }


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
