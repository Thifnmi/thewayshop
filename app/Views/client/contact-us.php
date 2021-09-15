<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Shop') ?>


<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Liên hệ</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item active"> Liên hệ </li>
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
                    <h2>THÔNG TIN LIÊN HỆ </h2>
                    <ul>
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i>Địa chỉ: Đại học công nghệ Giao thông vận tải
                                <br>54 Phố Triều Khúc, Thanh Xuân Nam, Thanh Xuân, Hà Nội<br>
                            </p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone-square"></i>Hotline: <a href="tel:024 3854 4264">024 3854 4264</a></p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="contact-form-right">
                    <h2>Liên hệ</h2>
                    <p>Chúng tôi luôn sẵn lòng được trả lời những câu hỏi của bạn, đừng ngần ngại mà liên hệ với chúng tôi </p>
                    <form method="post" action="<?= base_url('Contact/sendMail') ?>">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Tên của bạn" required data-error="Hãy điền tên của bạn">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" placeholder="Địa chỉ email của bạn" id="email" class="form-control" name="email" required data-error="Hãy điền email của bạn">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Số điện thoại của bạn" required data-error="Hãy điền số của bạn">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Tin nhắn của bạn" rows="4" data-error="Hãy điền câu hỏi của bạn" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn hvr-hover" id="submit" type="submit">Gửi tin nhắn</button>
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