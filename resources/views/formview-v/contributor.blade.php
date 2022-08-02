<html>
<head>
<title>Contributor's Basic Info</title>
<h1>Contributor 贡献者</h1>
<h2>Basic Information 基本资料</h2>
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
            <th>Contribution Preferences 物资资讯</th>
            <th>(1) Contribution - Monetary 金钱捐赠</th>
            <th>Budget for Monetary Contribution 捐赠预算</th>
            <th>Other amount</th>
            <th>Intended frequency of monetary contribution 捐赠次数</th>
            <th>(2) Contribution - Items 物资捐赠</th>
            <th>Goods or products allocation 物资</th>
            <th>Essential foods or daily groceries 每日粮食</th>
            <th>Furniture and fixing 家具配备</th>
            <th>Electrical items and gadgets 家电</th>
            <th>Transportation 运输</th>
            <th>Educational materials 教育产品</th>
            <th>Other</th>
            <th>Other notes</th>
            <th>(3) Contribution - Services/ Man Hour 奉献时间/ 服务</th>
            <th>Services 服务</th>
            <th>Cleaning 清洗</th>
            <th>Moving 搬运</th>
            <th>Education 教育</th>
            <th>Other</th>
            <th>Other notes</th>
            <th>Preferred organization to contribute to 希望捐赠予</th>
            <th>Rela Zone 2 - JB 新山人民自愿警察</th>
            <th>Lions Club - JB 狮子会</th>
            <th>Super Panda Team (Klang Valley) 熊猫侠团队</th>
            <th>Foodbank 448 (JB) 食物银行</th>
            <th>Other</th>
            <th>Other organization</th>
            <th>Comment/ Message 反馈/留言</th>
            <th></th>
            <th></th>
        </tr>

        @foreach ($contributor as $c)
        <tr>
            <td>{{$c['name']}}</td>
            <td>{{$c['regnum']}}</td>
            <td>{{$c['state']}}</td>
            <td>{{$c['postcode']}}</td>
            <td>{{$c['location']}}</td>
            <td>{{$c['contactperson']}}</td>
            <td>{{$c['contactnumber']}}</td>
            <td>{{$c['website']}}</td>
            <td>{{$c['page']}}</td>
            <td></td>
            <td></td>
            <td>{{$c['moneyamount']}}</td>
            <td>{{$c['moneyother']}}</td>
            <td>{{$c['frequency']}}</td>
            <td></td>
            <td></td>
            <td>{{$c['goodsFoodGroceries']}}</td>
            <td>{{$c['goodsFurnitureFixing']}}</td>
            <td>{{$c['goodsElectricalItemsGadgets']}}</td>
            <td>{{$c['goodsTranspotation']}}</td>
            <td>{{$c['goodsEducationalMaterial']}}</td>
            <td>{{$c['other1']}}</td>
            <td>{{$c['otherGoods']}}</td>
            <td></td>
            <td></td>
            <td>{{$c['cleaning']}}</td>
            <td>{{$c['moving']}}</td>
            <td>{{$c['education']}}</td>
            <td>{{$c['other2']}}</td>
            <td>{{$c['otherServices']}}</td>
            <td>{{$c['relazone2']}}</td>
            <td>{{$c['lionsclubjb']}}</td>
            <td>{{$c['superpandateamklangvalley']}}</td>
            <td>{{$c['foodbank448']}}</td>
            <td>{{$c['other3']}}</td>
            <td>{{$c['otherOrganization']}}</td>
            <td>{{$c['message']}}</td>
            <td> <a href={{ "contributor-edit/".$c['id'] }}>Edit</a></td>
            <td> <a href={{ "contributor-delete/".$c['id'] }}>Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>
