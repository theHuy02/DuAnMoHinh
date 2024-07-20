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
												<h3 class="mb-4 lg:mb-0">PRODUCT</h3>
											</div>
											<div class="overflow-x-auto">
												<table id="product-list-data-table"
													class="table-default table-hover data-table">
													<thead>
														<tr>
														<th>ID</th>
															<th>Name Product</th>
															<th>Image</th>
															<th>price</th>
															<th>Số Lượng</th>
														</tr>
													
													<tbody>
													<?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
					$ctsp = "index.php?act=ctsp&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height = '80' width= '100' >";
                    } else {
                        $hinh = "nophoto";
                    }
                    echo '<tr>
                            
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $price . '</td>
							<td>' . $soluong . '</td>
                            <td>
																<div class="flex justify-end text-lg">
																<span
																		class="cursor-pointer p-2 hover:text-indigo-600">
																		<a href="'.$ctsp.'"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg></a>
																	</span>

																	<span
																		class="cursor-pointer p-2 hover:text-indigo-600">
																		<a href="'.$suasp.'"><svg stroke="currentColor" fill="none"
																		stroke-width="2" viewBox="0 0 24 24"
																		aria-hidden="true" height="1em" width="1em"
																		xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round"
																			stroke-linejoin="round"
																			d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
																		</path>
																	</svg></a>
																	</span>
																	<span class="cursor-pointer p-2 hover:text-red-500">
																		<a href="'.$xoasp.'"><svg stroke="currentColor" fill="none"
																		stroke-width="2" viewBox="0 0 24 24"
																		aria-hidden="true" height="1em" width="1em"
																		xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round"
																			stroke-linejoin="round"
																			d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
																		</path>
																	</svg></a>
																	</span>
																</div>
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