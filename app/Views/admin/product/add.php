<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add Product</h5>
                <form class="form-material form-horizontal m-t-30" action="<?= base_url() . '/admin/products/add' ?>" method='POST' enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Product Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="product_name" name="product_name" require class="form-control" placeholder="enter product name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="code">Product Code</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="code" name="code" require class="form-control " placeholder="Product code">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="price">Price</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="price" name="price" require class="form-control" placeholder="enter product price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="quantity">Quantity</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="quantity" name="quantity" require class="form-control" placeholder="enter quantity">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="collection">Collection</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="collection" name="collection" class="form-control" placeholder="enter collection">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="main_stone_type">Main Stone Type</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="main_stone_type" name="main_stone_type" class="form-control" placeholder="enter main stone type">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="gender">Gender</span>
                        </label>
                        <div class="col-md-12">
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
                            <select class="form-control" name='category'>
                                <?php
                                    use App\Models\categoryModel;
                                    $model = new categoryModel();
                                    $data = $model->findAll();
                                    foreach ($data as $item) {
                                        echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Provider</label>
                        <div class="col-sm-12">
                            <select class="form-control" name='provider'>
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
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End PAge Content -->

<?= $this->endSection() ?>