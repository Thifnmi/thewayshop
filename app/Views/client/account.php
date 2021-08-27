<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Shop') ?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Hồ sơ của tôi </h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Hồ sơ của tôi</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start My Account  -->
<div class="row justify-content-md-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style='margin:20px 100px'>
                <form class="form-material form-horizontal m-t-30" method="POST" action="#" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-8" for="example-text">Tài khoản</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="username" name="username" readonly="readonly" class="form-control field left editacc" readonly="readonly" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="password">Mật khẩu</span>
                        </label>
                        <div class="col-md-12">
                            <input type="password" id="password" name="password" readonly="readonly" class="form-control editacc" placeholder="enter your password" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="fName">Họ và tên</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="fName" name="fullname" readonly="readonly" class="form-control editacc" value="" placeholder="enter your full name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="bdate">Ngày sinh</span>
                        </label>
                        <div class="col-md-12">
                            <input type="date" id="bdate" name="birthday" readonly="readonly" class="form-control mydatepicker editacc" value=''>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="email">Email</span>
                        </label>
                        <div class="col-md-12">
                            <input type="email" id="email" name="email" class="form-control field left editacc" readonly="readonly" value='' placeholder="enter your email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="phone">Số điện thoại</span>
                        </label>
                        <div class="col-md-12">
                            <input type="tel" maxlength="11" id="phone" name="phone" readonly="readonly" value='' class="form-control editacc" placeholder="enter your phone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="phone">Địa chỉ</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="address" name="address" value='' readonly="readonly" class="form-control editacc" placeholder="enter your address">
                        </div>
                    </div>
                    <div class="form-group" style="float:right; padding-right: 10px">
                        <button type="button" id="edit" class="btn btn-warning" style="margin-right:30px">Sửa</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10" id='btnacc' name="submit">Lưu</button>
                        <button type="button" onclick="window.history.back();" class="btn btn-inverse waves-effect waves-light">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("edit").addEventListener("click", () => {
        document.getElementById('password').readOnly = false;
        document.getElementById('fName').readOnly = false;
        document.getElementById('bdate').readOnly = false;
        document.getElementById('email').readOnly = false;
        document.getElementById('phone').readOnly = false;
        document.getElementById('address').readOnly = false;
    });
</script>

<!-- End My Account -->

<?= $this->endSection() ?>