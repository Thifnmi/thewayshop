<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<!-- start  main content -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Basic Information</h5>
                <form class="form-material form-horizontal m-t-30" enctype="multipart/form-data" method='POST'>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Company Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="name" require class="form-control" placeholder="Enter company name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="email">Email</span>
                        </label>
                        <div class="col-md-12">
                            <input type="email" id="email" name="email" require class="form-control" placeholder="Enter email address">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
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