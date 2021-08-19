<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<!-- import code hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Basic Information</h5>
                <form class="form-material form-horizontal m-t-30" action='<?= base_url() ?>/admin/Categories/edit?id=<?= $item['id'] ?>' method='POST'>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Tên loại hàng</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="name" class="form-control" placeholder="Enter name of category" value='<?= $item['name'] ?>'>
                        </div>

                        <label class="col-md-12" for="example-text">Meta Title</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="meta_title" class="form-control" placeholder="Enter meta title" value='<?= $item['meta_title'] ?>'>
                        </div>

                        <label class="col-md-12" for="example-text">Image</span>
                        </label>
                        <div class="col-md-12">
                            <inputtype="file" id="input-file-now" name="image" class="form-control" placeholder="Enter link of image" value='<?= $item['image'] ?>'>
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
<!-- End Page Content -->

<?= $this->endSection() ?>