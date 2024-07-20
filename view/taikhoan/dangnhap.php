<section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Log In</h2>
                        <h2 class="ec-title">Log In</h2>
                        <p class="sub-title mb-3">Best place to buy and sell digital products</p>
                    </div>
                </div>
                <div class="ec-login-wrapper">
                    <div class="ec-login-container">
                        <div class="ec-login-form">
                            <form action="index.php?act=dangnhap" method="post">
                                <span class="ec-login-wrap">
                                    <label>User Name*</label>
                                    <input type="text" name="user" placeholder="Enter user name" required />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Password*</label>
                                    <input type="password" name="password" placeholder="Enter your password" required />
                                </span>
                                <span class="ec-login-wrap ec-login-fp">
                                    <label><a href="#">Forgot Password?</a></label>
                                </span>
                                
                                <span class="ec-login-wrap ec-login-btn">
                                    <div class="btn">
                                    <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                ?>
                                    </div>
                                
                                    <input class="btn btn-primary" style="background-color:#3474d4;color:#FFFFFF" type="submit" value="Login" name="dangnhap">
                                    <a href="index.php?act=dangky" class="btn btn-secondary">Register</a>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>