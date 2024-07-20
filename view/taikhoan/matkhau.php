<?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }

                ?>

<section class="ec-page-content section-space-p">
<form action="index.php?act=matkhau" method="post" onclick="return send()">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title"> Edit Password</h2>
                        <h2 class="ec-title">Edit Password</h2>
                        <p class="sub-title mb-3"> Edit Your Personal Information</p>
                        <br>
                       
                        <img src="assets/images/logo/groot.jpg" alt="" height="150px" with="150px">
                        
                    </div>
                </div>
                
                <div class="ec-login-wrapper">
                    
                    <div class="ec-login-container">
                        
                        <div class="ec-login-form">
                                <span class="ec-login-wrap">
                               <label>Old Password</label>
                                    <input type="text" value="<?=$password?>" name="" disabled />
                                </span>
                                <span class="ec-login-wrap">
                               <label>New Password</label>
                                    <input type="password" value="" id="inpass"   name="password" />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Confirm New Password</label>
                                    <input type="password" value="" id="inpass2"   name="password1" />
                                    
                                </span>
                                <label  id="outpass"></label>
                                <span class="ec-login-wrap ec-login-btn">
                               
                                    <div class="btn">
                                    
                                    </div>
                                    <input type="hidden" name="id" value="<?=$id?>">
                                    <input class="btn btn-primary" style="background-color:#3474d4;color:#FFFFFF;width: 200px;" type="submit" value="Save Password" name="capnhat">
                                    <!-- <a href="#!" class="btn btn-secondary">Register</a> -->
                                    <!-- <input class="btn btn-primary" style="background-color:#3474d4;color:#FFFFFF" type="submit" value="Edit Password" name=""> -->
                                </span>
                              
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>



        <script>


var inpass=document.getElementById('inpass')
var inpass2=document.getElementById('inpass2')
var outpass=document.getElementById('outpass')
function send() {
    if(inpass.value==inpass2.value){
        outpass.innerText=''
    }else{
        outpass.innerText='The new password doesnt match'
        outpass.style.color='red'
        return false
    }
}


</script>









    </section>

    
