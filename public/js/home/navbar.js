// Navbar and Collapse Button manipulation
let collapseButton = document.querySelector(".navbar-toggler");
let navbar = document.querySelector("nav");
let scrolled = false;
let collapseOn = false;
$(window).scroll(function () {
	if ($(this).scrollTop() > 60) {
		$("nav").addClass("bg-dark shadow");
		scrolled = true;
	} else {
		if (collapseOn == false) {
			$("nav").removeClass("bg-dark shadow");
		}
		scrolled = false;
	}
});

collapseButton.addEventListener("click", () => {
	if (scrolled == false) {
		$("nav").toggleClass("bg-dark");
		$("nav").removeClass("transition-color");
	}
	if (collapseOn == false) {
		collapseOn = true;
	} else {
		collapseOn = false;
		$("nav").addClass("transition-color");
	}
	console.log(collapseOn);
});

//second navbar
window.onscroll = function () {
	scrollFunction();
};


