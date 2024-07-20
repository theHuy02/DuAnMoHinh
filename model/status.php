<?php
    include("../../model/pdo.php");

    $trangthai=$_GET['trangthai']??'1';
    $id_order=$_GET['id_order']??0; 

    update($newtrangthai,$id_order);
    function update($newStatus,$id_order) {
        $sql = "UPDATE tbl_order SET status = '$newtrangthai' WHERE id = $id_order";
        pdo_execute($sql);
    }

    echo $status;
?>