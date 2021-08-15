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
                                <th>Provider</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="obj-item">
                                <td>Product_id</td>
                                <td>Name</td>
                                <td>Supplier</td>
                                <td>Quantity</td>
                                <td>Price</td>
                                <td>
                                    <img src="data:image/jpeg;base64,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xQRNPqGN1H4uqytkttyo9ZeSNftWEh+7o3/E2/RW9yrcTs7xqc6sjI8MHm0yE0LB2bHte1XYI6EFZmL3Wx/83Ie79ljGk735idVn3VjIsLDw4594ltbE57lofhSX+fUi/D+wuBCdQhDndXPc438Ren7KRQwNYAGtDQOQAAA+i9kUqio5JFGrWqVXepJt9rb9wiItiMIiIAiIgCIiAqzt/N+jZ7ZWMbqkYx1lgJLmOoi7FUI2C9yA4kV1sXLe98DnQFut0ZMZd+HUW20n2ulEO9HGaW40zqpsugkuc0Brm6iSW7itFg9CsngHa7GjwYvEmaXxtEbgDbiW+WxqrVYAN+6rxajUkmzq1abq4ajOEbtXTyv3LyXrlyIizuzzZXmSaWNpc4ucS4ueSTZNBtfdWdwPh7oMdkL5DKWggvdzdZJqiTsAaG52AUK4h3rxA1Bjvf7uLR86F39QvCPtRxbJDhBAWCra8QHnvtqkcWnpv9lHTlRg+pdvxZbxdLaGJilibQitL7sbcPxaEuxOxmBG4ubjMJJvzanj5B5ICzZOI4mONJkhjr8gLAfk0bn6KD4/ZbiuRtlZBYwgggyF1+lsZ5BQ9Dz6lZGN3Vw6y+Wd7iXaqY1rRzv82sqRSl9yFvQq1KVGTbxGIcn2Jy9W7eZu8rtziN1BhfIQCfK3SNhZ3k0jYbrWYPeGyVz2eEWO03Hv4hcacbc1vJoociSboLdYXY3CjAHgBwAA85LxtuNia5k9Fu8XEjjGmNjGD0a0NH0C3SqN5tFeVTBxTUYSfa3a3le5E4WcSlc7U/Q0BpboZoa+30SS4F7aaCasGnAc15N7HyySh085czS0ua53ikvq3Vrbpa0P5UOQ5Aqcos9GnrmR/a5r4El3JEZh7HYwihjkYJBGSbLWjWTq/EK3HnJ586WXidlsKM2zGiB52Whx53sXXS3aLbcjyI5YirK95vPt55s+GMAFAUPQL7RFsQhERAEREAREQBERAEREAREQBERAEREBrOPcIjy4HQyatJo20gOBBsEWCPqFqOD9h8TH5NfIaIuRwNhwo2GgA7eoNdFKkWrhFu7WZNHEVYwdOMmovhfIwMXhOPESYoY2EmyWsaHE+pNWSs9EWyVtCJtt3YREQwEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQH/2Q==" alt="" width="50" height="50">
                                </td>
                                <td>
                                    <div class="obj-action">
                                        <div class="ac">
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
                                        </div>
                                        <div class="ac">
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i> </a>
                                        </div>
                                        <div class="ac">
                                            <a href="#" onclick="return confirm('Are you sure?');" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="far fa-trash-alt"></i></a>
                                        </div>

                                    </div>
                                </td>
                            </tr>

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