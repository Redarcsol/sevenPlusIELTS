<?php 
include('layout/header.view.php');
?>
 <div id="smooth-wrapper">
        <div id="smooth-content">

        <section class="page-header" data-background="<?=ROOT?>assets/image/pagetitlecover.jpg">
            <div class="overlay"></div>
            <div class="shapes">
                <div class="shape shape-1"><img src="<?=ROOT?>assets/img/shapes/page-header-shape-1.png" alt="shape"></div>
                <div class="shape shape-2"><img src="<?=ROOT?>assets/img/shapes/page-header-shape-2.png" alt="shape"></div>
                <div class="shape shape-3"><img src="<?=ROOT?>assets/img/shapes/page-header-shape-3.png" alt="shape"></div>
            </div>
            <div class="container">
                <div class="page-header-content text-center">
                    <h1 class="title">Contact Us</h1>
                    <h4 class="sub-title"><a class="home" href="<?=ROOT?>">Home </a><span></span><a class="inner-page" href="<?=ROOT?>home/contact_us"> Contact Us</a></h4>
                </div>
            </div>
        </section>
        <!-- ./ page-header -->

        <section class="contact-section pt-130 pb-130">
            <div class="container">
                <div class="row gy-lg-0 gy-5">
                    <div class="col-lg-5 col-md-12">
                        <div class="contact-content">
                            <div class="section-heading">
                                <h4 class="sub-heading after-none" data-text-animation="fade-in" data-duration="1.5">Contact Us</h4>
                                <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Let’s Learn together</h2>
                                <p>We value your time and are here to provide you with all the information and support you need to
								succeed in the IELTS exam. Whether you’re a beginner or preparing for a higher band score, our
								team is ready to help you achieve your goals. Don’t hesitate to get in touch – we’re excited to
								assist you!</p>
                            </div>
                            <div class="contact-list">
                                <div class="list-item">
                                    <div class="icon">
                                        <i class="fa-light fa-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Our Address</h4>
                                        <p>House No: 21/B Affendi Colony, near Iqra Roza-tul-Itfal School, Rawalpindi.</p>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="icon">
                                        <i class="fa-light fa-phone"></i>
                                    </div>
                                    <div class="content">
                                    	<p>For immediate assistance, feel free to reach out to us via WhatsApp. We are available to chat and provide quick answers to your questions.</p>
                                    	<br>
                                        <h4 class="title">Whatsapp Number</h4>
                                        <span><a href="tel:+923105499929 ">(+92)3105499929</a></span>
                                        <span><a href="mailto:: imranieltsavenue@gmail.com">General Queries: imranieltsavenue@gmail.com</a></span>
                                        <span><a href="mailto:: sevenplusielts@gmail.com">Course Registration: sevenplusielts@gmail.com</a></span>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="icon">
                                        <i class="fa-light fa-link"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Follow Us on Social Media:</h4>

                                            <span style="display: inline-block;">
					                            <a href="https://www.facebook.com/profile.php?id=61560917115358"><i class="fab fa-facebook-f"></i></a>
					                        </span>
					                        <span style="margin-left:2%;display: inline-block;">
					                            <a href="https://www.instagram.com/sevenplusielts/"><i class="fab fa-instagram"></i></a>
					                        </span>
					                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="blog-contact-form form-2">
                            <div class="request-form">
                                <form action="mail.php" method="post" id="ajax_contact" class="form-horizontal">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="form-item">
                                                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-item">
                                                <input type="text" id="email" name="email" class="form-control" placeholder="Email address*">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-item">
                                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone number (Optional)*">
                                            </div>
                                        </div>
                                    </div>
                                      <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="form-item">
                                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject*">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="form-item message-item">
                                                <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-btn">
                                        <button id="submit" class="rr-primary-btn" type="submit">Submit Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ contact-section -->

        <div class="map-wrapper pb-130">
            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d660.0123713736283!2d73.07984559301055!3d33.63169287920004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x65f2c19f469d1ee3%3A0x5646a39e0130db38!2sImran%20IELTS%20Avenue!5e0!3m2!1sen!2s!4v1736622137639!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- ./ map-wrapper -->
<?php 
include('layout/footer.view.php');
?>