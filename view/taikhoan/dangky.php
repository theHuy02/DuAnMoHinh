
<section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Register</h2>
                        <h2 class="ec-title">Register</h2>
                        <p class="sub-title mb-3">Best place to buy and sell digital products</p>
                    </div>
                </div>
                <div class="ec-register-wrapper">
                    <div class="ec-register-container">
                        <div class="ec-register-form">
                        <form action="index.php?act=dangky" method="post">
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Username*</label>
                                    <input type="text" name="user" placeholder="Enter your username" required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                <label>Password*</label>
                                    <input type="password" name="password" placeholder="Password" required />
                                    
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                <label>Full Name*</label>
                                    <input type="text" name="fullname" placeholder="Enter your full name" required />
                                    
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                <label>Email*</label>
                                    <input type="email" name="email" placeholder="Enter your email address" required />
                                    
                                </span>
                                <span class="ec-register-wrap">
                                <label>Phone Number*</label>
                                    <input type="text" name="tel" placeholder="Enter your phone number"/>
                                     
                                   
                                </span>
                                <span class="ec-register-wrap">
                                <label>Address*</label>
                                    <input type="text" name="address" placeholder="Address" />
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
                                    <input class="btn btn-primary" style="background-color:#3474d4;color:#FFFFFF" type="submit" value="Register" name="dangky">
                                </span>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>