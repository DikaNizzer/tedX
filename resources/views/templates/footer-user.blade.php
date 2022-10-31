<footer>
  <div class="footer-top mt-4" style="color: #ffffff">
	<h5>This independent TEDx event is operated under lincense from TED</h5>
  </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/home/index.js"></script>
<script src="js/home/navbar.js"></script>

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
