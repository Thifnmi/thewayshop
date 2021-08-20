<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>

<div class="row d-flex justify-content-center">
    <!-- Column -->
    <div class="col-lg-6 ">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title m-t-10"><?= $info['name'] ?></h4>
            </div>
            <div>
                <hr>
            </div>
            <div class="card-body">
                <small class="text-muted p-t-30 db">Company Name</small>
                <h6><?= $info['name'] ?></h6>
                <small class="text-muted p-t-30 db">Email</small>
                <h6><?= $info['email'] ?></h6>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>