<?php
include '../model/pdo.php';
include '../model/sanpham.php';
include '../model/danhmuc.php';
include '../model/bill.php';
include '../model/taikhoan.php';
include '../model/binhluan.php';
include '../model/thongke.php';
include 'header.php';
if (isset($_GET['act'])) {

    $act = $_GET['act'];
    switch ($act) {
        // ---------------------------------list dm------------------ 
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
        // ---------------------------------add dm------------------ 
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = 'More success';
            }

            include 'danhmuc/add.php';
            break;

        // ---------------------------------xoa dm------------------ 
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;

        // ---------------------------------sua dm------------------ 
        case 'suadm':
            if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include 'danhmuc/update.php';
            break;

        // ---------------------------------update dm------------------ 

        case 'updatedm':
            if (isset($_POST['capnhatlh']) && ($_POST['capnhatlh'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                updatedm_danhmuc($id, $tenloai);
                $thongbao = 'More success';
            }
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;


        // ---------------------------------list sp------------------ 
        case 'listsp':
            $listsanpham = loadall_sanpham();
            include 'sanpham/list.php';
            break;
        // ---------------------------------add sp------------------ 
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['price'];
                $soluong = $_POST['soluong'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $hinh1 = $_FILES['hinh1']['name'];

                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                $target_file1 = $target_dir . basename($_FILES['hinh1']['name']);

                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                } else {
                }
                if (move_uploaded_file($_FILES['hinh1']['tmp_name'], $target_file1)) {
                } else {
                }
 
                insert_sanpham($iddm, $tensp, $giasp,$soluong, $mota, $hinh, $hinh1);

                $thongbao = 'More success';
            }
            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/add.php';
            break;
        // ---------------------------------xoa sp------------------ 

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham();
            include 'sanpham/list.php';
            break;
        // ---------------------------------sua sp------------------ 

        case 'suasp':
            if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            //var_dump( $listdanhmuc );
            include 'sanpham/update.php';
            break;


        case 'ctsp':
            if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            //var_dump( $listdanhmuc );
            include 'sanpham/chitiet.php';
            break;


        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['price'];
                $mota = $_POST['mota'];
                $soluong = $_POST['soluong'];
                $hinh = $_FILES['hinh']['name'];
                $hinh1 = $_FILES['hinh1']['name'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                $target_file1 = $target_dir . basename($_FILES['hinh1']['name']);

                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                } else {
                }
                if (move_uploaded_file($_FILES['hinh1']['tmp_name'], $target_file1)) {
                } else {
                }
                updatedm_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh, $hinh1,$soluong);
                // $thongbao = 'Cập nhật thành công';
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham('', 0);

            include 'sanpham/list.php';
            break;

        // ---------------------------------chi tiet sp------------------
        case 'dsdonhang':
            $listdonhang = loadall_donhang();
            include 'bill/listbill.php';
            break;
        // case 'status':
        //         $id = $_GET['id_order'];
        //         $status = $_GET['status'];
        //         update_donhang($id, $status);
        //         include 'bill/listbill.php';
        //     break;
        //---------------------- xóa đơn hàng-------------------
        // case 'xoadh':
        //     if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        //         delete_donhang($_GET['id']);
        //     }
        //     $listdonhang = loadall_donhang();
        //     include 'bill/listbill.php';
        //     break;



        // --------------------------------list tk-------------------- 
//     -------- quan ly tai khoan--------------
        case 'listtk':
            $listtaikhoan = loadall_taikhoan();
            include 'taikhoan/list.php';
            break;
        //------ xoa tai khoan--------
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include 'taikhoan/list.php';
            break;

        case 'suatk':
            if (isset($_GET['id']) && ($_GET)['id'] > 0) {
                $taikhoan = loadone_taikhoan($_GET['id']);
            }
                $listtaikhoan = loadall_taikhoan();
            //var_dump( $listdanhmuc );
            include 'taikhoan/edit.php';
            break;
            case 'update':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $name=$_POST['fullname'];
                    $email=$_POST['email'];
                    $phone=$_POST['phone'];
                    $address=$_POST['addre'];
                    $tel=$_POST['phone'];
                    $role = $_POST['role'];
                    update_taikhoanad($id,$user,$pass,$name, $email,$phone, $address, $tel, $role);
                }
                $listtaikhoan = loadall_taikhoan();
                include 'taikhoan/list.php';
                break;
            case 'binhluan':
                $listbl = loadall_binhluan();
            include 'binhluan/list.php';
                break;
            case 'thongke':
                $dsthongke = load_thongke_sanpham_danhmuc();
                $doanhthu = load_bieudo();
                include 'thongke/thongkesp.php';
                break;
                
}} else {
    include 'home.php';
}
    
include 'footer.php';
?>