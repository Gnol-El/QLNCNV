<!DOCTYPE html>
<head>
	<title>Trang quản lý nhân viên</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
	<!-- font CSS -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
	<link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
	<link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css"/>
	<!-- calendar -->
	<link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}">
	<!-- //calendar -->
	<!-- //font-awesome icons -->
	<script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
	<script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
	<script src="{{asset('public/backend/js/morris.js')}}"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
</head>
<body>
	<section id="container">
		<!--header start-->
		<header class="header fixed-top clearfix">
			<!--logo start-->
			<div class="brand">
			    <a style="color: white" class="logo">
			        NHÂN VIÊN
			    </a>
			    <div class="sidebar-toggle-box">
			        <div class="fa fa-bars"></div>
			    </div>
			</div>
			<!--logo end-->
			</div>
			<div class="top-nav clearfix">
			    <!--search & user info start-->
			    <ul class="nav pull-right top-menu">
			        <!-- user login dropdown start-->
			        <li class="dropdown">
			            <a style="padding: 4px" data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)">
			                <i class="fa fa-male" style="padding-left: 10px;"></i>
			                <span class="username" style="padding-left: 5px">
			                	<?php
									$name = Session::get('name');
									echo $name;
								?>
			                </span>
			                
			            </a>
			            <ul class="dropdown-menu extended logout" style="padding: 0px">
			            	<li><a href="{{URL::to('/')}}"><i class="fa fa-paper-plane"></i> Trang chủ</a></li>
			                <li><a href="{{URL::to('/logout')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
			            </ul>
			        </li>
			        <!-- user login dropdown end -->
			       
			    </ul>
			    <!--search & user info end-->
			</div>
		</header>
		<!--header end-->
		<!--sidebar start-->
		<aside>
		    <div id="sidebar" class="nav-collapse">
		        <!-- sidebar menu start-->
		        <div class="leftside-navigation">
		            <ul class="sidebar-menu" id="nav-accordion">
						<li class="sub-menu">
		                    <a href="{{ route('user.xemduan')}}">
		                        <i class="fa fa-thumbs-up"></i>
		                        <span>Xem dự án và lương</span>
		                    </a>
		                </li>
		                <li class="sub-menu">
		                    <a href="{{route('user.thongtin')}}">
		                        <i class="fa fa-thumbs-up"></i>
		                        <span>Thông tin nhân viên</span>
		                    </a>
		                </li>
		            </ul>            
		        </div>
		        <!-- sidebar menu end-->
		    </div>
		</aside>
		<!--sidebar end-->
		<!--main content start-->
		<section id="main-content">
			<section class="wrapper">
				@yield('user_content')
			</section>
		 <!-- footer -->
				  <div style="background: #D6D6D0;padding-top: 10px;position: fixed;bottom: 0;width: 100%;" class="footer-bottom">
		            <div class="container">
		                <div class="row">
		                    <p class="pull-left">Copyright Youtube -> HieuTutorial. All rights reserved.</p>
		                    <p class="pull-right">Được thiết kế bởi <span><a target="_blank" href="{{URL::to('/designed-by')}}">Nhóm 11</a></span></p>
		                </div>
		            </div>
		        </div>
		  <!-- / footer -->
		</section>
		<!--main content end-->
	</section>
<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	

</body>
</html>