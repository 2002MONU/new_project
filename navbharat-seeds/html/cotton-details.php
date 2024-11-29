<?php include("header.php") ?>

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Cotton Seeds Details</h1>
      <!-- <ul class="breadcumb-menu">
        <li><a href="index.html">Home</a></li>
        <li>Cotton Seeds Details</li>
      </ul> -->
    </div>
  </div>
</div>



<!-- Section 1: Image and Text -->
<section class="row  about-product">
  <div class="col-lg-6 col-md-12  productroad" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
    <img src="images/c1.png" alt="Product Image">
  </div>
  <div class="col-lg-6 col-md-12"    data-aos="fade-left">
    <h2>Alebela</h2>
    <div class="p-3 mb-3">
      <div class="p-3 mb-3 text-center">
        <ul class="list-unstyled product-list">
          <li>
            <img src="images/ar4.png" alt="Plant height">
            <span>Plant height: 150-170 cms</span>
          </li>
          <li>
            <img src="images/ar4.png" alt="No of monopodia">
            <span>No of monopodia: 2-3</span>
          </li>
          <li>
            <img src="images/ar4.png" alt="Days to Maturity">
            <span>Days to Maturity: 170-180</span>
          </li>
          <li>
            <img src="images/ar4.png" alt="Boll size">
            <span>Boll size: Medium (6.5-7.0gm)</span>
          </li>
          <li>
            <img src="images/ar4.png" alt="Staple length">
            <span>Staple length (MHL): 29.0 mm</span>
          </li>
          <li>
            <img src="images/ar4.png" alt="Leaf hairiness">
            <span>Leaf hairiness: Medium hairy</span>
          </li>
        </ul>
      </div>


    </div>

  

  </div>
</section>



<!-- <section class="brocher-section">
  <div class="container ">
    <div class="row">
      <div class="col-md-6"  data-aos="fade-up-right">
        <div class="brochure-card">
          <img src="images/brocher.jpg" alt="Brochure 1">

        </div>
      </div>
      <div class="col-md-6"  data-aos="fade-up-left">
        <div class="brochure-card">
          <img src="images/brocher.jpg" alt="Brochure 2">

        </div>
      </div>
    </div>
    <div class="buttons-section"  data-aos="flip-left">
      <button class="brocher-download-button"><a href="link/to/your/brochure1.pdf" download>
          Brocher Download
        </a></button>
      <button class="brocher-download-button"><a href="link/to/your/brochure1.pdf" download>
          Brocher Download
        </a></button>
    </div>
  </div>
</section> -->


<section class="brochure-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6" data-aos="fade-up-right">
        <div class="brochure-card">
          <img src="images/brocher.jpg" alt="Brochure 1" onclick="openPopup(0)">
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-up-left">
        <div class="brochure-card">
          <img src="images/brocher.jpg" alt="Brochure 2" onclick="openPopup(1)">
        </div>
      </div>
    </div>
    <div class="buttons-section"  data-aos="flip-left">
      <button class="brocher-download-button"><a href="link/to/your/brochure1.pdf" download>
          Brocher Download
        </a></button>
      <button class="brocher-download-button"><a href="link/to/your/brochure1.pdf" download>
          Brocher Download
        </a></button>
    </div>
  </div>
</section>

<div id="popup" class="popup">
  <div class="popup-content">
    <button class="popup-close" onclick="closePopup()"><i class="fa fa-times"></i></button>
    <button class="popup-prev" onclick="prevImage()">&#9664;</button>
    <img id="popup-image" src="" alt="Popup Image">
    <button class="popup-next" onclick="nextImage()">&#9654;</button>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init();

  const images = [
    'images/brocher.jpg',
    'images/brocher.jpg'
  ];

  let currentIndex = 0;

  function openPopup(index) {
    currentIndex = index;
    document.getElementById('popup-image').src = images[currentIndex];
    document.getElementById('popup').style.display = 'flex';
  }

  function closePopup() {
    document.getElementById('popup').style.display = 'none';
  }

  function prevImage() {
    currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
    document.getElementById('popup-image').src = images[currentIndex];
  }

  function nextImage() {
    currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
    document.getElementById('popup-image').src = images[currentIndex];
  }
</script>

<!-- Section 2: Full-Width Video -->
<section class=" align-items-center product-video-section">
 
    
  <div class="vid-sec-vid">
  <video src="video/nature.mp4"   controls muted="" loop=""  ></video>
  </div>
  
</section>

<section class="bg-smoke2 space" data-bg-src="assets/img/bg/service_bg_1.png">
  <div class="container">
    <div class="row justify-content-md-between justify-content-center align-items-end">
      <div class="col-md-8 mb-n2 mb-md-0">
        <div class="title-area text-center text-md-start">
          
          <h2 class="sec-title">Related  Seeds</h2>
        </div>
      </div>
      <div class="col-auto">
        <div class="sec-btn">
          <div class="icon-box">
            <button data-slick-prev="#serviceSlider1" class="slick-arrow default">
              <i class="far fa-chevrons-left"></i>
            </button>
            <button data-slick-next="#serviceSlider1" class="slick-arrow default">
              <i class="far fa-chevrons-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="row slider-shadow ot-carousel" id="serviceSlider1" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-focuson-select="false">
      <div class="col-sm-6 col-lg-4 ">
      <div class="card product-card">
          <a href="cotton-details.php"><img src="images/c1.png" class="card-img-top" alt="Product Image"></a>
          <!-- <hr class="products-below"> -->
          <div class="card-body text-center">
            <a href="cotton-details.php"><h5 class="card-title  ">Hybrid Cotton</h5></a>
            <p class="card-text  ">Hybrid Cotton</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 ">
      <div class="card product-card">
          <a href="cotton-details.php"><img src="images/c2.png" class="card-img-top" alt="Product Image"></a>
          <!-- <hr class="products-below"> -->
          <div class="card-body text-center">
            <a href="cotton-details.php"><h5 class="card-title  ">Hybrid Cotton</h5></a>
            <p class="card-text  ">Hybrid Cotton</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 ">
      <div class="card product-card">
          <a href="cotton-details.php"><img src="images/c3.png" class="card-img-top" alt="Product Image"></a>
          <!-- <hr class="products-below"> -->
          <div class="card-body text-center">
            <a href="cotton-details.php"><h5 class="card-title  ">Hybrid Cotton</h5></a>
            <p class="card-text  ">Hybrid Cotton</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
      <div class="card product-card">
          <a href="cotton-details.php"><img src="images/c4.png" class="card-img-top" alt="Product Image"></a>
          <!-- <hr class="products-below"> -->
          <div class="card-body text-center">
            <a href="cotton-details.php"><h5 class="card-title  ">Hybrid Cotton</h5></a>
            <p class="card-text  ">Hybrid Cotton</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 ">
      <div class="card product-card">
          <a href="cotton-details.php"><img src="images/c5.png" class="card-img-top" alt="Product Image"></a>
          <!-- <hr class="products-below"> -->
          <div class="card-body text-center">
            <a href="cotton-details.php"><h5 class="card-title  ">Hybrid Cotton</h5></a>
            <p class="card-text  ">Hybrid Cotton</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 ">
      <div class="card product-card">
          <a href="cotton-details.php"><img src="images/c3.png" class="card-img-top" alt="Product Image"></a>
          <!-- <hr class="products-below"> -->
          <div class="card-body text-center">
            <a href="cotton-details.php"><h5 class="card-title  ">Hybrid Cotton</h5></a>
            <p class="card-text  ">Hybrid Cotton</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 ">
      <div class="card product-card">
          <a href="cotton-details.php"><img src="images/c6.png" class="card-img-top" alt="Product Image"></a>
          <!-- <hr class="products-below"> -->
          <div class="card-body text-center">
            <a href="cotton-details.php"><h5 class="card-title  ">Hybrid Cotton</h5></a>
            <p class="card-text  ">Hybrid Cotton</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 ">
      <div class="card product-card">
          <a href="cotton-details.php"><img src="images/c1.png" class="card-img-top" alt="Product Image"></a>
          <!-- <hr class="products-below"> -->
          <div class="card-body text-center">
            <a href="cotton-details.php"><h5 class="card-title  ">Hybrid Cotton</h5></a>
            <p class="card-text  ">Hybrid Cotton</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>















<style>
    /* Custom styles for the brochure section and popup */
    .brochure-card img {
      width: 100%;
      cursor: pointer;
    }
    .popup {
      display: none;
      position: fixed;
      z-index: 9999;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      justify-content: center;
      align-items: center;
    }
    .popup-content {
      position: relative;
      max-width: 90%;
      max-height: 90%;
    }
    .popup-content img {
      width: 100%;
      height: auto;
    }
    .popup-close,
    .popup-prev,
    .popup-next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
    }
    .popup-close {
      top: 20px;
      right: 20px;
    }
    .popup-prev {
      left: 20px;
    }
    .popup-next {
      right: 20px;
    }
  </style>




<style>
  .product-list img {
    width: 30px;
    height: 30px;
    margin-right: 10px;
  }

  .product-list li {
    display: flex;
    align-items: center;
    padding: 10px;
    border-bottom: 1px solid #ccc;
  }

  .product-list li:last-child {
    border-bottom: none;
  }

  .product-details .col-5 img {
    width: 100%;
    height: auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .product-details .table {
    margin-top: 20px;
  }

  .product-details .table th,
  .product-details .table td {
    text-align: center;
  }

  .product-details .video-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 200px;
    overflow: hidden;
    max-width: 100%;
    background: #000;
  }

  .product-details .video-container iframe,
  .product-details .video-container object,
  .product-details .video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }


  .product-video-section {
    padding: 100px;
    background-color: darkcyan;
  }


  .about-product {
    padding: 30px 30px;
  }

  .about-product p {
    text-align: justify;
  }

  .product-table-section {
    padding: 50px 120px;
  }



  .brocher-section {
    padding: 10px 150px;
  }






  .brochure-card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 0px;
    overflow: hidden;
    margin-bottom: 20px;
    padding: 7px;
  }

  .brochure-card img {
    width: 100%;
    height: auto;
    border-radius: 0px;
  }

  .download-button {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
  }

  .download-button .btn {
    flex: 1;
    margin: 0 5px;
  }

  .btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
  }

  .buttons-section {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .buttons-section a {
    color: white;
  }

  .buttons-section a:hover {
    color: lavender;
  }

  .brocher-download-button {
    height: 40px;
    border-radius: 25px;
    margin: 5px;
    padding: 5px 15px;
    background-color: #009944;
    color: white !important;
    z-index: 2;
    border: 0;
  }

  .brocher-download-button:hover {
    height: 40px;
    border-radius: 25px;
    margin: 5px;
    padding: 5px 15px;
    background-color: orange;
    color: green !important;
    z-index: 2;
    border: 0;
  }
</style>



<?php include("footer.php") ?>