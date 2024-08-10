<?php
session_start();

// Kiểm tra xem có tồn tại mảng giỏ hàng hay không.
if (!isset($_SESSION['cart'])) {
    // Nếu không có thì đi khởi tạo dưới dạng mảng trống
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
    if (!empty($_SESSION['cart'])) { // Kiểm tra sản phẩm đã có trong giỏ hàng hay chưa
        $index = array_search($productId, array_column($_SESSION['cart'], 'id'));
    }
    if ($index !== false) {
        $_SESSION['cart'][$index]['quantity'] += 1;
        // Nếu sản phẩm đã có trong giỏ hàng, số lượng của sản phẩm đó sẽ tăng thêm 1.
    } else {
        // Nếu sản phẩm chưa tồn tại, nó sẽ được thêm vào giỏ hàng với số lượng ban đầu là 1.
        $product = [
            'id' => $productId,
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => 1
        ];
        $_SESSION['cart'][] = $product;
    }
    // Trả về tổng số lượng sản phẩm khác nhau trong giỏ hàng
    echo count($_SESSION['cart']);
} else {
    echo 'Yêu cầu không hợp lệ';
}
?>