    <section class="cta-contact-area">
            <div class="container">
                <div class="cta-contact-wrap fade-wrapper">
                    <div class="section-heading mb-40 white-content">
                        <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5">Empower Your Future: Master the IELTS with Confidence</h4>
                        <h2 class="section-title" data-text-animation="fade-in-right" data-split="char" data-duration="0.6" data-stagger="0.03">We’re Ready to teach You</h2>
                    </div>
                    <div class="cta-contact-btn-wrap fade-top">
                        <div class="cta-contact-btn"><a href="contact.html" class="rr-primary-btn">Book a demo</a></div>
                        <div class="cta-contact-info white-content">
                            <div class="icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                            <div class="content">
                                <span>CAll Us Anytime</span>
                                <a href="tel:+923105499929">(+92) 310 549 9929</a>
                            </div>
                        </div>
                    </div>
                    <div class="cta-contact-img">
                        <img src="<?=ROOT?>assets/image/girl.png" alt="cta">
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ cta-contact-area -->

        <footer class="footer-section footer-2 footer-10 bg-dark-1">
            <div class="container">
               <br>
               <br>
               <br>
                   
                <div class="row footer-wrap">
                     <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                        <a href="index.html"><img src="<?=ROOT?>assets/image/logowhite.png" style="width:250px; height: 250px;" alt="logo"></a>
                    </div>                             
                    <br>
                   <ul style="margin-left:20px;" class="social-list">
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/profile.php?id=61560917115358"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/sevenplusielts/"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-header">
                                <h3 class="widget-title">Legal</h3>
                            </div>
                            <ul class="footer-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                             
                            </ul>
                        </div>
                    </div>
                  
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-header">
                                <h3 class="widget-title">Contact Us</h3>
                            </div>
                            <ul class="address-list">
                                <li><a href="mailto:support@sevenplusielts.com">support@sevenplusielts.com</a></li>
                                <li><a href="tel:+923105499929">(+92) 310 549 9929</a></li>
                                <li>2589 Dorland Street Luke INUA <br> Berlin, Germany</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-header">
                                <h3 class="widget-title">Reach to our location</h3>
                            </div>
                            <div id="map"></div>
                        </div>
                    </div>
                 
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row copyright-content">
                        <div class="col-lg-6 col-md-12">
                            <p class="mb-0">© 2024 Seven Plus IELTS. All Rights Reserved. Developed By M.Qazzafi</p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <ul class="copyright-list">
                                <li><a href="contact.html">Security</a></li>
                                <li><a href="contact.html">Privacy & Cookie Policy</a></li>
                                <li><a href="contact.html">Terms of Services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ./ footer-section -->
    </div>
</div>

        <div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>
        <!--scrollup-->

        <div id="theme-toogle" class="switcher-button">
            <div class="switcher-button-inner-left"></div>
            <div class="switcher-button-inner"></div>
        </div>


       <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoicWF6bWFkZG94eCIsImEiOiJjbTRwdWV4ZmowbnZ0MmtxNmNwcGpybXIwIn0.8CH8H1fe5NVGuJovXq8viA'; // Replace with your Mapbox access token
        var map = new mapboxgl.Map({
            container: 'map', // container id
            style: 'mapbox://styles/mapbox/streets-v11', // style URL
            center: [73.0798456, 33.6316929], // Replace with San Francisco coordinates
            zoom: 12 // starting zoom
        });

        var marker = new mapboxgl.Marker()
            .setLngLat([73.0798456, 33.6316929]) // Replace with San Francisco coordinates
            .addTo(map);
    </script>

        <!-- JS here -->
        <script src="<?=ROOT?>assets/js/vendor/jquary-3.6.0.min.js"></script>
        <script src="<?=ROOT?>assets/js/vendor/bootstrap-bundle.js"></script>
        <script src="<?=ROOT?>assets/js/vendor/imagesloaded-pkgd.js"></script>
        <script src="<?=ROOT?>assets/js/vendor/waypoints.min.js"></script>
        <script src="<?=ROOT?>assets/js/vendor/venobox.min.js"></script>
        <script src="<?=ROOT?>assets/js/vendor/odometer.min.js"></script>
        <script src="<?=ROOT?>assets/js/vendor/meanmenu.js"></script>
        <script src="<?=ROOT?>assets/js/vendor/jquery.isotope.js"></script>
        <script src="<?=ROOT?>assets/js/vendor/swiper.min.js"></script>
        <script src="<?=ROOT?>assets/js/vendor/split-type.min.js"></script>
        <script src="<?=ROOT?>assets/js/vendor/gsap.min.js"></script>
        <script src="<?=ROOT?>assets/js/vendor/scroll-trigger.min.js"></script>
        <script src="<?=ROOT?>assets/js/vendor/scroll-smoother.js"></script>
        <script src="<?=ROOT?>assets/js/vendor/jquery.carouselTicker.js"></script>
        <script src="<?=ROOT?>assets/js/vendor/nice-select.js"></script>
        <script src="<?=ROOT?>assets/js/slider.js"></script>
        <script src="<?=ROOT?>assets/js/contact.js"></script>
        <script src="<?=ROOT?>assets/js/main.js"></script>
    </body>
</html>
