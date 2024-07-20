<?php
ob_start();
session_start();

include 'model/pdo.php';
include 'global.php';
include 'model/taikhoan.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'view/header.php';
include 'model/binhluan.php';
include 'model/order.php';
include 'model/bill.php';

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();

if((isset($_GET['act'])) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch($act) {
        // -----------------đăng nhập --------------------
        case 'dangnhap':
            if(isset($_POST['dangnhap']) && ($_POST['dangnhap'] > 0)) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                $checkuser = checkuser($user, $password);
                if(is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    if(isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                        if($role == 1) {
                            header("Location:admin/index.php");
                        } else {
                            header('Location:index.php');
                        }
                    }
                } else {
                    $thongbao = 'Account does not exist';
                }

            }
            include 'view/taikhoan/dangnhap.php';
            break;
        // -----------------đăng kí --------------------
        case 'dangky':
            if(isset($_POST['dangky']) && ($_POST['dangky'] > 0)) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $password = $_POST['password'];
                $fullname = $_POST['fullname'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                insert_taikhoan($email, $user, $password, $fullname, $tel, $address);
                $thongbao = 'Successful account register';
            }
            include 'view/taikhoan/dangky.php';
            break;

        // -----------------Đăng xuất--------------------
        case 'thoat':
            session_unset();
            header('Location:index.php');
            break;

        case 'profile':
            include 'view/taikhoan/profile.php';
            break;


        case 'updatetk':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'] > 0)) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $fullname = $_POST['fullname'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $email, $address, $tel, $fullname);
                $_SESSION['user'] = checkuser2($user);
                header('Location:index.php?act=profile');
                // $thongbao = 'Successful account update';
            }
            include 'view/taikhoan/update.php';
            break;




        case 'matkhau':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'] > 0)) {
                $password = $_POST['password'];
                $password1 = $_POST['password1'];
                $id = $_POST['id'];
                if($_POST['password'] == $_POST['password1']) {
                    update_taikhoan2($password, $id);
                    $_SESSION['user'] = checkuser3($password);
                    header('Location:index.php?act=profile');
                } else {
                    header('Location:index.php?act=matkhau');
                }
            }
            include 'view/taikhoan/matkhau.php';
            break;

        case 'chitiet':
            if(isset($_SESSION['user'])){
                $id_user = $_SESSION['user']['id'];
            if(isset($_POST['guibinhluan'])){
                

                insert_binhluan($_POST['idpro'], $_POST['noidung'],$id_user);
            }
        }else{
            echo'Đăng nhập';
        }
            if(isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                
                
                $onesp = loadone_sanpham($id);
                extract($onesp);

                $spcungloai = loadone_sanpham_cungloai($id, $iddm);
                $binhluan = loadone_binhluan($_GET['idsp']);
                include 'view/chitietsanpham.php';
            } else {
                include 'view/home.php';
            }
            break;
            case "sanpham":
                if ((isset($_POST['keyw']) && ($_POST['keyw'] != ""))) {
                    $keyw = $_POST['keyw'];
                } else {
                    $keyw = "";
                }
                if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                    $iddm = $_GET['iddm'];
                } else {
                    $iddm = 0;
                }
                $dssp = loadall_sanpham($keyw, $iddm);
                $tendm = load_ten_dm($iddm);
                include "view/sanpham.php";
                break;
                case "listCart":
                    // Kiểm tra xem giỏ hàng có dữ liệu hay không
                    if (!empty($_SESSION['cart'])) {
                        $cart = $_SESSION['cart'];
        
                        // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
                        $productId = array_column($cart, 'id');
                        
                        // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
                        $idList = implode(',', $productId);
                        
                        // Lấy sản phẩm trong bảng sản phẩm theo id
                        $dataDb = loadone_sanphamCart($idList);
                        // var_dump($dataDb);
                    }
                    include "view/listCartOrder.php";
                    break;
                    case "order":
                        if (isset($_SESSION['cart'])) {
                            $cart = $_SESSION['cart'];
                            // print_r($cart);
                            if (isset($_POST['order_confirm'])) {
                                $txthoten = $_POST['txthoten'];
                                $txttel = $_POST['txttel'];
                                $txtemail = $_POST['txtemail'];
                                $txtaddress = $_POST['txtaddress'];
                                $pttt = $_POST['pttt'];
                                // date_default_timezone_set('Asia/Ho_Chi_Minh');
                                // $currentDateTime = date('Y-m-d H:i:s');
                                if (isset($_SESSION['user'])) {
                                    $id_user = $_SESSION['user']['id'];
                                } else {
                                    $id_user = 0;
                                }
                                $idBill = addOrder($id_user, $txthoten, $txttel, $txtemail, $txtaddress, $_SESSION['resultTotal'], $pttt);
                                foreach ($cart as $item) {
                                    addOrderDetail($idBill, $item['id'], $item['price'], $item['quantity'], $item['price'] * $item['quantity']);
                                }
                                unset($_SESSION['cart']);
                                $_SESSION['success'] = $idBill;
                                header("Location: index.php?act=success");
                            }
                            include "view/order.php";
                        } else {
                            header("Location: index.php?act=listCart");
                        }
                        break;
                    case "success":
                        if (isset($_SESSION['success'])) {
                            include 'view/success.php';
                        } else {
                            header("Location: index.php");
                        }
                        break;
                    case "donhang":
                        if(isset($_SESSION['user'])){
                            $id_user = $_SESSION['user']['id'];
                            $listdonhang = loadall_donhang();
                        include 'view/donhang.php';
                        }
                        else{
                            echo "Đăng Nhập Để Sử Dụng";
                        }
                        
                        break;
                        case "chitietdon":
                            // if(isset($_GET['id_order']) && ($_GET['id_order'] > 0)) {
                            //     $id = $_GET['id_order'];
                            //     $onedh = loadone_donhang();
                            //     extract($onedh);
                            //    $sp = loadone_sanpham($id);
                            //    extract($sp);
                            // }
                                include 'view/chitietdonhang.php';
                            
                            break;
                        case 'momoQR':
                            $monny = $_SESSION['resultTotal'];
                            
                            include 'view/xulythanhtoanmomo.php';
                            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
ob_end_flush();
?>