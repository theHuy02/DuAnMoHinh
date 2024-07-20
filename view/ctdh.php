<?php
$onedh = loadone_donhang();
// var_dump ($sp);
?>

                                <div class="container px-0">
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <hr class="row brc-default-l1 mx-n1 mb-4" />

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="my-2">
                                                        <span class="text-sm text-grey-m2 align-middle">To : </span>
                                                        <span class="text-600 text-110 text-blue align-middle"><?= $fullname ?></span>
                                                    </div>
                                                    <div class="text-grey-m2">
                                                        <div class="my-2">
                                                        <?= $address?>
                                                        </div>
                                                        
                                                        <div class="my-2"><b class="text-600">Phone : </b><?= $tel ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                                <!-- /.col -->
                                            </div>

                                            <div class="mt-4">

                                                <div class="text-95 text-secondary-d3">
                                                    <div class="ec-vendor-card-table">
                                                        <table class="table ec-table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">ID</th>
                                                                    <th scope="col">Tên Sản Phẩm</th>
                                                                    <th>Ảnh sản phẩm</th>
                                                                    <th scope="col">Số Lượng</th>
                                                                    <th scope="col">Giá</th>
                                                                    <th scope="col">Tổng</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $i=0;
                                                                    foreach($onedh as $da)
                                                                    {
                                                                       
                                                                    extract($da);
                                                                    if($id_order == $_GET['iddh']){
                                                                        $listsp = loadall_sanphamcart();
                                                                        foreach($listsp as $lsp){
                                                                            if($id_pro == $lsp['id']){
                                                                                $hinh = $img_path . $lsp['img'];
                                                                                $i++;
                                                                            
                                                                    ?>
                                                                        <tr>
                                                                    <th><span><?= $i; ?></span></th>
                                                                    <td><span><?= $lsp['name']; ?></span></td>
                                                                    <td><img src="<?= $hinh; ?>" alt="" srcset=""></td>
                                                                    <td><span><?= $soluong; ?></span></td>
                                                                    <td><span>VNĐ <?= $giamua; ?></span></td>
                                                                    <td><span><?= $thanhtien ; ?>VNĐ</span></td>
                                                                </tr>
                                                                <?php
                                                                    }
                                                                    }
                                                                }
                                                            }
                                                                ?>
                                                            </tbody>
                                                            <tfoot>
                                                                <?php
                                                                $od = loadall_donhang();
                                                                    foreach($od as $t){
                                                                        if($t['id_order']== $_GET['iddh'])
                                                                        {
                                                                        ?>
                                                                            <tr>
                                                                    <td class="border-none" colspan="3">
                                                                        <span></span></td>
                                                                    <td class="border-color" colspan="1">
                                                                        <span><strong>VAT (5%)</strong></span></td>
                                                                    <td class="border-color">
                                                                        <span><b>VNĐ<?php
                                                                             
                                                                        ?></b></span></td>
                                                                </tr>
                                                                        <?php
                                                                        }
                                                                    }
                                                                ?>
                                                                
                                                                <tr>
                                                                    <td class="border-color m-m15"
                                                                        colspan="1"><span><strong>Total</strong></span>
                                                                    </td>
                                                                    <td class="border-color m-m15">
                                                                        <span><b>3872VNĐ</b></span></td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>