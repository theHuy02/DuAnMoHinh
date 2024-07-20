
    <!-- Main Slider Start -->
    <div class="sticky-header-next-sec ec-main-slider section section-space-pb">
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                <div class="ec-slide-item swiper-slide d-flex ec-slide-1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title">Sản Phẩm Mới</h1>
                                    <h2 class="ec-slide-stitle">Top 1 thịnh hành</h2>
                                    <a href="?act=sanpham" class="btn btn-lg btn-secondary">Đặt ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex ec-slide-2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title">Mô hình chính hãng</h1>
                                    <h2 class="ec-slide-stitle">Bản giới hạn</h2>
                                    <a href="?act=sanpham" class="btn btn-lg btn-secondary">Đặt ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p" id="collection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Sản Phẩm đáng chú ý</h2>
                        <h2 class="ec-title">Sản Phẩm đáng chú ý</h2>
                        <p class="sub-title">Cùng Trải Nghiệm Sản Phẩm Của Chúng Tôi</p>
                    </div>
                </div>

                <!-- Tab Start -->
                <!-- Tab End -->


            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-for-all">
                            <div class="row">
                                <!-- Product Content -->
                                <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = "index.php?act=chitiet&idsp=" . $id;
                $hinh = $img_path . $img;
                $hinh1 = $img_path . $img1;
                $priceo = $price + $price*0.2;
                if (($i == 3) || ($i == 8) || ($i ==12)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                ?>
                <div style="width:280px ; padding:0 auto;" class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content ' . $mr . '"
                                    data-animation="fadeIn">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href=" <?= $linksp ?> " class="image">
                                                    <img class="main-image" src="<?= $hinh ?>" alt="Product" />
                                                    <img class="hover-image" src="<?= $hinh1 ?>" alt="Product" />
                                                </a>
                                                <span class="percentage">New</span>

                                                <div class="ec-pro-actions">
                                                    <button class="add-to-cart" data-id="<?= $id ?>" onclick="addToCart(<?= $id ?>,'<?= $name ?>',<?= $price ?>)" ><i
                                                            class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="<?= $linksp ?>"><?= $name ?></a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price"><?= number_format((int)$priceo, 0, ",", ".")  ?> VNĐ</span>
                                                <span class="new-price" style="color:red;"> <?= number_format((int)$price, 0, ",", ".") ?> VNĐ</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>

                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

            
            <?php
                $i += 1;
            }
            ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ec Product tab Area End -->

    <!-- ec Banner Section Start -->
    <section class="ec-banner section section-space-p">
        <h2 class="d-none">Banner</h2>
        <div class="container">
            <!-- ec Banners Start -->
            <div class="ec-banner-inner">
                <!--ec Banner Start -->
                <div class="ec-banner-block ec-banner-block-2">
                    <div class="row" >
                        <div class="banner-block col-lg-6 col-md-12 margin-b-30" data-animation="slideInRight">
                            <div class="bnr-overlay" style="width : 670px ;">
                                <img src="upload/anh/images (12).jpg " style="width : 670px ;"   alt="" >
                                <!-- <img src="upload/anh/gundam-dep-nhat-14.jpg" alt="" /> -->
                                <div class="banner-text">
                                    <span class="ec-banner-stitle">New Arrivals</span>
                                    <span class="ec-banner-title">mens<br> Sport shoes</span>
                                    <span class="ec-banner-discount">30% Discount</span>
                                </div>
                                <div class="banner-content">
                                    <span class="ec-banner-btn"><a href="#">Mua Ngay</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="banner-block col-lg-6 col-md-12" data-animation="slideInLeft">
                            <div class="bnr-overlay" style="width : 670px ;">
                                <img src="upload/anh/images (11).jpg" alt="" style="width : 670px ;" />
                                <div class="banner-text">
                                    <span class="ec-banner-stitle">New Trending</span>
                                    <span class="ec-banner-title">Smart<br> watches</span>
                                    <span class="ec-banner-discount">Buy any 3 Items & get <br>20% Discount</span>
                                </div>
                                <div class="banner-content">
                                    <span class="ec-banner-btn"><a href="#">Mua Ngay</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ec Banner End -->
                </div>
                <!-- ec Banners End -->
            </div>
        </div>
    </section>
    <!-- ec Banner Section End -->

    <!--  Category Section Start -->
    <section class="section ec-category-section section-space-p" id="categories">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Our Top Collection</h2>
                        <h2 class="ec-title">Top Categories</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!--Category Nav Start -->
                <div class="col-lg-3">
                    <ul class="ec-cat-tab-nav nav">
                        <li class="cat-item"><a class="cat-link active" data-bs-toggle="tab" href="#tab-cat-1">
                                <div class="cat-icons">
                                    
                                    </div>
                                <div class="cat-desc"><span>Gundam MG</span></div>
                            </a></li>
                        <li class="cat-item"><a class="cat-link" data-bs-toggle="tab" href="#tab-cat-2">
                                <div class="cat-icons">
                                  
                                    </div>
                                <div class="cat-desc"><span>Gundam PG</span></div>
                            </a></li>
                        <li class="cat-item"><a class="cat-link" data-bs-toggle="tab" href="#tab-cat-3">
                                <div class="cat-icons">
                                   
                                    </div>
                                <div class="cat-desc"><span>Gundam RE/100</span></div>
                            </a></li>
                        <li class="cat-item"><a class="cat-link" data-bs-toggle="tab" href="#tab-cat-4">
                                <div class="cat-icons">
                                   
                                    </div>
                                <div class="cat-desc"><span>Gundam Daban</span></div>
                            </a></li>
                    </ul>

                </div>
                <!-- Category Nav End -->
                <!--Category Tab Start -->
                <div class="col-lg-9">
                    <div class="tab-content">
                        <!-- 1st Category tab end -->
                        <div class="tab-pane fade show active" id="tab-cat-1">
                            <div class="row">
                                <img src="upload/anh/anh2.webp" alt="" />
                            </div>
                            <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
                        </div>
                        <!-- 1st Category tab end -->
                        <div class="tab-pane fade" id="tab-cat-2">
                            <div class="row">
                                <img src="upload/anh/images (13).jpg" alt="" />
                            </div>
                            <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
                        </div>
                        <!-- 2nd Category tab end -->
                        <!-- 3rd Category tab start -->
                        <div class="tab-pane fade" id="tab-cat-3">
                            <div class="row">
                                <img src="upload/anh/images (14).jpg" alt="" />
                            </div>
                            <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
                        </div>
                        <!-- 3rd Category tab end -->
                        <!-- 4th Category tab start -->
                        <div class="tab-pane fade" id="tab-cat-4">
                            <div class="row">
                                <img src="upload/anh/images (15).jpg" alt="" />
                            </div>
                            <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.html" class="btn btn-primary">View All</a>
                            </span>
                        </div>
                        <!-- 4th Category tab end -->
                    </div>
                    <!-- Category Tab End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!--  Feature & Special Section Start -->
    <section class="section ec-fre-spe-section section-space-p" id="offers">
        <div class="container">
            <div class="row">
              
                </div>
                
            </div>
        </div>
    </section>
   
    <!-- Ec Brand Section End -->

    <!-- Ec Instagram Start -->
    <section class="section ec-instagram-section module section-space-p" id="insta">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Mẫu Mới Của Chúng Tôi</h2>
                        <h2 class="ec-title">Mẫu Mới Của Chúng Tôi</h2>
                        <p class="sub-title">Xin Giới Thiệu Tới Mọi Người</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ec-insta-wrapper">
            <div class="ec-insta-outer">
                <div class="container" data-animation="fadeIn">
                    <div class="insta-auto">
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <img src="upload/anh/images (1).jpg"
                                        alt="">
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <img src="upload/anh/images (2).jpg"
                                        alt="">
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <img src="upload/anh/images (4).jpg"
                                        alt="">
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <img src="upload/anh/images (5).jpg"
                                        alt="">
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                               <img src="upload/anh/images (3).jpg"
                                        alt="">
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                               <img src="upload/anh/images (7).jpg"
                                        alt="">
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <img src="upload/anh/images (8).jpg"
                                        alt="">
                            </div>
                        </div>
                        <!-- instagram item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
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