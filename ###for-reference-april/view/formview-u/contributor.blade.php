<html>

<body onload="disableAll()">
    <div class="btn-group col-12 mb-3" role="group">
        <button type="button" class="btn btn-outline-dark" onclick="enableAll()" id="edit">Edit</button>
        <a href={{ "contributor-delete/".$contributor['id'] }} onclick="return confirm_alert(this);" class="btn btn-outline-danger" tabindex="-1" role="button" aria-disabled="true" id="delete">Delete</a>
    </div>

    <div class="p-5">
        <form action="/form/contributor-view/{$contributor}" method="POST" class="formContainer">
            @csrf

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" value={{$contributor['name']}}>
                <label for="name">Individual/ Organization name 个人/组织/机构 名称 :</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="a" value={{$contributor['regnum']}}>
                <label for="a">ID(IC/ Entity registration number) 证件号码 :</label>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="state" name="state" aria-label="state" value={{$contributor['state']}}>
                            <option disabled></option>
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
                        <input type="number" id="postcode" name="postcode" class="form-control" value={{$contributor['postcode']}}>
                        <label for="postcode">Postcode 邮区编号 :</label>
                    </div>
                </div>
            </div>



            <div class="form-floating mb-3">
                <input type="text" id="location" name="location" class="form-control" value={{$contributor['location']}}>
                <label for="location">Location 地区 : (eg: JB, Sepang, Butterworth, etc.)</label>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" id="contactperson" name="contactperson" class="form-control" value={{$contributor['contactperson']}}>
                        <label for="contactperson">Contact Person 联络人 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="phone" id="contactnumber" name="contactnumber" class="form-control" value={{$contributor['contactnumber']}}>
                        <label for="contactnumber">Contact Number 联络号码 :</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" id="website" name="website" class="form-control" value={{$contributor['website']}}>
                        <label for="website">Website 网站 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" id="page" name="page" class="form-control" value={{$contributor['page']}}>
                        <label for="page">Social media page 社交媒体链接 : (eg. FB, Instagram. etc.)</label>
                    </div>
                </div>
            </div>




            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Contribution Preferences 物资资讯</h6>
                </div>
            </div>
            <br>
            <fieldset class="row mb-3">
                <div class="row">
                    <div class="col">
                        <legend class="col-form-label col-sm-5 pt-0">Monetary Contribution<br>金钱捐赠</legend>
                        <div class="col-sm-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="money" value="0" <?php if ($contributor['moneyamount'] == "0") echo "checked"; ?>>
                                <label class="form-check-label" for="money">
                                    No need 无需金钱资助
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="money" value="<1000" <?php if ($contributor['moneyamount'] == "<1000") echo "checked"; ?>>
                                <label class="form-check-label" for="money">
                                    <$1000 </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="money" value="1001-5000" <?php if ($contributor['moneyamount'] == "1001-5000") echo "checked"; ?>>
                                <label class="form-check-label" for="money">
                                    $1001-$5000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="money" value="5001-10000" <?php if ($contributor['moneyamount'] == "5001-10000") echo "checked"; ?>>
                                <label class="form-check-label" for="money">
                                    $5001-$10000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="money" value=">10001" <?php if ($contributor['moneyamount'] == ">10001") echo "checked"; ?>>
                                <label class="form-check-label" for="money">
                                    >$10001
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="othermoney" name="money" value="other" <?php if ($contributor['moneyamount'] == "other") echo "checked"; ?>>
                                <label class="form-check-label" for="money">
                                    <div class="form-floating">
                                        <input type="text" id="otherAmount" name="otherAmount" class="form-control" disabled value={{$contributor['moneyother']}}>
                                        <label for="otherAmount">Other amount</label>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <legend class="col-form-label col-sm-5 pt-0">Intended frequency of monetary contribution<br>捐赠次数</legend>
                        <div class="col-sm-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="frequency" value="One Time" <?php if ($contributor['frequency'] == "One Time") echo "checked"; ?>>
                                <label class="form-check-label" for="frequency">
                                    One Time 仅此一次
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="frequency" value="Monthly" <?php if ($contributor['frequency'] == "Monthly") echo "checked"; ?>>
                                <label class="form-check-label" for="frequency">
                                    Monthly 每个月
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="frequency" value="Annual" <?php if ($contributor['frequency'] == "Annual") echo "checked"; ?>>
                                <label class="form-check-label" for="frequency">
                                    Annual 年度
                                </label>
                            </div>
                        </div>
                    </div>
            </fieldset>
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">(2) Contribution - Items 物资捐赠</h6>
                </div>
            </div>
            <br>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-5 pt-0">Goods or products allocation<br>物资</legend>
                <div class="col-sm-5">
                    <div class="form-check">
                        <input type="hidden" name="goodsFoodGroceries" value="0">
                        <input type="checkbox" class="form-check-input" name="goodsFoodGroceries" value="1" <?php if ($contributor['goodsFoodGroceries'] == "1") echo "checked"; ?>>
                        <label class="form-check-label" for="goodsFoodGroceries">
                            Essential foods or daily groceries 每日粮食
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="goodsFurnitureFixing" value="0">
                        <input type="checkbox" class="form-check-input" name="goodsFurnitureFixing" value="1" <?php if ($contributor['goodsFurnitureFixing'] == "1") echo "checked"; ?>>
                        <label class="form-check-label" for="goodsFurnitureFixing">
                            Furniture and fixing 家具配备
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="goodsElectricalItemsGadgets" value="0">
                        <input type="checkbox" class="form-check-input" name="goodsElectricalItemsGadgets" value="1" <?php if ($contributor['goodsElectricalItemsGadgets'] == "1") echo "checked"; ?>>
                        <label class="form-check-label" for="goodsElectricalItemsGadgets">
                            Electrical items and gadgets 家电 <text class="text-muted"><br>(eg. TV, internet, computer, etc. <br>例: 电视，网络，电脑，等)</text>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="goodsTranspotation" value="0">
                        <input type="checkbox" class="form-check-input" name="goodsTranspotation" value="1" <?php if ($contributor['goodsTranspotation'] == "1") echo "checked"; ?>>
                        <label class="form-check-label" for="goodsTranspotation">
                            Transportation 运输 <text class="text-muted"><br>(eg. wheelchair, vehicle, trolley, etc. <br>例: 轮椅，车辆，手推车，等)</text>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="goodsEducationalMaterial" value="0">
                        <input type="checkbox" class="form-check-input" name="goodsEducationalMaterial" value="1" <?php if ($contributor['goodsEducationalMaterial'] == "1") echo "checked"; ?>>
                        <label class="form-check-label" for="goodsEducationalMaterial">
                            Educational materials 教育产品 <text class="text-muted"><br>(eg. books, magazine, etc. <br>例：书籍，杂志，等)</text>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="other1" value="0">
                        <input type="checkbox" class="form-check-input" name="other1" value="1" id="goodsbox" <?php if ($contributor['other1'] == "1") echo "checked"; ?>>
                        <label class="form-check-label" for="other1">
                            <div class="form-floating">
                                <input type="text" id="goodscontent" name="otherGoods" class="form-control" disabled value={{$contributor['otherGoods']}}>
                                <label for="otherGoods">Other amount</label>
                            </div>
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">(3) Contribution - Services/ Man Hour 奉献时间/ 服务</h6>
                </div>
            </div>
            <br>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-5 pt-0">Services<br>服务</legend>
                <div class="col-sm-5">
                    <div class="form-check">
                        <input type="hidden" name="cleaning" value="0">
                        <input type="checkbox" class="form-check-input" name="cleaning" value="1" <?php if ($contributor['cleaning'] == "1") echo "checked"; ?>>
                        <label class="form-check-label" for="cleaning">
                            Cleaning 清洗
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="moving" value="0">
                        <input type="checkbox" class="form-check-input" name="moving" value="1" <?php if ($contributor['moving'] == "1") echo "checked"; ?>>
                        <label class="form-check-label" for="moving">
                            Moving 搬运
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="education" value="0">
                        <input type="checkbox" class="form-check-input" name="education" value="1" <?php if ($contributor['education'] == "1") echo "checked"; ?>>
                        <label class="form-check-label" for="education">
                            Education 教育
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="other2" value="0">
                        <input type="checkbox" class="form-check-input" name="other2" value="1" id="servicebox" <?php if ($contributor['other2'] == "1") echo "checked"; ?>>
                        <label class="form-check-label" for="other2">
                            <div class="form-floating">
                                <input type="text" id="servicecontent" name="otherServices" class="form-control" disabled value={{$contributor['otherServices']}}>
                                <label for="otherServices">Other services</label>
                            </div>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-5 pt-0">Preferred organization to contribute to<br>希望捐赠予</legend>
                <div class="col-sm-5">
                    <div class="form-check">
                        <input type="hidden" name="relazone2" value="0">
                        <input type="checkbox" class="form-check-input" name="relazone2" value="1" <?php if ($contributor['relazone2'] == "1") echo "checked"; ?>>
                        <label class="form-check-label" for="relazone2">
                            Rela Zone 2 - JB 新山人民自愿警察
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="lionsclubjb" value="0">
                        <input type="checkbox" class="form-check-input" name="lionsclubjb" value="1" <?php if ($contributor['lionsclubjb'] == "1") echo "checked"; ?>>
                        <label class="form-check-label" for="lionsclubjb">
                            Lions Club - JB 狮子会
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="superpandateamklangvalley" value="0">
                        <input type="checkbox" class="form-check-input" name="superpandateamklangvalley" value="1" <?php if ($contributor['superpandateamklangvalley'] == "1") echo "checked"; ?>>
                        <label class="form-check-label" for="superpandateamklangvalley">
                            Super Panda Team (Klang Valley) 熊猫侠团队
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="foodbank448" value="0">
                        <input type="checkbox" class="form-check-input" name="foodbank448" value="1" <?php if ($contributor['foodbank448'] == "1") echo "checked"; ?>>
                        <label class="form-check-label" for="foodbank448">
                            Foodbank 448 (JB) 食物银行
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="other3" value="0">
                        <input type="checkbox" class="form-check-input" name="other3" value="1" id="orgbox" value={{$contributor['other3']}}>
                        <label class="form-check-label" for="other3">
                            <div class="form-floating">
                                <input type="text" id="orgcontent" name="orgcontent" class="form-control" disabled value={{$contributor['otherOrganization']}}>
                                <label for="orgcontent">Other organization</label>
                            </div>
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="message" style="height: 100px" name="message">{{$contributor['message']}}</textarea>
                <label for="message">Comment/ Message 反馈/留言 :</label>
            </div>

            <div class="col-12 mb-3 text-center">
                <button id="submit" type="submit" class="btn btn-primary" onclick="submitted(event)">Submit</button>
            </div>
        </form>
    </div>
</body>

<script>
    document.getElementById('othermoney').onchange = function() {
        var chkYes = document.getElementById("othermoney");
        var otherAmount = document.getElementById("otherAmount");
        otherAmount.disabled = chkYes.checked ? false : true;
        if (!otherAmount.disabled) {
            otherAmount.focus();
        }
    };
    document.getElementById('goodsbox').onchange = function() {
        document.getElementById('goodscontent').disabled = !this.checked;
        if (!goodscontent.disabled) {
            goodscontent.focus();
        }
    };
    document.getElementById('servicebox').onchange = function() {
        document.getElementById('servicecontent').disabled = !this.checked;
        if (!servicecontent.disabled) {
            servicecontent.focus();
        }
    };
    document.getElementById('orgbox').onchange = function() {
        document.getElementById('orgcontent').disabled = !this.checked;
        if (!servicecontent.disabled) {
            servicecontent.focus();
        }
    };

    function submitted(e) {
        if (!confirm('Confirm submission?')) {
            e.preventDefault();
        }
    };

    function disableAll() {
        const inputs = document.getElementsByTagName("input");

        for (const input of inputs) {
            input.disabled = true
        }

        document.getElementById('state').disabled = true;
        document.getElementById('submit').disabled = true;
        document.getElementById('message').disabled = true;
    };

    function enableAll() {
        const inputs = document.getElementsByTagName("input");

        for (const input of inputs) {
            input.disabled = false
        }

        document.getElementById('state').disabled = false;
        document.getElementById('submit').disabled = false;
        document.getElementById('message').disabled = false;
        document.getElementById('edit').disabled = true;
    };

    function confirm_alert(node) {
        return confirm("Delete this record?");
    }
</script>

</html>