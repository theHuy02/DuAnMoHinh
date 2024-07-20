<?php
function load_thongke_sanpham_danhmuc()
{
    $sql = "SELECT dm.id, dm.name, COUNT(*) 'soluong', MIN(price) 'gia_min', MAX(price) 'gia_max', AVG(price) 'gia_avg' FROM danhmuc dm 
    JOIN sanpham sp ON dm.id=sp.iddm GROUP BY dm.id, dm.name ORDER BY soluong DESC";
    return pdo_query($sql);
}
function load_bieudo()
{
    $sql = "SELECT DATE(ngaydathang) AS ngay, 'Doanh thu' AS loai, SUM(order_detail.thanhtien) AS gia_tri
    FROM tbl_order
    JOIN order_detail ON tbl_order.id_order = order_detail.id_order
    GROUP BY DATE(ngaydathang) 
    
    ";
    return pdo_query($sql);
}
?>