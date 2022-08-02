<html>
<head>
<title>Resource Request</title>
<h1>Resource Request 寻求物资</h1>
<h2>Basic Infomation 基本资料</h2>
<a href={{ "application" }}>Form Main Page</a>

</head>

<body>
    <table border="1">
        <tr>
            <th>Individual/ Organization name 个人/组织/机构 名称</th>
            <th>ID(IC/ Entity registration number)  证件号码</th>
            <th>State 州属</th>
            <th>Postcode 邮区编号</th>
            <th>Location 地区</th>
            <th>Contact Person 联络人</th>
            <th>Contact Number 联络号码</th>
            <th>Website 网站</th>
            <th>Social media page 社交媒体链接</th>
            <th>Resources Needed 所需物资</th>
            <th>Monetary Contribution 金钱捐赠</th>
            <th>Remark</th>
            <th>Goods or products allocation 物资: </th>
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
            <th>Comment/ Message 反馈/留言</th>
            <th></th>
            <th></th>
        </tr>

        @foreach ($beneficiary as $b)
        <tr>
            <td>{{$b['name']}}</td>
            <td>{{$b['regnum']}}</td>
            <td>{{$b['state']}}</td>
            <td>{{$b['postcode']}}</td>
            <td>{{$b['location']}}</td>
            <td>{{$b['contactperson']}}</td>
            <td>{{$b['contactnumber']}}</td>
            <td>{{$b['website']}}</td>
            <td>{{$b['page']}}</td>
            <td></td>
            <td>{{$b['moneyamount']}}</td>
            <td>{{$b['moneyother']}}</td>
            <td></td>
            <td>{{$b['goodsFoodGroceries']}}</td>
            <td>{{$b['goodsFurnitureFixing']}}</td>
            <td>{{$b['goodsElectricalItemsGadgets']}}</td>
            <td>{{$b['goodsTranspotation']}}</td>
            <td>{{$b['goodsEducationalMaterial']}}</td>
            <td>{{$b['other1']}}</td>
            <td>{{$b['otherGoods']}}</td>
            <td></td>
            <td>{{$b['cleaning']}}</td>
            <td>{{$b['moving']}}</td>
            <td>{{$b['education']}}</td>
            <td>{{$b['other2']}}</td>
            <td>{{$b['otherServices']}}</td>
            <td>{{$b['message']}}</td>
           
            <td> <a href={{ "beneficiary-edit/".$b['id'] }}>Edit</a></td>
            <td> <a href={{ "beneficiary-delete/".$b['id'] }}>Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>
