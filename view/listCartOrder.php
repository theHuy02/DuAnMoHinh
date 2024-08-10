<table border="1" width="100%" style="margin: 0 auto;">
    <thead>
        <tr align="center">
            <td>STT</td>
            <td>Hình ảnh</td>
            <td>Tên</td>
            <td>Giá</td>
            <td>Số lượng</td>
            <td>Tổng tiền</td>
            <td>Hành động</td>
        </tr>
    </thead>
    <tbody id="order">
        <?php
        $sum_total = 0;
        $vat = 0;
        if (isset($dataDb)) {
            foreach ($dataDb as $key => $product) {
                // kiểm tra số lượng sản phẩm trong giỏ hàng
                $quantityInCart = 0;
                foreach ($_SESSION['cart'] as $item) { // Duyệt qua các sản phẩm trong giỏ hàng hiện tại
                    if ($item['id'] == $product['id']) { // So sánh id trong giỏ hàng với id trên csdl
                        $quantityInCart = $item['quantity']; // Nếu tìm thấy mặt hàng gán số lượng và dừng vòng lặp
                        break;
                    }
                }
        ?>
        <tr align="center">
            <td><?= $key + 1 ?></td>
            <td>
                <img src="<?= $img_path . $product['img'] ?>" alt="<?= $product['name'] ?>"
                    style="width: 100px; height: auto">
            </td>
            <td><?= $product['name'] ?></td>
            <td><?= number_format((int)$product['price'], 0, ",", ".") ?> VNĐ</td>
            <td>
                <input type="number" value="<?= $quantityInCart ?>" min="1" id="quantity_<?= $product['id'] ?>"
                    oninput="updateQuantity(<?= $product['id'] ?>, <?= $key ?>, <?= $product['soluong'] ?>)">
            </td>
            <td><?= number_format((int)$product['price'] * (int)$quantityInCart, 0, ",", ".") ?> VNĐ</td>
            <td>
                <button onclick="removeFromCart(<?= $product['id'] ?>)">Xóa</button>
            </td>
        </tr>
        <?php
                // Tính tổng giá đơn hàng
                $vat += ((int)$product['price'] * (int)$quantityInCart) * 0.05;
                $sum_total += ((int)$product['price'] * (int)$quantityInCart) + $vat;

                // Lưu tổng giá trị vào session
                $_SESSION['resultTotal'] = $sum_total;
            }
        }
        ?>

        <tr>
            <td colspan="5" align="center">
                <h4>Tổng tiền hàng (5% thuế):</h4>
            </td>
            <td colspan="2" align="center">
                <h2>
                    <span style="color:red">
                        <?= number_format((int)$sum_total, 0, ",", ".") ?> VNĐ
                    </span>
                </h2>
            </td>
        </tr>
    </tbody>
</table>
<br>
<form action="index.php?act=order" method="post" style="padding-left: 600px; padding-right: 500px;">
    <input type="submit" style="width: 100px; padding: 0; text-align: center;" name="order" value="Đặt Hàng">
</form>



<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
function updateQuantity(id, index, availableStock) {
    let newQuantity = $('#quantity_' + id).val(); // Chọn phần tử có input có id và lấy giá trị của trường đó

    if (newQuantity <= 0) {
        newQuantity = 1;
        $('#quantity_' + id).val(newQuantity);
    } else if (newQuantity > availableStock) { // Kiểm tra xem nếu số lượng lớn hơn số lượng tồn kho
        
        alert('Số lượng sản phẩm không đủ');
        $('#quantity_' + id).val(availableStock); // Cập nhận về số lượng tối đa
    } else {
        $.ajax({
            type: 'POST',
            url: './view/updateQuantity.php',
            data: {
                id: id,
                quantity: newQuantity
            }, // Gửi yêu cầu tới updatequantity.php với id sản phẩm và số lượng mới
            success: function(response) { // Nếu yêu cầu thành công 
                response = JSON.parse(response); // Phản hồi máy chủ
                if (response.status === 'success') { // Kiểm tra giá trị thuộc tính
                    $.post('view/tableCartOrder.php', function(data) { // Gửi một yêu cầu POST khác đến tableCartOrder.php để lấy nội dung mới của giỏ hàng.
                        $('#order').html(data); // Cập nhật giao diện người dùng với thông tin giỏ hàng mới.
                    });
                } else {
                    alert(response.message); // Không thành công
                }
            },
            error: function(error) {
                console.log(error);
            },
        });
    }
}

function removeFromCart(id) {
    if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
        $.ajax({
            type: 'POST',
            url: './view/removeFormCart.php',
            data: {
                id: id
            },
            success: function(response) {
                $.post('view/tableCartOrder.php', function(data) {
                    $('#order').html(data);
                });
            },
            error: function(error) {
                console.log(error);
            },
        });
    }
}
</script>