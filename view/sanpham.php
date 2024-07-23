<section class="section ec-product-tab section-space-p" id="collection">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Tất Cả Sản Phẩm</h2>
                    <h2 class="ec-title">Tất Cả Sản Phẩm</h2>
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
            foreach ($dssp as $sp) {
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
                            <div style="width:280px ; padding:0 auto;"
                                class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content ' . $mr . '"
                                data-animation="fadeIn">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href=" <?= $linksp ?> " class="image">
                                                <img class="main-image" src="<?= $hinh ?>" alt="Product" />
                                                <img class="hover-image" src="<?= $hinh1 ?>" alt="Product" />
                                            </a>
                                            <!-- <span class="percentage">New</span> -->

                                            <div class="ec-pro-actions">
                                                <button class="add-to-cart" data-id="<?= $id ?>"
                                                    onclick="addToCart(<?= $id ?>,'<?= $name ?>',<?= $price ?>)"><i
                                                        class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                        class="fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="<?= $linksp ?>"><?= $name ?></a></h5>
                                        <!-- <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div> -->
                                        <span class="ec-price">
                                            <span class="old-price"><?= number_format((int)$priceo, 0, ",", ".")  ?>
                                                VNĐ</span>
                                            <span class="new-price" style="color:red;">
                                                <?= number_format((int)$price, 0, ",", ".") ?> VNĐ</span>
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