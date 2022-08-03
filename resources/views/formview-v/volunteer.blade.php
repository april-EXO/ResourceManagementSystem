<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Volunteer Profiling</title>
<h1>Volunteer 义工</h1>
<h2>Basic Infomation 基本资料</h2>
<a href={{ "application" }}>Form Main Page</a>
</head>

<body>
<table class="table table-striped">
        <tr>
            <th>Name 姓名</th>
            <th>IC number 身份证号码</th>
            <th>Contact Number 联络号码</th>
            <th>Email 电子邮件</th>
            <th>State 州属</th>
            <th>Postcode 邮区编号</th>
            <th>Location 地区</th>
            <th>Social media page 社交媒体链接</th>
            <th>Availability 可服务事项及时间</th>
            <th>Services 服务</th>
            <th>Cleaning 清洗</th>
            <th>Moving 搬运</th>
            <th>Education 教育</th>
            <th>Other</th>
            <th>Other notes</th>
            <th>Saturday 星期六</th>
            <th>0000-0600</th>
            <th>0600-1200</th>
            <th>1200-1800</th>
            <th>1800-2400</th>
            <th>Other</th>
            <th>Other time</th>
            <th>Sunday 星期日</th>
            <th>0000-0600</th>
            <th>0600-1200</th>
            <th>1200-1800</th>
            <th>1800-2400</th>
            <th>Other</th>
            <th>Other time</th>
            <th>Monday 星期一</th>
            <th>0000-0600</th>
            <th>0600-1200</th>
            <th>1200-1800</th>
            <th>1800-2400</th>
            <th>Other</th>
            <th>Other time</th>
            <th>Tuesday 星期二</th>
            <th>0000-0600</th>
            <th>0600-1200</th>
            <th>1200-1800</th>
            <th>1800-2400</th>
            <th>Other</th>
            <th>Other time</th>
            <th>Wednesday 星期三</th>
            <th>0000-0600</th>
            <th>0600-1200</th>
            <th>1200-1800</th>
            <th>1800-2400</th>
            <th>Other</th>
            <th>Other time</th>
            <th>Thursday 星期四</th>
            <th>0000-0600</th>
            <th>0600-1200</th>
            <th>1200-1800</th>
            <th>1800-2400</th>
            <th>Other</th>
            <th>Other time</th>
            <th>Friday 星期五</th>
            <th>0000-0600</th>
            <th>0600-1200</th>
            <th>1200-1800</th>
            <th>1800-2400</th>
            <th>Other</th>
            <th>Other time</th>
            <th>Comment/ Message 反馈/留言</th>
            <th></th>
            <th></th>
        </tr>

        @foreach ($volunteer as $v)
        <tr>
            <td>{{$v['name']}}</td>
            <td>{{$v['ic']}}</td>
            <td>{{$v['contactnumber']}}</td>
            <td>{{$v['email']}}</td>
            <td>{{$v['state']}}</td>
            <td>{{$v['postcode']}}</td>
            <td>{{$v['location']}}</td>
            <td>{{$v['page']}}</td>
            <td></td>
            <td></td>
            <td>{{$v['cleaning']}}</td>
            <td>{{$v['moving']}}</td>
            <td>{{$v['education']}}</td>
            <td>{{$v['other1']}}</td>
            <td>{{$v['otherServices']}}</td>
            <td></td>
            <td>{{$v['SATtime1']}}</td>
            <td>{{$v['SATtime2']}}</td>
            <td>{{$v['SATtime3']}}</td>
            <td>{{$v['SATtime4']}}</td>
            <td>{{$v['SATother']}}</td>
            <td>{{$v['SATothertime']}}</td>
            <td></td>
            <td>{{$v['SUNtime1']}}</td>
            <td>{{$v['SUNtime2']}}</td>
            <td>{{$v['SUNtime3']}}</td>
            <td>{{$v['SUNtime4']}}</td>
            <td>{{$v['SUNother']}}</td>
            <td>{{$v['SUNotherTime']}}</td>
            <td></td>
            <td>{{$v['MONtime1']}}</td>
            <td>{{$v['MONtime2']}}</td>
            <td>{{$v['MONtime3']}}</td>
            <td>{{$v['MONtime4']}}</td>
            <td>{{$v['MONother']}}</td>
            <td>{{$v['MONotherTime']}}</td>
            <td></td>
            <td>{{$v['TUEStime1']}}</td>
            <td>{{$v['TUEStime2']}}</td>
            <td>{{$v['TUEStime3']}}</td>
            <td>{{$v['TUEStime4']}}</td>
            <td>{{$v['TUESother']}}</td>
            <td>{{$v['TUESotherTime']}}</td>
            <td></td>
            <td>{{$v['WEDtime1']}}</td>
            <td>{{$v['WEDtime2']}}</td>
            <td>{{$v['WEDtime3']}}</td>
            <td>{{$v['WEDtime4']}}</td>
            <td>{{$v['WEDother']}}</td>
            <td>{{$v['WEDotherTime']}}</td>
            <td></td>
            <td>{{$v['THURtime1']}}</td>
            <td>{{$v['THURtime2']}}</td>
            <td>{{$v['THURtime3']}}</td>
            <td>{{$v['THURtime4']}}</td>
            <td>{{$v['THURother']}}</td>
            <td>{{$v['THURotherTime']}}</td>
            <td></td>
            <td>{{$v['FRItime1']}}</td>
            <td>{{$v['FRItime2']}}</td>
            <td>{{$v['FRItime3']}}</td>
            <td>{{$v['FRItime4']}}</td>
            <td>{{$v['FRIother']}}</td>
            <td>{{$v['FRIotherTime']}}</td>
            <td>{{$v['message']}}</td>
            <td> <a href={{ "volunteer-edit/".$c['id'] }}>Edit</a></td>
            <td> <a href={{ "volunteer-delete/".$c['id'] }}>Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>
