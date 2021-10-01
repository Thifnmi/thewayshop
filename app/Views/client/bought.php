<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Shop') ?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Lịch sử mua hàng </h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Lịch sử mua hàng</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Bought  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">

                    <?php $no = 0;
                    foreach ($bought as $item) : $no++ ?>
                        <span><?= $no ?></span>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Ngày mua</th>
                                    <th>Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($invoiceDetails as $invoice) :
                                    if ($invoice['invoice_id'] == $item['id']) :
                                        if ($invoice['product_id'] == $products['id'])
                                ?>
                                        <td>

                                        </td>
                                        <td>
                                            dat
                                        </td>
                                        <td>
                                            dat
                                        </td>
                                        <td>
                                            dat
                                        </td>
                                        <td>
                                            dat
                                        </td>
                                        <td>
                                            dat
                                        </td>
                                <?php endif;
                            endforeach; ?>
                            </tbody>

                        </table>
                        <hr>
                        <h4 style="text-align:end; font-weight: 600 ">Tổng hóa đơn: 282102131</h4>
                    <?php endforeach; ?>

                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Tổng tiền đã mua tại cửa hàng: </h5>
                        <div class="total-price-payment ml-auto h5">0</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bought -->
<?= $this->endSection() ?>