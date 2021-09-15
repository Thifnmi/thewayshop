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
                                <th>Email</th>
                                <th>Paid Status</th>
                                <th>Note</th>
                                <th>Created On</th>
                                <th>Shipping Status</th>
                                <th>Bill Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0; 
                                foreach ($orders as $row): 
                                    $total++; ?>
                                <tr>
                                    <td><?= $total ?></td>
                                    <td><?= $row['fullname'] ?></td>
                                    <td><?= $row['phone'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td>
                                        <?php if ($row['paid_status'] == 0) echo 'Chưa thanh toán';
                                                else echo 'Đã thanh toán';
                                        ?>
                                    </td>
                                    <td><?= $row['note'] ?></td>
                                    <td><?= $row['created_on'] ?></td>
                                    <td>
                                        <?php if ($row['shipping_status'] == 1) echo 'Chờ lấy hàng';
                                                elseif ($row['shipping_status'] == 2) echo 'Đang giao hàng';
                                                else echo 'Đã giao hàng';
                                        ?>
                                    </td>
                                    <td><?= $row['bill_address'] ?></td>
                                    <td>
                                        <div class="obj-action">
                                            <div class="ac">
                                                <a href="<?= base_url() ?>/admin/Invoices/detail?id=<?= $row['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
                                            </div>
                                            <div class="ac">
                                                <a href="<?= base_url() ?>/admin/Invoices/edit?id=<?= $row['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i> </a>
                                            </div>
                                            <div class="ac">
                                                <a href="<?= base_url() ?>/admin/Invoices/delete?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?');" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="far fa-trash-alt"></i></a>
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