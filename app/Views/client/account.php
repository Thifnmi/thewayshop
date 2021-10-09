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
                <form class="form-material form-horizontal m-t-30" method="POST" action="<?= base_url() ?>/Account/edit" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-8" for="example-text">Tài khoản</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" minlength="4" id="username" name="username" readonly="readonly" class="form-control field left editacc" readonly="readonly" value="<?= $_SESSION['customer']['username'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="password">Mật khẩu</span>
                        </label>
                        <div class="col-md-12">
                            <input type="password" required minlength="8" id="password" name="password" readonly="readonly" class="form-control editacc" placeholder="password" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Phải bao gồm ít nhất 01 chữ số, 01 chữ cái viết thường, 01 chữ cái viết hoa, 01 ký tự đặc biệt và ít nhất 08 ký tự">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="fName">Họ và tên</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" required id="fName" name="fullname" readonly="readonly" class="form-control editacc" placeholder="enter your full name" value="<?= $_SESSION['customer']['fullname'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label class="col-md-6" for="gender">Giới tính</span></label>
                            <label class="col-md-4" for="bdate">Ngày sinh</span></label>
                        </div>
                        <div class="col-md-6" style="display:inline-block;">
                            <select class="form-control" id="gender" disabled="true">
                                <option value="0" <?php if($_SESSION['customer']['gender'] == 0){ echo "selected";}?>>Nam</option>
                                <option value="1" <?php if($_SESSION['customer']['gender'] == 1){ echo "selected";}?>>Nữ</option>
                            </select>
                        </div>
                        <div class="col-md-5" style="display:inline-block;float:right">
                            <input type="date" required id="bdate" name="birthday" readonly="readonly" class="form-control mydatepicker editacc" value='<?= $_SESSION['customer']['birthday'] ?>'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="email">Email</span></label>
                        <div class="col-md-12">
                            <input type="email" required id="email" name="email" class="form-control field left editacc" readonly="readonly" placeholder="enter your email" value="<?= $_SESSION['customer']['email'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="phone">Số điện thoại</span>
                        </label>
                        <div class="col-md-12">
                            <input type="tel" required maxlength="11" id="phone" name="phone" readonly="readonly" class="form-control editacc" placeholder="enter your phone" value="<?= $_SESSION['customer']['phone_number'] ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="address">Địa chỉ</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" required id="address" name="address" readonly="readonly" class="form-control editacc" placeholder="enter your address" value="<?= $_SESSION['customer']['address'] ?>">
                        </div>
                    </div>
                    <div class="form-group" id="ggg" style="float:right; padding-right: 10px">
                        <button type="button" id="edit" class="btn btn-warning" style="margin-right:5px">Sửa</button>
                        <button type="submit" style="display: none;" class="btn btn-info waves-effect waves-light m-r-10" id='btnacc' name="submit">Lưu</button>
                        <button type="button" style="display: none;" id="cancel" class="btn btn-inverse waves-effect waves-light">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("edit").addEventListener("click", () => {
        document.getElementById('password').readOnly = false;
        document.getElementById('gender').disabled = false;
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
        document.getElementById('gender').disabled = true;
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