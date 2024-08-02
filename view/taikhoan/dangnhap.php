<style>
    .dangki{
        text-align: center;
        padding: 5px 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        /* height: 50px; */
        
    }
    .dangnhap{
        text-align: center;
        padding: 5px 10px;
        border-radius: 5px;
        border: 1px solid #ccc;

        
    }
</style>
<section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Đăng nhập</h2>
                        <h2 class="ec-title">Đăng nhập</h2>
                        <p class="sub-title mb-3">Nơi tốt nhất để mua và bán sản phẩm kĩ thuật số</p>
                    </div>
                </div>
                <div class="ec-login-wrapper">
                    <div class="ec-login-container">
                        <div class="ec-login-form">
                            <form action="index.php?act=dangnhap" method="post">
                                <span class="ec-login-wrap">
                                    <label>Tên tài khoản*</label>
                                    <input type="text" name="user" placeholder="Nhập tên tài khoản của bạn" required />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Mật khẩu*</label>
                                    <input type="password" name="password" placeholder="Nhập mật khẩu" required />
                                </span>
                                <span class="ec-login-wrap ec-login-fp">
                                    <label><a href="index.php?act=quenmatkhau" class="quenmatkhau">Quên mật khẩu?</a></label>
                                </span>
                                
                                <span class="ec-login-wrap ec-login-btn">
                                    <div class="btn">
                                    <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                ?>
                                    </div>
                                
                                    <input class="dangnhap" style="background-color:#3474d4;color:#FFFFFF" type="submit" value="Đăng nhập" name="dangnhap">
                                    <a href="index.php?act=dangky" class="dangki" style="background-color:#8B4513;color:black"><button>Đăng kí</button></a>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>