<style>
    .quenmatkhau{
        padding-top: 30px;
        width: 100%;
        margin: 0 auto;
        background-color: #ccc;
        padding: 100px;
        text-align: center;
        
    }


</style>


    <div class="quenmatkhau">
    <h1>Quên mật khẩu</h1>
    <form action="index.php?act=quenmatkhau" method="post">
        <label for="email">Nhập địa chỉ Email</label><br>
        <input type="email" id="email" name="email" value="<?php $email ?>" required>
        <button type="submit" name="guiquenmatkhau">Gửi yêu cầu</button>
    </form>
    </div>

