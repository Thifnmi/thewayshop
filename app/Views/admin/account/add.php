<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

 <!-- start  main content -->
                
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Basic Information</h5>
                                <form action="<?php echo base_url().'/admin/account/add'?>" class="form-material form-horizontal m-t-30" enctype="multipart/form-data" method='POST' >
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">User Name</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="example-text" name="username" class="form-control"
                                                placeholder="enter your username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="password">Password</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="password" id="password" name="password" class="form-control"
                                                placeholder="enter your password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="fName">Full Name</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="fName" name="fullname" class="form-control"
                                                placeholder="enter your full name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="bdate">Date of Birth</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="date" id="bdate" name="birthday" class="form-control mydatepicker"
                                                placeholder="enter your birth date">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Gender</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" name='gender'>
                                                <option>Select Gender</option>
                                                <option value="Nam">Male</option>
                                                <option value="Nu">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="email">Email</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="enter your email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="phone">Phone</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="number" maxlength="11" id="phone" name="phone"
                                                class="form-control" placeholder="enter your phone">
                                        </div>
                                    </div>
                
                                    <div class="form-group">
                                    <label class="col-md-12" for="phone">Address</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" maxlength="11" id="address" name="address"
                                                class="form-control" placeholder="enter your address">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label class="col-md-12" for="phone">Facebook</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" maxlength="11" id="facebook" name="facebook"
                                                class="form-control" placeholder="enter your facebook">
                                        </div>
                                    </div>
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