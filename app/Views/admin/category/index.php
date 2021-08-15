<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<!-- import code hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Category</h5>
                <h6 class="card-subtitle">all category</h6>
                <div class="table-responsive">
                    <table id="example23" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Create On</th>
                                <th>Create By</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                                <tr class="obj-item">
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Description</td>
                                    <td>Create On</td>
                                    <td>Create By</td>
                                    <td>
                                        <div class="obj-action">
                                            <div class="ac">
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i> </a>
                                            </div>
                                            <div class="ac">
                                                <a href="#" onclick="return confirm('Are you sure?');" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="far fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End Page Content -->
<?= $this->endSection() ?>