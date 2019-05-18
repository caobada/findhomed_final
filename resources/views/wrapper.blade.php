<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	@yield('link')
	@include('layout/frontend/import_css')
	<script  src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
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
					<div class="text">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<div class="search-form">
								<div class="title-caption">Tìm kiếm nhanh</div>
									@include('layout.search')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<a href="" class="col-md-3 col-xs-12 provinced-dea" style="background-image: url('{{asset('./images/go-vap.jpg')}}')">
						<div class="text-block-provinced">Gò Vấp, Hồ Chí Minh</div>	
					<a>
					<a href="" class="col-md-3 col-xs-12 provinced-dea" style="background-image: url('{{asset('./images/quan-1-sai-gon.jpg')}}')">
						<div class="text-block-provinced">Quận 1, Hồ Chí Minh</div>	
					<a>
					<a href="" class="col-md-3 col-xs-12 provinced-dea" style="background-image: url('{{asset('./images/buon_ma_thuot.jpg')}}')">
						<div class="text-block-provinced">Thành Phố Buôn Ma Thuột</div>	
					<a>
					<a href="" class="col-md-3 col-xs-12 provinced-dea" style="background-image: url('{{asset('./images/vung-tau.jpg')}}')">
						<div class="text-block-provinced">Thành phố Vũng Tàu</div>	
					<a>
				</div>
			</div>
		</header>
		<!-- Some Provinced -->
		



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

	






	



</body>
@include('layout/frontend/import_js');
</html>

<script type="text/javascript">

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



	


	});
	</script>

	@yield('script')
