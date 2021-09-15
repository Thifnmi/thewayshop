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
                                <th>Image</th>
                                <th>Meta Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0; 
                                foreach ($category as $item):
                                    $total++; ?>
                                    <tr class="obj-item">
                                        <td><?= $total ?></td>
                                        <td><?= $item['name'] ?></td>
                                        <td>
                                            <img src="<?= $item['image'] ?>" alt="" width="50" height="50">
                                        </td>
                                        <td><?= $item['meta_title'] ?></td>
                                        <td>
                                            <div class="obj-action">
                                                <div class="ac">
                                                    <a href="<?=base_url()?>/admin/Categories/edit?id=<?=$item['id']?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i> </a>
                                                </div>
                                                <div class="ac">
                                                    <a href="<?=base_url()?>/admin/Categories/delete?id=<?=$item['id']?>" onclick="return confirm('Are you sure?');" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="far fa-trash-alt"></i></a>
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