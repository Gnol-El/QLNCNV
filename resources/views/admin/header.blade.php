@extends('admin_login')
@section('top_content')
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="javascript:void(0)"><i class="fa fa-phone"></i> +84 45 755 129</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-envelope"></i> long_1851220201@dau.edu.vn</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav" style="font-size: 14px;">
                            <li><a href="{{URL::to('/')}}"><i class="fa fa-home"> Trang chủ</i></a></li>
                        </ul>
                    </div>
                </div>
                <div>
                	<div id="mySidepanel" class="sidepanel">
    				  <a href="javascript:void(0)" style="font-size: 25px" class="closebtn" onclick="closeNav()">☰</a>
                      <a href="{{URL::to('/')}}">Trang chủ</a>
    				  <a href="javascript:void(0)">About</a>
    				  <a href="javascript:void(0)">Services</a>
    				  <a href="javascript:void(0)">Clients</a>
    				  <a href="javascript:void(0)">Contact</a>
    				</div>
                	<button class="openbtn" onclick="openNav()">☰</button>
                	<script type="text/javascript">
    					function openNav() {
    						document.getElementById("mySidepanel").style.width = "250px";
    				    }

    					function closeNav() {
    						document.getElementById("mySidepanel").style.width = "0";
    					}
    				</script>
                </div>
            </div>
        </div>
    </div><!--/header_top-->
@endsection