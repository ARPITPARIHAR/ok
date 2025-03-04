<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CarryCode</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

</head>




<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Main CSS File -->
<link href="assets/css/main.css" rel="stylesheet">

<title>The Dausa Central Co-Oprative Bank</title>
        @yield('style')
    </head>
<body>
    @include('frontend.includes.navbar')


        @yield('content')
    @include('frontend.includes.footer')

@yield('script')
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>


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
