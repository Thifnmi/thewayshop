<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5><b>Mã hóa đơn</b> <span class="pull-right">#<?= $user_detail['id'] ?></span></h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pull-left">
                                            <address>
                                                <h3> &nbsp;<b class="text-danger">Mỹ Hạnh</b></h3>
                                                <p class="text-muted m-l-5">Số 18 Đường Quang Trung,
                                                    <br /> phường Quang Trung, quận Hà Đông,
                                                    <br /> Hà Nội
                                                    <!-- <br /> Vietnam -->
                                                </p>
                                            </address>
                                        </div>
                                        <div class="pull-right text-right">
                                            <address>
                                                <h3>Tới</h3>
                                                <h4 class="font-bold"><?= $user_detail['fullname']?></h4>
                                                <p class="text-muted m-l-30"><?= 'Số điện thoại: ' .$user_detail['phone']?>
                                                    <br /> <?= 'Địa chỉ giao hàng: '.$user_detail['bill_address']?>,
                                                    <br /><h4 class="font-bold"><?php if($user_detail['paid_status']==0) echo 'Trạng thái: Chưa thanh toán'; else echo 'Trạng thái: Đã thanh toán'?></h4></p>
                                                <p class="m-t-30"><b>Ngày đặt hàng: </b> <i class="fa fa-calendar"> </i>
                                                    <?= $user_detail['created_on']?></p>
                                                <!-- <p><b>Due Date: </b> <i class="fa fa-calendar"> </i><?php echo date('Y-m-d', strtotime($user_detail['created_on']. ' + 7 days')); ?></p> -->
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive m-t-40">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">STT</th>
                                                        <th class="text-center">Tên sản phẩm</th>
                                                        <th class="text-center">Số lượng</th>
                                                        <th class="text-right">Giá</th>
                                                        <th class="text-right">Tổng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $stt=1;$total = 0;?>
                                                    <?php foreach($detail as $item):?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $stt; $stt+=1;?></td>
                                                        <td class="text-center"><?= $item['product_name']?></td>
                                                        <td class="text-center"><?= $item['product_amount']?> </td>
                                                        <td class="text-right"> <?= $item['price']?> </td>
                                                        <td class="text-right"><?= $item['total_price'] ?></td>
                                                        <?php $total +=$item['total_price'];?>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pull-right m-t-30 text-right">
                                            <h4>Ghi chú: <?= $user_detail['note']?></h4>
                                            <h3><b>Tổng tiền :</b> <?=$total?>  VNĐ</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <div class="text-right">
                                            <!-- <button class="btn btn-danger" type="submit"> Proceed to payment </button> -->
                                            <button onClick="javascript:window.print();"
                                                class="btn btn-default btn-outline" type="button"> <span><i
                                                        class="fa fa-print"></i> In hóa đơn</span> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $this->endSection() ?>