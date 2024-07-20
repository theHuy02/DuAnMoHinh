<?php


//------------------------------ đơn hàng--------------------------
function loadall_donhang()
{
    $sql = "SELECT * FROM `tbl_order` ORDER BY `tbl_order`.`id_order` DESC";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
function loadone_donhang()
{
    $sql = "SELECT * FROM `order_detail`";
    $dh = pdo_query($sql);
    return $dh;
    // $sql = "SELECT * FROM `order_detail`
    // WHERE  'id_order'=" . $id;
    // $dh = pdo_query($sql);
    // return $dh;
}
function delete_donhang($id_order)
{
    $sql = "DELETE FROM tbl_order WHERE id=" . $id_order;
    pdo_execute($sql);
}
function update_donhang($id, $status)
{
    $sql = "UPDATE tbl_order SET status='" . $status . "' WHERE id=" . $id;
    pdo_execute($sql);
    }
// function load_donhang_user($id_user){
//     $sql = "SELECT * FROM `tbl_order`";
//     // --  WHERE 'id_user'=" . $id_user;
//     $sp = pdo_query($sql);
//     return $sp;
// }

    // function select_donhang() {
    //     $sql = "SELECT 
    //                 u.id as user_id,
    //                 o.id as orderid,
    //                 CONCAT(u.name) AS fullName,
    //                 o.ma_donhang,
    //                 o.name,
    //                 o.phone,
    //                 o.addr,
    //                 o.status,
    //                 o.created_at,
    //                 SUM(od.price * od.quantity) AS total
    //             FROM 
    //                 `orders` o
    //             JOIN 
    //                 users u ON u.id = o.user_id
    //             JOIN 
    //                 order_detail od ON od.order_id = o.id
    //             GROUP BY 
    //                 o.id";
    //     return pdo_query($sql);
    // }

    // function listOrder_detail($order_id){
    //     $sql="SELECT 
    //             od.id,
    //             od.product_id,
    //             p.id_product,
    //             p.name,
    //             p.images,
    //             od.price,
    //             od.quantity,
    //             od.price * od.quantity AS total
    //         FROM 
    //             order_detail od
    //         JOIN 
    //             products p ON p.id_product = od.product_id
    //         WHERE 
    //             od.order_id = ".$order_id;

    //     return pdo_query($sql);
    // }
?>
