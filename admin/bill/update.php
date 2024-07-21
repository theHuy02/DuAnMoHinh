<!-- <?php
if(is_array($suadh)){
    extract($suadh);
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tài khoản</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h3 {
            color: #333;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .row {
            margin: 20px 0;
        }

        .btn {
            padding: 10px 20px;
            background-color: rgb(105, 193, 234);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-reset {
            background-color: rgb(105, 193, 234);
        }
    </style>
</head>
<body>
    <h3>Cập nhật tài khoản</h3>
    <form action="index.php?act=update" method="post">
        <table>
            <tr>
                <th>User</th>
                <td><input type="text" name="user" value="<?php echo $id_user ?>"></td>
            </tr>
            <tr>
                <th>Pass</th>
                <td><input type="text" name="pass" value="<?php echo $hoten ?>"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="email" value="<?php echo $email ?>"></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><input type="text" name="phone" value="<?php echo $sdt ?>"></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input type="text" name="addre" value="<?php echo $dichi ?>"></td>
            </tr>
            <tr>
                <th>Trạng Thái</th>
                <td><input type="text" name="role" value="<?php echo $trangthai ?>"></td>
            </tr>
            <tr>
                <th>Trạng Thái Thanh Toán</th>
                <td><input type="text" name="role" value="<?php echo $trangthaiTT ?>"></td>
            </tr>
        </table>
        <div class="row">
            <input type="hidden" name="id" value="<?=$id?>">
            <input class="btn" name="capnhat" type="submit" value="Cập Nhật">
            <input class="btn btn-reset" type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listtk" class="btn">DANH SÁCH</a>
        </div>
    </form>
</body>
</html>