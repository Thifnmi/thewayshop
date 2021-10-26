<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Information</h5>
                <form class="form-horizontal m-t-30" method='POST'>

                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Client Name</span>
                        </label>
                        <div class="col-md-12">
                            <select class="form-control" id="user_id" name="user_id" onchange="change_value()">
                                <?php foreach($accounts as $account):?>
                                    <option value="<?=$account['id']?>"><?=$account['fullname']?></option>
                                <?php $x = $account['id'];  endforeach; ?>
                            </select>
                            <!-- <input type="hidden" id="fullname" name="fullname"  value=""/> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Phone Number</span>
                        </label>
                        <div class="col-md-12">
                            <input type="tel" id="example-text3" name="phone" require class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Email</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text3" name="email" require class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Address</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text3" require name="bill_address" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Status</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="paid_status">
                                <option value="0">Chưa thanh toán</option>
                                <option value="1">Đã thanh toán</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Cart</label>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="education_fields"></div>
                                    <div class="row">
                                        <div class="col-sm-3 nopadding">
                                            <div class="form-group">
                                                <select name="name[]" class='form-control'>
                                                    <?php foreach ($product as $row) : ?>
                                                        <option value="<?= $row['id'] ?>"><?= $row['product_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 nopadding">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="Major" name="value[]" value="" placeholder="Quantity" required>
                                            </div>
                                        </div>
                                        <div class="input-group-append" style="height: 40px;">
                                            <button class="btn btn-success" type="button" onclick="education_1fields();"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Note</label>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="3" name='note'></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <script>
function change_value() {
  var x = document.getElementById("user_id").value;
  document.getElementById("fullname").value = x;
}
</script> -->
<!-- ============================================================== -->
<!-- End Page Content -->


<?= $this->endSection() ?>