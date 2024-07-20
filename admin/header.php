<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="shortcut icon" href="../view/img/favicon.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" href="../view/css/style.css">

    
</head>
<body>
<!-- App Start-->
<div id="root">
		<!-- App Layout-->
		<div class="app-layout-modern flex flex-auto flex-col">
			<div class="flex flex-auto min-w-0">
				<!-- Side Nav start-->
				<div class="side-nav side-nav-transparent side-nav-expand">
					<div class="side-nav-header">
						<div class="logo px-6">
							<a href="../index.php"><img src="../view/img/logo/logo1.png" alt="Elstar logo"></a>
						</div>
					</div>
					<div class="side-nav-content relative side-nav-scroll">
						<nav class="menu menu-transparent px-4 pb-4">
							<div class="menu-group">
								<div class="menu-title">Menu</div>
								<ul>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none"
												stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
												xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
													d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
												</path>
											</svg>
											<span class="menu-item-text">Trang Chủ</span>
										</div>
										<ul>
											<li data-menu-item="modern-project-dashboard" class="menu-item">
												<i class="fa-regular fa-bell fa-sm"></i>
												<a class="h-full w-full flex items-center"
													href="index.php?act=thongke">
													<span>Thống kê</span>
												</a>
											</li>

										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none"
												stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
												xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
													d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
												</path>
											</svg>
											<span class="menu-item-text">Quản Lý Tài Khoản</span>
										</div>
										<ul>
											<li data-menu-item="modern-customers" class="menu-item">
												<i class="fa-solid fa-list-ul fa-sm"></i>
												<a class="h-full w-full flex items-center" href="index.php?act=listtk">
													<span>Danh sách tài khoản</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<i class="fa-brands fa-pagelines fa-lg"></i>
											<span class="menu-item-text">Quản Lý Sản Phẩm</span>
										</div>
										<ul>
											<li data-menu-item="modern-product-list" class="menu-item">
												<i class="fa-solid fa-list-ul fa-sm"></i>
												<a class="h-full w-full flex items-center"
													href="index.php?act=listsp">
													<span>Danh Sách Sản Phẩm</span>
												</a>
											</li>
											
											<li data-menu-item="modern-new-product" class="menu-item">
												<i class="fa-solid fa-square-plus fa-sm"></i>
												<a class="h-full w-full flex items-center"
													href="index.php?act=addsp">
													<span>Thêm Sản Phẩm</span>
												</a>
											</li>

										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<i class="fa-regular fa-folder fa-lg"></i>
											<span class="menu-item-text">Quản Lý Danh Mục</span>
										</div>
										<ul>
											<li data-menu-item="modern-folder-list" class="menu-item">
												<i class="fa-solid fa-list-ul fa-sm"></i>
												<a class="h-full w-full flex items-center"
													href="index.php?act=listdm">
													<span>Danh Sách Danh Mục</span>
												</a>
											</li>
											
											<li data-menu-item="modern-new-folder" class="menu-item">
												<i class="fa-solid fa-square-plus fa-sm"></i>
												<a class="h-full w-full flex items-center"
													href="index.php?act=adddm">
													<span>Thêm Danh Mục</span>
												</a>
											</li>
											
										</ul>
									</li>
								</ul>
							</div>
							<div class="menu-group">

								<ul>

									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none"
												stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
												xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
													d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
												</path>
											</svg>
											<span class="menu-item-text">Quản Lý Bình Luận</span>
										</div>
										<ul>
											<li data-menu-item="modern-dialog" class="menu-item">
											<i class="fa-solid fa-comment"></i>
												<a class="h-full w-full flex items-center" href="index.php?act=binhluan">
													<span>Danh Sách Bình Luận</span>
												</a>
											</li>
										</ul>
									</li>

									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<i class="fa-solid fa-cart-shopping fa-lg"></i>
											<span class="menu-item-text">Quản Lý Đơn Hàng</span>
										</div>
										<ul>
											<li data-menu-item="modern-order-list" class="menu-item">
												<i class="fa-solid fa-wallet fa-sm"></i>
												<a class="h-full w-full flex items-center"
													href="index.php?act=dsdonhang">
													<span>Danh Sách Đơn Hàng</span>
												</a>
											</li>
										</ul>
									</li>

									<!-- <li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none"
												stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
												xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
													d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
													d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
											</svg>
											<span class="menu-item-text">Chart</span>
										</div>
										<ul>
											<li data-menu-item="modern-chart" class="menu-item">
												<i class="fa-solid fa-arrow-trend-up fa-sm"></i>
												<a class="h-full w-full flex items-center" href="modern-chart.html">
													<span>Statistical charts</span>
												</a>
											</li>

										</ul> -->
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
				<!-- Side Nav end-->

				<!-- Header Nav start-->
				<div
					class="flex flex-col flex-auto min-h-screen min-w-0 relative w-full bg-white dark:bg-gray-800 border-l border-gray-200 dark:border-gray-700">
					<header class="header border-b border-gray-200 dark:border-gray-700">
						<div class="header-wrapper h-16">
							<!-- Header Nav Start start-->
							<div class="header-action header-action-start">
								<div id="side-nav-toggle"
									class="side-nav-toggle header-action-item header-action-item-hoverable">
									<div class="text-2xl">
										<svg class="side-nav-toggle-icon-expand" stroke="currentColor" fill="none"
											stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
											xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M4 6h16M4 12h16M4 18h7"></path>
										</svg>
										<svg class="side-nav-toggle-icon-collapsed hidden" stroke="currentColor"
											fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"
											height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round"
												d="M4 6h16M4 12h16M4 18h16"></path>
										</svg>
									</div>
								</div>
								<div class="side-nav-toggle-mobile header-action-item header-action-item-hoverable"
									data-bs-toggle="modal" data-bs-target="#mobile-nav-drawer">
									<div class="text-2xl">
										<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24"
											height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M4 6h16M4 12h16M4 18h7"></path>
										</svg>
									</div>
								</div>
								<div class="header-search header-action-item header-action-item-hoverable text-2xl"
									data-bs-toggle="modal" data-bs-target="#dialog-search">
								</div>
							</div>
							<!-- Header Nav Start end-->
							<!-- Header Nav End start -->
							<div class="header-action header-action-end">
								<!-- Config-->
								<div class="text-2xl header-action-item header-action-item-hoverable"
									data-bs-toggle="modal" data-bs-target="#nav-config">
									<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24"
										height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
										</path>
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
									</svg>
								</div>


							</div>
							<!-- Header Nav End end -->
						</div>
					</header>
					<!-- Popup start -->
					<div class="modal fade" id="nav-config" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog drawer drawer-end">
							<div class="drawer-content">
								<div class="drawer-header">
									<h4>Theme Config</h4>
									<span class="close-btn close-btn-default" role="button" data-bs-dismiss="modal">
										<svg stroke="currentColor" fill="currentColor" stroke-width="0"
											viewBox="0 0 20 20" height="1em" width="1em"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd"
												d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
												clip-rule="evenodd"></path>
										</svg>
									</span>
								</div>
								<div class="drawer-body">
									<div class="flex flex-col h-full justify-between">
										<div class="flex flex-col gap-y-10 mb-6">
											<div class="flex items-center justify-between">
												<div>
													<h6>Dark Mode</h6>
													<span>Switch theme to dark mode</span>
												</div>
												<div>
													<label class="switcher">
														<input name="dark-mode-toggle" type="checkbox" value="">
														<span class="switcher-toggle"></span>
													</label>
												</div>
											</div>
											<div class="flex items-center justify-between">
												<div>
													<h6>Direction</h6>
													<span>Select a direction</span>
												</div>
												<div class="input-group">
													<button id="dir-ltr-button"
														class="btn btn-default btn-sm btn-active">
														LTR
													</button>
													<button id="dir-rtl-button"
														class="btn bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 active:bg-gray-100 dark:active:bg-gray-500 dark:active:border-gray-500 text-gray-600 dark:text-gray-100 radius-round h-9 px-3 py-2 text-sm">
														RTL
													</button>
												</div>
											</div>
											<div>
												<h6 class="mb-3">Nav Mode</h6>
												<div class="inline-flex">
													<label class="radio-label inline-flex mr-3"
														for="nav-mode-radio-default">
														<input id="nav-mode-radio-default" type="radio" value="default"
															name="nav-mode-radio-group" class="radio text-primary-600"
															checked>
														<span>Default</span>
													</label>
													<label class="radio-label inline-flex mr-3"
														for="nav-mode-radio-themed">
														<input id="nav-mode-radio-themed" type="radio" value="themed"
															name="nav-mode-radio-group" class="radio text-primary-600">
														<span>Themed</span>
													</label>
												</div>
											</div>
											<div>
												<h6 class="mb-3">Nav Mode</h6>
												<select id="theme-select"
													class="input input-sm focus:ring-primary-600 focus-within:ring-primary-600 focus-within:border-primary-600 focus:border-primary-600">
													<option value="primary" selected>Indigo</option>
													<option value="red">Red</option>
													<option value="orange">Orange</option>
													<option value="amber">Amber</option>
													<option value="yellow">Yellow</option>
													<option value="lime">Lime</option>
													<option value="green">Green</option>
													<option value="emerald">Emerald</option>
													<option value="teal">Teal</option>
													<option value="cyan">Cyan</option>
													<option value="sky">Sky</option>
													<option value="blue">Blue</option>
													<option value="violet">Violet</option>
													<option value="purple">Purple</option>
													<option value="fuchsia">Fuchsia</option>
													<option value="pink">Pink</option>
													<option value="rose">Rose</option>
												</select>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Popup end -->
<div class="h-full flex flex-auto flex-col justify-between">


						