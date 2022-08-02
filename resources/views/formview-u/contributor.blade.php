<html>
<head>
<title>Contributor's Basic Info</title>
<h1>Contributor 贡献者</h1>
<h2>Basic Information 基本资料</h2>
<p>To be filled up by potential organization or individual looking at contributing resources to the needy.</p>
<p>有物资可以贡献的个人或组织/机构。</p>
</head>

<body>
<form action="" method="POST" class="formContainer">
        @csrf
    <table>
        <tr>
            <th><label for="name"> Individual/ Organization name 个人/组织/机构 名称 :</label></th>
            <td><input type="text" id="name" name="name"></td>
        </tr>
        <tr>
            <th><label for="id"> ID(IC/ Entity registration number)  证件号码 :</label></th>
            <td><input type="text" id="id" name="id"></td>
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
            <th><label for="contactperson"> Contact Person 联络人 :</label></th>
            <td><input type="text" id="contactperson" name="contactperson"></td>
            </tr>
            <tr>
            <th><label for="contactnumber"> Contact Number 联络号码 :</label></th>
            <td><input type="phone" id="contactnumber" name="contactnumber"></td>
            </tr>
            <tr>
            <th><label for="website"> Website 网站 :</label></th>
            <td><input type="text" id="website" name="website"></td>
            </tr>
            <tr>
            <th><label for="page">Social media page 社交媒体链接 (eg.例： FB, Twitter, Instagram. etc.) ::</label></th>
            <td><input type="text" id="page" name="page"></td>
            </tr>

            <tr>
            <th colspan="2">Contribution Preferences 物资资讯 <br> 
            <p>
                Disclaimer: THIS IS ONLY A SURVEY FORM AND NOT MEANT FOR ANY DONATION OR WHATSOVER ACTION. Always do your own researh and due diligence when it comes to charitable or social work.
            </p>
            <p>
                注意：这只是资料建议表，非捐献或赞助。保持对讯息警惕性。
            </p>
            </th>
            </tr>
            <tr>
            <th colspan="2">(1) Contribution - Monetary 金钱捐赠 <br> 
            <p>
                Disclaimer: ALL MONETARY CONTRIBUTION OR DONATION SHOULD DIRECT DEAL WITH BENEFICIARY IF ANY. This is just an intention info collection form and NOT MEANT FOR ANY MONETARY TRANSACTION.
            </p>
            <p>
                注意：所有金钱捐赠需直接与收益方对接。这只是资料表格，不具转账功能。
            </p>
            </th>
            </tr>
            <tr>
            <th><label for="money"> Budget for Monetary Contribution 捐赠预算 :</label></th>
            <td>
                <input type="radio" id="money1" name="money" value="<1000"><$1000 <br>
                <input type="radio" id="money2" name="money" value="1001-5000">$1001-$5000 <br>
                <input type="radio" id="money3" name="money" value="5001-10000">$5001-$10000 <br>
                <input type="radio" id="money4" name="money" value=">10001">>$10001<br>
                <input type="radio" id="otherAmount" name="money" value="other">Other: <input type="number" name="otherAmount"><br>
            </td>
            </tr>
            <tr>
            <th><label for="frequency"> Intended frequency of monetary contribution 捐赠次数 :</label></th>
            <td>
                <input type="radio" name="frequency" value="One Time">One Time 仅此一次<br>
                <input type="radio" name="frequency" value="Monthly">Monthly 每个月<br>
                <input type="radio" name="frequency" value="Annual">Annual 年度<br>
             </td>
            </tr>


            <th colspan="2">(2) Contribution - Items 物资捐赠 <br> 
            </th>
            <tr>
            <th><label for="goods"> Goods or products allocation 物资: </label></th>
            <td><input type="hidden" name="goodsFoodGroceries" value="0">
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

            <th colspan="2">(3) Contribution - Services/ Man Hour 奉献时间/ 服务 <br>
            <p>
                For volunteering in services/ manhour, you may want to further fill up Volunteer Profiling Form at ..
            </p>
            <p>
                义工可在这个网页另行补充个人资料。
            </p>
            </th>
            <tr>
            <th><label for="services"> Services 服务: </label></th>
            <td><input type="hidden" name="cleaning" value="0">
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
            <th><label for="preferredorganization"> Preferred organization to contribute to 希望捐赠予: </label></th>
            <td>
                
                <input type="hidden" name="relazone2" value="0">
				<input type="checkbox" name="relazone2" value="1">Rela Zone 2 - JB 新山人民自愿警察<br>
				
				<input type="hidden" name="lionsclubjb" value="0">
                <input type="checkbox" name="lionsclubjb" value="1">Lions Club - JB 狮子会<br>
				
				<input type="hidden" name="superpandateamklangvalley" value="0">
                <input type="checkbox" name="superpandateamklangvalley" value="1"> Super Panda Team (Klang Valley) 熊猫侠团队<br>
				
                <input type="hidden" name="foodbank448" value="0">
                <input type="checkbox" name="foodbank448" value="1"> Foodbank 448 (JB) 食物银行<br>
				
                <input type="hidden" name="other3" value="0">
				<input type="checkbox" name="other3" id="box" value="1">Other: <input type="text" name="otherOrganization" id="content" disabled><br>
            </td>
            </tr>

            <tr>
            <th><label for="message"> Comment/ Message 反馈/留言 :</label></th>
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
