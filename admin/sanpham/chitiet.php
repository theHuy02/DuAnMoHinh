<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../view/img/favicon.ico">
    <title>Elstar - HTML Tailwind Admin Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../view/css/style.css">
    <style>
        .luachon select {
            border: 1px solid gray;
            border-radius: 5px;
            width: 100%;
            height: 40px;

        }

        .mota textarea {
            border: 1px solid gray;
            border-radius: 5px;
            width: auto;
            
        }

        .hinhanh input {

            border-radius: 5px;

        }
    </style>
</head>

<body>
    <?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
$hinhpath1 = "../upload/" . $img1;
$hinhpath2 = "../upload/" . $img2;
$hinhpath3 = "../upload/" . $img3;
$hinhpath4 = "../upload/" . $img4;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height = '200' width= '300'>";
    $hinh1 = "<img src='" . $hinhpath1 . "' height = '200' width= '300'>";
    $hinh2 = "<img src='" . $hinhpath2 . "' height = '200' width= '300'>";
    $hinh3 = "<img src='" . $hinhpath3 . "' height = '200' width= '300'>";
    $hinh4 = "<img src='" . $hinhpath4 . "' height = '200' width= '300'>";
} else {
    $hinh = "No profile picture ";
    $hinh1 = "no photo1";
    $hinh2 = "no photo2";
    $hinh3 = "no photo3";
    $hinh4 = "no photo4";
}
?>
    <!-- Content start -->
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto">
                <h3 class="mb-4">Detail Product</h3>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="form-container vertical">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                            <div class="lg:col-span-2">
                                <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                    <div class="card-body">
                                        <h5>Basic Information</h5>
                                        <p class="mb-6">Section to config basic product information</p>
                                        <div class="form-item vertical">

                                            <label class="form-label mb-2">Product Name</label>
                                            <div>
                                                <input class="input" type="text" name="tensp" 
                                                    placeholder="Name" disabled value="<?=$name?>">
                                            </div>
                                        </div>
                                        <div class="luachon">
                                            <label class="form-label mb-2">Category Name</label>
                                            <select name="iddm" disabled>
                                                <option value="0" selected>All</option>
                                                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if($iddm==$id)  $s="selected"; else $s="";
                        echo '<option disabled value="'.$id.'"'.$s.'>'.$name.'</option>';
                    }
                    ?>
                                            </select>
                                        </div>
                                        <br>
                                        

                                        <div class="form-item vertical">
                                            <label class="form-label mb-2">Description</label>
                                            <div class="rich-text-editor">
                                                <div class="mota" id="description">
                                                    <!-- <textarea name="mota" disabled cols="30" rows="10"></textarea> -->
                                                    <input type="text" class="input" disabled name="mota" id="" value="<?=$mota ?>">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                    <div class="card-body">
                                        <h5>Price</h5>

                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2"></label>
                                                <div>
                                                    <span class="input-wrapper undefined">
                                                        <div class="input-suffix-start"> $</div>
                                                        <input class="input pl-8" type="text" name="giasp"
                                                            autocomplete="off" placeholder="" disabled value="<?=$price ?>"
                                                            inputmode="numeric">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="lg:col-span-1">
                            <div class="card adaptable-card mb-4">
                                <div class="card-body">
                                    <h5>Product Image</h5>
                                    <br>
                                    <div class="form-item vertical">
                                        <div class="hinhanh">

                                            
                                        <hr>
                                            <?=$hinh?>
                                            <hr>
                                            <?=$hinh1?>
                                            <hr>
                                            <?=$hinh2?>
                                            <hr>
                                            <?=$hinh3?>
                                            <hr>
                                            <?=$hinh4?>
                                            <hr>


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
        </div>
        </form>
        </div>
        </div>
        
    </main>
    <!-- Content end -->
</body>

</html>