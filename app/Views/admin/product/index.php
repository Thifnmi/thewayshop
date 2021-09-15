<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Gender</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0; 
                                foreach($user as $row) :
                                    $total++;  ?>
                                    <tr class="obj-item">
                                        <td><?= $total ?></td>
                                        <td><?= $row['product_name'] ?></td>
                                        <td><?= $row['quantity'] ?></td>
                                        <td><?= $row['price'] ?></td>
                                        <td><?= $row['gender'] ?></td>
                                        <td>
                                            <img src="<?php if ($row['image'][0] == 'h') {
                                                            echo $row['image'];
                                                        } else {
                                                            echo base_url() . $row['image'];
                                                        }
                                                        ?>" alt="" width="50" height="50">
                                        </td>
                                        <td>
                                            <div class="obj-action">
                                                <div class="ac">
                                                    <a href="<?php echo base_url() . '/admin/products/detail?id=' . $row['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
                                                </div>
                                                <div class="ac">
                                                    <a href="<?php echo base_url() . '/admin/products/edit?id=' . $row['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i> </a>
                                                </div>
                                                <div class="ac">
                                                    <a href="<?php echo base_url() . '/admin/products/delete?id=' . $row['id'] ?>" onclick="return confirm('Are you sure?');" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="far fa-trash-alt"></i></a>
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

        <!-- table responsive -->
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->

<?= $this->endSection() ?>