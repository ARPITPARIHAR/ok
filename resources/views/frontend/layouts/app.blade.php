<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="css/lightbox.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<title>The Dausa Central Co-Oprative Bank</title>
        @yield('style')
    </head>
<body>
    @include('frontend.includes.navbar')


        @yield('content')
    @include('frontend.includes.footer')

@yield('script')
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.matchHeight.js"></script>
<script src="js/lightbox-plus-jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>


<script>

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

function sdbr_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function sdbr_close() {
  document.getElementById("mySidebar").style.display = "none";
}

if($(".inner-box").length !=0) {
	$(".inner-box").matchHeight({
		byrow: false,
	});
}

$('.brnch_slide').owlCarousel({
	loop: true,
	margin: 10,
	nav: true,
	dots: false,
	autoplay: true,
	autoplayTimeout: 3000,
	navText : ['<img src="images/slide_prv.png">','<img src="images/slide_nxt.png">'],
	responsive: {
	  0: {
		items: 1
	  },
	  768: {
		items: 1
	  },
	  992: {
		items: 2
	  }
	}
});
$('.glry_slide').owlCarousel({
	loop: true,
	margin: 10,
	nav: true,
	dots: false,
	autoplay: true,
	autoplayTimeout: 3000,
	navText : ['<img src="images/glry_prv.png">','<img src="images/glry_nxt.png">'],
	responsive: {
	  0: {
		items: 1
	  },
	  768: {
		items: 3
	  },
	  992: {
		items: 4
	  }
	}
});

</script>
</body>
</html>
