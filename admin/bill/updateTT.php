<!-- <?php
if(is_array($suadh)){
    extract($suadh);
}
?> -->
<div class="form-group mb-4">
                            <label class="col-md-12 p-0">Trang thái</label>
                            <div class="col-sm-12 border-bottom">
                                <select class="form-select shadow-none p-0 border-0" name="trangthain">
                                    <option value="0" selected>Chờ xác nhận</option>
                                    <option value="1">Đã xác nhận</option>
                                    <option value="2">Đang chuẩn bị hàng</option>
                                    <option value="3">Đang giao hàng</option>
                                    <option value="4">Đã nhận hàng</option>
                                    <option value="5">Đơn hàng bị hủy</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Trang thái thanh toán</label>
                            <div class="col-sm-12 border-bottom">
                                <select class="form-select shadow-none p-0 border-0" name="trangthaitt">
                                    <option value="0" selected>Chưa thanh toán</option>
                                    <option value="1">Đã thanh toán</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">MÃ hóa đơn</th>
                                <th class="border-top-0">Số điện thoại</th>
                                <th class="border-top-0">Ngày</th>
                                <th class="border-top-0">Trạng thái đơn</th>
                                <th class="border-top-0">Trạng thái thanh toán</th>
                                <th class="border-top-0">Phương thức thanh toán</th>
                                <th class="border-top-0">Tổng hóa đơn</th>
                                <th class="border-top-0">Cập nhật</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($listdonhang as $dh){
                                extract($dh); 
                                $linkcn = "index.php?act=cnhd&idhd=".$id_hd;
                                foreach($listusers as $lus){
                                    extract($lus);
                                    if($idacc == $iduser){?>
                                <tr>
                                    <td>#<?= $id_hd ?></td>
                                    <td><?= $phone ?></td>
                                    <td><?= $ngaydat ?></td>
                                    <td>
                                        <?php
                                        if($trangthai == 0) {
                                            echo "Chờ xác nhận.";
                                        } else if($trangthai == 1) {
                                            echo "Đã xác nhận.";
                                        } else if($trangthai == 2) {
                                            echo "Đang chuẩn bị hàng.";
                                        } else if($trangthai == 3) {
                                            echo "Đang giao hàng.";
                                        } else if($trangthai == 4) {
                                            echo "Đã nhận hàng.";
                                        } else if($trangthai == 5) {
                                            echo "Đơn hàng bị hủy.";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if($trangthaitt == 0) {
                                            echo "Chưa thanh toán.";
                                        } else if($trangthaitt == 1) {
                                            echo "Đã thanh toán.";
                                        }
                                        ?>
                                        </td>
                                    <td>
                                        <?php
                                        if($pttt == 1) {
                                            echo "Thanh toán trực tiếp.";
                                        } else if($pttt == 1) {
                                            echo "Thanh toán VNPAY.";
                                        }
                                        ?>
                                    </td>
                                    <td><?= number_format((int)$tonghd, 0, ",", ".") ?></td>
                                    <td>
                                    <a href="<?= $linkcn ?>" class="fas fa-edit"></a>
                                    </td>
                                </tr>
                            <?php }
                                        } }
                            ?>
                        </tbody>
                    </table>
                </div>