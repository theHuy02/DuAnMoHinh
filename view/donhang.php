<style>
    .chung {
        text-align: center;
    }

    table {
        background-color: antiquewhite;
        color: black;
        font-size: 12px;
        border: 1px solid gray;
        margin: 0 7%;
    }

    tr {
        border: 1px solid gray;
    }

    tr th {
        width: 200px;
        padding: 10px 0;
        background-color: aqua;
        border: 1px solid gray;

    }

    tr td {
        padding: 5px;
        text-align: center;
    }

    .btn-primary {
        border-radius: 20%;
        width: 70px;
    }
</style>
<div class="chung">
    <h1>Quản Lý ĐƠn Hàng</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>Họ tên</th>
            <th>SĐT</th>
            <th>Địa Chỉ</th>
            <th>Tổng tiền</th>
            <th>Phương Thức Thanh Toán</th>
            <th>Trạng thái đơn hàng</th>
            <th>Trạng Thái Thanh Toán</th>
            <th>Chi Tiết</th>
        </tr>
        <?php
        $i = 0;
        $id_userlog = $_SESSION['user']['id'];
        foreach($listdonhang as $dh) {
            extract($dh);
            $linksp = "index.php?act=chitietdon&id=".$id_order."&status=" .$status;
            if($id_userlog == $id_user) {

                $i++;
    
                ?>

                <tr>
                    <td>
                        <?= $i ?>
                    </td>
                    <td>
                        <?= $hoten ?>
                    </td>
                    <td>
                        <?= $sdt ?>
                    </td>
                    <td>
                        <?= $diachi ?>
                    </td>
                    <td> 
                        <?= number_format($tongtien, 0, '', '.') ?> VNĐ
                    </td>
                    <td>
                        <?= $pttt == 1 ? 'Thanh Toán Khi Nhận Hàng' : 'Chuyển Khoản'; ?>
                    </td>
                    <td>
                                        <?php
                                            switch ($status) {
                                                case '0':
                                                    echo '<span style="color:#ff6547;">Hủy Đơn</span>';
                                                 break;
                                                 case '1':
                                                    echo '<span style="color:#f39c12;">Chờ xác nhận</span>';
                                                    break;
                                                 case '2':
                                                        echo '<span style="color:#f39c12;">Xác nhận đơn hàng</span>';
                                                 break;
                                                 case '3':
                                                            echo '<span style="color:#3cb878;">Đang Vận Chuyển</span>';
                                                  break;
                                                  case '4':
                                                    echo '<span style="color:#3cb878;">Đã Giao</span>';
                                                   break;
                                                   }

                                        ?>
                                    </td>
                    <td>
                        <?= $TrangthaiTT == 0 ? 'Chưa Thanh Thoán' : 'Đã Thanh Toán'; ?>
                    </td>
                    <td><span class="tbl-btn"><a class="btn btn-lg btn-primary" href="<?= $linksp ?>">Xem</a></span></td>
                    

                </tr>

                <?php
            }
        }
        ?>
    </table>
</div>
