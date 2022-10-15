<footer>

</footer>



{{-- <div class="row" id="float-call">
	<div class="col-10">
		<a href="http://wa.me/+628112632799" class="float-call">
			<span>
				<img src="<?= base_url("assets/img/whatsapp.svg") ?>" alt="">
			</span>
			<span>
				Hubungi kami via WhatsApp
			</span>
		</a>
	</div>
	<div class="col-2">
		<a href="#" class="back-to-top">
			<img src="<?= base_url("assets/img/back-to-top.svg") ?>" class="float-img" alt="">
		</a>
	</div>
</div> --}}

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>

<script>
	let floatcall = document.getElementById("float-call");

	floatcall.style.visibility = "hidden";

	window.onscroll = function() {
		scrollFunctionFooter();
	};

	function scrollFunctionFooter() {
		if (window.scrollY > 100) {
			floatcall.style.visibility = "visible";
		} else {
			floatcall.style.visibility = "hidden";
		}
	}

</script>

<script>
	timeline(document.querySelectorAll('.timeline'), {
		forceVerticalMode: 800,
		mode: 'horizontal',
		visibleItems: 6,
		moveItems: 3
	});
</script>

<script>
	timeline(document.querySelectorAll('.timeline'), {
		forceVerticalMode: 800,
		mode: 'horizontal',
		visibleItems: 6,
		moveItems: 3
	});
</script>
</body>

</html>