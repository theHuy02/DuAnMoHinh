<?php
session_start();
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/danhmuc.php";
include "../model/order.php";
include "../global.php";

// Kiểm tra xem giỏ hàng có dữ liệu hay không
if (!empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

    // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
    $productId = array_column($cart, 'id');

    // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
    $idList = implode(',', $productId);

    // Lấy sản phẩm trong bảng sản phẩm theo id
    $dataDb = loadone_sanphamCart($idList);
    $sum_total = 0;
    $vat = 0;
    foreach ($dataDb as $key => $product) :
        // kiểm tra số lượng sản phẩm trong giỏ hàng
        $quantityInCart = 0;
        foreach ($_SESSION['cart'] as $item) {
            if ($item['id'] == $product['id']) {
                $quantityInCart = $item['quantity'];
                break;
            }
        }
?>
        <tr align="center">
            <td><?= $key + 1 ?></td>
            <td>
                <img src="<?= $img_path, $product['img'] ?>" alt="<?= $product['name'] ?>" style="width: 100px; height: auto">
            </td>
            <td><?= $product['name'] ?></td>
              <td>  <?= number_format((int)$product['price'], 0, ",", ".")  ?> VNĐ</td>
            <td>
                <input type="number" value="<?= $quantityInCart ?>" min="1" id="quantity_<?= $product['id'] ?>" oninput="updateQuantity(<?= $product['id'] ?>, <?= $key ?>)">
            </td>
            <td>
                <?= number_format((int)$product['price'] * (int)$quantityInCart, 0, ",", ".") ?> VNĐ
            </td>
            <td>
                <button>Xóa</button>
            </td>
        </tr>
    <?php
        // Tính tổng giá đơn hàng
        $vat +=(((int)$product['price'] * (int)$quantityInCart))*0.05;
                $sum_total +=(    ((int)$product['price'] * (int)$quantityInCart)) + (int)$vat ;

        // Lưu tổng giá trị vào sesion
        $_SESSION['resultTotal'] = $sum_total;
    endforeach;
    ?>

    <tr>
        <td colspan="5" align="center">
            <h4>Tổng tiền hàng:(5% vat)</h4>
        </td>
        <td colspan="2" align="center">
            <h2>
            <span style ="color:red">
                     <?= number_format((int)$sum_total, 0, ",", ".")  ?> VNĐ
                </span>
                <input type="hidden" value="<?= $sum_total ?>" name="tongtien" >
            </h2>
        </td>
    </tr>
<?php
}
?>