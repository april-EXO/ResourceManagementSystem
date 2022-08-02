<html>
<head>
<title>Volunteer Profiling</title>
<h1>Volunteer 义工</h1>
<h2>Basic Infomation 基本资料</h2>
<p>To be filled up by volunteer.</p>
<p>由义工填写。</p>
</head>

<body>
<form action="" method="POST" class="formContainer">
        @csrf
    <table>
        <tr>
            <th scope="row"><label for="name"> Name 姓名 : </label></th>
            <td><input type="text" id="name" name="name"></td>
        </tr>
        <tr>
            <th scope="row"><label for="id"> IC number 身份证号码 : </label></th>
            <td><input type="text" id="id" name="id"></td>
        </tr>
        <tr>
            <th><label for="contactnumber"> Contact Number 联络号码 : </label></th>
            <td><input type="phone" id="contactnumber" name="contactnumber"></td>
        </tr>
        <tr>
            <th><label for="email"> Email 电子邮件 : </label></th>
            <td><input type="email" id="email" name="email"></td>
        </tr>
        <tr>
            <th><label for="state"> State 州属 : </label></th>
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
            <th><label for="postcode"> Postcode 邮区编号 : </label></th>
            <td><input type="number" id="postcode" name="postcode"></td>
            </tr>
            <tr>
            <th><label for="location"> Location 地区 : </label></th>
            <td><input type="text" id="location" name="location" placeholder="eg: JB, Sepang, Butterworth, etc."></td>
            </tr>
            
            <tr>
            <th><label for="page"> Social media page 社交媒体链接 : </label></th>
            <td><input type="text" id="page" name="page" placeholder="eg.例： FB, Twitter, Instagram. etc."></td>
            </tr>

            <tr>
            <th colspan="2">Availability 可服务事项及时间</th>
            </tr>
            <tr>
            <th><label for="services"> Services 服务: </label></th>
            <td><input type="hidden" name="cleaning" value="0">
				<input type="checkbox" name="cleaning" value="1">Cleaning 清洗<br>
				
				<input type="hidden" name="moving" value="0">
                <input type="checkbox" name="moving" value="1">Moving 搬运<br>
				
				<input type="hidden" name="education" value="0">
                <input type="checkbox" name="education" value="1"> Education 教育<br>
				
                <input type="hidden" name="other1" value="0">
				<input type="checkbox" name="other1" id="box1" value="1">Other: <input type="text" name="otherServices" id="content1" disabled><br>
            </td>
            </tr>
            
            <tr>
            <th><label for="day"> Saturday 星期六: </label></th>
            <td>
                <input type="hidden" name="SATtime1" value="0">
				<input type="checkbox" name="SATtime1" value="1">0000-0600<br>
				
				<input type="hidden" name="SATtime2" value="0">
                <input type="checkbox" name="SATtime2" value="1">0600-1200<br>
				
				<input type="hidden" name="SATtime3" value="0">
                <input type="checkbox" name="SATtime3" value="1">1200-1800<br>
				
                <input type="hidden" name="SATtime4" value="0">
                <input type="checkbox" name="SATtime4" value="1">1800-2400<br>
				
                <input type="hidden" name="SATother" value="0">
				<input type="checkbox" name="SATother" id="box2" value="1">Other: <input type="text" name="SATothertime" id="content2" disabled><br>
            </td>
            </tr>

            <tr>
            <th><label for="day"> Sunday 星期日: </label></th>
            <td>
                <input type="hidden" name="SUNtime1" value="0">
				<input type="checkbox" name="SUNtime1" value="1">0000-0600<br>
				
				<input type="hidden" name="SUNtime2" value="0">
                <input type="checkbox" name="SUNtime2" value="1">0600-1200<br>
				
				<input type="hidden" name="SUNtime3" value="0">
                <input type="checkbox" name="SUNtime3" value="1">1200-1800<br>
				
                <input type="hidden" name="SUNtime4" value="0">
                <input type="checkbox" name="SUNtime4" value="1">1800-2400<br>
				
                <input type="hidden" name="SUNother" value="0">
				<input type="checkbox" name="SUNother" id="box3" value="1">Other: <input type="text" name="SUNotherTime" id="content3" disabled><br>
            </td>
            </tr>

            <tr>
            <th><label for="day"> Monday 星期一: </label></th>
            <td>
                <input type="hidden" name="MONtime1" value="0">
				<input type="checkbox" name="MONtime1" value="1">0000-0600<br>
				
				<input type="hidden" name="MONtime2" value="0">
                <input type="checkbox" name="MONtime2" value="1">0600-1200<br>
				
				<input type="hidden" name="MONtime3" value="0">
                <input type="checkbox" name="MONtime3" value="1">1200-1800<br>
				
                <input type="hidden" name="MONtime4" value="0">
                <input type="checkbox" name="MONtime4" value="1">1800-2400<br>
				
                <input type="hidden" name="MONother" value="0">
				<input type="checkbox" name="MONother" id="box4" value="1">Other: <input type="text" name="MONotherTime" id="content4" disabled><br>
            </td>
            </tr>

            <tr>
            <th><label for="day"> Tuesday 星期二: </label></th>
            <td>
                <input type="hidden" name="TUEStime1" value="0">
				<input type="checkbox" name="TUEStime1" value="1">0000-0600<br>
				
				<input type="hidden" name="TUEStime2" value="0">
                <input type="checkbox" name="TUEStime2" value="1">0600-1200<br>
				
				<input type="hidden" name="TUEStime3" value="0">
                <input type="checkbox" name="TUEStime3" value="1">1200-1800<br>
				
                <input type="hidden" name="TUEStime4" value="0">
                <input type="checkbox" name="TUEStime4" value="1">1800-2400<br>
				
                <input type="hidden" name="TUESother" value="0">
				<input type="checkbox" name="TUESother" id="box5" value="1">Other: <input type="text" name="TUESotherTime" id="content5" disabled><br>
            </td>
            </tr>

            <tr>
            <th><label for="day"> Wednesday 星期三: </label></th>
            <td>
                <input type="hidden" name="WEDtime1" value="0">
				<input type="checkbox" name="WEDtime1" value="1">0000-0600<br>
				
				<input type="hidden" name="WEDtime2" value="0">
                <input type="checkbox" name="WEDtime2" value="1">0600-1200<br>
				
				<input type="hidden" name="WEDtime3" value="0">
                <input type="checkbox" name="WEDtime3" value="1">1200-1800<br>
				
                <input type="hidden" name="WEDtime4" value="0">
                <input type="checkbox" name="WEDtime4" value="1">1800-2400<br>
				
                <input type="hidden" name="WEDother" value="0">
				<input type="checkbox" name="WEDother" id="box6" value="1">Other: <input type="text" name="WEDotherTime" id="content6" disabled><br>
            </td>
            </tr>

            <tr>
            <th><label for="day"> Thursday 星期四: </label></th>
            <td>
                <input type="hidden" name="THURtime1" value="0">
				<input type="checkbox" name="THURtime1" value="1">0000-0600<br>
				
				<input type="hidden" name="THURtime2" value="0">
                <input type="checkbox" name="THURtime2" value="1">0600-1200<br>
				
				<input type="hidden" name="THURtime3" value="0">
                <input type="checkbox" name="THURtime3" value="1">1200-1800<br>
				
                <input type="hidden" name="THURtime4" value="0">
                <input type="checkbox" name="THURtime4" value="1">1800-2400<br>
				
                <input type="hidden" name="THURother" value="0">
				<input type="checkbox" name="THURother" id="box7" value="1">Other: <input type="text" name="THURotherTime" id="content7" disabled><br>
            </td>
            </tr>

            <tr>
            <th><label for="day"> Friday 星期五: </label></th>
            <td>
                <input type="hidden" name="FRItime1" value="0">
				<input type="checkbox" name="FRItime1" value="1">0000-0600<br>
				
				<input type="hidden" name="FRItime2" value="0">
                <input type="checkbox" name="FRItime2" value="1">0600-1200<br>
				
				<input type="hidden" name="FRItime3" value="0">
                <input type="checkbox" name="FRItime3" value="1">1200-1800<br>
				
                <input type="hidden" name="FRItime4" value="0">
                <input type="checkbox" name="FRItime4" value="1">1800-2400<br>
				
                <input type="hidden" name="FRIother" value="0">
				<input type="checkbox" name="FRIother" id="box8" value="1">Other: <input type="text" name="FRIotherTime" id="content8" disabled><br>
            </td>
            </tr>
            
            <tr>
            <th><label for="message"> Comment/ Message 反馈/留言 : </label></th>
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
		document.getElementById('box1').onchange = function() {
		document.getElementById('content1').disabled = !this.checked;};
        
		document.getElementById('box2').onchange = function() {
		document.getElementById('content2').disabled = !this.checked;};
        
		document.getElementById('box3').onchange = function() {
		document.getElementById('content3').disabled = !this.checked;};
        
		document.getElementById('box4').onchange = function() {
		document.getElementById('content4').disabled = !this.checked;};
        
		document.getElementById('box5').onchange = function() {
		document.getElementById('content5').disabled = !this.checked;};
        
		document.getElementById('box6').onchange = function() {
		document.getElementById('content6').disabled = !this.checked;};
        
		document.getElementById('box7').onchange = function() {
		document.getElementById('content7').disabled = !this.checked;};
        
		document.getElementById('box8').onchange = function() {
		document.getElementById('content8').disabled = !this.checked;};

</script>

</html>
