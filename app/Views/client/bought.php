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
                    <?php $total = 0;
                    foreach ($bought as $item) : 
                        // $total = (int)($total) + (int)($item['total_bill']);
                        if($item['shipping_status'] != "4"){
                            $total = (int)($total) + (int)($item['total_bill']);
                        }
                    ?>
                        <table class="table">
                            <thead>
                                <tr align="center">
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                </tr>
                            </thead>
                            <?php foreach ($invoiceDetails as $invoice) :
                                if ($invoice['invoice_id'] == $item['id']) :
                                    foreach ($products as $product) :
                                        if ($invoice['product_id'] == $product['id']) : ?>
                                            <tbody>
                                                <td>
                                                    <a target="_blank" href="Product/<?=$product['id']?>"><?= $product['product_name'] ?></a>
                                                </td>
                                                <td align="center">
                                                    <image style="width: 50px;" src="<?= $product['image'] ?>" />
                                                </td>
                                                <td align="center">
                                                    <?= number_format($invoice['product_price'], 0,'','.') ?> VNĐ
                                                </td>
                                                <td align="center">
                                                    <?= $invoice['product_amount'] ?>
                                                </td>
                                                <td align="center">
                                                    <?= number_format($invoice['total_price'], 0,'','.') ?> VNĐ
                                                </td>
                                            </tbody>
                                        <?php endif;
                                    endforeach;
                                endif;
                            endforeach; ?>
                        </table>
                        <!-- <hr> -->
                        
                        <h4 style="text-align:end; font-weight: 600 ">Thông tin đơn hàng: <span> Ngày đặt hàng <?= $item['created_on'] ?> </span> | Trạng thái : <?php if($item['shipping_status'] == "0"){
                            echo 'Chờ xác nhận | <a style="color:red;" href='.'Checkout/cancel?id='.$item["id"].'>Hủy đơn hàng</a>';
                        }elseif($item['shipping_status'] == "1"){
                            echo "Chờ giao cho đơn vị vận chuyển";
                        }elseif($item['shipping_status'] == "2"){
                            echo "Đang giao";
                        }elseif($item['shipping_status'] == "3"){
                            echo "Giao hàng thành công";
                        }elseif($item['shipping_status'] == "4"){
                            echo "Đơn bị hủy";
                        } ?> | Tổng giá trị đơn hàng:<span > <?= number_format($item['total_bill'], 0,'','.') ?> VNĐ </span></h4>
                        <hr style="border-width: 5px;">
                    <?php endforeach; ?>
                    <div>
                        <input type="hidden" id="total-bought" value="<?= $total ?>"/>
                        <h5 style="text-align: center;font-weight: 1000;font-size: 25px;color: indianred;">Tổng số tiền đã mua tại cửa hàng: <span class="total-bought"><?= $total ?></span> VNĐ</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bought -->
<?= $this->endSection() ?>