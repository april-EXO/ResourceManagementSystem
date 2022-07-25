<html>
<head>
<title>Resource Request</title>
<h1>Resource Request 寻求物资</h1>
<h2>Basic Infomation 基本资料</h2>
<p>To be filled up by potential beneficiary individual or organization looking for resources from the public.</p>
<p>需要物资协助的个人或组织/机构。</p>
</head>

<body>
<form>
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
            <th><label for="location"> Location 地区 :</label></th>
            <td><input type="text" id="location" name="location" placeholder="eg: JB, Sepang, Butterworth, etc."></td>
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
            <th><label for="page"> Social media page 社交媒体链接 :</label></th>
            <td><input type="text" id="page" name="page" placeholder="eg.例： FB, Twitter, Instagram. etc."></td>
            </tr>

            <tr>
            <th>Resources Needed 所需物资</th>
            </tr>
            <tr>
            <th><label for="money"> Monetary Contribution 金钱捐赠 :</label></th>
            <td><input type="radio" id="money0" name="money" value="0">No need 无需金钱资助 <br>
                <input type="radio" id="money1" name="money" value="<1000"><$1000 <br>
                <input type="radio" id="money2" name="money" value="1001-5000">$1001-$5000 <br>
                <input type="radio" id="money3" name="money" value="5001-10000">$5001-$10000 <br>
                <input type="radio" id="money4" name="money" value=">10001">>$10001<br>
                <input type="radio" id="otherAmount" name="money" value="other">Other: <input type="number" name="otherAmount"><br>
            </td>
            </tr>
            <tr>
            <th><label for="goods"> Goods or products allocation 物资: </label></th>
            <td><input type="checkbox" name="goodsFoodGroceries" value="Essential foods or daily groceries">Essential foods or daily groceries 每日粮食<br>
                <input type="checkbox" name="goodsFurnitureFixing" value="Furniture and fixing">Furniture and fixing 家具配备<br>
                <input type="checkbox" name="goodsElectricalItemsGadgets" value="Electrical items and gadgets"> Electrical items and gadgets 家电 (eg. TV, internet, computer, etc. 例: 电视，网络，电脑，等)<br>
                <input type="checkbox" name="goodsTranspotation" value="Transportation">Transportation 运输 (eg. wheelchair, vehicle, trolley, etc. 例: 轮椅，车辆，手推车，等)<br>
                <input type="checkbox" name="goodsEducationalMaterial" value="Educational materials">Educational materials 教育产品 (eg. books, magazine, etc. 例：书籍，杂志，等)<br>
                <input type="checkbox" name="otherGoods" value="Other">Other: <input type="text" name="otherGoods"><br>
            </td>
            </tr>
            <tr>
            <th><label for="services"> Services 服务: </label></th>
            <td><input type="checkbox" name="cleaning" value="Cleaning">Cleaning 清洗<br>
                <input type="checkbox" name="moving" value="Moving">Moving 搬运<br>
                <input type="checkbox" name="education" value="Education">Education 教育<br>
                <input type="checkbox" name="otherServices" value="Other">Other: <input type="text" name="otherServices"><br>
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


</html>
