<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Shop') ?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>My Profile </h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active">My Profile</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start My Account  -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form class="form-material form-horizontal m-t-30" method="POST" action="#" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">User Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="username" readonly="readonly" class="form-control field left" readonly="readonly" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="password">Password</span>
                        </label>
                        <div class="col-md-12">
                            <input type="password" id="password" name="password" readonly="readonly" class="form-control" placeholder="enter your password" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="fName">Full Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="fName" name="fullname" readonly="readonly" class="form-control" value="" placeholder="enter your full name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="bdate">Date of Birth</span>
                        </label>
                        <div class="col-md-12">
                            <input type="date" id="bdate" name="birthday" readonly="readonly" class="form-control mydatepicker" value=''>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="email">Email</span>
                        </label>
                        <div class="col-md-12">
                            <input type="email" id="email" name="email" class="form-control field left" readonly="readonly" value='' placeholder="enter your email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="phone">Phone</span>
                        </label>
                        <div class="col-md-12">
                            <input type="tel" maxlength="11" id="phone" name="phone" readonly="readonly" value='' class="form-control" placeholder="enter your phone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="phone">Address</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="address" name="address" value='' class="form-control" placeholder="enter your address">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <button type="submit" class="btn btn-info waves-effect waves-light m-r-10" onClick='myFunc' id='btnacc' name="submit">Submit</button>
                            <button type="button" onclick="window.history.back();" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div> 

<script>
    document.getElementById('btnacc').onclick = function() {
        document.getElementsByClassName('form-control').removeAttribute('readonly');
    };
</script>
<!-- End My Account -->

<?= $this->endSection() ?>