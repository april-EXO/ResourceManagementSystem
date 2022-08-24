<html>

<body>
    <h4 class="mt-3" style="text-align: center">BENEFICIARY APPLICATION FORM</h4>
    <div class="p-3">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" value="{{ $b['name'] }}" disabled>
            <label for="name">Individual/ Organization name 个人/组织/机构 名称 :</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" style="height: 100px" name="description" disabled>{{ $beneficiary['description'] }}</textarea>
            <label for="description">Description 简介 :</label>
        </div>


        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="state" value="{{ $beneficiary['state'] }}" disabled>
                    <label for="state">State 州属 :</label>
                </div>
            </div>

            <div class="col">
                <div class="form-floating mb-3">
                    <input type="number" id="postcode" name="postcode" class="form-control"
                        value="{{ $beneficiary['postcode'] }}" disabled>
                    <label for="postcode">Postcode 邮区编号 :</label>
                </div>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" id="location" name="location" class="form-control"
                value="{{ $beneficiary['location'] }}" disabled>
            <label for="location">Location 地区 : (eg: JB, Sepang, Butterworth, etc.)</label>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" id="contact_person" name="contact_person" class="form-control"
                        value="{{ $beneficiary['contact_person'] }}" disabled>
                    <label for="contact_person">Contact Person 联络人 :</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="phone" id="contact_num" name="contact_num" class="form-control"
                        value="{{ $beneficiary['contact_num'] }}" disabled>
                    <label for="contact_num">Contact Number 联络号码 :</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" id="website" name="website" class="form-control"
                        value="{{ $beneficiary['website'] }}" disabled>
                    <label for="website">Website 网站 :</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" id="webpage" name="webpage" class="form-control"
                        value="{{ $beneficiary['webpage'] }}" disabled>
                    <label for="webpage">Social media page 社交媒体链接 :</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" id="date" name="date" class="form-control"
                        value="{{ $beneficiary['date'] }}" disabled>
                    <label for="date">Operation day 营业天 :</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" id="time" name="time" class="form-control"
                        value="{{ $beneficiary['time'] }}" disabled>
                    <label for="time">Operation time 营业时间 :</label>
                </div>
            </div>
        </div>


        <div class="card mt-2">
            <h6 class="card-header">Resources Needed 资源需求</h6>
            <ol class="list-group">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-1">No.</div>
                        <div class="col-7">Resource</div>
                        <div class="col-2">Quantity</div>
                        <div class="col-2">Unit</div>
                    </div>
                </li>

                @foreach ($beneficiary->getResourcesApplyRelation as $key => $resource)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-1">{{ $key + 1 }}</div>
                            <div class="col-7">{{ $resource->detail }}</div>
                            <div class="col-2">{{ $resource->quantity }}</div>
                            <div class="col-2">{{ $resource->unit }}</div>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>


        @if($beneficiary['status'] == "pending")
        <div class="row mt-5">

            <div class="col-6">
                <form name="reject" id="reject" action={{url('rejectApplication')}} method="POST">
                    @csrf
                    <input type="hidden" name="id" value={{$beneficiary['id']}}>
                    <div class="btn-group col-12">
                        <button type="submit" class="btn btn-danger">Reject</button>
                    </div>
                </form>
            </div>

            <div class="col-6">
                <form name="approve" id="approve" action={{url('approveApplication')}} method="POST">
                    @csrf
                    <input type="hidden" name="id" value={{$beneficiary['id']}}>
                    <div class="btn-group col-12">
                        <button type="submit" class="btn btn-primary">Approve</button>
                    </div>
                </form>
            </div>
        </div>
        @endif

    </div>
</body>
