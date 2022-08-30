<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Resource Management System</title>
</head>

<body>
    @include('layouts.nav-bar-all')

    <div class="p-3">
        <div class="card">

            <div class="rounded-top text-white d-flex flex-row" style="background-color: #000;">
                <div style="width:150px; height:150px; margin:25px">
                    <img src="profilepic.png" alt="Generic placeholder image" class="img-thumbnail"
                        style="width:150px; height:150px">
                </div>
                <div class="ms-3" style="margin-top: 110px;">
                    <h4>{{ Auth::user()->name }}</h4>
                    <p>{{ Auth::user()->email }}</p>
                </div>
            </div>
            <div class="card-body p-4">
                <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modal">Edit
                    Profile</button><br>
                <h3 class="fw-normal mb-1">About</h3> <br>
                <div class="p-4 mb-4" style="background-color: #f8f9fa;">

                    @foreach ($userProfile as $profile)
                        <div class="row">
                            <div class="col-3">
                                <p class="font-italic mb-3 text-end">Role:</p>
                            </div>
                            <div class="col-3">
                                <p class="font-italic mb-3">{{ Auth::user()->role }}</p>
                            </div>
                            <div class="col-3">
                                <p class="font-italic mb-3 text-end">Age:</p>
                            </div>
                            <div class="col-3">
                                <p class="font-italic mb-3">{{ $profile['age'] }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <p class="font-italic mb-3 text-end">Name:</p>
                            </div>
                            <div class="col-3">
                                <p class="font-italic mb-3">{{ Auth::user()->name }}</p>
                            </div>
                            <div class="col-3">
                                <p class="font-italic mb-3 text-end">Contact number:</p>
                            </div>
                            <div class="col-3">
                                <p class="font-italic mb-3">{{ $profile['contact_num'] }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <p class="font-italic mb-3 text-end">Email:</p>
                            </div>
                            <div class="col-3">
                                <p class="font-italic mb-3">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="col-3">
                                <p class="font-italic mb-3 text-end">Birthday:</p>
                            </div>
                            <div class="col-3">
                                <p class="font-italic mb-3">{{ $profile['birthday'] }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 text-end">Gender:
                            </div>
                            <div class="col-3">
                                <p class="font-italic mb-3">{{ $profile['gender'] }}</p>
                            </div>
                            <div class="col-3 text-end">Address:
                            </div>
                            <div class="col-3">
                                <p class="font-italic mb-3">{{ $profile['address'] }}</p>
                            </div>
                        </div>
                </div>
            </div>
            @endforeach




            <hr>

            <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-title">
                                Update Profile Info
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/update-profile" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group mb-3">
                                    <label for="">Gender</label><br>
                                    <input type="radio" id="male" name="gender" value="Male" checked>
                                    <label for="html">Male</label>
                                    <input type="radio" id="female" name="gender" value="Female">
                                    <label for="css">Female</label>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Age</label>
                                    <input type="text" name="age" value="{{ $userProfile[0]['age'] }}"
                                        class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Contact Number</label>
                                    <input type="text" name="phone" value="{{ $userProfile[0]['contact_num'] }}"
                                        class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Birth Date</label>
                                    <input type="date" name="bday" value="{{ $userProfile[0]['birthday'] }}"
                                        class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Address</label>
                                    <input type="text" name="address" value="{{ $userProfile[0]['address'] }}"
                                        class="form-control">
                                    <br>
                                    <button class="btn btn-primary" type="submit"
                                        data-bs-dismiss="modal">Done</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card p-3">
                <div class="card-header">
                    <h3> Donation Record </h3>
                </div>
                <div class="row p-3">
                    <div class="col-1">

                    </div>
                    <div class="col fw-bold">
                        Receiver
                    </div>
                    <div class="col fw-bold">
                        Deliver method
                    </div>
                    <div class="col fw-bold">
                        Status
                    </div>
                    <div class="col fw-bold">
                        Created at
                    </div>
                    <div class="col fw-bold">

                    </div>
                </div>
                <div class="card-body">
                    @foreach ($donationRecords as $key => $donationRecord)
                        <div class="row p-3">
                            <div class="col-1">
                                {{ $key + 1 }}
                            </div>
                            <div class="col">
                                {{-- 帮我放beneficiary name --}}
                            </div>
                            <div class="col">
                                {{ $donationRecord['method'] }}
                            </div>
                            <div class="col">
                                {{ $donationRecord['status'] }}
                            </div>
                            <div class="col">
                                {{ $donationRecord['created_at'] }}
                            </div>
                            <div class="col align-self-end">
                                <a href="tracking/{{ $donationRecord['id'] }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>

            <!-- <div class="card">
                  <div class="card-header">
                    2
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-11">
                              <h5 class="card-title">Donation to Pusat Kebajikan Love & Care on 6 August 2022</h5>
                              <p class="card-text">Total: RM 400</p>
                          </div>
                          <div class="col align-self-end">
                              <a href="#" class="btn btn-primary">Detail</a>
                          </div>
                      </div>
                  </div>
                </div>
        
                <div class="card">
                  <div class="card-header">
                    3
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-11">
                              <h5 class="card-title">Donation to Pusat Kebajikan Love & Care on 6 August 2022</h5>
                              <p class="card-text">Total: RM 400</p>
                          </div>
                          <div class="col align-self-end">
                              <a href="#" class="btn btn-primary">Detail</a>
                          </div>
                      </div>
                  </div>
                </div> -->


        </div>

    </div>
    </div>
    </div>
    @include('layouts.footer')
</body>

<style>
    body {
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1))
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
