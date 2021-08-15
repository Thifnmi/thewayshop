<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <div class="col-lg-12  bg-light border-left">
                    <div class="card-body">
                        <!-- <form action="<?php echo base_url() . '/admin/mailbox' ?>" method='POST'> -->
                        <form method='POST'>
                            <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                                <button type="submit" class="btn btn-secondary font-18"><i class="mdi mdi-delete"></i></button>
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
                                        <thead>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox mr-sm-2">
                                                        <input type="checkbox" name="arrDelete[]" id="id" value="id">
                                                    </div>
                                                </td>
                                                <td class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                <td class="hidden-xs-down">Full Name</td>
                                                <td class="hidden-xs-down">Email</td>
                                                <td class="max-texts"><a><span class="label label-success">New</span>Content</a></td>
                                                <td class="hidden-xs-down">Phone</td>
                                                <td class="hidden-xs-down">Create on</td>
                                                <!-- <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td> -->
                                               
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox mr-sm-2">
                                                        <input type="checkbox" name="arrDelete[]" id="id" value="id">
                                                    </div>
                                                </td>
                                                <td class="hidden-xs-down"><i class="far fa-star"></i></td>
                                                <td class="hidden-xs-down">Full Name</td>
                                                <td class="hidden-xs-down">Email</td>
                                                <td class="max-texts"><a><span class="label label-success">New</span>Content</a></td>
                                                <td class="hidden-xs-down">Phone</td>
                                                <td class="hidden-xs-down">Create on</td>
                                                <!-- <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td> -->
                                               
                                            </tr>
                                            
                                        </thead>
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