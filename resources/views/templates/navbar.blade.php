<!-- Navbar -->
<nav class="navbar navbar-expand-md  fixed-top transition-color pt-4 pb-4" >
	<div class="container">
		<a class="navbar-brand" href="">
			<img src="images/navbar-logo.png" alt="tender+logo" width="auto" height="45">
		</a>
		<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">
			<ul class="navbar-nav mb-3 mb-md-0  mt-2 mt-lg-0 pe-lg-4 gap-3">
				<li class="nav-item">
					<a class="nav-link active link-danger text-center" href="" aria-current="page"><b>Home</b> <span class="visually-hidden">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light link-danger text-center" href=""><b>About</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light link-danger text-center" href=""><b>Event</b></a>
				</li>
			</ul>
			<?php if (isset($_SESSION['user_data'])) : ?>
				<div class="dropdown d-none d-md-block">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<iconify-icon inline icon="bi:person" width="20" height="20"></iconify-icon>
					</a>
					<ul class="dropdown-menu dropdown-menu-end my-2">
						<li><a class="dropdown-item" href="#">Profile</a></li>
						<li><a class="dropdown-item" href="">Logout</a></li>
					</ul>
				</div>
			<?php else : ?>
				<div class="d-grid gap-3 d-md-block">
					<a href="" type="button" name="" id="" class="btn btn-custom-daftar mx-1 px-4">RESISTER</a>
					<a href="" type="button" name="" id="" class="btn btn-custom-login ml-1 px-4">LOGIN</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</nav>