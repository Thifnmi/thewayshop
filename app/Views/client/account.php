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

<div class="my-account-box-main">
    <div class="container">
        <div class="my-account-page">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon btn1">
                                <a href="#"> <i class="fa fa-gift"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4 class="btn1">Your Orders</h4>
                                <p>Track, return, or buy things again</p>
                            </div>

                        </div>
                    </div>
                    <!--Start Modal 1 -->
                    <div class="modal">
                        <div class="modal-content">
                            <h1>Ten khach hang</h1>
                            <div class="table-responsive">
                                <table id="example23" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Create On</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="obj-item">
                                            <td>1</td>
                                            <td>Nhẫn Vàng 18K đính đá CZ PNJ XMXMY001683 </td>
                                            <td>Nhẫn</td>
                                            <td>
                                                <input style="width: 50px" type="number" name="quantity" min="1">
                                            </td>
                                            <td>5.192.000VND</td>
                                            <td>
                                                <img width="50" height="50" src="<?= base_url() ?>/client/images/img-3.jpg">
                                            </td>
                                            <td>18/8/2021</td>
                                            <td>Shipping</td>
                                            <td>
                                                <span class="close">&times;</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <span>
                                    <button class="btn1 btn-info" style="float:right" id="save">Save</button>
                                    <button class="btn1 btn-cancel" style="float:right" id="cancel">Cancel</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- End Model 1 -->
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon btn2">
                                <a href="#"><i class="fa fa-lock"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4 class="btn2">Login &amp; security</h4>
                                <p>Edit login, name, and mobile number</p>
                            </div>
                            <!--Start Modal 2 -->
                            <div class="modal2">
                                <div class="modal-content2">
                                    <h1>khach hang</h1>
                                    <div class="table-responsive">
                                        <table id="example23" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>FullName</th>
                                                    <th>UserName</th>
                                                    <th>Password</th>
                                                    <th>Phone Number</th>
                                                    <th>Email Address</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="obj-item">
                                                    <td>Full Name</td>
                                                    <td>client1 </td>
                                                    <td> Password </td>
                                                    <td>0923123213</td>
                                                    <td>sadsa@gmail.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <span>
                                            <button class="btn2 btn-info" style="float:right" id="save">Save</button>
                                            <button class="btn2 btn-cancel2" style="float:right" id="cancel">Cancel</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Model 2 -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon btn3">
                                <a href="#"> <i class="fa fa-location-arrow"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4 class="btn3">Your Addresses</h4>
                                <p>Edit addresses for orders and gifts</p>
                            </div>
                            <!--Start Modal 3 -->
                            <div class="modal3">
                                <div class="modal-content3">
                                    <h1>Thong tin</h1>
                                    <div class="table-responsive">
                                        <table id="example23" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Your Address</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="obj-item">
                                                    <td>Your Address</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <span>
                                            <button class="btn3 btn-info" style="float:right" id="save">Save</button>
                                            <button class="btn3 btn-cancel3" style="float:right" id="cancel">Cancel</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Model 3 -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon btn4">
                                <a href="#"> <i class="fa fa-credit-card"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4 class="btn4">Payment options</h4>
                                <p>Edit or add payment methods</p>
                            </div>
                            <!--Start Modal 4 -->
                            <div class="modal4">
                                <div class="modal-content4">
                                    <h1 class="btn4">Payments</h1>
                                    <div class="table-responsive">
                                        <table id="example243" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Payment Method</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="obj-item">
                                                    <td class=dropdown-menu>
                                                        <select>
                                                            <option>Bank</option>
                                                            <option>Off</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <span>
                                            <button class="btn4 btn-info" style="float:right" id="save">Save</button>
                                            <button class="btn4 btn-cancel4" style="float:right" id="cancel">Cancel</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Model 4 -->
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>

<!-- End My Account -->

<?= $this->endSection() ?>