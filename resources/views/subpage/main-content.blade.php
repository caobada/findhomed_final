@extends('wrapper')
@section('title','FindHomeD')
@section('content')

<!-- Hiển thị các phòng trọ -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="Main-title">
                <p><u>Tin nổi bật</u></p>
            </div>
            @if(session('alert'))
                <script type="text/javascript">
                    alert("Đăng thành công! Bạn vui lòng đợi admin xét duyệt!");
                </script>
            @endif
            <div class="row">
                <!-- Item-->
                @foreach($top6post as $top6post)
                <div class="col-md-6 col-lg-6 col-xm-12">
                    <div class="media Item">
                        <div class="pull-left">
                            <?php
$img = explode(";", $top6post->image);
$numpic = count($img);

?>
                            <div class="media-object" style='background-image: url({{asset("images/home/$img[0]")}})'>
                                <div class="numpic">{{$numpic}} ảnh</div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href='{{url("detail/$top6post->home_id")}}'>{{$top6post->title}}</a></h4>
                            <div class="clearfix">
                                <div class="btn price">
                                    <?php
$var = explode("@", $top6post->price);
if ($var[1] == 1) {
	echo number_format($var[0]) . " Nghìn/tháng";
} else {
	echo $var[0] . ' Triệu/tháng';
}

?>
                                </div>
                                <div class="area"><b>{{$top6post->area}}m<sup>2</sup></b></div>
                                <div class="location"><b>{{$top6post->districted->type}} {{$top6post->districted->name}}, {{$top6post->province->name}}</b></div>
                            </div>
                            <div class="by-author" style="font-size:30px">
                                <p style="color:red">
                                    <span data-toggle="tooltip" data-placement="top" title="Wifi miễn phí"><i class="fas fa-wifi"></i></span>
                                    <span data-toggle="tooltip" data-placement="top" title="Cho nuôi thú cưng"><i class="fas fa-dog"></i></span>
                                    <span data-toggle="tooltip" data-placement="top" title="Có chỗ giữ xe"><i class="fas fa-motorcycle"></i></span>
                                    <span data-toggle="tooltip" data-placement="top" title="Giờ giấc tự do"><i class="fas fa-clock"></i></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--end Item -->

            </div>
        </div>
    </div>
</div>

@include('subpage.left-main-content')
@endsection