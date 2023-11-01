<!DOCTYPE html>
<html>
<head>
	<title>Padlock</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" ></script>
</head>
<body>

<?php include 'header.php';?>


<section class="inner_banner">
    <img src="images/inner-banner.jpg" alt="">
</section>

<section class="product_list">
    <div class="container">

    </div>
</section>



<?php include 'footer.php';?>


  <script>

  	var swiper = new Swiper(".blog_slider", {
      slidesPerView: 3,
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-button-next-blog",
        prevEl: ".swiper-button-prev-blog",
      },
    });


	var swiper = new Swiper(".client_slider", {
      slidesPerView: 5,
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-button-next-blog",
        prevEl: ".swiper-button-prev-blog",
      },
    });




  	var swiper = new Swiper(".testi_slider", {
      slidesPerView: 2,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });



    var swiper = new Swiper(".featured_product_slider", {
      slidesPerView: 4,
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-button-next-prod-feat",
        prevEl: ".swiper-button-prev-prod-feat",
      },
    });




  	var swiper = new Swiper(".product_slider", {
      slidesPerView: 4,
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-button-next-prod",
        prevEl: ".swiper-button-prev-prod",
      },
    });



    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>
</html>