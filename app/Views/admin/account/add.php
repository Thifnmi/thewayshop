<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

 <!-- start  main content -->
                
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add Account</h5>
                                <form action="<?php echo base_url().'/admin/account/add'?>" class="form-material form-horizontal m-t-30" enctype="multipart/form-data" method='POST' >
                                    <div class="form-group">
                                        <label class="col-md-12" for="fName">Full Name</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="fName" name="fullname" require class="form-control"
                                                placeholder="enter your full name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">User Name</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="example-text" name="username" require class="form-control"
                                                placeholder="enter your username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="password">Password</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="password" id="password" name="password" require class="form-control"
                                                placeholder="enter your password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="bdate">Date of Birth</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="date" id="bdate" name="birthday" require class="form-control mydatepicker"
                                                placeholder="enter your birth date">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Gender</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" require name='gender'>
                                                <option>Select Gender</option>
                                                <option value="0">Male</option>
                                                <option value="1">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Role</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" require name='role'>
                                                <option>Select Role</option>
                                                <?php if($_SESSION['user']['role_id'] == 0):{?>
                                                    <option value="0">Quản trị viên</option>
                                                    <option value="1">Quản lý</option>
                                                    <option value="2">Nhân viên</option>
                                                    <option value="3">Khách hàng</option>
                                                <?php } elseif($_SESSION['user']['role_id'] == 1):{?>
                                                    <option value="2">Nhân viên</option>
                                                    <option value="3">Khách hàng</option>
                                                <?php }elseif($_SESSION['user']['role_id'] == 2):?>
                                                    <option value="3">Khách hàng</option>
                                                <?php endif;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="email">Email</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="email" id="email" require name="email" class="form-control"
                                                placeholder="enter your email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="phone">Phone</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="tel" maxlength="13" require id="phone" name="phone"
                                                class="form-control" placeholder="enter your phone">
                                        </div>
                                    </div>
                
                                    <div class="form-group">
                                    <label class="col-md-12" for="phone">Address</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="address" require name="address"
                                                class="form-control" placeholder="enter your address">
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="form-group">
                                    <label class="col-md-12" for="phone">Facebook</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" maxlength="11" id="facebook" name="facebook"
                                                class="form-control" placeholder="enter your facebook">
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                    <label class="col-md-12" for="phone">Avatar</span>
                                        </label>
                                        <div class="col-md-12">
                                            <label for="input-file-now">Choose a image</label>
                                            <input type="file" id="input-file-now" name="file" class="dropify">
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                        <button type="button" onclick="window.history.back();" class="btn btn-inverse waves-effect waves-light">Cancel</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

<?= $this->endSection() ?>