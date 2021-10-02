<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <div class="col-lg-12  bg-light border-left">
                    <div class="card-body">
                    <h5 class="card-title">Mailbox</h5>
                    <h6 class="card-subtitle"></h6>
                        <form action="<?php echo base_url() . '/admin/mailbox' ?>" method='POST'>
                            <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                                <!-- <button type="submit" class="btn btn-secondary font-18"><i class="mdi mdi-delete"></i></button> -->
                            </div>
                    </div>
                    <div class="card-body p-t-0">
                        <div class="card b-all shadow-none">
                            <div class="inbox-center table-responsive">
                                <table class="table table-hover no-wrap">
                                    <tbody>
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Fullname</th>
                                                <th>Email Address</th>
                                                <th>Content</th>
                                                <th>Phone Number</th>
                                                <th>Create On</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($user as $row) : ?>

                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox mr-sm-2">
                                                        <input type="checkbox" name="arrDelete[]" id="<?= $row['id'] ?>" value="<?= $row['id'] ?>">
                                                    </div>
                                                </td>
                                                <td class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                <td class="hidden-xs-down"><?= $row['fullname'] ?></td>
                                                <td class="hidden-xs-down"><?= $row['email'] ?></td>
                                                <td class="max-texts"><a href="<?php echo base_url() . '/admin/mailbox/detail?id=' . $row['id'] ?>">
                                                        <?php if ($row['status'] == 1) : ?>
                                                            <span class="label label-success">New</span><?= $row['content'] ?><?php else : ?><?= $row['content'] ?><?php endif; ?>
                                                    </a>

                                                </td>
                                                <td class="hidden-xs-down"><?= $row['phone'] ?></td>
                                                <td class="hidden-xs-down"><?= $row['create_on'] ?></td>
                                                <td>
                                                    <div class="obj-action">
                                                        <div class="ac">

                                                            <a href="<?php echo base_url() . '/admin/mailbox/detail?id=' . $row['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>