
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
                <span class="letters">Epiphany on Ephemeral</span>
              </span>
            </h1>         
            <h5>Epiphany is associated with a life-changing realization and things that don't last forever are
              ephemeral. It starts from the fact that our life is dynamic, sometimes we’ve been through the
              happiest moment, and sometimes we have to accept that we lost something that we never
              expected. That’s all part of the ups and downs in our life. Like it or not, we have to live it.
              That’s why we believe that this phenomenon needs to be shared to level up our awareness
              and readiness as humans to face this. Starting with ourselves first, we hope this value will be
              spread then as wide as possible like the tagline of TEDx itself. How society will respond is up
              to them to see this phenomenon from their views, every way is unique.</h5>
            <button class=" get-started mb-4 mt-4" data-bs-toggle="modal" data-bs-target="#registerModal"> GET STARTED</button>
        </div>
        <div class="col-auto"></div>
        <div class="col-lg-6 " style="margin-left:3%">
          <img src="images/home-img.png"class="img-fluid home-img" style="margin:auto">
        </div>
      </div>
    </div>
    @include('templates.footer')
</section>
















