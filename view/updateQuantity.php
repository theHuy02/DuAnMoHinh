<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ AJAX đẩy lên
    $productId = $_POST['id'];
    $newQuantity = $_POST['quantity'];

    // Kiểm tra giỏ hàng có tồn tại hay không
    if (!empty($_SESSION['cart'])) {
        // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
        $index = array_search($productId, array_column($_SESSION['cart'], 'id'));

        // Nếu sản phẩm tồn tại thì cập nhật lại số lượng
        if ($index !== false) {
            // Giả sử $availableStock là số lượng sản phẩm tồn kho
            // Bạn có thể lấy giá trị này từ cơ sở dữ liệu
            $availableStock = 10; // Ví dụ, số lượng tồn kho là 10

            if ($newQuantity <= $availableStock) {
                $_SESSION['cart'][$index]['quantity'] = $newQuantity;
                echo json_encode(['status' => 'success', 'message' => 'Cập nhật số lượng thành công']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Số lượng sản phẩm không đủ']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Sản phẩm không tồn tại trong giỏ hàng']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Giỏ hàng rỗng']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Yêu cầu không hợp lệ']);
}
?>

