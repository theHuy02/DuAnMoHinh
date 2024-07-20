<?php
function insert_sanpham($iddm,$tensp, $giasp,$soluong, $mota,$hinh,$hinh1)
{
    $sql = "INSERT INTO sanpham (iddm,name,price,mota,img,img1,soluong) VALUES ('$iddm','$tensp','$giasp','$mota','$hinh','$hinh1','$soluong')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "DELETE FROM `sanpham` WHERE id=" . $_GET['id'];
    pdo_execute($sql);
}
function loadall_sanpham_home()
{
    $sql="SELECT * FROM sanpham where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanphamcart()
{
    $sql="SELECT * FROM sanpham";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10()
{
    $sql="SELECT * FROM sanpham where 1 order by soluong desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}function loadall_sanpham($keyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    // where 1 tức là nó đúng
    if($keyw!=""){
        $sql.=" and name like '%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}

function load_ten_dm($iddm){
    if($iddm>0){
    $sql="select * from sanpham where id=".$iddm;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $name;
    }else{
        return "";
    }
}
function loadone_sanpham($id)
{
    $sql = "SELECT * FROM `sanpham` WHERE id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadone_sanpham_cungloai($id,$iddm)
{
    $sql = "SELECT * FROM `sanpham` WHERE iddm=".$iddm." AND id <> ".$id;
    $sp = pdo_query($sql);
    return $sp;
}
function updatedm_sanpham($id, $iddm,$tensp, $giasp, $mota,$hinh,$hinh1,$soluong)
{
    if (($hinh != "")||($hinh1 != ""))
        $sql = "UPDATE sanpham SET `iddm`='" . $iddm . "',`name`='" . $tensp . "',`price`='" . $giasp . "',`mota`='" . $mota . "',`img`='" . $hinh . "',`img1`='" . $hinh1 . "',`soluong`='" . $soluong . "' WHERE id=" . $id;
    else
        $sql = "UPDATE sanpham SET `iddm`='" . $iddm . "',`name`='" . $tensp . "',`price`='" . $giasp . "',`mota`='" . $mota . "',`soluong`='" . $soluong . "' WHERE id=" . $id;
    pdo_execute($sql);
}
function loadone_sanphamCart ($idList) {
    $sql = 'SELECT * FROM sanpham WHERE id IN ('. $idList . ')';
    $sanpham = pdo_query($sql);
    return $sanpham;
}
?>