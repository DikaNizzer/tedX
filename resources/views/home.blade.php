
@include('templates.header')
@include('templates.navbar')



<section class="home" id="home">
    <div class="home-header" >
      <div class="row" >
        <div class="col-lg-5">
            <h1>Feel Safe with Uncertainty.</h1>
            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam exercitationem illo quia architecto quibusdam laboriosam necessitatibus, ducimus, rem beatae tempora libero praesentium explicabo velit labore adipisci possimus aut assumenda illum.</h5>
            <button class="btn get-started" data-bs-toggle="modal" data-bs-target="#registerModal"> GET STARTED</button>
        </div>
        <div class="col-auto"></div>
        <div class="col-lg-6 " style="margin-left:3%">
          <img src="images/home-img.png"class="img-fluid home-img" style="margin:auto">
        </div>
      </div>
    </div>
  
    <div class="container" data_aos="fade-up">
      

    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content auth-modal">
      <div class="modal-header auth-header">
        <div class="row" style="padding:5px">
          <div class="col-10">
            <img src="images/dark-logo.png" height="auto" width="60%" style="margin:5px" alt="">
          </div>
          <div class="col-2 justify-content-end">
            <button type="button" class="btn-close end-0" data-bs-dismiss="modal" aria-label="Close" style="margin:5px" ></button>
          </div>
        </div>     
      </div>
      <div class="modal-body" style="padding:30px">
        <form action="">
          <div class="mb-4 mt-2">
            <label for="exampleFormControlInput1" class="form-label auth-label">Email </label>
            <input class="form-control auth-form" type="email" placeholder="Email" aria-label="default input example" required>
          </div>
          <div class="mb-4 mt-2">
            <label for="exampleFormControlInput1" class="form-label auth-label">Password </label>
            <input class="form-control auth-form" type="password" placeholder="Password" aria-label="default input example" required>
          </div>
          <div class="mb-4 mt-2">
            <label for="exampleFormControlInput1" class="form-label auth-label">Confirm Password </label>
            <input class="form-control auth-form" type="password" placeholder="Confirm Password" aria-label="default input example" required>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


@include('templates.footer')





