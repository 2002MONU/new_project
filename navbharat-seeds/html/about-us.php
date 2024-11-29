<?php include("header.php") ?>



<style>
  .slider-container {
    overflow: hidden;
    width: 100%;
    position: relative;
    height: 70px;
    /* Adjust based on logo height */
  }

  .slider {
    display: flex;
    width: calc(100% * 3);
    /* 3 logos at a time */
    animation: slide-left 10s linear infinite;
  }

  .slider img {
    width: 100px;
    /* Logo width */
    margin: 0 10px;
    /* Space between logos */
  }

  /* Right to Left Animation */
  .slider.right-to-left {
    animation: slide-right 10s linear infinite;
  }

  @keyframes slide-left {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(-33.33%);
    }

    /* Slide 1/3 of total width */
  }

  @keyframes slide-right {
    0% {
      transform: translateX(33.33%);
    }

    /* Start from 1/3 */
    100% {
      transform: translateX(0);
    }
  }
</style>





<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">About Us</h1>

    </div>
  </div>
</div>
<section id="overview" class=" space  ">
  <div class="container">
    <div class="about-card">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-6 col-12">
          <div class="about-card__img">
            <img
              class="w-100"
              src="images/i2.jpg"
              alt="team image" />
          </div>
        </div>
        <div class="col-lg-7 col-md-6 col-12">
          <div class="about-card__box">
            <h2 class="about-card__title">Overview</h2>

            <p class="mb-30 ">
              Navbharat Seeds Pvt. Ltd. (NSPL) was established in 1981 in Ahmedabad, Gujarat, as a research-focused company dedicated to advancing agricultural practices through innovation. Our founders, Mr. R.J. Dhannawat and Dr. D.B. Desai, brought with them extensive experience in seed production, processing, and marketing, laying a strong foundation for the company’s growth.
            </p>
            <p class="mb-30 ">
              Over the years, NSPL has developed robust breeding programs for hybrid crop development, particularly in Castor, Cotton, Corn, Pearl Millet, Wheat, Mustard, Bajra and Vegetables. We have forged valuable partnerships with several State Agricultural Universities (SAUs) and international research institutes like ICRISAT, enabling us to stay at the forefront of crop improvement and seed technology.
            </p>

          </div>
        </div>
        <div class="col-12">
          <div class="about-card__box">
            <p class="mb-0 ">
              Our commitment to quality and innovation drives our research and development efforts, ensuring that our seeds meet the evolving needs of farmers while addressing market demands. The expertise of our team—comprising seasoned scientists, breeders, agronomists, and seed technologists with international experience—enables us to deliver superior quality seeds and cost-effective solutions. At NSPL, we are dedicated to empowering farmers and contributing to the agricultural sector through excellence in research, production, and marketing.
            </p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>





<section id="vision-mission" class=" space vis-miss-section">
  <h3 class="text-center mb-3"> Vision & Mission </h3>
  <div class="container">
    <div class="about-card">
      <div class="row align-items-center">
        <!-- Vision Card -->
        <div class="col-md-6 ">
          <div class="vm-card card shadow-lg p-3">
            <div class="row">
              <div class="col-8">
                <h4 class="vm-title">Vision <img src="images/v1.png" alt="" class="title-icon"></h4>
                <hr>
                <p class="vm-text">Strive for a distinguished position in the Indian Seed Industry through constant up-gradation of research process ensuring technological competitiveness and supplying superior quality value added products.</p>
              </div>
              <div class="col-4">
                <img src="images/v.jpg" alt="" class="img-fluid vm-image">
              </div>
            </div>
          </div>
        </div>
        <!-- Mission Card -->
        <div class="col-md-6 ">
          <div class="vm-card card shadow-lg p-3">
            <div class="row">
              <div class="col-4">
                <img src="images/m.jpg" alt="" class="img-fluid vm-image">
              </div>
              <div class="col-8">
                <h4 class="vm-title text-right">Mission <img src="images/m01.png" alt="" class="title-icon"></h4>
                <hr>
                <p class="vm-text">Our mission is to be a part in the national goal and to contribute whatever possible with the use of science and innovation in research in India, meeting farmers' demand for quality seeds.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section  id="leadership" class=" team space">
  <div class="container">
    <div class="title-area text-center">

      <h2 class="sec-title">Leadership</h2>
    </div>

    <div class="row gy-30">
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="ot-product product-grid">
          <div class="product-img"><img src="images/team1.jpg" alt="Product Image">

          </div>
          <div class="product-content">

            <h3 class="product-title"><a href="javascript:void(0);">Mounika Yedluri</a></h3><span class="desig">Manager</span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="ot-product product-grid">
          <div class="product-img"><img src="images/team1.jpg" alt="Product Image">

          </div>
          <div class="product-content">

          <h3 class="product-title"><a href="javascript:void(0);">Mounika Yedluri</a></h3><span class="desig">Manager</span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="ot-product product-grid">
          <div class="product-img"><img src="images/team1.jpg" alt="Product Image">

          </div>
          <div class="product-content">

          <h3 class="product-title"><a href="javascript:void(0);">Mounika Yedluri</a></h3><span class="desig">Manager</span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="ot-product product-grid">
          <div class="product-img"><img src="images/team1.jpg" alt="Product Image">

          </div>
          <div class="product-content">

          <h3 class="product-title"><a href="javascript:void(0);">Mounika Yedluri</a></h3><span class="desig">Manager</span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="ot-product product-grid">
          <div class="product-img"><img src="images/team1.jpg" alt="Product Image">

          </div>
          <div class="product-content">

          <h3 class="product-title"><a href="javascript:void(0);">Mounika Yedluri</a></h3><span class="desig">Manager</span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="ot-product product-grid">
          <div class="product-img"><img src="images/team1.jpg" alt="Product Image">

          </div>
          <div class="product-content">

          <h3 class="product-title"><a href="javascript:void(0);">Mounika Yedluri</a></h3><span class="desig">Manager</span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="ot-product product-grid">
          <div class="product-img"><img src="images/team1.jpg" alt="Product Image">

          </div>
          <div class="product-content">

          <h3 class="product-title"><a href="javascript:void(0);">Mounika Yedluri</a></h3><span class="desig">Manager</span>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="ot-product product-grid">
          <div class="product-img"><img src="images/team1.jpg" alt="Product Image">

          </div>
          <div class="product-content">

          <h3 class="product-title"><a href="javascript:void(0);">Mounika Yedluri</a></h3><span class="desig">Manager</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>


<section id="awards-accolades" class="awards-section">
  <div class="container">
    <div class="row align-itmes-center">
      <div class="col-6">
        <h3>Awards & Acolades</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ipsum quam eos pariatur, facere iste reiciendis tenetur repellendus modi officiis dolore, reprehenderit totam recusandae, nostrum odio odit inventore nobis dolores?
          Repudiandae saepe dolore recusandae enim eaque! Minus necessitatibus rerum aspernatur quaerat sit eius odio expedita libero ea consequuntur, corporis, recusandae tempora quod voluptatem possimus atque aperiam assumenda modi a eaque?
          Alias non suscipit, illum rem omnis ad dolorum quidem animi culpa quam incidunt eos veritatis reprehenderit facere modi vitae quisquam iure? Quaerat doloremque nam nostrum ipsum aut dolor exercitationem eum.</p>

      </div>

      <div class="col-6">
        <div class="awards-accolad">

          <!-- Left-to-right slider -->
          <div class="logo-slider-container">
            <div class="logo-slider" id="slider-left">
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l1.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l2.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l3.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l4.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l5.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l6.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l7.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l8.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l9.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l10.jpg" alt="Brand Logo" />
                </div>
              </div>
            </div>
          </div>

          <!-- Right-to-left slider -->
          <div class="logo-slider-container">
            <div class="logo-slider" id="slider-right">
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l1.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l2.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l3.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l4.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l5.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l6.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l7.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l8.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l9.jpg" alt="Brand Logo" />
                </div>
              </div>
              <div class="col-auto">
                <div class="brand-box">
                  <img src="images/l10.jpg" alt="Brand Logo" />
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>






    </div>

  </div>



</section>

<script>
  // Left-to-right slider
  const leftSlider = document.getElementById('slider-left');
  let leftIndex = 0;
  const totalImages = leftSlider.children.length;
  const imagesToShow = 3; // Number of images to show at once
  const interval = 3000; // Time between slides in milliseconds

  function slideLeft() {
    leftIndex += 1; // Move to the next set of images
    if (leftIndex > totalImages - imagesToShow) {
      leftIndex = 0; // Loop back to the start
    }
    updateSlider(leftSlider, leftIndex);
  }

  function updateSlider(slider, index) {
    const offset = index * (100 + 30); // 100px width + 30px (15px margin on both sides)
    slider.style.transform = `translateX(-${offset}px)`;
  }

  // Start sliding every 2 seconds for the left slider
  setInterval(slideLeft, interval);

  // Right-to-left slider
  const rightSlider = document.getElementById('slider-right');
  let rightIndex = totalImages - imagesToShow; // Start from the end

  function slideRight() {
    rightIndex -= 1; // Move to the previous set of images
    if (rightIndex < 0) {
      rightIndex = totalImages - imagesToShow; // Loop back to the end
    }
    updateSlider(rightSlider, rightIndex);
  }

  // Start sliding every 2 seconds for the right slider
  setInterval(slideRight, interval);
</script>




<section id="milestone" class="mile-stone">
  <div class="container-fluid blue-bg">
    <div class="container">
      <h2 class="pb-3 pt-2 text-center">Mile Stone</h2>

      <!-- First Section -->
      <div class="row align-items-center how-it-works">
        <div class="col-2 text-center bottom">
          <div class="circle circle-1">
            <i class="fas fa-users"></i> <!-- Icon for SadiraSoft -->
          </div>
        </div>
        <div class="col-6">
          <h5>Navbharat</h5>
          <p>United in both success and challenges, fostering a collaborative and supportive team environment.</p>
        </div>
      </div>

      <!-- Path between 1-2 -->
      <div class="row timeline">
        <div class="col-2">
          <div class="corner top-right"></div>
        </div>
        <div class="col-8">
          <hr>
        </div>
        <div class="col-2">
          <div class="corner left-bottom"></div>
        </div>
      </div>

      <!-- Second Section -->
      <div class="row align-items-center justify-content-end how-it-works">
        <div class="col-6 text-right">
          <h5>Growth Mindset</h5>
          <p>Embracing a 'Learn-It-All' attitude over a 'Know-It-All' mindset, continuously striving for personal and professional growth.</p>
        </div>
        <div class="col-2 text-center full">
          <div class="circle circle-2">
            <i class="fas fa-brain"></i> <!-- Icon for Growth Mindset -->
          </div>
        </div>
      </div>

      <!-- Path between 2-3 -->
      <div class="row timeline">
        <div class="col-2">
          <div class="corner right-bottom"></div>
        </div>
        <div class="col-8">
          <hr>
        </div>
        <div class="col-2">
          <div class="corner top-left"></div>
        </div>
      </div>

      <!-- Third Section -->
      <div class="row align-items-center how-it-works">
        <div class="col-2 text-center top">
          <div class="circle circle-3">
            <i class="fas fa-ban"></i> <!-- Icon for No Politics -->
          </div>
        </div>
        <div class="col-6">
          <h5>No Politics</h5>
          <p>Pursuing your ambitions and dreams without the constraints of organizational bureaucracy.</p>
        </div>
      </div>

      <!-- Path between 3-4 -->
      <div class="row timeline">
        <div class="col-2">
          <div class="corner top-right"></div>
        </div>
        <div class="col-8">
          <hr>
        </div>
        <div class="col-2">
          <div class="corner left-bottom"></div>
        </div>
      </div>

      <!-- Fourth Section -->
      <div class="row align-items-center justify-content-end how-it-works">
        <div class="col-6 text-right">
          <h5>Employee Respect</h5>
          <p>Valuing and empowering every team member to contribute their best, fostering a supportive and collaborative environment.</p>
        </div>
        <div class="col-2 text-center full">
          <div class="circle circle-4">
            <i class="fas fa-handshake"></i> <!-- Icon for Employee Respect -->
          </div>
        </div>
      </div>

    </div>
  </div>
</section>















<?php include("footer.php") ?>