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