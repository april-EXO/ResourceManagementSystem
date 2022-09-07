<html>

<body>
    <h2 style="text-align: center">Donation Receipt</h2>
    <hr />
    <h5>Thank You,<br>
        Here's your donation receipt.</h5>
    <br>
    <h3 style="text-align: center;color:rgba(64, 64, 68, 0.671)">{{ $beneficiary->name }}</h3>
    <h3 style="text-align: center;color:rgba(64, 64, 68, 0.671)">{{ $beneficiary->location }},
        {{ $beneficiary->postcode }}, {{ $beneficiary->state }}</h3>
    <h3 style="text-align: center;color:rgba(64, 64, 68, 0.671)">{{ $beneficiary->contact_num }}</h3>

    <br>

    <h4 style="text-align:right">Receipt No: {{ $donationRecord->id }}</h4>
    <h4><span style="color:rgba(64, 64, 68, 0.671)">Received Date:</span><br>
        {{ $donationRecord->updated_at }}</h4>

    <h4><span style="color:rgba(64, 64, 68, 0.671)">Donated By:</span><br>
        {{ $user->name }}</h4>

    <h4><span style="color:rgba(64, 64, 68, 0.671)">Donor Email:</span><br>
        {{ $user->email }}</h4>

    <br>
    <div style="padding:1px;background-color:rgb(225, 221, 221)">
    <h2 style="text-align: center">Donation Detail</h2>
    </div>
    <hr />
    <h3><span style="color:rgba(64, 64, 68, 0.671)">Donation Method:</span>
        {{ $donationRecord->method }}</h3>
    <h4 style="color: rgb(52, 45, 45)">Item received by {{ $beneficiary->name }} :</h4>
    <br>

    @foreach ($resources as $key => $resource)
        <span>{{ $key+1 }}. {{ $resource->detail }} {{ $resource->quantity }} {{ $resource->unit }}</span><br><br>
    @endforeach

    <br><br><hr/>

    <h4><span style="color:rgba(64, 64, 68, 0.671)">Note:</span><br>
        This receipt is computer generated and no signature is required.</h4>


</body>

</html>
