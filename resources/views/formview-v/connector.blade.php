<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Call for Volunteers</title>
<h1>Call for Volunteers 活动号召</h1>
<h2>Basic Infomation 基本资料</h2>
<a href={{ "application" }}>Form Main Page</a>

</head>

<body>
<table class="table table-striped">
        <tr>
            <th>Project title 项目名称</th>
            <th>Initiated by organization/ Individual name 活动发起组织/发起人</th>
            <th>(Initiator/发起) Organization registration number/ Individual IC number 组织注册编号/个人身份证号码</th>
            <th>Beneficiary organization/ Individual name 活动收益组织/收益人</th>
            <th>Beneficiary Contact Person 收益单位联络人</th>
            <th>Beneficiary Contact Number 收益单位联络号码</th>
            <th>State 州属</th>
            <th>Postcode 邮区编号</th>
            <th>Location 地区</th>
            <th>Beneficiary website 收益单位网站</th>
            <th>Beneficiary Social media page 收益单位社交媒体链接</th>
            <th>Social Project Info 项目资讯</th>
            <th>Date 日期</th>
            <th>Time from 开始时间</th>
            <th>Time to 结束时间</th>
            <th>Numbers of volunteers needed 所需义工人数</th>
            <th>Monetary Contribution 所需款项</th>
            <th>Goods or products allocation 物资</th>
            <th>Essential foods or daily groceries 每日粮食</th>
            <th>Furniture and fixing 家具配备</th>
            <th>Electrical items and gadgets 家电</th>
            <th>Transportation 运输</th>
            <th>Educational materials 教育产品</th>
            <th>Other</th>
            <th>Other notes</th>
            <th>Services 服务</th>
            <th>Cleaning 清洗</th>
            <th>Moving 搬运</th>
            <th>Education 教育</th>
            <th>Other</th>
            <th>Other notes</th>
            <th>Additional info/ notes 其他讯息</th>
            <th></th>
            <th></th>
        </tr>

        @foreach ($connector as $c)
        <tr>
            <td>{{$c['projecttitle']}}</td>
            <td>{{$c['orgname']}}</td>
            <td>{{$c['orgregnum']}}</td>
            <td>{{$c['beneficiaryname']}}</td>
            <td>{{$c['beneficiarycontactperson']}}</td>
            <td>{{$c['beneficiarycontactnumber']}}</td>
            <td>{{$c['state']}}</td>
            <td>{{$c['postcode']}}</td>
            <td>{{$c['location']}}</td>
            <td>{{$c['beneficiarywebsite']}}</td>
            <td>{{$c['beneficiarypage']}}</td>
            <td></td>
            <td>{{$c['date']}}</td>
            <td>{{$c['timestart']}}</td>
            <td>{{$c['timeend']}}</td>
            <td>{{$c['volunteernumber']}}</td>
            <td>{{$c['moneyamount']}}</td>
            <td>{{$c['moneyother']}}</td>
            <td>{{$c['goodsFoodGroceries']}}</td>
            <td>{{$c['goodsFurnitureFixing']}}</td>
            <td>{{$c['goodsElectricalItemsGadgets']}}</td>
            <td>{{$c['goodsTranspotation']}}</td>
            <td>{{$c['goodsEducationalMaterial']}}</td>
            <td>{{$c['other1']}}</td>
            <td>{{$c['otherGoods']}}</td>
            <td>{{$c['cleaning']}}</td>
            <td>{{$c['moving']}}</td>
            <td>{{$c['education']}}</td>
            <td>{{$c['other2']}}</td>
            <td>{{$c['otherServices']}}</td>
            <td>{{$c['message']}}</td>
            <td> <a href={{ "connector-edit/".$c['id'] }}>Edit</a></td>
            <td> <a href={{ "connector-delete/".$c['id'] }}>Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>
