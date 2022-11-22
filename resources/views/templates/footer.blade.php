<footer>
  <div class="footer-top mt-4">
	<h5>This independent TEDx event is operated under lincense from TED</h5>
  </div>
  <div class="footer-top ">
    {{-- <h5>This independent TEDx event is operated under lincense from TED</h5> --}}
    
<center>
  <iconify-icon icon="mdi:instagram" style="color: #9c0202;" width="30" height="30"></iconify-icon>
  <iconify-icon icon="mdi:linkedin" style="color: #9c0202;" width="30" height="30"></iconify-icon>
  <iconify-icon icon="iconoir:tiktok" style="color: #9c0202;" width="30" height="30"></iconify-icon>

</center>
  </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/home/index.js"></script>
<script src="js/home/navbar.js"></script>

<script>
  let exist = '{{Session::has('errors')}}';
  let msg = '{{Session::get('errors')}}';
  msg = msg.replace(/&quot;/g, '\"');

  if(exist){
      let json = JSON.parse(msg);
      let emailErr = ((typeof (json["email"]) !== 'undefined') ? json["email"] : '');
      let passErr = ((typeof (json["password_confirmation"]) !== 'undefined') ? json["password_confirmation"] : '');
      let alertText = emailErr + "\n" + passErr;
      alert(alertText);
  }
</script>

<script>
  let msglog = '{{Session::get('alert')}}';
  let loginErrMsg = '{{Session::get('loginErr')}}';
  
  if(msglog){
    alert(msglog);
    $(function() {
      $('#loginModal').modal('show');
    });
  }

  if(loginErrMsg){
      alert(loginErrMsg);
      $(function() {
        $('#loginModal').modal('show');
      });
  }

  

</script>
