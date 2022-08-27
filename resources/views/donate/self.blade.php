@include('layouts.nav-bar-all')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>手动寄出 Self-Delivery</title>
    <div class="p-5">

        <div class="p-5">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-3"><br>手动寄出 Self-Delivery<br></h2>
                    <p class="card-text">手动寄出物品并且填写寄件单号。<br>Send the resources to the address below and fill in the
                        tracking number.<br>
                    </p>
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
                                    Persatuan Insan Istimewa ($uid)
                                </td>
                            </tr>
                            <tr>
                                <td class="float-end">
                                    联络号码/ Contact no.:
                                </td>
                                <td>
                                    017-6339887
                                </td>
                            </tr>
                            <tr>
                                <td class="float-end">
                                    地址/ Address:
                                </td>
                                <td>
                                    35, Jln Rakan 11, Taman Rakan, Cheras, 43000 Kajang, Selangor
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>

</head>

<body>

    <div class="p-5">
        <form action="/form/beneficiary" method="POST" class="formContainer">
            @csrf
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h6 class="card-title">捐献详情 Donation Details</h6>
                </div>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="delivermethod" name="delivermethod" aria-label="delivermethod">
                    <option selected disabled></option>
                    <option value="transportation">私人交通送货 Deliver by own transportation</option>
                    <option value="courier">邮寄 Send by courier</option>
                    <option value="other">其他</option>
                </select>
                <label for="delivermethod">派送方式 Delivery method:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="deliverdetail">
                <label for="deliverdetail">派送详情 Delivery detail: （Deliver date/Tracking number and courier name/ other
                    remark) </label>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h6 class="card-title">物资种类 Types of foods or products allocation</h6>
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <div class="col">
                                <div class="form-check">
                                    <input type="hidden" name="goodsFoodGroceries" value="0">
                                    <input type="checkbox" class="form-check-input" name="goodsFoodGroceries"
                                        value="1" id="g1box">
                                    <div class="input-group">
                                        <span class="input-group-text col-sm-5">Essential foods or daily groceries
                                            每日粮食</span>
                                        <textarea class="form-control" aria-label="groceriesRe" id="g1content" name="groceriesRe" disabled></textarea>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input type="hidden" name="goodsFurnitureFixing" value="0">
                                    <input type="checkbox" class="form-check-input" name="goodsFurnitureFixing"
                                        value="1" id="g2box">
                                    <div class="input-group">
                                        <span class="input-group-text col-sm-5">Furniture and fixing 家具配备</span>
                                        <textarea class="form-control" aria-label="furnitureRe" id="g2content" name="furnitureRe" disabled></textarea>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input type="hidden" name="goodsElectricalItemsGadgets" value="0">
                                    <input type="checkbox" class="form-check-input" name="goodsElectricalItemsGadgets"
                                        value="1" id="g3box">
                                    <div class="input-group">
                                        <span class="input-group-text col-sm-5">Electrical items and gadgets 家电</span>
                                        <textarea class="form-control" aria-label="electricRe" id="g3content" name="electricRe" disabled
                                            placeholder="eg. TV, internet, computer, etc. 例: 电视，网络，电脑，等"></textarea>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input type="hidden" name="goodsTranspotation" value="0">
                                    <input type="checkbox" class="form-check-input" name="goodsTranspotation"
                                        value="1" id="g4box">
                                    <div class="input-group">
                                        <span class="input-group-text col-sm-5">Transportation 运输</span>
                                        <textarea class="form-control" aria-label="transportRe" id="g4content" name="transportRe" disabled
                                            placeholder="eg. wheelchair, vehicle, trolley, etc. 例: 轮椅，车辆，手推车，等"></textarea>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input type="hidden" name="goodsEducationalMaterial" value="0">
                                    <input type="checkbox" class="form-check-input" name="goodsEducationalMaterial"
                                        value="1" id="g5box">
                                    <div class="input-group">
                                        <span class="input-group-text col-sm-5">Educational materials 教育产品</span>
                                        <textarea class="form-control" aria-label="educationRe" id="g5content" name="educationRe" disabled
                                            placeholder="eg. books, magazine, etc. 例：书籍，杂志，等"></textarea>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input type="hidden" name="other1" value="0">
                                    <input type="checkbox" class="form-check-input" name="other1" value="1"
                                        id="goodsbox">
                                    <div class="input-group">
                                        <span class="input-group-text col-sm-5">其他物品 Other items</span>
                                        <textarea class="form-control" aria-label="otherGoods" id="goodscontent" name="otherGoods" disabled
                                            placeholder="eg. books, magazine, etc. 例：书籍，杂志，等"></textarea>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="message" style="height: 100px" name="message"></textarea>
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

<script>
    document.getElementById('g1box').onchange = function() {
        document.getElementById('g1content').disabled = !this.checked;
        if (!goodscontent.disabled) {
            goodscontent.focus();
        }
    };
    document.getElementById('g2box').onchange = function() {
        document.getElementById('g2content').disabled = !this.checked;
        if (!goodscontent.disabled) {
            goodscontent.focus();
        }
    };
    document.getElementById('g3box').onchange = function() {
        document.getElementById('g3content').disabled = !this.checked;
        if (!goodscontent.disabled) {
            goodscontent.focus();
        }
    };
    document.getElementById('g4box').onchange = function() {
        document.getElementById('g4content').disabled = !this.checked;
        if (!goodscontent.disabled) {
            goodscontent.focus();
        }
    };
    document.getElementById('g5box').onchange = function() {
        document.getElementById('g5content').disabled = !this.checked;
        if (!goodscontent.disabled) {
            goodscontent.focus();
        }
    };
    document.getElementById('goodsbox').onchange = function() {
        document.getElementById('goodscontent').disabled = !this.checked;
        if (!goodscontent.disabled) {
            goodscontent.focus();
        }
    };

    function submitted(e) {
        if (!confirm('Confirm submission?')) {
            e.preventDefault();
        }
    };
</script>

</html>
