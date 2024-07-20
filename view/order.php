    <style>
    .page-order {
        display: flex;
        justify-content: space-around;
        align-items: flex-start;
        border: 2px solid #000; /* Add a black border around the container */
        padding: 10px; /* Add some padding to create space between the content and the border */
    }

    .form-order {
        width: 50%;
        padding: 20px;
        box-sizing: border-box;
    }

    .sub-order {
        width: 40%;
        padding: 20px;
        box-sizing: border-box;
    }

    h2 {
        margin-bottom: 20px;
        font-size: 24px;
        text-align: center;
    }

    input[type="text"],
    input[type="tel"],
    input[type="email"] {
        padding: 10px;
        width: 100%;
        margin-bottom: 20px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        padding: 10px 20px;
        margin-top: 15px;
        display: block;
        margin: 0 auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    .sub-order table th:first-child,
    .sub-order table td:first-child {
        width: 70%;
    }

    .sub-order table th:last-child,
    .sub-order table td:last-child {
        text-align: right;
    }

    .sub-order form {
        text-align: center;
        margin-top: 20px;
    }

    </style>
    <div class="page-order">
        <div class="form-order">
            <form action="" method="post">
                <h2 >Thông tin khách hàng</h2>
                <div><input type="text" name="txthoten" id="" value="<?= $fullname ?>" placeholder="Họ và tên" required></div>
                <div ><input type="tel" name="txttel" id="" value="<?= $tel ?>"  placeholder="Số điện thoại" required></div>
                <div ><input type="email" name="txtemail" id="" value="<?= $email ?>"  placeholder="Email" required></div>
                <div ><input type="text" name="txtaddress" id="" value="<?= $address ?>" placeholder="Địa chỉ" required></div>
                <h3>Phương thức thanh toán</h3>
                <p ><input style="width: 20px;" type="radio" name="pttt" id="" value="1" required> Thanh toán khi nhận hàng</p>
                <p ><input style="width: 20px;" type="radio" name="pttt" id="" value="2" required> Chuyển khoản ngân hàng</p>
                <input style="width: 200px; text-align: center;padding: 0;margin-left: 300px;" type="submit" value="Xác nhận đặt hàng" name="order_confirm">
            </form>
            
        </div>
        <div class="sub-order">
            <h2  style="padding-right: 140px;">Đơn hàng</h2>
            <table >
                <tr>
                    <th>Sản phẩm</th>
                    <th>Thành tiền</th>
                </tr>
                <?php 
                    // print_r($cart);
                    
                    foreach ($cart as $item) {
                        $sum_total =  $_SESSION['resultTotal'];
                ?>
                <tr>
                    <td>
                        <?php echo $item['name'];?><br>
                        <small>SL: <?php echo $item['quantity'];?></small>
                    </td>
                    <td> <?php echo number_format($item['quantity']*$item['price'], 0, ",", "."); ?> VNĐ </td>
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <td><b>Tổng tiền (5% VAT)</b></td>
                    <td>  <b> <?php echo number_format($_SESSION['resultTotal'], 0, ",", "."); ?> VNĐ</b></td>
                </tr>
            </table>
            <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                            action="index.php?act=momoQR">
            <input type="hidden" value="<?= $sum_total ?>" name="tongtien" >
            <input type="submit" name="momo" value="Thanh Toán Momo QR Code">
        </form>
        
        </div>
    </div>
