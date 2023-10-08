<section class="contact-page-area py-130 rpy-100 rel z-1" id="conatct-us">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="our-location-part rmb-55 wow fadeInUp delay-0-2s animated"
                     style="visibility: visible; animation-name: fadeInUp;">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="section-title mb-60">
                                <span class="sub-title mb-15">Contact Us</span>
                                <h2>Let's talk</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-80 pb-30">
                        <div class="col-sm-6">
                            <div class="our-location-address mb-40">
                                <h5>Turkey</h5>
                                <a class="mailto" href="mailto:support@gmail.com">support@gmail.com</a><br>
                                <a class="callto" href="callto:+905415750103"><i class="fas fa-phone"></i> +90 (541) 575
                                    0103</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="our-location-address mb-40">
                                <h5>Myanmar (Burma)</h5>
                                <a class="mailto" href="mailto:support@gmail.com">support@gmail.com</a><br>
                                <a class="callto" href="callto:+9599573979973"><i class="fas fa-phone"></i> +95 (995)
                                    7397 9973</a>
                            </div>
                        </div>
                    </div>
                    <h4>Follow Us</h4>
                    <div class="social-style-two pt-15">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="contact-page-form form-style-one wow fadeInUp delay-0-2s animated"
                     style="visibility: visible; animation-name: fadeInUp;">
                    <div class="section-title mb-35">
                        <span class="sub-title mb-15">Get Free Quote</span>
                        <h3>Drop Us a Message</h3>
                    </div>
                    <form id="contactForm" class="contactForm" name="contactForm" method="post" novalidate="true">
                        @csrf
                        <div class="row gap-60 pt-15">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name"><i class="far fa-user"></i></label>
                                    <input type="text" id="fullname" name="fullname" class="form-control" value=""
                                           placeholder="Full Name" required="" data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email"><i class="far fa-envelope"></i></label>
                                    <input type="email" id="email" name="email" class="form-control" value=""
                                           placeholder="Email Address" required=""
                                           data-error="Please enter your Email Address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>What can JasperStack do for you ?</label><br>
                                    <input type="radio" name="type" value="new_project"> <span>Create an amazing new product 🚀</span><br>
                                    <input type="radio" name="type" value="improve_product"> <span>Make my great product even greater 💪</span><br>
                                    <input type="radio" name="type" value="others"> Something else<br>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message"><i class="far fa-pencil"></i></label>
                                    <textarea name="message" id="message" class="form-control" rows="2"
                                              placeholder="Message" required=""
                                              data-error="Please enter your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group pt-5 mb-0">
                                    <button type="submit" class="theme-btn style-two w-100 disabled"
                                            style="pointer-events: all; cursor: pointer;">Send Message us <i
                                            class="far fa-arrow-right"></i></button>
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
