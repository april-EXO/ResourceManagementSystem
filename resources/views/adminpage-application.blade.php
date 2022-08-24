<html>

<body onload="disableAll()">
    <br>
    <div class="btn-group col-12 mb-3" role="group">
        <!-- <button type="button" class="btn btn-outline-dark" onclick="enableAll()" id="edit">Edit</button> -->
        <button type="button" class="btn btn-outline-dark" id="edit">Edit</button>
        <!-- <a href={{ "application-reject/".$beneficiary['id'] }} onclick="return confirm_alert(this);" class="btn btn-outline-danger" tabindex="-1" role="button" aria-disabled="true" id="delete">Delete</a> -->
        <a href="/" onclick="return confirm_alert(this);" class="btn btn-outline-danger" tabindex="-1" role="button" aria-disabled="true" id="delete">Delete</a>
    </div>

    <!-- <form action="/form/beneficiary-view/{{$beneficiary['id']}}" method="POST" class="formContainer"> -->
    <div class="p-5">
        <form action="" method="POST" class="formContainer" enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" class="form-control" name="beneficiary_id" value="{{ Auth::user()->id }}">
            <input type="hidden" class="form-control" name="status" value="pending">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" value={{$beneficiary['name']}}>
                <label for="name">Individual/ Organization name 个人/组织/机构 名称 :</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" style="height: 100px" name="description">{{$beneficiary['description']}}</textarea>
                <label for="description">Description 简介 :</label>
            </div>


            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="state" name="state" aria-label="state">
                            <option disabled></option>
                            <option value="Johor" <?php if ($beneficiary['state'] == "Johor") echo "selected"; ?>>Johor</option>
                            <option value="Kedah" <?php if ($beneficiary['state'] == "Kedah") echo "selected"; ?>>Kedah</option>
                            <option value="Kelantan" <?php if ($beneficiary['state'] == "Kelantan") echo "selected"; ?>>Kelantan</option>
                            <option value="Melaka" <?php if ($beneficiary['state'] == "Melaka") echo "selected"; ?>>Melaka</option>
                            <option value="Negeri Sembilan" <?php if ($beneficiary['state'] == "Negeri Sembilan") echo "selected"; ?>>Negeri Sembilan</option>
                            <option value="Pahang" <?php if ($beneficiary['state'] == "Pahang") echo "selected"; ?>>Pahang</option>
                            <option value="Penang" <?php if ($beneficiary['state'] == "Penang") echo "selected"; ?>>Penang</option>
                            <option value="Perak" <?php if ($beneficiary['state'] == "Perak") echo "selected"; ?>>Perak</option>
                            <option value="Perlis" <?php if ($beneficiary['state'] == "Perlis") echo "selected"; ?>>Perlis</option>
                            <option value="Sabah" <?php if ($beneficiary['state'] == "Sabah") echo "selected"; ?>>Sabah</option>
                            <option value="Sarawak" <?php if ($beneficiary['state'] == "Sarawak") echo "selected"; ?>>Sarawak</option>
                            <option value="Selangor" <?php if ($beneficiary['state'] == "Selangor") echo "selected"; ?>>Selangor</option>
                            <option value="Terangganu" <?php if ($beneficiary['state'] == "Terangganu") echo "selected"; ?>>Terangganu</option>
                            <option value="KualaLumpur" <?php if ($beneficiary['state'] == "KualaLumpur") echo "selected"; ?>>Wilayah Persekutuan Kuala Lumpur</option>
                            <option value="Putrajaya" <?php if ($beneficiary['state'] == "Putrajaya") echo "selected"; ?>>Putrajaya</option>
                        </select>
                        <label for="state">State 州属 :</label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="number" id="postcode" name="postcode" class="form-control" value={{$beneficiary['postcode']}}>
                        <label for="postcode">Postcode 邮区编号 :</label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="text" id="location" name="location" class="form-control" value={{$beneficiary['location']}}>
                <label for="location">Location 地区 : (eg: JB, Sepang, Butterworth, etc.)</label>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" id="contact_person" name="contact_person" class="form-control" value={{$beneficiary['contact_person']}}>
                        <label for="contact_person">Contact Person 联络人 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="phone" id="contact_num" name="contact_num" class="form-control" value={{$beneficiary['contact_num']}}>
                        <label for="contact_num">Contact Number 联络号码 :</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" id="website" name="website" class="form-control" value={{$beneficiary['website']}}>
                        <label for="website">Website 网站 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" id="webpage" name="webpage" class="form-control" value={{$beneficiary['webpage']}}>
                        <label for="webpage">Social media page 社交媒体链接 : (eg. FB, Instagram. etc.)</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" id="date" name="date" class="form-control" value={{$beneficiary['date']}}>
                        <label for="date">Operation day 营业天 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" id="time" name="time" class="form-control" value={{$beneficiary['time']}}>
                        <label for="time">Operation time 营业时间 :</label>
                    </div>
                </div>
            </div>
            <!-- <div class="mb-3">
                <label for="photo" class="form-label">Cover Image 封面照片</label>
                <input class="form-control" type="file" id="photo" name="photo">
            </div> -->

            <!-- <div class="card">
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
                        <td> <input type="text" name="item[]]" /> </td>
                        <td> <input type="text" name="quantity[]]" /> </td>
                        <td> <input type="text" name="unit[]" /> </td>
                    </tr>
                </table>
                <input type="hidden" id="rc" class="form-control" name="rowCount" value="" />


            </div> -->
            <br>


            <!-- <div class="col-12 mb-3 text-center">
                <button type="submit" class="btn btn-primary" onclick="submitted(event);">Submit</button>
            </div> -->
        </form>
    </div>
    </div>
    </div>
    </div>
</body>

<script>
    function disableAll() {
        const inputs = document.getElementsByTagName('select');

        for (const input of inputs) {
            input.disabled = true
        }

        const inputs2 = document.getElementsByTagName('input');

        for (const input of inputs2) {
            input.disabled = true
        }

        const inputs3 = document.getElementsByTagName('textarea');

        for (const input of inputs3) {
            input.disabled = true
        }
    }
</script>