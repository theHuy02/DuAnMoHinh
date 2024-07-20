<?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }

                ?>

<section class="ec-page-content section-space-p">
<form action="index.php?act=updatetk" method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title"> Edit Profile</h2>
                        <h2 class="ec-title">Edit Profile</h2>
                        <p class="sub-title mb-3"> Edit Your Personal Information</p>
                        <br>
                       
                        <img src="assets/images/logo/groot.jpg" alt="" height="150px" with="150px">
                        
                    </div>
                </div>
                
                <div class="ec-login-wrapper">
                    
                    <div class="ec-login-container">
                        
                        <div class="ec-login-form">
                                <span class="ec-login-wrap">
                               <label>User Name</label>
                                    <input type="text" value="<?=$user?>" name="user"  />
                                </span>
                                <span class="ec-login-wrap">
                               <label>Full Name</label>
                                    <input type="text" value="<?=$fullname?>"   name="fullname" />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Email</label>
                                    <input type="text" value="<?=$email?>"   name="email" />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Phone Number</label>
                                    <input type="text"  value="<?=$tel?>"  name="tel" />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Address</label>
                                    <input type="text" value="<?=$address?>"  name="address" />
                                </span>
                                <span class="ec-login-wrap ec-login-btn">
                               
                                    <div class="btn">
                                    
                                    </div>
                                    <input type="hidden" name="id" value="<?=$id?>">
                                   <li> <input class="btn btn-primary" style="background-color:#3474d4;color:#FFFFFF;width: 200px;" type="submit" value="Update Profile" name="capnhat"></li>
                                    <!-- <a href="#!" class="btn btn-secondary">Register</a> -->
                                    <!-- <input class="btn btn-primary" style="background-color:#3474d4;color:#FFFFFF" type="submit" value="Edit Password" name=""> -->
                                </span>
                              
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>
    
