<head>
	@include('layouts.nav-bar-all')
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Resource Request</title>
	<div class="p-5">
		<div class="card-group">
			<div class="card" style="width: 50%;">
				<img src="{{asset("images/HomeForSpecialPeople.png")}}" class="card-img-top rounded" alt="HomeForSpecialPeople">
				<div class="card-header text-center">
					<h5 class="card-title">联系我们 Contact us</h5>
				</div>
				<div class="card-body p-4">
					<p class="card-text text-left">Location: <a href="https://goo.gl/maps/X2HeDasWg9fzyRkH7" target="_blank" class="link-primary">35, Jln Rakan 11, Taman Rakan, Cheras, 43000 Kajang, Selangor</a></p>
					<p class="card-text text-left">Contact number: 03-87337611</p>
					<p class="card-text text-left">Website: <a href="https://leshancheras.org/" target="_blank" class="link-primary">Link to their website</a></p>
				</div>
				<div class="card-header text-center">
					<h5 class="card-title">开发探访时间 Open for Visits Hour</h5>
				</div>
				<div class="card-body p-4">
					<p class="card-text text-left">星期一至星期天 Monday to Sunday</p>
					<p class="card-text text-left">早上9点至下午5点 9.00AM ~ 5.00PM</p>
				</div>

			</div>

			<div class="card" style="width: 50%;">
				<div class="card-header text-center">
					<h2 class="card-title">乐善儿童残缺福中</h2>
					<h5 class="card-subtitle mb-2 text-muted">Persatuan Insan Istimewa Cheras Selangor</h5>
				</div>


				<div class="card-body p-4">
					<p class="card-text text-center">雪兰莪州的一所 NGO 中心，乐善儿童残缺福利中心已经成立12年。</p>
					<p class="card-text text-center">An NGO centre in Selangor, Persatuan Insan Istimewa Cheras Selangor has been established for 12 years.</p>
				</div>
				<div class="card-header text-center">
					<h5 class="card-title">紧缺资源 Resources Needed</h5>
					<h6 class="card-subtitle mb-2 text-muted"></h6>
				</div>
				<div class="card-body text-right">
					<ul class="list-group list-group-flush list-group-numbered text-left">
						<li class="list-group-item">Rice - 30kg</li>
						<li class="list-group-item">Cooking oil - 30L</li>
						<li class="list-group-item">Toilet paper</li>
						<li class="list-group-item">Washing machine - 1</li>
						<li class="list-group-item">Matress - 3</li>
						<ul>
				</div>
				<div class="card-header text-center">
					<h5 class="card-title">所需服务 Services Needed</h5>
					<h6 class="card-subtitle mb-2 text-muted"></h6>
				</div>
				<div class="card-body text-right">
					<ul class="list-group list-group-flush list-group-numbered text-left">
						<li class="list-group-item">Cleaner - 1</li>
						<ul>
				</div>
				<div class="card-body text-center">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
						开始捐献 Donate Now
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">捐赠选项 Donation Option</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body p-5">
									<a href="/donate/self" class="btn btn-primary">手动寄出 Self-Delivery</a>
									<p class="mb-2 text-muted p-2">手动寄出物品并且填写寄件单号。<br>Send the resources to the address below and fill in the tracking number.</p>
									<a href="/donate/shop" class="btn btn-primary">网上购物 Shop Online</a>
									<p class="mb-2 text-muted p-2">在网上购物并且将以下资料设置为收件人。<br>Set the given information as order recipient.</p>
									<br>
									<div class="text-left">
									<h6 class="text-left">邮寄资料 Recipient Information</h6>
									<p class="text-left">Persatuan Insan Istimewa ($uid)<br>017-6339887<br>35, Jln Rakan 11, Taman Rakan, Cheras, 43000 Kajang, Selangor</p>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		@include('layouts.footer')
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>