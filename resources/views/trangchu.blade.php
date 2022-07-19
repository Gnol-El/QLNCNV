<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">

</head>
<body>
	<div class="home-container">
		<div id="bg1"><img src="public/backend/images/bg1.jpg"/></div>
		<header id="header">
			<div class="header_top" id="top1"><!--header_top-->
	            <div class="container">
	                <div class="row">
	                    <div class="col-sm-6">
	                        <div class="contactinfo" id="text1">
	                            <ul class="nav nav-pills">
	                                <li><a href="javascript:void(0)"><i class="fa fa-phone"></i> +84 45 755 129</a></li>
	                                <li><a href="javascript:void(0)"><i class="fa fa-envelope"></i> long_1851220201@dau.edu.vn</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col-sm-6">
	                        <div class="social-icons pull-right">
	                            <ul class="nav navbar-nav">
	                                <li><a href="{{URL::to('/admin')}}"><i class="fa fa-user"> Đăng nhập</i></a></li>
	                            </ul>
	                        </div>
	                    </div>
                    	<div id="mySidepanel" class="sidepanel">
							<a href="javascript:void(0)" style="font-size: 25px" class="closebtn" onclick="closeNav()">☰</a>
							<a href="{{URL::to('/')}}">Trang chủ</a>
							<a>Giao diện:
								<select id="theme" onchange="changeTheme()">
									<option value="1">Default</option>
									<option value="2">Neon</option>
								</select>
							</a>
							<a href="javascript:void(0)">About</a>
							<a href="javascript:void(0)">Services</a>
							<a href="javascript:void(0)">Clients</a>
							<a href="javascript:void(0)">Contact</a>
						</div>
                    	<button class="openbtn" onclick="openNav()">☰</button>
	                </div>
	            </div>
	        </div><!--/header_top-->
            <div class="home-body" style="text-align: center; color: #DEDEDE;">
            	<h1>QUẢN LÝ NGÀY CÔNG NHÂN VIÊN</h1>
            </div>
	        <div class="slideshow-container" style="text-align: center;">

				<div class="MngSlides">
				  <div class="txt">1 / 3</div>
				  <img src="public/frontend/images/manager1.jpg" style="width:100%">
				</div>

				<div class="MngSlides">
				  <div class="txt">2 / 3</div>
				  <img src="public/frontend/images/manager2.jpg" style="width:100%">
				</div>

				<div class="MngSlides">
				  <div class="txt">3 / 3</div>
				  <img src="public/frontend/images/manager3.jpg" style="width:100%">
				</div>

				<div style="text-align:center">
				  <span class="dot-sli"></span> 
				  <span class="dot-sli"></span> 
				  <span class="dot-sli"></span> 
				</div>

				<script>
				var slideIndex = 0;
				showSlides();

				function showSlides() {
				  var i;
				  var slides = document.getElementsByClassName("MngSlides");
				  var dots = document.getElementsByClassName("dot-sli");
				  for (i = 0; i < slides.length; i++) {
				    slides[i].style.display = "none";  
				  }
				  slideIndex++;
				  if (slideIndex > slides.length) {slideIndex = 1}    
				  for (i = 0; i < dots.length; i++) {
				    dots[i].className = dots[i].className.replace(" active-sli", "");
				  }
				  slides[slideIndex-1].style.display = "block";  
				  dots[slideIndex-1].className += " active-sli";
				  setTimeout(showSlides, 2500); // Change image every 2,5 seconds
				}
				</script>
				<button class="lg-button" onclick="document.getElementById('lg01').style.display='block'" style="width:auto;">Đăng nhập
				</button>
				<div id="lg01" class="login-modal">
					<?php
						Session::put('prev','trang-chu');
					?>
					<form class="modal-content animate" action="{{URL::to('/admin-dashboard')}}" method="post">
						{{ csrf_field() }}
						<div class="modal-padding">
							<?php
								$message = Session::get('message');
								if($message){
									echo "
							            <script type='text/javascript'>
							            	var modal = document.getElementById('lg01');
							            	modal.style.display = 'block';
							            </script>
							        ";
									echo '<span style="color:red; width:100%; text-align:center; font-size:15px;">'.$message.'</span>';
									Session::put('message', null);
								}
							?>
							<input type="email" class="ggg" name="email" placeholder="E-MAIL" value="<?php
								if(isset($_COOKIE['email_cookie'])){echo $_COOKIE['email_cookie'];}
							?>" required="">
							<input type="password" class="ggg" name="password" placeholder="MẬT KHẨU" value="<?php
								if(isset($_COOKIE['password_cookie'])){echo $_COOKIE['password_cookie'];}
							?>"required="">
							<span class="cb"><input type="checkbox" name="remember" <?php
								if (isset($_COOKIE['email_cookie'])) {
									?>checked
								<?php } ?> />Nhớ thông tin đăng nhập
							</span>
							<h5><a href="#">Quên mật khẩu?</a></h5>
								<div class="clearfix"></div>
								<input type="submit" value="ĐĂNG NHẬP" name="login">
						</div>
						<div class="modal-padding" style="background-color:#f1f1f1">
					      	<button class="modal-cancel" type="button" onclick="document.getElementById('lg01').style.display='none'" class="cancelbtn">Trở lại</button>
					    </div>
					</form>
					<script>
						// Get the modal
						var modal = document.getElementById('lg01');

						// When the user clicks anywhere outside of the modal, close it
						window.onclick = function(event) {
						    if (event.target == modal) {
						        modal.style.display = "none";
						    }
						}
					</script>
				</div>
		</header>	
		<footer id="footer">
			<div class="footer-widget" style="text-align:center">
	            <div class="container">
	                <div class="row">
	                    <div class="col-sm-2" style="width: 25%">
	                        <div class="single-widget">
	                            <h2>Nhóm 11</h2>
	                            <ul class="nav nav-pills nav-stacked">
	                                <li><a href="javascript:void(0)">Lê Văn Long</a></li>
	                                <li><a href="javascript:void(0)">Lê Thế Duy</a></li>
	                                <li><a href="javascript:void(0)">Hoàng Thị Thanh Hoài</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col-sm-2" style="width: 25%">
	                        <div class="single-widget">
	                            <h2>Chức năng</h2>
	                            <ul class="nav nav-pills nav-stacked">
	                                <li><a href="{{ route('b1.index')}}">Quản trị dự án</a></li>
	                                <li><a href="javascript:void(0)">Phân công nhân viên</a></li>
	                                <li><a href="javascript:void(0)">Tính lương</a></li>
	                                <li><a href="javascript:void(0)">Lịch sử công việc</a></li>
	                                <li><a href="javascript:void(0)">Thêm nhân viên</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col-sm-2" style="width: 25%">
	                        <div class="single-widget">
	                            <h2>Chính sách</h2>
	                            <ul class="nav nav-pills nav-stacked">
	                                <li><a href="javascript:void(0)">Điều khoản sử dụng</a></li>
	                                <li><a href="javascript:void(0)">Chính sách bảo mật</a></li>
	                                <li><a href="javascript:void(0)">Chính sách hoàn tiền</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col-sm-2" style="width: 25%">
	                        <div class="single-widget">
	                            <h2>Về chúng tôi</h2>
	                            <ul class="nav nav-pills nav-stacked">
	                                <li><a href="javascript:void(0)">Thông tin nhóm</a></li>
	                                <li><a href="javascript:void(0)">Nghề nghiệp</a></li>
	                                <li><a href="javascript:void(0)">Cơ sở dữ liệu</a></li>
	                                <li><a href="javascript:void(0)">Chương trình liên kết</a></li>
	                                <li><a href="javascript:void(0)">Bản quyền</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                    
	                </div>
	            </div>
	        </div>
	        
	        <div class="footer-bottom" id="bot1">
	            <div class="container">
	                <div class="row">
	                    <p class="pull-left">Copyright Youtube->HieuTutorial. All rights reserved.</p>
	                    <p class="pull-right">Được thiết kế bởi <span><a target="_blank" href="{{URL::to('/designed-by')}}">Nhóm 11</a></span></p>
	                </div>
	            </div>
	        </div>
		</footer>
		<script type="text/javascript">
    		var sidepanel = document.getElementById("mySidepanel");
			function openNav() {
				sidepanel.style.width = "250px";
		    }

			function closeNav() {
				sidepanel.style.width = "0";
			}
			function changeTheme() {
				var t = document.getElementById("theme").value;
				var t1 = document.getElementById("top1");
				var t2 = document.getElementById("footer");
				var t3 = document.getElementById("bot1");
				if(t == 2){
					t1.style.background = "none repeat scroll 0 0 #111";
					t2.style.background = "#111";
					t3.style.background = "#FF6464";
				}
				if(t == 1){
					t1.style.background = "none repeat scroll 0 0 #F0F0E9";
					t2.style.background = "#F0F0E9";
					t3.style.background = "#D6D6D0";
				}
			}
		</script>
	</div>
</body>
</html>