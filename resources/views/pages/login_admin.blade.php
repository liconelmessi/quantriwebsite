<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QUẢN TRỊ WEBSITE DR:VƯƠNG | Đăng nhập</title>
<link rel="stylesheet" href="resources/assets/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/assets/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/assets/css/invalid.css" type="text/css" media="screen" />	
<link href="https://fonts.googleapis.com/css?family=Bungee+Hairline|Lemonada" rel="stylesheet">
<script type="text/javascript" src="resources/assets/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="resources/assets/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="resources/assets/scripts/facebox.js"></script>
<script type="text/javascript" src="resources/assets/scripts/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="resources/assets/scripts/kiemtra.js"></script>

</head>
<body id="login">
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
                <h1 style="font-family: 'Lemonada', cursive;">QUẢN TRỊ WEBSITE DR:VƯƠNG</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="images/LG_30-03.jpg" style="border-radius:400px;width:20%;"/>
			</div> <!-- End #logn-top -->
			                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            @if(isset($thong_bao))
                                <li>{{ $thong_bao }}</li>
                            @endif
                        </ul>
			<div id="login-content">
				<!--<form action="quantri.php" method="post">-->
			 {!! Form::open(array('route'=>'post_admin','class' => 'form_dang_nhap_admin', 'name' => 'form_dang_nhap_admin')) !!}
					<div class="notification information png_bg">
						<div>
							Đăng nhập hệ thống.(Thông tin tên và mật khẩu phải nhập)  
						</div>
					</div>
					
					<p>
						<label>Tên đăng nhập</label>
						{!!Form::text('username','',array('class'=>'text-input kiemtra','data_error'=>'Nhập mật khẩu'))!!}
						<!--<input class="text-input kiemtra" data_error="Nhập tên đăng nhập" type="text"  name="ten_dang_nhap" />-->
					</p>
					<div class="clear"></div>
					<p>
						<label>Mật khẩu</label>
						{!!Form::password('password',array('class'=>'text-input kiemtra','data_error'=>'Nhập mật khẩu'))!!}
						<!--<input class="text-input kiemtra" data_error="Nhập mật khẩu" type="password" name="mat_khau" />-->
					</p>
					<div class="clear"></div>
					<p id="remember-password">
						<input type="checkbox" />Remember me
					</p>
					<div class="clear"></div>
					<p>
						<input type="submit" value="Đăng nhập" style="border-radius:5px;background-color:#FFFFBF;width:auto;margin:5px;padding:5px;" name="login" onclick="return Kiemtradulieu()"  />
					</p>
					<div class="clear"></div>
					<div notification error png_bg>
                    <a href="#" class="close"><img src="images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>			
					</div>
					{!! Form::close()!!}
				<!--</form>-->
			</div> <!-- End #login-content -->
		</div> <!-- End #login-wrapper -->
  </body>
</html>
