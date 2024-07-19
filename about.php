<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NhatMinh Hotel-ABOUT</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php require("inc/links.php"); ?>
</head>

<style>
  .box:hover {
    border-top-color: var(--teal) !important;
  }
 
.swiper-slide h5 {
    margin-top: 10px; /* Tăng khoảng cách phía trên tên */
}

</style>


<body class="bg-light">


  <!-- HEADER  -->
  <?php require("inc/header.php"); ?>

  <div class="my-5 px-4 ">
    <h2 class="fw-bold h-font text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3" style="max-width: 600px; margin: auto; line-height: 1.6;">
    Nestled on the serene Phú Yên coast, NM Hotel offers a five-star luxury escape. With world-class amenities including a spa, gourmet dining, and a private beach, our hotel provides an unmatched blend of comfort and elegance. Experience the ultimate relaxation and luxury at NM Hotel—your exclusive seaside retreat.
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 col-md-6 mb-4 order-lg-1 oder-md-1 oder-2 ">
        <h3 class="mb-3">
          Norwood Jesse Jethro - CEO & Founder NM Hotel
        </h3>
        <p>
        Norwood Jesse Jethro, CEO and Founder of NM Hotels, is a prominent figure in the hospitality industry, known for his visionary leadership and innovative approach. During his two-decade career, Norwood has transformed NM Hotel into a luxury destination in Phu Yen, seamlessly integrating cutting-edge technology with exceptional service. His efforts not only enhanced the hotel's reputation but also promoted local culture and economy. Recognized with numerous awards, Norwood's passion and strategic initiatives continue to set industry standards, keeping NM Hotel at the forefront of the luxury hospitality sector.
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2  oder-md-2 order-1">
        <img src="Hotel-Booking-Website-Assets-main/images/about/about.jpg" class="w-100">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 boder-top boder-4 text-center box">
          <img src="Hotel-Booking-Website-Assets-main/images/about/hotel.svg" width="70px">
          <h4 class="mt-3">100+ ROOMS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 boder-top boder-4 text-center .box">
          <img src="Hotel-Booking-Website-Assets-main/images/about/customers.svg" width="70px">
          <h4 class="mt-3">2000+ CUSTOMERS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 boder-top boder-4 text-center .box">
          <img src="Hotel-Booking-Website-Assets-main/images/about/rating.svg" width="70px">
          <h4 class="mt-3">500+ REVIEWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 boder-top boder-4 text-center .box">
          <img src="Hotel-Booking-Website-Assets-main/images/about/staff.svg" width="70px">
          <h4 class="mt-3">500+ STAFFS </h4>
        </div>
      </div>
    </div>
  </div>

  <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Hotel-Booking-Website-Assets-main/images/about/quan-ly-nam-1.jpeg" class="w-100">
          <h5> Michael Johnson</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Hotel-Booking-Website-Assets-main/images/about/quan-ly-nu.jpg" class="w-100">
          <h5> Emily Davis</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Hotel-Booking-Website-Assets-main/images/about/quan-ly-nam-2.jpeg" class="w-100">
         <h5> David Smith</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Hotel-Booking-Website-Assets-main/images/about/quan-ly-nu-1.jpg" class="w-100">
          <h5>Jessica Taylor</h5>
        </div>
         <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Hotel-Booking-Website-Assets-main/images/about/bep-truong-2_11zon.jpg" class="w-100">
          <h5> David Duncan</h5>
        </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!-- FOOTER  -->
  <?php require("inc/footer.php"); ?>


 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView:4,
    spaceBetween:40,
    breakpoints:{
       320:{
        slidesPerView:1,
       },
       640:{
        slidesPerView:1,
       },
       768:{
        slidesPerView:3,
       },
       1024:{
        slidesPerView:3,
       },
      }
  });
</script>


</body>

</html>