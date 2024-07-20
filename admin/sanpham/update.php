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
            width: 100%;
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
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height = '200' width= '300'>";
    $hinh1 = "<img src='" . $hinhpath1 . "' height = '200' width= '300'>";
} else {
    $hinh = "No profile picture ";
    $hinh1 = "no photo1";
}
?>

    <!-- Content start -->
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto">
                <h3 class="mb-4">Edit Product</h3>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="form-container vertical">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                            <div class="lg:col-span-2">
                                <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                    <div class="card-body">
                                        <h5>Basic Information</h5>
                                        <p class="mb-6">Section to config basic product information</p>
                                        <input type="hidden" name="id" value="<?=$id?>">
                                        <div class="form-item vertical">

                                            <label class="form-label mb-2">Product Name</label>
                                            <div>
                                                <input class="input" type="text" name="tensp" 
                                                    placeholder="Name" value="<?=$name?>">
                                            </div>
                                        </div>
                                        <div class="luachon">
                                            <label class="form-label mb-2">Directory Name</label>
                                            <select name="iddm">
                                                <option value="0" selected>All</option>
                                                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if($iddm==$id)  $s="selected"; else $s="";
                        echo '<option value="'.$id.'"'.$s.'>'.$name.'</option>';
                    }
                    ?>
                                            </select>
                                        </div>
                                        <br>
                                        

                                        <div class="form-item vertical">
                                            <label class="form-label mb-2">Description</label>
                                            <div class="rich-text-editor">
                                                <div class="mota" id="description">
                                                    <textarea name="mota" cols="30" rows="10"><?=$mota ?></textarea>

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
                                                        <input class="input pl-8" type="text" name="price"
                                                             value="<?=$price?>"
                                                         >
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                                            <div class="card-body">
                                                                <h5>Số Lượng</h5>
                                                                
                                                                    <div class="col-span-1">
                                                                        <div class="form-item vertical">
                                                                            <label class="form-label mb-2"></label>
                                                                            <div>
                                                                                <span class="input-wrapper undefined">
                                                                                    <div class="input-suffix-start"> Sl </div>
                                                                                    <input
                                                                                        class="input pl-8"
                                                                                        type="number" min=1 value="<?=$soluong?>"
                                                                                        name="soluong"
                                                                                        
                                                                                    >
                                                                                </span>
                                                                            </div>
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
                                    <p class="mb-6">Add or change image for the product</p>
                                    <div class="form-item vertical">
                                        <div class="hinhanh">
                                        <br>
                                            <input type="file" name="hinh">
                                            <?=$hinh?>
                                            <br>
                                            <input type="file" name="hinh1">
                                            
                                            <?=$hinh1?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
        <div id="stickyFooter" class="sticky -bottom-1 -mx-8 px-8 flex items-center justify-between py-4">
            <div class="md:flex items-center">
                <input class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2" type="reset" value="Reset">
                <input class="btn btn-solid btn-sm" type="submit" name="capnhat" value="Update">
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