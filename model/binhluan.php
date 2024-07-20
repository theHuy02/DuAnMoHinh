<?php 
    function loadone_binhluan($idsp){
        $sql = "
            SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
            WHERE sanpham.id = $idsp;
        ";
        $result =  pdo_query($sql);
        return $result;
    }
    function insert_binhluan($idpro, $noidung,$id_user){
        $date = date('Y-m-d');
        $sql = "
            INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`,`is_hidden` ) 
            VALUES ('$noidung','$id_user','$idpro','$date','0');
        ";
        //echo $sql;
        //die;
        pdo_execute($sql);
    }
    function loadall_binhluan() {
        $sql = "SELECT * FROM binhluan
        INNER JOIN taikhoan ON binhluan.iduser = taikhoan.id
        INNER JOIN sanpham ON binhluan.idpro = sanpham.id
        ORDER BY binhluan.id DESC;
        ";
        $listbl = pdo_query($sql);
        return $listbl;
    }
?>