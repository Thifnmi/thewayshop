<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Fullname</th>
                                                <th>Phone</th>
                                                <th>Paid Status</th>
                                                <th>Created On</th>
                                                <th>Shipping Status</th>
                                                <th>Bill Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>id</td>
                                                <td>fullName</td>
                                                <td>Phone</td>
                                                <td>Status</td>
                                                <td>Create On</td>
                                                <td>Shipping Status</td>
                                                <td>Address</td>
                                                <td>
                                                    <div class="obj-action">
                                                        <div class="ac">

                                                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                                title="Detail"><i class="fas fa-info-circle"></i></a>
                                                        </div>
                                                        <div class="ac">
                                                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                                title="Edit"><i class="far fa-edit"></i> </a>
                                                        </div>
                                                        <div class="ac">
                                                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                                title="Delete"><i class="far fa-trash-alt"></i></a>
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