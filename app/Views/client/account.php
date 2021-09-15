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
                            <input type="text" id="username" name="username" readonly="readonly" class="form-control field left editacc" readonly="readonly" value="<?= $_SESSION['customer']['username']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="password">Mật khẩu</span>
                        </label>
                        <div class="col-md-12">
                            <input type="password" id="password" name="password" readonly="readonly" class="form-control editacc" placeholder="password" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="fName">Họ và tên</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="fName" name="fullname" readonly="readonly" class="form-control editacc" placeholder="enter your full name" value="<?= $_SESSION['customer']['fullname']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="bdate">Ngày sinh</span>
                        </label>
                        <div class="col-md-12">
                            <input type="date" id="bdate" name="birthday" readonly="readonly" class="form-control mydatepicker editacc" value='<?= $_SESSION['customer']['birthday']?>'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="email">Email</span>
                        </label>
                        <div class="col-md-12">
                            <input type="email" id="email" name="email" class="form-control field left editacc" readonly="readonly" placeholder="enter your email" value="<?= $_SESSION['customer']['email']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="phone">Số điện thoại</span>
                        </label>
                        <div class="col-md-12">
                            <input type="tel" maxlength="11" id="phone" name="phone" readonly="readonly" class="form-control editacc" placeholder="enter your phone" value="<?= $_SESSION['customer']['phone_number']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="phone">Địa chỉ</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="address" name="address" readonly="readonly" class="form-control editacc" placeholder="enter your address" value="<?= $_SESSION['customer']['address']?>">
                        </div>
                    </div>
                    <div class="form-group" id="ggg" style="float:right; padding-right: 10px">
                        <button type="button" id="edit" class="btn btn-warning" style="margin-right:30px">Sửa</button>
                        <button type="submit" style="display: none;" class="btn btn-info waves-effect waves-light m-r-10" id='btnacc' name="submit">Lưu</button>
                        <button type="button" style="display: none;" id="cancel"  class="btn btn-inverse waves-effect waves-light">Hủy</button>
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
        document.getElementById('btnacc').style.display = '';
        document.getElementById('edit').style.display = 'none';
        document.getElementById('cancel').style.display = '';
    });
    document.getElementById("cancel").addEventListener("click", () => {
        document.getElementById('password').readOnly = true;
        document.getElementById('fName').readOnly = true;
        document.getElementById('bdate').readOnly = true;
        document.getElementById('email').readOnly = true;
        document.getElementById('phone').readOnly = true;
        document.getElementById('address').readOnly = true;
        document.getElementById('btnacc').style.display = 'none';
        document.getElementById('edit').style.display = '';
        document.getElementById('cancel').style.display = 'none';
    });
</script>

<!-- End My Account -->

<?= $this->endSection() ?>