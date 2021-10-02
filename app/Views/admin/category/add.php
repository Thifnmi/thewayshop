<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<!-- import code hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add Category</h5>
                <?= \Config\Services::validation()->listErrors(); ?>
                <form action="#" method="post" class="form-material form-horizontal m-t-30">
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Name of Category</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="name" class="form-control" placeholder="Enter name of Category">
                        </div>
                        <label class="col-md-12" for="example-text">Meta Title</label>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="meta_title" class="form-control" placeholder="Enter meta title ">
                        </div>
                        <label class="col-md-12" for="example-text">Image</span>
                        </label>
                        <div class="col-md-12">
                            <input type="file" id="input-file-now" name="image" class="form-control" placeholder="Enter link of image">
                        </div>
                    </div>


                    <!-- Comment -->
                    <!-- <div class="form-group">
                                        <label class="col-sm-12">Profile Image</label>
                                        <div class="col-sm-12">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                        </div>
                                    </div> -->

                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <a href="#" class="btn btn-inverse waves-effect waves-light m-r-10">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End Page Content -->

<?= $this->endSection() ?>