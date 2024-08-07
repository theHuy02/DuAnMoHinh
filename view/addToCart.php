<?php
session_start();

// Kiểm tra xem có tồn tại mảng giỏ hàng hay không.
if (!isset($_SESSION['cart'])) {
    // Nếu không có thì đi khởi tạo
    $_SESSION['cart'] = [];
    // 1111
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ ajax đẩy lên
    $productId = $_POST['id'];
    $productName = $_POST['name'];
    $productPrice = $_POST['price'];
    // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
    $index = false;
    if (!empty($_SESSION['cart'])) { // Kiểm tra xem giỏ hàng không rỗng
        $index = array_search($productId, array_column($_SESSION['cart'], 'id'));
        // array_column($_SESSION['cart'], 'id') tạo ra một mảng chứa tất cả các giá trị của cột 'id' trong mảng $_SESSION['cart'].
    }
    if ($index !== false) {
        $_SESSION['cart'][$index]['quantity'] += 1;
        // Kiểm tra xem sản phẩm tồn tại chưa nếu có tăng thêm 1 đơn vị
    } else {
        // Nếu sản phẩm chưa tồn tại thì thêm mới vào giỏ hàng
        $product = [
            'id' => $productId,
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => 1
        ];
        $_SESSION['cart'][] = $product;
        // var_dump($_SESSION['cart']);die;
    }
    // Trả về số lượng sản phẩm của giỏ hàng
    echo count($_SESSION['cart']);
} else {
    echo 'Yêu cầu không hợp lệ';
}
?>