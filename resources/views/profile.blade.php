<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

    
<div class="p-5">
          <div class="card">
            <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">

              <div style="width:150px; height:150px; background-color:green; margin:25px">
                <img src="profilepic.png"
                alt="Generic placeholder image" class="img-thumbnail"
              style="width:100%">       
              </div>

              <div class="ms-3" style="margin-top: 110px;">
                <h4>{{ Auth::user()->name }}</h4>
                <p>{{ Auth::user()->email }}</p>
              </div>

            </div>
            <div class="p-4 text-black" style="background-color: #f8f9fa;">
                
              <div class="d-flex justify-content-end text-center py-1">
                
                <div>
                  <p class="mb-1 h5">3</p>
                  <p class="small text-muted mb-0">Donation</p>
                </div>
                <div class="px-3">
                  <p class="mb-1 h5">0</p>
                  <p class="small text-muted mb-0">qwer</p>
                </div>
                <div>
                  <p class="mb-1 h5">0</p>
                  <p class="small text-muted mb-0">qwer</p>
                </div>
              </div>
            </div>
            

            <div class="card-body p-4 text-black">
              <div class="mb-5">
                <h3 class="fw-normal mb-1">About</h3>
                <div class="p-4" style="background-color: #f8f9fa;">
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                            <div class="col-2 ">
                                <p class="font-italic mb-3">Role:</p>
                                <p class="font-italic mb-3">Name:</p>
                                <p class="font-italic mb-3">Email:</p>
                                <p class="font-italic mb-3">Gender:</p>
                            </div>
                            <div class="col">
                                <p class="font-italic mb-3">{{ Auth::user()->role }} </p>
                                <p class="font-italic mb-3">{{ Auth::user()->name }} </p>
                                <p class="font-italic mb-3">{{ Auth::user()->email }} </p>
                                <p class="font-italic mb-3">Female</p>
                            </div>
                        </div>
                        </div>

                        <div class="col-6">
                            <div class="row">
                            <div class="col-2">
                                <p class="font-italic mb-3">Age:</p>
                                <p class="font-italic mb-3">HP no.:</p>
                                <p class="font-italic mb-3">Birthday:</p>
                                <p class="font-italic mb-3">Address:</p>
                            </div>
                            <div class="col">
                                <p class="font-italic mb-3">22 </p>
                                <p class="font-italic mb-3">011-35520430 </p>
                                <p class="font-italic mb-3">30 April 2000 </p>
                                <p class="font-italic mb-3">17, Jalan SL17, Bandar Sungai Long, Selangor </p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
              </div>

              
              
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class=" fw-normal mb-0">Donation Record</h3>
                <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
              </div>

              <div class="card mb-3">
                <div class="card-header">
                  1
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-11">
                            <h5 class="card-title">Donation to Pusat Kebajikan Sayang on 21 Febuary 2022</h5>
                            <p class="card-text">Total: RM 500</p>
                        </div>
                        <div class="col align-self-end">
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>        
                </div>
              </div>

              <div class="card mb-3">
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
             
                          
              {{-- <div class="row g-2">
                <div class="col mb-2">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp"
                    alt="image 1" class="w-100 rounded-3">
                </div>
                <div class="col mb-2">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(107).webp"
                    alt="image 1" class="w-100 rounded-3">
                </div>
              </div> --}}
            </div>
          </div>
        </div>         
       


<style>
body {
/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1))
}
</style>