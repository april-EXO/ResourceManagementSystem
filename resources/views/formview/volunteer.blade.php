<html>

<head>
    @include('layouts.nav-bar-all')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Volunteer Profiling</title>
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
                        <a class="nav-link active" href="/form/volunteer" aria-disabled="true">Join as volunteer<br>成为志愿者</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form/connector">Apply for volunteers helps<br>召唤志愿者</a>
                    </li>
                </ul>
            </div>
            <div class="p-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Volunteer 义工</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Basic Infomation 基本资料</h6>
                        <p class="card-text">To be filled up by volunteer.</p>
                        <p class="card-text">由义工填写。</p>
                    </div>
                </div>
</head>

<body>


    <div class="p-5">
        <form action="/form/volunteer" method="POST" class="formContainer">
            @csrf

            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name">
                        <label for="name">Name 姓名 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="id">
                        <label for="id">IC number 身份证号码 :</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="phone" class="form-control" name="contactnumber">
                        <label for="contactnumber">Contact Number 联络号码 :</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email">
                        <label for="email">Email 电子邮件 :</label>
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
            <div class="form-floating mb-3">
                <input type="text" id="contactperson" name="contactperson" class="form-control">
                <label for="contactperson">Social media page 社交媒体链接 : (eg. FB, Twitter, Instagram. etc.)</label>
            </div>
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Availability 可服务事项及时间</h6>
                </div>
            </div>
            <br>
            <fieldset class="row mb-3">
                <div class="row">
                    <div class="col">
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-5 pt-0">Services 服务</legend>
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
                                    <input type="hidden" name="other1" value="0">
                                    <input type="checkbox" class="form-check-input" name="other1" value="1" id="servicebox">
                                    <label class="form-check-label" for="other1">
                                        <div class="form-floating">
                                            <input type="text" id="servicecontent" name="otherServices" class="form-control" disabled>
                                            <label for="otherServices">Other services</label>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col">
                        <legend class="col-form-label col-sm-5 pt-0">Saturday 星期六</legend>
                        <div class="col-sm-5">
                            <div class="form-check">
                                <input type="hidden" name="SATtime1" value="0">
                                <input type="checkbox" class="form-check-input" name="SATtime1" value="1">
                                <label class="form-check-label" for="SATtime1">
                                    0000-0600
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="SATtime2" value="0">
                                <input type="checkbox" class="form-check-input" name="SATtime2" value="1">
                                <label class="form-check-label" for="SATtime2">
                                    0600-1200
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="SATtime3" value="0">
                                <input type="checkbox" class="form-check-input" name="SATtime3" value="1">
                                <label class="form-check-label" for="SATtime3">
                                    1200-1800
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="SATtime4" value="0">
                                <input type="checkbox" class="form-check-input" name="SATtime4" value="1">
                                <label class="form-check-label" for="SATtime4">
                                    1800-2400
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="SATother" value="0">
                                <input type="checkbox" class="form-check-input" name="SATother" value="1" id="satbox">
                                <label class="form-check-label" for="SATother">
                                    <div class="form-floating">
                                        <input type="text" id="satcontent" name="SATothertime" class="form-control" disabled>
                                        <label for="SATothertime">Other time</label>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <legend class="col-form-label col-sm-5 pt-0"> Sunday 星期日</legend>
                        <div class="col-sm-5">
                            <div class="form-check">
                                <input type="hidden" name="SUNtime1" value="0">
                                <input type="checkbox" class="form-check-input" name="SUNtime1" value="1">
                                <label class="form-check-label" for="SATtime1">
                                    0000-0600
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="SUNtime2" value="0">
                                <input type="checkbox" class="form-check-input" name="SUNtime2" value="1">
                                <label class="form-check-label" for="SUNtime2">
                                    0600-1200
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="SUNtime3" value="0">
                                <input type="checkbox" class="form-check-input" name="SUNtime3" value="1">
                                <label class="form-check-label" for="SUNtime3">
                                    1200-1800
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="SUNtime4" value="0">
                                <input type="checkbox" class="form-check-input" name="SUNtime4" value="1">
                                <label class="form-check-label" for="SUNtime4">
                                    1800-2400
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="SUNother" value="0">
                                <input type="checkbox" class="form-check-input" name="SUNother" value="1" id="sunbox">
                                <label class="form-check-label" for="SUNother">
                                    <div class="form-floating">
                                        <input type="text" id="suncontent" name="SUNothertime" class="form-control" disabled>
                                        <label for="SUNothertime">Other time</label>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <legend class="col-form-label col-sm-5 pt-0"> Monday 星期一</legend>
                        <div class="col-sm-5">
                            <div class="form-check">
                                <input type="hidden" name="MONtime1" value="0">
                                <input type="checkbox" class="form-check-input" name="MONtime1" value="1">
                                <label class="form-check-label" for="MONtime1">
                                    0000-0600
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="MONtime2" value="0">
                                <input type="checkbox" class="form-check-input" name="MONtime2" value="1">
                                <label class="form-check-label" for="MONtime2">
                                    0600-1200
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="MONtime3" value="0">
                                <input type="checkbox" class="form-check-input" name="MONtime3" value="1">
                                <label class="form-check-label" for="MONtime3">
                                    1200-1800
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="MONtime4" value="0">
                                <input type="checkbox" class="form-check-input" name="MONtime4" value="1">
                                <label class="form-check-label" for="MONtime4">
                                    1800-2400
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="MONother" value="0">
                                <input type="checkbox" class="form-check-input" name="MONother" value="1" id="monbox">
                                <label class="form-check-label" for="MONother">
                                    <div class="form-floating">
                                        <input type="text" id="moncontent" name="MONothertime" class="form-control" disabled>
                                        <label for="MONothertime">Other time</label>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <legend class="col-form-label col-sm-5 pt-0">Tuesday 星期二</legend>
                        <div class="col-sm-5">
                            <div class="form-check">
                                <input type="hidden" name="TUEStime1" value="0">
                                <input type="checkbox" class="form-check-input" name="TUEStime1" value="1">
                                <label class="form-check-label" for="TUEStime1">
                                    0000-0600
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="TUEStime2" value="0">
                                <input type="checkbox" class="form-check-input" name="TUEStime2" value="1">
                                <label class="form-check-label" for="TUEStime2">
                                    0600-1200
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="TUEStime3" value="0">
                                <input type="checkbox" class="form-check-input" name="TUEStime3" value="1">
                                <label class="form-check-label" for="TUEStime3">
                                    1200-1800
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="TUEStime4" value="0">
                                <input type="checkbox" class="form-check-input" name="TUEStime4" value="1">
                                <label class="form-check-label" for="TUEStime4">
                                    1800-2400
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="TUESother" value="0">
                                <input type="checkbox" class="form-check-input" name="TUESother" value="1" id="tuesbox">
                                <label class="form-check-label" for="TUESother">
                                    <div class="form-floating">
                                        <input type="text" id="tuescontent" name="TUESothertime" class="form-control" disabled>
                                        <label for="TUESothertime">Other time</label>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <legend class="col-form-label col-sm-5 pt-0">Wednesday 星期三</legend>
                        <div class="col-sm-5">
                            <div class="form-check">
                                <input type="hidden" name="WEDtime1" value="0">
                                <input type="checkbox" class="form-check-input" name="WEDtime1" value="1">
                                <label class="form-check-label" for="WEDtime1">
                                    0000-0600
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="WEDtime2" value="0">
                                <input type="checkbox" class="form-check-input" name="WEDtime2" value="1">
                                <label class="form-check-label" for="WEDtime2">
                                    0600-1200
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="WEDtime3" value="0">
                                <input type="checkbox" class="form-check-input" name="WEDtime3" value="1">
                                <label class="form-check-label" for="WEDtime3">
                                    1200-1800
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="WEDtime4" value="0">
                                <input type="checkbox" class="form-check-input" name="WEDtime4" value="1">
                                <label class="form-check-label" for="WEDtime4">
                                    1800-2400
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="WEDother" value="0">
                                <input type="checkbox" class="form-check-input" name="WEDother" value="1" id="wedbox">
                                <label class="form-check-label" for="WEDother">
                                    <div class="form-floating">
                                        <input type="text" id="wedcontent" name="WEDothertime" class="form-control" disabled>
                                        <label for="WEDothertime">Other time</label>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <legend class="col-form-label col-sm-5 pt-0">Thursday 星期四</legend>
                        <div class="col-sm-5">
                            <div class="form-check">
                                <input type="hidden" name="THURtime1" value="0">
                                <input type="checkbox" class="form-check-input" name="THURtime1" value="1">
                                <label class="form-check-label" for="THURtime1">
                                    0000-0600
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="THURtime2" value="0">
                                <input type="checkbox" class="form-check-input" name="THURtime2" value="1">
                                <label class="form-check-label" for="THURtime2">
                                    0600-1200
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="THURtime3" value="0">
                                <input type="checkbox" class="form-check-input" name="THURtime3" value="1">
                                <label class="form-check-label" for="THURtime3">
                                    1200-1800
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="THURtime4" value="0">
                                <input type="checkbox" class="form-check-input" name="THURtime4" value="1">
                                <label class="form-check-label" for="THURtime4">
                                    1800-2400
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="THURother" value="0">
                                <input type="checkbox" class="form-check-input" name="THURother" value="1" id="thurbox">
                                <label class="form-check-label" for="THURother">
                                    <div class="form-floating">
                                        <input type="text" id="thurcontent" name="THURothertime" class="form-control" disabled>
                                        <label for="THURothertime">Other time</label>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <legend class="col-form-label col-sm-5 pt-0">Friday 星期五</legend>
                        <div class="col-sm-5">
                            <div class="form-check">
                                <input type="hidden" name="FRItime1" value="0">
                                <input type="checkbox" class="form-check-input" name="FRItime1" value="1">
                                <label class="form-check-label" for="FRItime1">
                                    0000-0600
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="FRItime2" value="0">
                                <input type="checkbox" class="form-check-input" name="FRItime2" value="1">
                                <label class="form-check-label" for="FRItime2">
                                    0600-1200
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="FRItime3" value="0">
                                <input type="checkbox" class="form-check-input" name="FRItime3" value="1">
                                <label class="form-check-label" for="FRItime3">
                                    1200-1800
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="FRItime4" value="0">
                                <input type="checkbox" class="form-check-input" name="FRItime4" value="1">
                                <label class="form-check-label" for="FRItime4">
                                    1800-2400
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="hidden" name="FRIother" value="0">
                                <input type="checkbox" class="form-check-input" name="FRIother" value="1" id="fribox">
                                <label class="form-check-label" for="FRIother">
                                    <div class="form-floating">
                                        <input type="text" id="fricontent" name="FRIothertime" class="form-control" disabled>
                                        <label for="FRIothertime">Other time</label>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
    </div>


    <div class="form-floating mb-3">
        <textarea class="form-control" id="message" style="height: 100px" name="message"></textarea>
        <label for="message">Comment/ Message 反馈/留言 :</label>
    </div>

    <div class="col-12 mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </div>
    </div>
    </form>
</body>

<script>
    document.getElementById('servicebox').onchange = function() {
        document.getElementById('servicecontent').disabled = !this.checked;
        if (!servicecontent.disabled) {
            servicecontent.focus();
        }
    };
    document.getElementById('satbox').onchange = function() {
        var chkYes = document.getElementById("satbox");
        var satcontent = document.getElementById("satcontent");
        satcontent.disabled = chkYes.checked ? false : true;
        if (!satcontent.disabled) {
            satcontent.focus();
        }
    };
    document.getElementById('sunbox').onchange = function() {
        var chkYes = document.getElementById("sunbox");
        var suncontent = document.getElementById("suncontent");
        suncontent.disabled = chkYes.checked ? false : true;
        if (!suncontent.disabled) {
            suncontent.focus();
        }
    };
    document.getElementById('monbox').onchange = function() {
        var chkYes = document.getElementById("monbox");
        var moncontent = document.getElementById("moncontent");
        moncontent.disabled = chkYes.checked ? false : true;
        if (!moncontent.disabled) {
            moncontent.focus();
        }
    };
    document.getElementById('tuesbox').onchange = function() {
        var chkYes = document.getElementById("tuesbox");
        var tuescontent = document.getElementById("tuescontent");
        tuescontent.disabled = chkYes.checked ? false : true;
        if (!tuescontent.disabled) {
            tuescontent.focus();
        }
    };
    document.getElementById('wedbox').onchange = function() {
        var chkYes = document.getElementById("wedbox");
        var wedcontent = document.getElementById("wedcontent");
        wedcontent.disabled = chkYes.checked ? false : true;
        if (!wedcontent.disabled) {
            wedcontent.focus();
        }
    };
    document.getElementById('thurbox').onchange = function() {
        var chkYes = document.getElementById("thurbox");
        var thurcontent = document.getElementById("thurcontent");
        thurcontent.disabled = chkYes.checked ? false : true;
        if (!thurcontent.disabled) {
            thurcontent.focus();
        }
    };
    document.getElementById('fribox').onchange = function() {
        var chkYes = document.getElementById("fribox");
        var fricontent = document.getElementById("fricontent");
        fricontent.disabled = chkYes.checked ? false : true;
        if (!fricontent.disabled) {
            fricontent.focus();
        }
    };
</script>

</html>