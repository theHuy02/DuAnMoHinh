<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<!-- Mirrored from www.themenate.net/elstar-html/modern-product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 15:31:59 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="../../view/img/favicon.ico">
	<title>Elstar - HTML Tailwind Admin Template</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../../view/css/style.css">
</head>

<body>
	<!-- Content start -->
	<main class="h-full">
							<div
								class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
								<div class="container mx-auto">
									<div class="card adaptable-card">
										<div class="card-body">
											<div class="lg:flex items-center justify-between mb-4">
												<h3 class="mb-4 lg:mb-0">ACCOUNT LIST</h3>
											</div>
											<div class="overflow-x-auto">
											<table id="product-list-data-table" class="table-default table-hover data-table">
  <!-- nội dung bảng -->
													<thead>
														<tr>
														<th>ID</th>
															<th>ID Người Dùng</th>
															<th>Tên Người Dùng</th>
															<th>ID Sản Phẩm</th>
															<th>Tên Sản PHẩm</th>
                                                            <th>Nội Dung Bình Luận</th>
                                                            <th>Ngày Bình Luận</th>
															<th>role</th>
                                                            <th></th>
														</tr>
													
													<tbody>
													<?php
                foreach ($listbl as $bl) {
                    extract($bl);
                    echo '<tr>
                          
                    <td>' . $id . '</td>
                    <td>' . $iduser . '</td>
                    <td>' . $user . '</td>
                    <td>' . $idpro . '</td>
                    <td>' . $name . '</td>
                    <td>' . $noidung . '</td>
                    <td>' . $ngaybinhluan . '</td>
                    <td><select id="commentVisibility" onchange="toggleComments()">
					<option value="show">Hiển thị bình luận</option>
					<option value="hide">Ẩn bình luận</option>
				  </select>
				  </td>
                        </tr>';
                }
                ?>
													</tbody>
												</table>

									
											</div>
										</div>
									</div>
								</div>
							</div>
                            
						</main>
						<!-- Content end -->
</body>
</html>
<script>
  function toggleComments() {
    var visibility = document.getElementById("commentVisibility").value;
    var commentsTable = document.getElementById("product-list-data-table");
    
    if (visibility === "show") {
      commentsTable.style.display = "table";
    } else {
      commentsTable.style.display = "none";
    }
  }
</script>
