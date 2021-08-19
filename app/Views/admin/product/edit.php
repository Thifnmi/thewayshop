<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Basic Information</h5>
                <form class="form-material form-horizontal m-t-30" action='<?php echo base_url() . '/admin/products/edit?id=' . $product['id'] ?>' method='POST' enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Product Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="text" name="product_name" class="form-control" placeholder="enter product name" value="<?= $product['product_name'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="product_code">Product Code</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="product_code" name="product_code" class="form-control" placeholder="enter product code" value="<?= $product['product_code'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="price">Price</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="price" name="price" class="form-control" placeholder="enter product price" value="<?= $product['price'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="quantity">Quantity</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="quantity" name="quantity" class="form-control" placeholder="enter quantity" value="<?= $product['quantity'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="collection">Colection</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="collection" name="collection" class="form-control" placeholder="enter product collection" value="<?= $product['collection'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="main_stone_type">Main Stone Type</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="main_stone_type" name="main_stone_type" class="form-control" placeholder="enter product main_stone_type" value="<?= $product['main_stone_type'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Gender</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="gender" id="gender">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Trẻ em">Trẻ em</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Category</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="category" id="category">
                                <?php

                                use App\Models\categoryModel;

                                $model = new categoryModel();
                                $data = $model->findAll();
                                foreach ($data as $item) {
                                    if ($item['id'] == $product['id']) {
                                        echo '<option value="' . $item['id'] . '" selected>' . $item['name'] . '</option>';
                                    } else {
                                        echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Provider</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="provider" id="provider">
                                <?php

                                use App\Models\supplierModel;

                                $sup = new supplierModel();
                                $data = $sup->findAll();
                                foreach ($data as $item) {
                                    echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Thumnail</h4>
                                    <label for="input-file-now">Choose a image</label>
                                    <input type="file" id="input-file-now" class="dropify" name='fileToUpload' />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Upload More Image</h4>
                                    <label for="input-file-now-custom-1">More Image</label>
                                    <input type="file" id="input-file-now-custom-1" class="dropify" name='image_more[]' multiple />
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="button" onclick="window.history.back();" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End PAge Content -->

<?= $this->endSection() ?>