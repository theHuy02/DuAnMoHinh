
<?php
function insert_taikhoan($email, $user, $password,$fullname,$tel,$address)
{
    $sql = "INSERT INTO taikhoan (email,user,password,fullname,tel,address) VALUES ('$email','$user','$password','$fullname','$tel','$address')";
    pdo_execute($sql);
}
function checkuser($user,$password){
    $sql = "SELECT * FROM taikhoan WHERE user='" .$user."' AND password='" .$password."' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkuser2($user)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" .$user."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkuser3($password)
{
    $sql = "SELECT * FROM taikhoan WHERE password='" .$password."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email){
    $sql = "SELECT * FROM taikhoan WHERE email='" .$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id, $user, $email, $address, $tel, $fullname)
{
        $sql = "UPDATE taikhoan SET user='" . $user . "',fullname='" . $fullname . "',email='" . $email . "',address='" . $address . "',tel='" . $tel . "' WHERE id=" . $id;
    pdo_execute($sql);
}

function update_taikhoan2($password,$id)
{
        $sql = "UPDATE taikhoan SET password='" . $password . "' WHERE id=" . $id;
    pdo_execute($sql);
}

function  update_taikhoanad($id,$user,$pass,$name, $email,$phone, $address, $tel, $role)
{
        $sql = "UPDATE `taikhoan` SET `user`= '$user',`password`='$pass',`fullname`='$name',`email`='$email',`tel`='$tel',`address`= '$address',`role`='$role' WHERE id = $id";
    pdo_execute($sql);
}



function loadall_taikhoan()
{
    $sql = "SELECT * FROM `taikhoan` order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id)
{
    $sql = "DELETE FROM taikhoan WHERE id=" . $_GET['id'];
    pdo_execute($sql);
}

function loadone_taikhoan($id)
{
    $sql = "SELECT * FROM `taikhoan` WHERE id=" . $id;
    $tk = pdo_query_one($sql);
    return $tk;
}
?>