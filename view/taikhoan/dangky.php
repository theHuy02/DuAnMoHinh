<style>
    .dangki {
        text-align: center;
        padding: 5px 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        /* margin-bottom: 10px; */
        
    }
</style>
<section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Đăng kí</h2>
                        <h2 class="ec-title">Đăng kí</h2>
                        <p class="sub-title mb-3">Nơi tốt nhất để mua và bán sản phẩm kĩ thuật số</p>
                    </div>
                </div>
                <div class="ec-register-wrapper">
                    <div class="ec-register-container">
                        <div class="ec-register-form">
                        <form action="index.php?act=dangky" method="post">
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Tên tài khoản*</label>
                                    <input type="text" name="user" placeholder="Nhập tên người dùng của bạn" required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                <label>Mật khẩu*</label>
                                    <input type="password" name="password" placeholder="Nhập mật khẩu" required />
                                    
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                <label>Họ và tên*</label>
                                    <input type="text" name="fullname" placeholder="Nhập tên đầy đủ của bạn" required />
                                    
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                <label>Email*</label>
                                    <input type="email" name="email" placeholder="Nhập dịa chỉ email của bạn" required />
                                    
                                </span>
                                <span class="ec-register-wrap">
                                <label>Số điện thoại*</label>
                                    <input type="text" name="tel" placeholder="Nhập số điện thoại của bạn"/>
                                     
                                   
                                </span>
                                <span class="ec-register-wrap">
                                <label>Địa chỉ*</label>
                                    <input type="text" name="address" placeholder="Nhập địa chỉ" />
                                </span>
                                <!-- <span class="ec-register-wrap ec-recaptcha">
                                    <span class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"
                                        data-callback="verifyRecaptchaCallback"
                                        data-expired-callback="expiredRecaptchaCallback"></span>
                                    <input class="form-control d-none" data-recaptcha="true" required
                                        data-error="Please complete the Captcha">
                                    <span class="help-block with-errors"></span>
                                </span> -->
                                
                                <span class="ec-register-wrap ec-register-btn">
                                <div class="btn">
                                    <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                ?>
                                    </div>
                                    <!-- <button class="btn btn-primary" type="submit" name="dangky">Register</button> -->
                                    <!-- <input type="submit" value="Đăng ký" name="dangky"> -->
                                    <input class="dangki" style="background-color:#8B4513;color:black" type="submit" value="Đăng kí" name="dangky" width="10px">
                                </span>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>