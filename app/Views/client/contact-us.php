<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Shop') ?>


<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Contact Us</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active"> Contact Us </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Contact Us  -->
<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="contact-info-left">
                    <h2>CONTACT INFO</h2>
                    <ul>
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i>Address: University of Transport Technology
                                <br>54 Phố Triều Khúc, Thanh Xuân Nam, Thanh Xuân, Hà Nội<br>
                            </p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:024 3854 4264">024 3854 4264</a></p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="contact-form-right">
                    <h2>GET IN TOUCH</h2>
                    <p>We are ready to answer your questions, please don't hesitate to contact us </p>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="phone" name="name" placeholder="Phone Number" required data-error="Please enter your Phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn hvr-hover" id="submit" type="submit">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart -->



<?= $this->endSection() ?>