<?php
$onedh = loadone_donhang();
 $od = loadall_donhang();
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan1";
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy giá trị status và id từ URL
// PHP code
if(isset($_GET['status']) && isset($_GET['id'])) {
    $status = $_GET['status'];
    $id = $_GET['id'];
    // Use prepared statement to update status in the database
    $stmt = $conn->prepare("UPDATE tbl_order SET status = ? WHERE id_order = ?");
    $stmt->bind_param("ii", $status, $id);
    $stmt->execute();

}
if(isset($_GET['tt']) && isset($_GET['id'])) {
    $tt = $_GET['tt'];
    $id = $_GET['id'];
    // Use prepared statement to update tt in the database
    $stmt = $conn->prepare("UPDATE tbl_order SET TrangthaiTT = ? WHERE id_order = ?");
    $stmt->bind_param("ii", $tt, $id);
    $stmt->execute();

}
// Đóng kết nối
$conn->close();
?>

<style>
/* CSS for the table */
table.ec-table {
  width: 100%;
  border-collapse: collapse;
}

table.ec-table th,
table.ec-table td {
  padding: 8px;
  text-align: center;
}

table.ec-table th {
  background-color: #f2f2f2;
}

table.ec-table tbody tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}

/* CSS for the "Hủy đơn" button */
.btn-danger {
  background-color: #dc3545;
  color: #fff;
  border: 1px solid #dc3545;
  padding: 5px 15px;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s;
}

.btn-danger:hover {
  background-color: #c82333;
  border-color: #bd2130;
}

</style>

                                <div class="container px-0">
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <hr class="row brc-default-l1 mx-n1 mb-4" />

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="my-2">
                                                        <span class="text-sm text-grey-m2 align-middle">Gửi đến : </span>
                                                        <span class="text-600 text-110 text-blue align-middle"><?= $fullname ?></span>
                                                    </div>
                                                    <div class="text-grey-m2">
                                                        <div class="my-2">
                                                        <?= $address?>
                                                        </div>
                                                        
                                                        <div class="my-2"><b class="text-600">Phone : </b><?= $tel ?>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <!-- /.col -->
                                                <!-- /.col -->
                                            </div>

                                            <div class="mt-4">

                                                <div class="text-95 text-secondary-d3">
                                                    <div class="ec-vendor-card-table">
                                                        <table class="table ec-table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">ID</th>
                                                                    <th scope="col">Tên Sản Phẩm</th>
                                                                    <th>Ảnh sản phẩm</th>
                                                                    <th scope="col">Số Lượng</th>
                                                                    <th scope="col">Giá</th>
                                                                    <th scope="col">Tổng</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $i=0;
                                                               
                                                                    foreach($od as $t){
                                                                        if($t['id_order'] == $_GET['id']){
                                                                            $tongdh = $t['tongtien'];
                                                                            $statuss = $t['status'];
                                                                            $tt = $t['TrangthaiTT'];
                                                                    foreach($onedh as $da)
                                                                    {
                                                                        $vat = $tongdh *0.05;
                                                                    extract($da);
                                                                    if($da['id_order'] == $t['id_order']){
                                                                        $listsp = loadall_sanphamcart();
                                                                        foreach($listsp as $lsp){
                                                                            if($id_pro == $lsp['id']){
                                                                                $hinh = $img_path . $lsp['img'];
                                                                                $i++;
                                                                            
                                                                    ?>
                                                                        <tr>
                                                                    <th><span><?= $i; ?></span></th>
                                                                    <td><span><?= $lsp['name']; ?></span></td>
                                                                    <td><img src="<?= $hinh; ?>" alt="" width="80px" srcset=""></td>
                                                                    <td><span><?= $soluong; ?></span></td>
                                                                    <td><span> <?=number_format((int)$giamua, 0, ",", ".") ; ?> VNĐ</span></td>
                                                                    <td><span><?= number_format((int)$thanhtien, 0, ",", ".")  ; ?> VNĐ</span></td>
                                                                </tr>
                                                                <?php
                                                                    }
                                                                    }
                                                                }
                                                                }
                                                            }
                                                            }
                                                                ?>
                                                            </tbody>
                                                            <tfoot>
                                                                            <tr>
                                                                    
                                                                            <td class="border-color text-danger">
                                                                             <span><strong>VAT (5%)</strong></span>
                                                                        </td>

                                                                    <td class="border-color text-danger">
                                                                        <span><b> <?= number_format((int)$vat, 0, ",", ".")  ?><?php
                                                                             
                                                                        ?> VNĐ</b></span></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td class="border-color text-danger"
                                                                        colspan="1"><span><strong>Total</strong></span>
                                                                    </td>
                                                                    <td class="border-color text-danger">
                                                                        <span style="color=red;" ><b><?= number_format((int)$tongdh, 0, ",", ".") ?> VNĐ</b></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    <div class="my-2">
                                                        <?php if($tt==0){echo 'Chưa Thanh Toán';}else { echo 'Đã Thanh Toán' ;}
                                                         ?>
                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                <td>
                                                  <?php
                                                      if($statuss == 1 || $statuss == 2)
                                                      {
                               
                                                        echo' <button class="btn-danger" onclick="changeStatus(0, '.$_GET['id'].')">Hủy đơn</button> ';
                                                        
                                                      }
                                                      else if($statuss == 3 || $statuss == 4)
                                                      {
                                                        
                                                      echo ' <button class="btn-danger" onclick="changeTT(1, '.$_GET['id'].')">Đã nhận đơn</button> ';
                                                         }else{
                                                            echo 'Đơn của bạn đã bị hủy!';
                                                         }
                                                  ?>
                                                  </td>
                                                                </tr>

                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
   function changeStatus(status, id) {  
            let url = "http://localhost/Duan1/index.php?act=chitietdon&";
        window.location.href = url + "id=" + id + "&status=" + status;
        alert("Đơn hàng đã được hủy thành công!");
            
}
function changeTT(status, id) {  
            let url = "http://localhost/Duan1/index.php?act=chitietdon&";
        window.location.href = url + "id=" + id + "&tt=" + status;
        alert("Cảm ơn bạn đã mua hàng");
            
}

</script>

