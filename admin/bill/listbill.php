<?php  
// Kết nối cơ sở dữ liệu  
$con = mysqli_connect('localhost', 'root', '', 'duan1');  

// Lấy dữ liệu từ cơ sở dữ liệu  
$sql = mysqli_query($con, "SELECT * FROM `tbl_order` ORDER BY `tbl_order`.`id_order` DESC"); 
$listdonhang = mysqli_fetch_all($sql, MYSQLI_ASSOC);

if (isset($_GET['id']) && isset($_GET['status'])) {  
    $id = $_GET['id'];  
    $status = $_GET['status'];  
    mysqli_query($con, "update tbl_order set status='$status' where id_order='$id'");  
    echo "<script>window.location = 'index.php?act=dsdonhang';</script>";
    die();  
}  
?>    
<style>
    /* Định dạng bảng */
    .table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    /* Định dạng header của bảng */
    .table th {
      background-color: #f2f2f2;
      text-align: center;
      padding: 8px;
      font-weight: bold;
    }

    /* Định dạng dòng chẵn của bảng */
    .table tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    /* Định dạng dòng lẻ của bảng */
    .table tr:nth-child(odd) {
      background-color: #ffffff;
    }

    /* Định dạng cột cuối cùng của bảng */
    .table td:last-child {
      text-align: center;
    }

    /* Định dạng select box */
    .form-select-sm {
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    /* Định dạng button */
    .btn {
      padding: 8px 16px;
      background-color: #007bff
    }
  </style>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
    <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Danh sách đơn hàng</h3>
        </div>
        <!-- Thêm bộ lọc ngày -->
        <div>
            <label for="start_date">Từ ngày:</label>
            <input type="date" id="start_date" name="start_date">
            <label for="end_date">Đến ngày:</label>
            <input type="date" id="end_date" name="end_date">
            <button type="submit" name="filter">Lọc Đơn</button>
        </div>
        <!-- Table start -->
        <table class="table table-primary">
            <!-- ... -->
        </table>
    </div>
</form>
<?php
// Xử lý khi người dùng ấn nút lọc
if (isset($_POST['filter'])) {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    
    // Thực hiện truy vấn SQL dựa trên khoảng thời gian được chọn và hiển thị kết quả
    $sql = mysqli_query($con, "SELECT * FROM `tbl_order` WHERE ngaydathang BETWEEN '$start_date' AND '$end_date' ORDER BY `tbl_order`.`id_order` DESC");
    $listdonhang = mysqli_fetch_all($sql, MYSQLI_ASSOC);
    // Hiển thị kết quả tương ứng
}
?>

                <!-- Table start -->
                <table class="table table-primary">
                    <tr>                   
                        <th></th>
                        <th>STT</th>
                       
                        <th>Người đặt hàng</th>
                        <th>Thông tin nhận</th>
                        <th>Tổng cộng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Trạng thái thanh toán</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                    <?php
                        foreach($listdonhang as $key => $order) {
                            if($order['TrangthaiTT']==1)
                            {
                                $tt =  '<span style="color:#ff6547;">Đã Thanh Toán</span>';
                            }else{
                                $tt = '<span style="color:#3cb878;">Chưa thanh toán</span>';
                            }
                            ?>
                                <tr>
                                    <th value="<?= $order['id_order'] ?>" id=""></th>
                                    <td><?= $key + 1 ?></td>
                                    
                                    <td><?= $order['hoten'] ?></td>
                                    <td ><?= $order['hoten']."<br> ĐC: ".$order['diachi']."<br> SĐT: ".$order['sdt']."" ?></td>
                                    <td class="phan-tu-cu-the" ><?= number_format($order['tongtien'],0,',','.') ?> VNĐ</td>
                                    <td><?= date('d-m-Y H:i:s',strtotime($order['ngaydathang'])) ?></td>
                                    <td><?= $tt ?></td>
                                    <td>
                                        <?php
                                            switch ($order['status']) {
                                                case '0':
                                                    echo '<span style="color:#ff6547;">Hủy Đơn</span>';
                                                 break;
                                                 case '1':
                                                    echo '<span style="color:#f39c12;">Chờ xác nhận</span>';
                                                    break;
                                                 case '2':
                                                        echo '<span style="color:#f39c12;">Xác nhận đơn hàng</span>';
                                                 break;
                                                 case '3':
                                                            echo '<span style="color:#3cb878;">Đang Vận Chuyển</span>';
                                                  break;
                                                  case '4':
                                                    echo '<span style="color:#3cb878;">Đã Giao</span>';
                                                   break;
                                                   }

                                        ?>
                                    </td>
                                    <td>
                                    <select onchange="changeStatus(this.options[this.selectedIndex].value,'<?php echo $order['id_order'] ?>')"
                                            class="form-select-sm selected_status" name="status"
                                            >
                                            <option value="">Trạng thái đơn</option>
                                            <option value="1">Chờ Xác Nhận</option>
                                            <option value="2">Xác nhận đơn hàng</option>
                                            <option value="3">Đang Vận Chuyển</option>
                                            <option value="4">Đã Giao</option>
                                            <option value="0">Hủy Đơn</option>
                                    </select>   
                                    </td>
                                    
                                </tr>
                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </form>
  </div>
</div>
<script>
    function changeStatus(value,id) {
        // alert(value);
        let url = "http://localhost/Duan1/admin/index.php?act=dsdonhang&";  
           window.location.href= url+"id="+id+"&status="+value;  
        }
        
</script>

