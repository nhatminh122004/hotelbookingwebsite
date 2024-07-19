<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NhatMinh Hotel-HOME</title>
<?php require("inc/links.php"); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<style>
  .availability-form{
    margin-top: -50px ;
    z-index: 2; 
    position: relative;
  }

  @media screen and (max-width:575px) {
    .availability-form{
    margin-top: 20px ;
    padding: 0 35px ;
    }
  }
 
</style>

<!-- .poppins-regular {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
font-style: normal;
}

.poppins-medium {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: normal;
}

.poppins-semibold {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-style: normal;
}

.merienda-<uniquifier {
  font-family: "Merienda", cursive;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}  
-->

<body class="bg-light">

    <?php require("inc/header.php"); ?>

  <!--Caroisel -->

  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="Hotel-Booking-Website-Assets-main/images/carousel/1.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="Hotel-Booking-Website-Assets-main/images/carousel/2.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="Hotel-Booking-Website-Assets-main/images/carousel/3.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="Hotel-Booking-Website-Assets-main/images/carousel/4.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="Hotel-Booking-Website-Assets-main/images/carousel/5.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="Hotel-Booking-Website-Assets-main/images/carousel/6.png" class="w-100 d-block" />
        </div>
      </div>
    </div>
  </div>

  <!-- Check availability -->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Adult</label>
              <select class="form-select shadow-none">                
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500;">Children</label>
              <select class="form-select shadow-none">          
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<!-- Our Rooms-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

<div class="container">
  <div class="row">
<!-- Standard Room-->
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="Hotel-Booking-Website-Assets-main/images/rooms/IMG_11892.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Standard Room</h5>
          <h6 class="mb-4">100$/night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features:</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              1 Rooms
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              1 Bathroom
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              1 Balcony
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              2 Sofa
            </span>
          </div>
          <div class="facilities mb-4 ">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Wifi
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Television
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Mini bar
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Room service 24/7
            </span>
          </div>
          <div class="guests mb-4 ">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              5 Adults
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              4 Children
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Booking Now</a>
            <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">More details></a>
          </div>
        </div>
      </div>
    </div>
<!-- Deluxe Room-->
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="Hotel-Booking-Website-Assets-main/images/rooms/Deluxe Room (1).jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Deluxe Room</h5>
          <h6 class="mb-4">1000$/night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features:</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              3 Rooms
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              2 Large Bathroom
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              3 Sofa Luxurious
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              2 View Of The Sea
            </span>
          </div>
          <div class="facilities mb-4 ">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Wifi
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Safe Deposit Box
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Mini bar
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Room service 24/7
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Breakfast Buffet
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Seafood Buffet
            </span>
          </div>
          <div class="guests mb-4 ">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              5 Adults
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              4 Children
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Booking Now</a>
            <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">More details></a>
          </div>
        </div>
      </div>
    </div>
<!-- Superior Room-->
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="Hotel-Booking-Website-Assets-main/images/rooms/Superior Room (1).jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Superior Room</h5>
          <h6 class="mb-4">300$/night</h6>       
          <div class="features mb-4">
            <h6 class="mb-1">Features:</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              2 Rooms
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              1 Bathroom
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              1 Balcony
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              1 View Of The Sea
            </span>
          </div>
          <div class="facilities mb-4 ">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Wifi
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Safe Deposit Box
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Mini bar
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Room service 24/7
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              Breakfast Buffet
            </span>
          </div>
          <div class="guests mb-4 ">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              5 Adults
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap ">
              4 Children
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Booking Now</a>
            <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">More details></a>
          </div>
        </div>
      </div>
    </div>
    



    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
    </div>
    </div>
</div>

<!-- OUR FACILITIES -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Hotel-Booking-Website-Assets-main/images/facilities/IMG_43553.svg" width="80px" >
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Hotel-Booking-Website-Assets-main/images/facilities/IMG_47816.svg" width="80px" >
      <h5 class="mt-3">Spa</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Hotel-Booking-Website-Assets-main/images/facilities/fitness.svg" width="80px" >
      <h5 class="mt-3">Fitness Centre</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Hotel-Booking-Website-Assets-main/images/facilities/ironing-board.svg" width="80px" >
      <h5 class="mt-3">Laundry Ironing</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Hotel-Booking-Website-Assets-main/images/facilities/istockphoto-656403368-1024x1024.svg" width="80px" >
      <h5 class="mt-3">Mini Bar</h5>
    </div>
  </div>
</div>

<!-- Testimonials  -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
<div class="container mt-5">
    <div class="swiper swiper-tesimonials">
      <div class="swiper-wrapper">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="Hotel-Booking-Website-Assets-main/images/facilities/star.svg" width="30px">
            <h6 class="m-0 ms-2">Ethan Parker</h6>
          </div>
          <p>
            The grandeur of the hotel surpassed my expectations. Every detail exuded luxury, from the opulent lobby to the exquisite dining.The staff’s attentiveness made my stay unforgettable, and the panoramic views were simply breathtaking
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="Hotel-Booking-Website-Assets-main/images/facilities/star.svg" width="30px">
            <h6 class="m-0 ms-2">David Ngo</h6>
          </div>
          <p>
            This hotel redefines elegance. The room’s plush interiors and state-of-the-art amenities provided a haven of comfort. The gourmet cuisine was a culinary delight, and the impeccable service added to the overall splendor.
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="Hotel-Booking-Website-Assets-main/images/facilities/star.svg" width="30px">
            <h6 class="m-0 ms-2">Sophia Bennett</h6>
          </div>
          <p>
            A true gem among five-star hotels. The serene spa experience was rejuvenating, and the vibrant nightlife was exhilarating. The attention to detail in every aspect, from decor to service, made my visit truly special.
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
              <i class="bi bi-star-fill text-warning "></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
</div>



<!-- REACH US -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white">
      <iframe class="w-100" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.0862168233903!2d109.32046969999999!3d13.093722199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316fed005f53311d%3A0xd6ee13a9c7432350!2sNM%20Hotel!5e0!3m2!1svi!2s!4v1718615719912!5m2!1svi!2s" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   
      </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4 ">
        <h5>Call us</h5>
        <a href="tel: +84 364244786" class="d-inline-block mb-2 text-decoration-none text-dark ">
          <i class="bi bi-telephone-inbound-fill"></i> +122 4421844130
        </a>
        <br>
        <a href="tel: +84 364244786" class="d-inline-block text-decoration-none text-dark ">
          <i class="bi bi-telephone-inbound-fill"></i> +84 303953819
        </a>
      </div>
      <div class="bg-white p-4 rounded mb-4 ">
        <h5>Follow us</h5>
        <a href="https://x.com/HotelNm2206?t=m6XUd2sRF9JdEy5SBrDLEg&s=09" class="d-inline-block mb-3">
         <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-twitter-x me-l"></i> Twitter
          </span>
        </a>
        <br>
        <a href="https://www.facebook.com/profile.php?id=61561347149305&mibextid=ZbWKwL" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i> Facebook
           </span>
         </a>
         <br>
         <a href="https://www.instagram.com/nmhotel.2206?igsh=MXJtaHllMXBwZHJqZQ==" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1"></i> Instagram
           </span>
         </a>
         <br>
         <a href="https://www.threads.net/@nmhotel.2206" class="d-inline-block ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-threads-fill me-1"></i>Threads
           </span>
         </a>
         <br>
      </div>
    </div>
  </div>
</div>



<!-- FOOTER  -->
<?php require("inc/footer.php"); ?>


 
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });

    var swiper = new Swiper(".swiper-tesimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      initialSlide: 1,  
      slidesPerView: "auto",
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      // pagination: {
      //   el: ".swiper-pagination",
      // },
      breakpoints:{
       320:{
        slidesPerView:1,
       },
       640:{
        slidesPerView:1,
       },
       768:{
        slidesPerView:2,
       },
       1024:{
        slidesPerView:3,
       },
      }
    });
  </script>
</body>

</html>