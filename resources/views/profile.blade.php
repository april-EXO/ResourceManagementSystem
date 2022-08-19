<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
      <title>Resource Management System</title>
  </head>

<body> 
  @include('layouts.nav-bar-all')

<div class="p-3">
          <div class="card">
            
            <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
              <div style="width:150px; height:150px; margin:25px">
                <img src="profilepic.png"
                alt="Generic placeholder image" class="img-thumbnail"
              style="width:150px; height:150px">       
              </div>
              <div class="ms-3" style="margin-top: 110px;">
                <h4>{{ Auth::user()->name }}</h4>
                <p>{{ Auth::user()->email }}</p>
              </div>
            </div>
  

            <div class="card-body p-4 text-black">
            
                <h3 class="fw-normal mb-1">About</h3>
                <div class="p-4 mb-4" style="background-color: #f8f9fa;">

                    @foreach($userProfile as $profile)
                    <div class="row">
                      <div class="col-3"> <p class="font-italic mb-3">role:</p>
                      </div>
                      <div class="col-3"> <p class="font-italic mb-3">{{Auth::user()->role}}</p>
                      </div>
                      <div class="col-3"> <p class="font-italic mb-3">age:</p>
                      </div>
                      <div class="col-3"> <p class="font-italic mb-3">{{$profile['age']}}</p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-3"> <p class="font-italic mb-3">name:</p>
                      </div>
                      <div class="col-3"> <p class="font-italic mb-3">{{Auth::user()->name}}</p>
                      </div>
                      <div class="col-3"> <p class="font-italic mb-3">contact number:</p>
                      </div>
                      <div class="col-3"> <p class="font-italic mb-3">{{$profile['contact_num']}}</p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-3"> <p class="font-italic mb-3">email:</p>
                      </div>
                      <div class="col-3"> <p class="font-italic mb-3">{{Auth::user()->email}}</p>
                      </div>
                      <div class="col-3"> <p class="font-italic mb-3">birthday:</p>
                      </div>
                      <div class="col-3"> <p class="font-italic mb-3">{{$profile['birthday']}}</p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-3">gender
                      </div>
                      <div class="col-3"> <p class="font-italic mb-3">{{$profile['gender']}}</p>
                      </div>
                      <div class="col-3">address
                      </div>
                      <div class="col-3"> <p class="font-italic mb-3">{{$profile['address']}}</p>
                      </div>
                    </div>
                </div>
                @endforeach


                <div class="card">
                  <div class="card-header">
                    1
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
                </div>
                
                       
            </div>  

          </div>
        </div>
      </body>      

<style>
body {
/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1))
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>         