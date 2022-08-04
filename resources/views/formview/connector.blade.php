<html>
<head>
<title>Call for Volunteers</title>
<h1>Call for Volunteers 活动号召</h1>
<h2>Basic Infomation 基本资料</h2>
<p>A project in need of volunteers.</p>
<p>需要资源或义工的活动。</p>
</head>

<body>
<form action="/form/connector" method="POST" class="formContainer">
        @csrf
    <table>
        <tr>
            <th><label for="projectTitle"> Project title 项目名称 :</label></th>
            <td><input type="text" id="projectTitle" name="projectTitle" placeholder="eg. old folks home cleaning, food distribution to orphanage, etc. 例：清理老人院，派送食物到孤儿院，等。"></td>
        </tr>
        <tr>
            <th><label for="name"> Initiated by organization/ Individual name 活动发起组织/发起人 :</label></th>
            <td><input type="text" id="name" name="name"></td>
        </tr>
        <tr>
            <th><label for="id"> (Initiator/发起) Organization registration number/ Individual IC number 组织注册编号/个人身份证号码 :</label></th>
            <td><input type="text" id="id" name="id"></td>
        </tr>
        <tr>
            <th><label for="beneficiaryName"> Beneficiary organization/ Individual name 活动收益组织/收益人 :</label></th>
            <td><input type="text" id="beneficiaryName" name="beneficiaryName"></td>
        </tr>
        <tr>
            <th><label for="beneficiaryContactperson"> Beneficiary Contact Person 收益单位联络人 :</label></th>
            <td><input type="text" id="beneficiaryContactperson" name="beneficiaryContactperson"></td>
            </tr>
        <tr>
            <th><label for="beneficiaryContactnumber"> Beneficiary Contact Number 收益单位联络号码 :</label></th>
            <td><input type="phone" id="beneficiaryContactnumber" name="beneficiaryContactnumber"></td>
        </tr>
        <tr>
            <th><label for="state"> State 州属 :</label></th>
            <td><select id="state" name="state">
            <option value="" disabled selected>Choose a State</option>
            <option value="Johor">Johor</option>
            <option value="Kedah">Kedah</option>
            <option value="Kelantan">Kelantan</option>
            <option value="Melaka">Melaka</option>
            <option value="NegeriSembilan">Negeri Sembilan</option>
            <option value="Pahang">Pahang</option>
            <option value="Penang">Penang</option>
            <option value="Perak">Perak</option>
            <option value="Perlis">Perlis</option>
            <option value="Sabah">Sabah</option>
            <option value="Sarawak">Sarawak</option>
            <option value="Selangor">Selangor</option>
            <option value="Terangganu">Terangganu</option>
            <option value="KualaLumpur">Wilayah Persekutuan Kuala Lumpur</option>
            <option value="Labuan">Wilayah Persekutuan Labuan</option>
            <option value="Putrajaya">Putrajaya</option>
            </select> 
            </td>
            </tr>
            <tr>
            <th><label for="postcode"> Postcode 邮区编号 :</label></th>
            <td><input type="number" id="postcode" name="postcode"></td>
            </tr>
            <tr>
            <th><label for="location"> Location 地区 (eg: JB, Sepang, Butterworth, etc.) :</label></th>
            <td><input type="text" id="location" name="location"></td>
            </tr>
            
            <tr>
            <th><label for="beneficiaryWebsite"> Beneficiary website 收益单位网站 :</label></th>
            <td><input type="text" id="beneficiaryWebsite" name="beneficiaryWebsite"></td>
            </tr>
            <tr>
            <th><label for="beneficiaryPage"> Beneficiary Social media page 收益单位社交媒体链接 (eg.例： FB, Twitter, Instagram. etc.) :</label></th>
            <td><input type="text" id="beneficiaryPage" name="beneficiaryPage"></td>
            </tr>

            <tr>
            <th colspan="2">Social Project Info 项目资讯</th>
            </tr>
            <tr>
            <th><label for="date"> Date 日期: </label></th>
            <td><input type="date" name="date"></td>
            </tr>
            <tr>
            <th><label for="timeStart"> Time from 开始时间: </label></th>
            <td><input type="time" name="timeStart"></td>
            </tr>
            <tr>
            <th><label for="timeEnd"> Time to 结束时间: </label></th>
            <td><input type="time" name="timeEnd"></td>
            </tr>
            <tr>
            <th><label for="volunteerNumber"> Numbers of volunteers needed 所需义工人数 :</label></th>
            <td><input type="radio" name="volunteerNumber" value="0-5">0-5 <br>
                <input type="radio" name="volunteerNumber" value="6-10">6-10 <br>
                <input type="radio" name="volunteerNumber" value="11-15">11-15 <br>
                <input type="radio" name="volunteerNumber" value="16-20">16-20 <br>
                <input type="radio" name="volunteerNumber" value="other">Other: <input type="number" name="otherNumber"><br>
            </td>
            </tr>
            <tr>
            <th><label for="money"> Monetary Contribution 所需款项 :</label></th>
            <td><input type="radio" name="money" value="0">No need 无需金钱赞助 <br>
                <input type="radio" name="money" value="<1000"><$1000 <br>
                <input type="radio" name="money" value="1001-5000">$1001-$5000 <br>
                <input type="radio" name="money" value="5001-10000">$5001-$10000 <br>
                <input type="radio" name="money" value=">10001">>$10001<br>
                <input type="radio" name="money" value="other">Other: <input type="number" name="otherAmount"><br>
            </td>
            </tr>
            <tr>

            <th><label for="goods"> Goods or products allocation 所需物资: </label></th>
            <td>
				<input type="hidden" name="goodsFoodGroceries" value="0">
				<input type="checkbox" name="goodsFoodGroceries" value="1">Essential foods or daily groceries 每日粮食<br>
				
				<input type="hidden" name="goodsFurnitureFixing" value="0">
                <input type="checkbox" name="goodsFurnitureFixing" value="1">Furniture and fixing 家具配备<br>
				
				<input type="hidden" name="goodsElectricalItemsGadgets" value="0">
                <input type="checkbox" name="goodsElectricalItemsGadgets" value="1"> Electrical items and gadgets 家电 (eg. TV, internet, computer, etc. 例: 电视，网络，电脑，等)<br>
				
				<input type="hidden" name="goodsTranspotation" value="0">
                <input type="checkbox" name="goodsTranspotation" value="1">Transportation 运输 (eg. wheelchair, vehicle, trolley, etc. 例: 轮椅，车辆，手推车，等)<br>
				
				<input type="hidden" name="goodsEducationalMaterial" value="0">
                <input type="checkbox" name="goodsEducationalMaterial" value="1">Educational materials 教育产品 (eg. books, magazine, etc. 例：书籍，杂志，等)<br>
				
                <input type="hidden" name="other1" value="0">
				<input type="checkbox" name="other1" id="box" value="1">Other: <input type="text" name="otherGoods" id="content" disabled><br>
            </td>
            </tr>
            <tr>
            <th><label for="services"> Services 服务: </label></th>
            <td>
                <input type="hidden" name="cleaning" value="0">
				<input type="checkbox" name="cleaning" value="1">Cleaning 清洗<br>
				
				<input type="hidden" name="moving" value="0">
                <input type="checkbox" name="moving" value="1">Moving 搬运<br>
				
				<input type="hidden" name="education" value="0">
                <input type="checkbox" name="education" value="1"> Education 教育<br>
				
                <input type="hidden" name="other2" value="0">
				<input type="checkbox" name="other2" id="box" value="1">Other: <input type="text" name="otherServices" id="content" disabled><br>
            </td>
            </tr>

            
            <tr>
            <th><label for="message"> Additional info/ notes 其他讯息 :</label></th>
            <td><input type="textfield" id="message" name="message"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type=submit>
                </td>
            </tr>
    </table>
</form>
</body>

<script>
		document.getElementById('box').onchange = function() {
		document.getElementById('content').disabled = !this.checked;};
</script>

</html>
