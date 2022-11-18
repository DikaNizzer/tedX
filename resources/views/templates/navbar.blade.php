<!-- Navbar -->
<nav class="navbar navbar-expand-md fixed-top transition-color pt-4 pb-4" >
	<div class="container">
		<a class="navbar-brand" href="">
			<img src="images/logo-ted.png" alt="logoted" width="auto" height="45">
		</a>
		<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">
            @if (Auth::user())
                <ul class="navbar-nav mb-3 mb-md-0  mt-2 mt-lg-0 pe-lg-4 gap-3">
                    <li class="nav-item">
                        <a class="nav-link active link-light text-center" href="/" aria-current="page"><b>Home</b> <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light link-light text-center" href="/home"><b>Dashboard</b></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link text-light link-danger text-center" href=""><b>About</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light link-danger text-center" href=""><b>Event</b></a>
                    </li> --}}
                </ul>
                <div class="d-md-flex d-grid gap-2 d-md-block">
					<form action="/peserta-logout" method="POST">
						@csrf
						<center><button class="btn-custom-login" style="margin:auto"> LOGOUT</button></center>
					</form>
				</div>
            @else
                <ul class="navbar-nav mb-3 mb-md-0  mt-2 mt-lg-0 pe-lg-4 gap-3">
                    <li class="nav-item">
                        <a class="nav-link active link-light text-center" href="/" aria-current="page"><b>Home</b> <span class="visually-hidden">(current)</span></a>
                    </li>
                </ul>
				<div class="d-md-flex d-grid gap-2 d-md-block">
					<button class="btn-custom-daftar" style="margin:auto" data-bs-toggle="modal" data-bs-target="#registerModal"> REGISTER</button>
					<button class="btn-custom-login" style="margin:auto" data-bs-toggle="modal" data-bs-target="#loginModal"> LOGIN</button>
				</div>
            @endif
		</div>
	</div>
</nav>



<!-- Modal -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
	  <div class="modal-content auth-modal">
		<div class="modal-header auth-header">
		  <div class="row" style="padding:5px">
			<div class="col-10">
			  <img src="images/tedxhitam.png" height="auto" width="60%" style="margin:5px" alt="">
			</div>
			<div class="col-2 justify-content-end">
			  <button type="button" class="btn-close end-0" data-bs-dismiss="modal" aria-label="Close" style="margin:5px" ></button>
			</div>
		  </div>
		</div>
		<div class="modal-body" style="padding:40px">
		  <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Register for an account</h5>
		  <form action="/peserta-regis" method="post">
				@csrf
			<div class="mb-4 mt-4">
			  <label for="email" class="form-label auth-label">Email </label>
			  <input id="email" name="email" class="form-control auth-form" type="email" aria-label="default input example"  required>
			</div>
			<div class="mb-4 mt-2">
			  <label for="password" class="form-label auth-label">Password </label>
			  <input id="password" name="password" class="form-control auth-form" type="password" aria-label="default input example" required>
			</div>
			<div class="mb-4 mt-2">
			  <label for="password_confirmation" class="form-label auth-label">Confirm Password </label>
			  <input id="password_confirmation" name="password_confirmation" class="form-control auth-form" type="password" aria-label="default input example" required>
			</div>

			<center><button type="submit" class="register" style="margin:auto" > GET STARTED</button></center>
		  </form>

			  <h5 style="font-size:12px; text-align:center; margin-top:10px;">Already have an account? <span class="modal-login" data-bs-toggle="modal" data-bs-target="#loginModal">Login</span></h5>


		</div>

	  </div>
	</div>
  </div>



  <!-- Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
	  <div class="modal-content auth-modal">
		<div class="modal-header auth-header">
		  <div class="row" style="padding:5px">
			<div class="col-10">
			  <img src="images/tedxhitam.png" height="auto" width="60%" style="margin:5px" alt="">
			</div>
			<div class="col-2 justify-content-end">
			  <button type="button" class="btn-close end-0" data-bs-dismiss="modal" aria-label="Close" style="margin:5px" ></button>
			</div>
		  </div>
		</div>
		<div class="modal-body" style="padding:40px">
		  <h5 style="text-align:center; font-size:14px; font-weight:700; margin-bottom:20px;">Log into your account</h5>
		  <form action="/peserta-login" method="post">
				@csrf
			<div class="mb-4 mt-4">
			  <label for="email_login" class="form-label auth-label">Email </label>
			  <input id="email_login" name="email" class="form-control auth-form" type="email" aria-label="default input example" required>
			</div>
			<div class="mb-4 mt-2">
			  <label for="password_login" class="form-label auth-label">Password </label>
			  <input id="password_login" name="password" class="form-control auth-form" type="password" aria-label="default input example" required>
			</div>

			<center><button type="submit" class="register" style="margin:auto" >LOGIN </button></center>
		  </form>

			  <h5 style="font-size:12px; text-align:center; margin-top:10px;">Don't have an account? <span class="modal-login" data-bs-toggle="modal" data-bs-target="#registerModal">Register</span></h5>
		</div>

	  </div>
	</div>
  </div>
