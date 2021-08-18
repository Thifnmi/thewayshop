<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="row">

                <div class="col-lg-12  bg-light border-left">

                    <div class="card-body p-t-0">
                        <div class="card b-all shadow-none">
                            <div class="card-body">
                                <h3 class="card-title m-b-0">Contact from Client</h3>
                            </div>
                            <div>
                                <hr class="m-t-0">
                            </div>
                            <div class="card-body">
                                <div class="d-flex m-b-40">
                                    <div class="p-l-10">
                                        <h4 class="m-b-0"><?= $mail['fullname'] ?></h4><br>
                                        <small class="text-muted"><?php echo 'From:' . $mail['email']; ?></small><br>
                                        <small class="text-muted"><?php echo 'Created at:' . $mail['create_on']; ?></small>
                                    </div>
                                </div>
                                <p><b>Dear You</b></p>
                                <p><?= $mail['content'] ?></p>

                            </div>

                            <div>
                                <hr class="m-t-0">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>