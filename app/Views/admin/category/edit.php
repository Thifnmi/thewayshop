<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<!-- import code hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Basic Information</h5>
                <form class="form-material form-horizontal m-t-30" action='<?= base_url().'/admin/category/edit?id='.$item['category_id']?>' method='POST'>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Tên loại hàng</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="cName" class="form-control" placeholder="Nhập tên loại hàng" value='<?= $item['name']?>'>
                        </div>
                        <label class="col-md-12" for="example-text">Mô tả</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="cDesription" class="form-control" placeholder="Nhập mô tả" value='<?= $item['description']?>'>
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
<!-- End Page Content -->

<?= $this->endSection() ?>