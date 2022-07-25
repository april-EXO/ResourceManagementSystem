<html>
<head>
<title>Volunteer Profiling</title>
<h1>Volunteer 义工</h1>
<h2>Basic Infomation 基本资料</h2>
<p>To be filled up by volunteer.</p>
<p>由义工填写。</p>
</head>

<body>
<form>
    <table>
        <tr>
            <th><label for="name"> Name 姓名 :</label></th>
            <td><input type="text" id="name" name="name"></td>
        </tr>
        <tr>
            <th><label for="id"> IC number 身份证号码 :</label></th>
            <td><input type="text" id="id" name="id"></td>
        </tr>
        <tr>
            <th><label for="contactnumber"> Contact Number 联络号码 :</label></th>
            <td><input type="phone" id="contactnumber" name="contactnumber"></td>
        </tr>
        <tr>
            <th><label for="email"> Email 电子邮件 :</label></th>
            <td><input type="email" id="email" name="email"></td>
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
            <th><label for="page"> Social media page 社交媒体链接 :</label></th>
            <td><input type="text" id="page" name="page" placeholder="eg.例： FB, Twitter, Instagram. etc."></td>
            </tr>

            <tr>
            <th colspan="2">Availability 可服务事项及时间</th>
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
            <th><label for="day"> Saturday 星期六: </label></th>
            <td><input type="checkbox" name="SATtime1" value="0000-0600">0000-0600<br>
                <input type="checkbox" name="SATtime2" value="0600-1200">0600-1200<br>
                <input type="checkbox" name="SATtime3" value="1200-1800">1200-1800<br>
                <input type="checkbox" name="SATtime4" value="1800-2400">1800-2400<br>
                <input type="checkbox" name="SATother" value="Other">Other: <input type="text" name="SATothertime"><br>
            </td>
            </tr>

            <tr>
            <th><label for="day"> Sunday 星期日: </label></th>
            <td><input type="checkbox" name="SUNtime1" value="0000-0600">0000-0600<br>
                <input type="checkbox" name="SUNtime2" value="0600-1200">0600-1200<br>
                <input type="checkbox" name="SUNtime3" value="1200-1800">1200-1800<br>
                <input type="checkbox" name="SUNtime4" value="1800-2400">1800-2400<br>
                <input type="checkbox" name="SUNother" value="Other">Other: <input type="text" name="SUNotherTime"><br>
            </td>
            </tr>

            <tr>
            <th><label for="day"> Monday 星期一: </label></th>
            <td><input type="checkbox" name="MONtime1" value="0000-0600">0000-0600<br>
                <input type="checkbox" name="MONtime2" value="0600-1200">0600-1200<br>
                <input type="checkbox" name="MONtime3" value="1200-1800">1200-1800<br>
                <input type="checkbox" name="MONtime4" value="1800-2400">1800-2400<br>
                <input type="checkbox" name="MONother" value="Other">Other: <input type="text" name="MONotherTime"><br>
            </td>
            </tr>

            <tr>
            <th><label for="day"> Tuesday 星期二: </label></th>
            <td><input type="checkbox" name="TUEStime1" value="0000-0600">0000-0600<br>
                <input type="checkbox" name="TUEStime2" value="0600-1200">0600-1200<br>
                <input type="checkbox" name="TUEStime3" value="1200-1800">1200-1800<br>
                <input type="checkbox" name="TUEStime4" value="1800-2400">1800-2400<br>
                <input type="checkbox" name="TUESother" value="Other">Other: <input type="text" name="TUESotherTime"><br>
            </td>
            </tr>

            <tr>
            <th><label for="day"> Wednesday 星期三: </label></th>
            <td><input type="checkbox" name="WEDtime1" value="0000-0600">0000-0600<br>
                <input type="checkbox" name="WEDtime2" value="0600-1200">0600-1200<br>
                <input type="checkbox" name="WEDtime3" value="1200-1800">1200-1800<br>
                <input type="checkbox" name="WEDtime4" value="1800-2400">1800-2400<br>
                <input type="checkbox" name="WEDother" value="Other">Other: <input type="text" name="WEDotherTime"><br>
            </td>
            </tr>

            <tr>
            <th><label for="day"> Thursday 星期四: </label></th>
            <td><input type="checkbox" name="THURtime1" value="0000-0600">0000-0600<br>
                <input type="checkbox" name="THURtime2" value="0600-1200">0600-1200<br>
                <input type="checkbox" name="THURtime3" value="1200-1800">1200-1800<br>
                <input type="checkbox" name="THURtime4" value="1800-2400">1800-2400<br>
                <input type="checkbox" name="THURother" value="Other">Other: <input type="text" name="THURotherTime"><br>
            </td>
            </tr>

            <tr>
            <th><label for="day"> Friday 星期五: </label></th>
            <td><input type="checkbox" name="FRItime1" value="0000-0600">0000-0600<br>
                <input type="checkbox" name="FRItime2" value="0600-1200">0600-1200<br>
                <input type="checkbox" name="FRItime3" value="1200-1800">1200-1800<br>
                <input type="checkbox" name="FRItime4" value="1800-2400">1800-2400<br>
                <input type="checkbox" name="FRIother" value="Other">Other: <input type="text" name="FRIotherTime"><br>
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
