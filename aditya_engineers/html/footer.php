
   
   <!-- Popup Container -->
   <div id="enquiryPopup" class="popup-overlay">
      <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <!-- Enquiry Form -->
        <form action="submit_form.php" method="post" id="enquiryForm">
          <div class="form-group">
            <label for="name"><i class="fa-solid fa-user"></i> Name:</label>
            <input type="text" id="name" name="name" required >
          </div>
          <div class="form-group">
            <label for="mobile"
              ><i class="fa-solid fa-phone"></i> Mobile:</label
            >
            <input type="tel" id="mobile" name="mobile" required >
          </div>
          <div class="form-group">
            <label for="email"
              ><i class="fa-solid fa-envelope"></i> Email:</label
            >
            <input type="email" id="email" name="email" required >
          </div>
          <div class="form-group">
            <label for="message"
              ><i class="fa-solid fa-comment"></i>Your Message:</label
            >
            <textarea id="message" name="message" required></textarea>
          </div>
          <!-- <button type="submit" id="submitBtn">Submit</button> -->
          <div class="input-area1">
            <button type="submit" class="header-btn1">
              Submit Now <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </form>
      </div>
    </div>

    <script>
      function openPopup() {
        document.getElementById("enquiryPopup").style.display = "flex";
      }

      function closePopup() {
        document.getElementById("enquiryPopup").style.display = "none";
      }
    </script>
   
   
   
   
   
   <!--===== FOOTER AREA STARTS =======-->
    <div id="contact-us" class="footer1-section-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="footer-logo-content sp4">
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="logo-content">
                    <img src="./assets/images/footer-logo.png" alt="" >
                    <p>
                      Our goal is to demystify the process, address your
                      concerns, and empower you with the knowledge to embark.
                    </p>
                    <ul>
                      <li>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6">
                  <div class="space30 d-md-block d-lg-none"></div>
                  <div class="service-heading">
                    <h2>Quick Links</h2>
                    <ul>
                      <li><a href="index.php">Home </a></li>
                      <li><a href="about-us.php">About Us  </a></li>
                      <li><a href="services.php">Services</a></li>
                      <li><a href="our-clients.php"> Our Clients</a></li>
                      <li><a href="gallery.php">Gallery</a></li>
                    </ul>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="space30 d-md-block d-lg-none"></div>
                  <div class="service-heading contact">
                    <h2>Contact US</h2>
                    <ul>
                      <li>
                        <a href="tel:+919848022338">
                          <span class="icons"
                            ><i class="fa-solid fa-phone"></i></span
                          ><span>+91 9848022338</span></a
                        >
                      </li>
                      <li>
                        <a href="mailto:info@mail.com">
                          <span class="icons"
                            ><i class="fa-solid fa-envelope"></i></span
                          ><span>info@mail.com </span></a
                        >
                      </li>
                      <li>
                        <a href="#">
                          <span class="icons"
                            ><i class="fa-solid fa-location-dot"></i></span
                          ><span>Hyderabad, Telanagana, India</span></a
                        >
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6">
                  <div class="space30 d-block d-md-none"></div>
                  <div class="service-heading">
                    <h2>Our Location</h2>
                    <div class="map-container">
                      <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15228.822949646317!2d78.42444131644213!3d17.385044475024327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91db2e5405eb%3A0x8ec24c62fc110e0!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1698580797483!5m2!1sen!2sin"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                      >
                      </iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="copyright">
              <div class="row">
                <div class="col-md-6">
                  <p>© Copyright 2024 Aditya Engineers. All Right Reserved</p>
                </div>
                <div class="col-md-6">
                  <p>
                    Design & Developed By
                    <a href="https://thecolourmoon.com/" target="_blank">
                      Colour Moon</a
                    >
                    Technologies
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--===== FOOTER AREA ENDS =======-->

    <!--===== JS SCRIPT LINK =======-->
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/fontawesome.js"></script>
    <script src="assets/js/plugins/aos.js"></script>
    <script src="assets/js/plugins/counter.js"></script>
    <script src="assets/js/plugins/gsap.min.js"></script>
    <script src="assets/js/plugins/ScrollTrigger.min.js"></script>
    <script src="assets/js/plugins/Splitetext.js"></script>
    <script src="assets/js/plugins/sidebar.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/mobilemenu.js"></script>
    <script src="assets/js/plugins/owlcarousel.min.js"></script>
    <script src="assets/js/plugins/gsap-animation.js"></script>
    <script src="assets/js/plugins/nice-select.js"></script>
    <script src="assets/js/plugins/slick-slider.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.30/dist/fancybox.umd.js"></script>
  </body>
</html>
