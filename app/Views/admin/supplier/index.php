<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Admin</h5>
                <h6 class="card-subtitle">all projects Admin</h6>
                <div class="table-responsive">
                    <table id="example23" class="table table-striped">
                        <?php
                        session_start();
                        ?>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Company Name</th>
                                <th>Website</th>
                                <th>Country</th>
                                <th>Product</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>                         
                                <tr class="obj-item">
                                    <td>id</td>
                                    <td>Company Name</td>
                                    <td>Url</td>
                                    <td>country</td>
                                    <td>product type</td>
                                    <td>
                                        <div class="obj-action">
                                            <div class="ac">

                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
                                            </div>
                                            <div class="ac">
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i> </a>
                                            </div>
                                            <div class="ac">
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" onclick="return confirm('Are you sure?');" id="sa-confirm" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
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