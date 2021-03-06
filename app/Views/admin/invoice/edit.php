<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Information</h5>
                <form class="form-horizontal m-t-30" method='post'>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Client Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text3" name="fullname" class="form-control" placeholder="" value="<?= $info['fullname'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Phone Number</span>
                        </label>
                        <div class="col-md-12">
                            <input type="number" id="example-text3" name="phone" class="form-control" placeholder="" value="<?= $info['phone'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Email</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text3" name="email" class="form-control" placeholder="" value="<?= $info['email'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text3">Address</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text3" name="bill-address" class="form-control" placeholder="" value="<?= $info['bill_address'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Tr???ng th??i giao h??ng</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="shipping-status">
                                <option value="0" <?php if ($info['shipping_status'] == 0) : echo "selected"; endif; ?>>Ch??? x??c nh???n</option>
                                <option value="1" <?php if ($info['shipping_status'] == 1) : echo "selected"; endif; ?>>Ch??? giao cho ????n v??? v???n chuy???n</option>
                                <option value="2" <?php if ($info['shipping_status'] == 2) : echo "selected"; endif; ?>>??ang giao</option>
                                <option value="3" <?php if ($info['shipping_status'] == 3) : echo "selected"; endif; ?>>Giao h??ng th??nh c??ng</option>
                                <option value="4" <?php if ($info['shipping_status'] == 4) : echo "selected"; endif; ?>>????n b??? h???y</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Tr???ng th??i thanh to??n</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="payment-status">
                                <option value="0" <?php if ($info['paid_status'] == 0) : echo "selected"; endif; ?>>Ch??a thanh to??n</option>
                                <option value="1" <?php if ($info['paid_status'] == 1) : echo "selected"; endif; ?>>???? thanh to??n</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Cart</label>
                        <div class="card">
                            <div class="card-body">
                                <?php $run = 1265; ?>
                                <div id="education_fields">
                                    <?php if (count($product_order) > 0) :
                                        for ($i = 1; $i < count($product_order); $i++) : $run -= 1;?>
                                            <div class='<?php echo "form-group removeclass" . (string) $run; ?>'>
                                                <div class="row">
                                                    <div class="col-sm-3 nopadding">
                                                        <div class="form-group">
                                                            <select name="name[]" class='form-control'>
                                                                <?php foreach ($product as $row) : ?>
                                                                    <option value="<?= $row['id'] ?>" <?php if ($product_order[$i]['product_id'] == $row['id']) : echo "selected"; endif; ?>><?= $row['product_name'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 nopadding">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="Major" name="value[]" value="<?php echo $product_order[$i]['product_amount'] ?>" placeholder="Value">
                                                        </div>
                                                    </div>
                                                    <div class="input-group-append" style="height: 40px;">
                                                        <button class="btn btn-danger" type="button" onclick="remove_education_fields(<?= $run ?>);"> <i class="fa fa-minus"></i> </button>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php endfor;
                                        endif;
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 nopadding">
                                        <div class="form-group">
                                            <select name="name[]" class='form-control'>
                                                <?php foreach ($product as $row) : ?>
                                                    <option value="<?= $row['id'] ?>" <?php if ($row['id'] == $product_order[0]['product_id']) : echo "selected"; endif; ?>><?= $row['product_name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Major" name="value[]" value="<?= $product_order[0]['product_amount'] ?>" placeholder="value">
                                        </div>
                                    </div>
                                    <div class="input-group-append" style="height: 40px;">
                                        <button class="btn btn-success" type="button" onclick="education_1fields();"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Note</label>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="3" name='note'><?= $info['note'] ?></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="button" onclick="window.history.back();" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>