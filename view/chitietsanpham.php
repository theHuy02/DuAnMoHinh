<style>
    .ec-single-desc {
        width: 770px;
        text-align: center;
    }
    .box_content2 {
        width: 100%;
        min-height: 200px;
        padding: 20px;
        background: #EEEE;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 20px;
    }
    .box_search input {
        margin-top: 9px;
        padding: 5px 10px;
        background-color: #ffffff;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }
    .gui {
        text-align: center;
    }
    input {
        height: 40px;
    }
    .bl tr td {
        padding: 10px;
        width: 80px;
    }
</style>

<!-- Sart Single product -->
<section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-pro-rightside ec-common-rightside col-lg-9 order-lg-last col-md-12 order-md-first">


                <?php
            extract($onesp);
            ?>
                <?php

                $hinh = $img_path . $img;
                $hinh1 = $img_path . $img1;

?>
                    <!-- Single product content Start -->
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="row">
                                <div class="single-pro-img">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover">
                                            <div class="">
                                                <img class="img-responsive" src="<?=$hinh ?>"
                                                    alt="" width="467px" height="400px" >
                                            </div>
                                            <div class="">
                                                <img class="img-responsive" src="<?=$hinh1 ?>"
                                                    alt=""width="467px" height="400px">
                                            </div>
                                        </div>
                                        <div class="single-nav-thumb">
                                            <div class="single-slide">
                                                <img class="img-responsive" src="<?=$hinh ?>"
                                                    alt="" width="100px" height="70px">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="<?=$hinh1 ?>"
                                                    alt=""width="100px" height="70px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-pro-desc">
                                    <div class="single-pro-content">
                                        <h5 class="ec-single-title"><?=$name ?></h5>
                                        
                                        <div class="ec-single-desc"><?=$mota ?></div>
                                        <h5 class="single-price">số lượng còn lại: <?=$soluong ?></h5>
                                        <div class="ec-single-price-stoke">
                                            <div class="ec-single-price">
                                            <span class="ec-price">
                                                <span class="new-price" style="color:red;"> <?= number_format((int)$price, 0, ",", ".") ?> VNĐ</span>
                                            </span>
                                            </div>
                                            
                                        </div>


                                        <div class="ec-single-qty">
                                            <!-- <div class="qty-plus-minus">
                                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                            </div> -->
                                            <div class="ec-single-cart ">
                                            <button class="add-to-cart"style=" background-color: #0099; padding:10px; color:	#ffffff"
                                             data-id="<?= $id ?>" onclick="addToCart(<?= $id ?>,'<?= $name ?>',<?= $price ?>)" > Add To Cart</button>
                                            </div>
                                        </div>
                                        <div class="ec-single-social">
                                            <ul class="mb-0">
                                                <li class="list-inline-item facebook"><a href="https://www.facebook.com/dat2k4.pr"><i
                                                            class="ecicon eci-facebook"></i></a></li>
                                                <li class="list-inline-item twitter"><a href="https://twitter.com/dmin111zzz"><i
                                                            class="ecicon eci-twitter"></i></a></li>
                                                <li class="list-inline-item instagram"><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Finstagram.com%2Fkynguyen2204%3Figshid%3DMTNiYzNiMzkwZA%253D%253D%26fbclid%3DIwAR2K41JicdOQYUM9t5_607zJOs6DuWK7X5Bx2wwkW8iZN7J__j0heQAxT-g&h=AT3GSDTAfcS5V8P9sydVKIuXm1_lE6hRdw12NsYK4V-pYfs5FjeQFIBih_JR95RnHucHeTjNwmzkSUUT9nKMGKTrEjZjIv6GZaIUfLrWuC4mMAD2MV2UIrCShMX02fsW_br0Zsq6K3N1qIMHTlee0A"><i
                                                            class="ecicon eci-instagram"></i></a></li>
                                                <li class="list-inline-item youtube-play"><a href="https://youtu.be/TlE-fZDzuuk?feature=shared"><i
                                                            class="ecicon eci-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single product content End -->

                    <!-- Single product tab start -->
                    <div class="mb">
            <div class="box_title">BÌNH LUẬN</div>
            <div class="box_content2  product_portfolio binhluan ">
                <table class="bl">
                    <?php foreach($binhluan as $value): ?>
                    <tr>
                    <td> <?php  echo $value['user']?></td>

                        <td style ="width: 600px"><?php echo $value['noidung']?></td>
                       
                        <td><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'])) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="box_search">
                <form action="index.php?act=chitiet&idsp=<?=$id?>" method="POST">
                    <input type="hidden" name="idpro" value="<?=$id?>">
                    <input type="text" name="noidung" placeholder="nhập bình luận của bạn">
                    <input class="gui" type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
            </div>

        </div>
                    </div>
                    <!-- product details description area end -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Single product -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');
    function addToCart(productId, productName, productPrice) {
        // console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: './view/addToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>