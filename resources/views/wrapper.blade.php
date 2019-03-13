<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	@yield('link')
	<link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

	<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

	<link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/icomoon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
	<!--select 2-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">


	<link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
	<link href="{{asset('file_upload/fileinput.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/mystyle.css')}}">

	<style type="text/css">
	*{
		font-family: Tahoma, Arial, sans-serif;

	}
</style>
</head>
<body>
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="top" id="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-right">
							<p class="num">Call: +0961467216</p>
							<ul class="fh5co-social">
								@if(Auth::check())
								<p><span class="title">Xin chào {{Auth::user()->username}}</span> |||<a id="logout" href="{{route('logout')}}"><i class="fa fa-sign-out"></i></a></p>
								@else
								<li><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Đăng nhập</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="fh5co-logo"><a href="{{url('/')}}">Find<span>HomeD.</span></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="{{url('/')}}">Home</a></li>
								<li class="has-dropdown" >
									<a href="#">Danh mục thuê</a>
									<ul class="dropdown">
										@foreach($hometype as $menu)
										<li><a href='{{url("type/$menu->nametypelink")}}'>{{$menu->nametype}}</a></li>
										@endforeach

									</ul>
								</li>
								<li>@if(Auth::check())<a href="{{url('dang-tin')}}">@else <a href="#" data-toggle="modal" data-target="#exampleModalCenter"> @endif Đăng tin</a></li>
								@if(Auth::check())<li><a href="{{url('quan-ly-bai-dang')}}">Quản lý bài đăng</a></li>@endif

								<li><a href="{{url('lien-he')}}">Liên hệ</a></li>

							</ul>
						</div>
					</div>

				</div>
			</div>
		</nav>
	<!--Header-->
		<header id="fh5co-header" class="fh5co-cover" role="banner" style='background-image:url({{asset("images/search_home_bg2.jpg")}}' data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<div class="search-form">
								<div class="title-caption">Tìm kiếm nhanh</div>
									<section class="search-sec">
											<form action="#" method="post" novalidate="novalidate">
												<div class="row">
													<div class="col-lg-12 col-md-12">
														<div class="row">
															<div class="col-lg-3 col-md-3 col-sm-12 p-0 input-container">
																<select class="form-control search-slt select" id="select">
																	<option>Chọn Loại Tin</option>
																	@foreach($hometype as $hometypes)
																	<option
																	<?php if (isset($_GET['type'])) {if ($hometypes->id == $_GET['type']) {echo "selected='selected'";}}?>
																	value="{{$hometypes->id}}">{{$hometypes->nametype}}</option>
																	@endforeach
																</select> 
															</div>
															<div class="col-lg-3 col-md-3 col-sm-12 p-0">
																<select class="form-control search-slt" id="province"  name="province">
																	<option>Chọn Tỉnh Thành</option>
																	@foreach($province as $provinces)
																	<option <?php if (isset($_GET['provinces'])) {if ($provinces->provinceid == $_GET['province']) {echo "selected='selected'";}}?>
																	value="{{$provinces->provinceid}}">{{$provinces->name}}</option>
																	@endforeach
																</select>
															</div>
															<div class="col-lg-3 col-md-3 col-sm-12 p-0">
																<select id="district" class="form-control " name="district">
																	<option value="">Quận Huyện</option>
																</select>
															</div>
															<div class="col-lg-3 col-md-3 col-sm-12 p-0">
																<button type="button" class="btn btn-primary wrn-btn">Search</button>
																<button type="button" class="">Search</button>
															</div>
														</div>
													</div>
												</div>
											</form>
									</section>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>



		<!-- Services -->
	
		@yield('content')

	</div>


	@include('subpage.footer')

	<div class="gototop js-top">
		<a href="#top" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<div class="save-home">
		<button class="btn saves" id="home-save" data-count="0"> tin lưu</button>
		<div class="list-home-save">
			<ul id="show-save-home">

			</ul>
		</div>
	</div>

	<script  src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}" ></script>
	<script type="text/javascript" src="{{asset('js/jquery.validate.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
	<script src="{{asset('js/select2.min.js')}}"></script>






	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title" id="exampleModalLongTitle">Đăng nhập</h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post"  id="form-login">
					<div class="modal-body">

						<div class="info"></div>
						<div class="form-group has-feedback" >
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
							<input type="text" name="username" class="form-control" maxlength="10" size="10" placeholder="Username">
						</div>
						<div class="form-group has-feedback">
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
							<input type="password" name="password" class="form-control" placeholder="Password">
							{{ csrf_field( )}}
						</div>

						<p>Nếu chưa có tài khoản?<a id="dangki" href="{{url('register')}}"> Đăng ký</a></p>


				<!-- <div class="login-social">
					<div class="container">
						<a class="btn  btn-social btn-facebook">
							<i class="fa fa-facebook fa-fw"></i> Đăng nhập với Facebook
						</a>
						<a class="btn btn-social btn-google">
							<i class="fa fa-google fa-fw"></i> Đăng nhập với Google
						</a>
					</div>
				</div> -->
				</div>
				 <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal" style="color:black">Đóng</button>
					<button type="submit" class="btn btn-primary">Đăng nhập</button>
				</div>
	</form>
			</div>
		</div>
	</div>



</body>
</html>
<script type="text/javascript" src="{{asset('js/jquery.session.js')}}"></script>
<script type="text/javascript">
	$(function () {
  		$('[data-toggle="tooltip"]').tooltip();
		
	})
	$(function(){



		$("#logout").on('click',function(event){
			var kq = confirm("Bạn muốn đăng xuất?");
			if(kq==false) event.preventDefault();
		})

		$('#form-login').validate({
			rules:{
				username:{
					required:true,
					minlength:5
				},
				password:{
					required:true,
					minlength:5
				}

			},
			messages:{
				username:{
					required:"Yêu cầu nhập tên đăng nhập!",
					minlength:"Tên đăng nhập tối thiểu 5 kí tự!"
				},
				password:{
					required:"Yêu cầu nhập tên đăng nhập!",
					minlength:"Mật khẩu tối thiểu 5 kí tự!"
				}
			},
			submitHandler: checklogin
		});
		$("#form-search").validate({
			rules:{
				type:{
					required:true
				}

			},
			messages:{
				type:{
					required:"Chọn loại tin cần lọc!"
				}
			},
			errorLabelContainer: '.errorTxt'
		});
		function checklogin(){
			var data = $("#form-login").serialize();
			$.ajax({
				type:'post',
				url:"{{url('login')}}",
				data:data,
				beforeSend:function(){
					$('.info').fadeOut();
				},
				success: function(resp){

					if(resp.error==false)
						setTimeout('location.href="{{url('')}}",4000');
					else{
						$(".info").fadeIn(500,function(){
							$('.info').html(resp.message);
						});

					}

				}
			});
		}

		offcanvasMenu();

		$('document').on('change','#province',function(event){
			var provinceid = $(this).val();
			console.log('aaaaa');
	 		url = '/province/'+ provinceid;
				
			$.ajax({
				type: 'get',
				url : url ,
				success:function(resp){
					$("#district").html(resp);

				}
			});
		});

		$('body').on('click', '.js-fh5co-nav-toggle', function(event){
			var $this = $(this);


			if ( $('body').hasClass('overflow offcanvas') ) {
				$('body').removeClass('overflow offcanvas');
			} else {
				$('body').addClass('overflow offcanvas');
			}
			$this.toggleClass('active');
			event.preventDefault();

		});
		$(window).resize(function(){

			if ( $('body').hasClass('offcanvas') ) {

				$('body').removeClass('offcanvas');
				$('.js-fh5co-nav-toggle').removeClass('active');

			}
		});



		$(window).scroll(function(){

			var $win = $(window);
			if ($win.scrollTop() > 200) {
				$('.js-top').addClass('active');
			} else {
				$('.js-top').removeClass('active');
			}

		});
		$("a").on('click', function(event) {


			if (this.hash !== "") {
				event.preventDefault();
				var hash = this.hash;
				$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 800)
			}
		});



		$('.has-dropdown').mouseenter(function(){

			$(this).find('.dropdown').css('display', 'block').addClass('animated-fast fadeInUpMenu');
		});
		$('.has-dropdown').mouseleave(function(){
			$(this).find('.dropdown').css('display', 'none').removeClass('animated-fast fadeInUpMenu');


		});


	});

	$(function(){
		$('.select').select2();
		$('#province').select2();
		$('#district').select2();
		$('#price').select2();
		$('#area').select2();

	})

	
	</script>

	@yield('script')
