<html>

<head>
    @include('layouts.nav-bar-all')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Call for Volunteers</title>
    <div class="p-5">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="/form/beneficiary"> Resource Request<br>寻求物资 </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form/contributor">Join as contributor<br>成为贡献者</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form/volunteer">Join as volunteer<br>成为志愿者</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/form/connector" aria-disabled="true">Apply for volunteers helps<br>召唤志愿者</a>
                    </li>
                </ul>
            </div>
            <div class="p-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Call for Volunteers 活动号召</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Basic Infomation 基本资料</h6>
                        <p class="card-text">A project in need of volunteers.</p>
                        <p class="card-text">需要资源或义工的活动。</p>
                    </div>
                </div>
</head>

<body>


    <div class="p-5">
        <form action="/form/connector" method="POST" class="formContainer">
            @csrf

            <div class="row">
                <div class="col">

                </div>
                <div class="col">

                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="projectTitle">
                <label for="projectTitle">Project title 项目名称 (eg. old folks home cleaning, food distribution to orphanage, etc. 例：清理老人院，派送食物到孤儿院，等。)</label>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name">
                        <label for="name">Initiated by organization/ Individual name 活动发起组织/发起人 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="id">
                        <label for="id">Organization registration number/ Individual IC number 组织注册编号/个人身份证号码 :</label>
                    </div>
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="beneficiaryName">
                <label for="beneficiaryName">Beneficiary organization/ Individual name 活动收益组织/收益人 :</label>
            </div>
            
            <div class="row">
                <div class="col">
                <div class="form-floating mb-3">
                <input type="text" class="form-control" name="beneficiaryContactperson">
                <label for="beneficiaryContactperson">Beneficiary Contact Person 收益单位联络人 :</label>
            </div>
                </div>
                <div class="col">
                <div class="form-floating mb-3">
                <input type="phone" class="form-control" name="beneficiaryContactnumber">
                <label for="beneficiaryContactnumber">Beneficiary Contact Number 收益单位联络号码 :</label>
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
                        <input type="text" id="website" name="website" class="form-control">
                        <label for="website">Beneficiary website 收益单位网站 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" id="contactperson" name="contactperson" class="form-control">
                        <label for="contactperson">Beneficiary Social media page 收益单位社交媒体链接 : (eg. FB, Instagram. etc.)</label>
                    </div>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="date" id="date" name="date" class="form-control">
                        <label for="date">Date 日期 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="date" id="timeStart" name="timeStart" class="form-control">
                        <label for="timeStart">Time from 开始时间 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="date" id="timeEnd" name="timeEnd" class="form-control">
                        <label for="timeEnd">Time to 结束时间 :</label>
                    </div>
                </div>
            </div>
            <br>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-5 pt-0">Numbers of volunteers needed<br>所需义工人数</legend>
                <div class="col-sm-5">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="volunteerNumber" value="0-5" checked>
                        <label class="form-check-label" for="volunteerNumber">
                            0-5
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="volunteerNumber" value="6-10">
                        <label class="form-check-label" for="volunteerNumber">
                            6-10 </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="volunteerNumber" value="11-15">
                        <label class="form-check-label" for="volunteerNumber">
                            11-15
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="volunteerNumber" value="16-20">
                        <label class="form-check-label" for="volunteerNumber">
                            16-20
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="othervolun" name="volunteerNumber" value="other">
                        <label class="form-check-label" for="volunteerNumber">
                            <div class="form-floating">
                                <input type="text" id="otherNumber" name="otherNumber" class="form-control" disabled>
                                <label for="otherNumber">Other number</label>
                            </div>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-5 pt-0">Monetary Contribution<br>金钱捐赠</legend>
                <div class="col-sm-5">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="money" value="0" checked>
                        <label class="form-check-label" for="money">
                            No need 无需金钱资助
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="money" value="<1000">
                        <label class="form-check-label" for="money">
                            <$1000 </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="money" value="1001-5000">
                        <label class="form-check-label" for="money">
                            $1001-$5000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="money" value="5001-10000">
                        <label class="form-check-label" for="money">
                            $5001-$10000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="money" value=">10001">
                        <label class="form-check-label" for="money">
                            >$10001
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="othermoney" name="money" value="other">
                        <label class="form-check-label" for="money">
                            <div class="form-floating">
                                <input type="text" id="otherAmount" name="otherAmount" class="form-control" disabled>
                                <label for="otherAmount">Other amount</label>
                            </div>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-5 pt-0">Goods or products allocation<br>物资</legend>
                <div class="col-sm-5">
                    <div class="form-check">
                        <input type="hidden" name="goodsFoodGroceries" value="0">
                        <input type="checkbox" class="form-check-input" name="goodsFoodGroceries" value="1">
                        <label class="form-check-label" for="goodsFoodGroceries">
                            Essential foods or daily groceries 每日粮食
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="goodsFurnitureFixing" value="0">
                        <input type="checkbox" class="form-check-input" name="goodsFurnitureFixing" value="1">
                        <label class="form-check-label" for="goodsFurnitureFixing">
                            Furniture and fixing 家具配备
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="goodsElectricalItemsGadgets" value="0">
                        <input type="checkbox" class="form-check-input" name="goodsElectricalItemsGadgets" value="1">
                        <label class="form-check-label" for="goodsElectricalItemsGadgets">
                            Electrical items and gadgets 家电 <text class="text-muted"><br>(eg. TV, internet, computer, etc. <br>例: 电视，网络，电脑，等)</text>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="goodsTranspotation" value="0">
                        <input type="checkbox" class="form-check-input" name="goodsTranspotation" value="1">
                        <label class="form-check-label" for="goodsTranspotation">
                            Transportation 运输 <text class="text-muted"><br>(eg. wheelchair, vehicle, trolley, etc. <br>例: 轮椅，车辆，手推车，等)</text>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="goodsEducationalMaterial" value="0">
                        <input type="checkbox" class="form-check-input" name="goodsEducationalMaterial" value="1">
                        <label class="form-check-label" for="goodsEducationalMaterial">
                            Educational materials 教育产品 <text class="text-muted"><br>(eg. books, magazine, etc. <br>例：书籍，杂志，等)</text>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="other1" value="0">
                        <input type="checkbox" class="form-check-input" name="other1" value="1" id="goodsbox">
                        <label class="form-check-label" for="other1">
                            <div class="form-floating">
                                <input type="text" id="goodscontent" name="otherGoods" class="form-control" disabled>
                                <label for="otherGoods">Other amount</label>
                            </div>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-5 pt-0">Services<br>服务</legend>
                <div class="col-sm-5">
                    <div class="form-check">
                        <input type="hidden" name="cleaning" value="0">
                        <input type="checkbox" class="form-check-input" name="cleaning" value="1">
                        <label class="form-check-label" for="cleaning">
                            Cleaning 清洗
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="moving" value="0">
                        <input type="checkbox" class="form-check-input" name="moving" value="1">
                        <label class="form-check-label" for="moving">
                            Moving 搬运
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="education" value="0">
                        <input type="checkbox" class="form-check-input" name="education" value="1">
                        <label class="form-check-label" for="education">
                            Education 教育
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="other2" value="0">
                        <input type="checkbox" class="form-check-input" name="other2" value="1" id="servicebox">
                        <label class="form-check-label" for="other2">
                            <div class="form-floating">
                                <input type="text" id="servicecontent" name="otherServices" class="form-control" disabled>
                                <label for="otherServices">Other services</label>
                            </div>
                        </label>
                    </div>
                </div>
            </fieldset>

            <div class="form-floating mb-3">
                <textarea class="form-control" id="message" style="height: 100px" name="message"></textarea>
                <label for="message">Comment/ Message 反馈/留言 :</label>
            </div>

            <div class="col-12 mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>

<script>
    document.getElementById('othervolun').onchange = function() {
        var chkYes = document.getElementById("othervolun");
        var otherAmount = document.getElementById("otherNumber");
        otherAmount.disabled = chkYes.checked ? false : true;
        if (!otherNumber.disabled) {
            otherNumber.focus();
        }
    };
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
</script>

</html>