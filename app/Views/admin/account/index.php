<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Accounts</h5>
                <h6 class="card-subtitle">All account</h6>
                <div class="table-responsive">
                    <table id="example23" class="table table-striped">
                        
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Birthday</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $total = 0;
                                foreach ($user as $row):
                                    $total ++?>
                                    <tr class="obj-item">
                                        <td><?= $total ?></td>
                                        <td><?= $row['username'] ?></td>
                                        <td><?= $row['fullname'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['birthday'] ?></td>
                                        <td><?= $row['phone_number'] ?></td>
                                        <td>
                                            <div class="obj-action">
                                                <div class="ac">
                                                    <a href="<?php echo base_url().'/admin/account/profile?id='.$row['id']?>" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
                                                </div>
                                                <div class="ac">
                                                    <a href="<?php echo base_url().'/admin/account/edit?id='.$row['id']?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i> </a>
                                                </div>
                                                <div class="ac">
                                                    <a href="<?php echo base_url().'/admin/account/delete?id='.$row['id']?>" data-toggle="tooltip" data-placement="bottom" onclick="return confirm('Are you sure?');" id="sa-confirm" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            <?php endforeach; ?>
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