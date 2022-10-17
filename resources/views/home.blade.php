
@include('templates.header')
@include('templates.navbar')



<section class="home" id="home">
    <div class="home-header" >
      <div class="row" >
        <div class="col-lg-5">
            {{-- <h1>Feel Safe with Uncertainty.</h1> --}}
            <h1 class="ml11 mb-4">
              <span class="text-wrapper">
                <span class="line line1"></span>
                <span class="letters">Feel Safe with Uncertainty</span>
              </span>
            </h1>         
            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam exercitationem illo quia architecto quibusdam laboriosam necessitatibus, ducimus, rem beatae tempora libero praesentium explicabo velit labore adipisci possimus aut assumenda illum.</h5>
            <button class=" get-started mb-4 mt-4" data-bs-toggle="modal" data-bs-target="#registerModal"> GET STARTED</button>
        </div>
        <div class="col-auto"></div>
        <div class="col-lg-6 " style="margin-left:3%">
          <img src="images/home-img.png"class="img-fluid home-img" style="margin:auto">
        </div>
      </div>
    </div>
</section>





@include('templates.footer')










