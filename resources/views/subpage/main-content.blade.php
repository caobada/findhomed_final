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
                <div class="col-md-6 col-lg-3 col-xs-12">
                    <a href="#" class="div-home">
                        <div class="item-home item-block">
                            <div class="div-photo-home" style="background-image:url('{{asset('images/home/16938477_632057193663178_7888863733659049703_n.jpg')}}')"></div>
                            <div class="number-pic">10 ảnh</div>
                            <div class="div-block-con">
                                <div class="div-block-name">
                                    <h3>Cho thuê nhà trọ nguyên căn quận Gò Vấp</h3>
                                </div>
                                <div class="div-block-det">
                                    <div class="div-icon-text">
                                        <div class="div-block-ico _1"></div>
                                        <div class="div-block-txt">30m2</div>
                                    </div>
                                    <div class="div-icon-text">
                                        <div class="div-block-ico"></div>
                                        <div class="div-block-txt">Gò Vấp, Hồ Chí Minh</div>
                                    </div>
                                    <div class="div-icon-text">
                                        <div class="div-block-ico _2"></div>
                                        <div class="div-block-txt">3,000,000 VNĐ/tháng</div>
                                    </div>
                                    <div class="div-icon-text">
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room"style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div style="font-size: 10px;width:15px;height:15px;margin-left:10px;color:#f60867" class="fas fa-plus"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--end Item -->
                        <!-- Item-->
                        <div class="col-md-6 col-lg-3 col-xs-12">
                    <a href="#" class="div-home">
                        <div class="item-home item-block">
                            <div class="div-photo-home" style="background-image:url('{{asset('images/home/16938477_632057193663178_7888863733659049703_n.jpg')}}')"></div>
                            <div class="number-pic">10 ảnh</div>
                            <div class="div-block-con">
                                <div class="div-block-name">
                                    <h3>Cho thuê nhà trọ nguyên căn quận Gò Vấp</h3>
                                </div>
                                <div class="div-block-det">
                                    <div class="div-icon-text">
                                        <div class="div-block-ico _1"></div>
                                        <div class="div-block-txt">30m2</div>
                                    </div>
                                    <div class="div-icon-text">
                                        <div class="div-block-ico"></div>
                                        <div class="div-block-txt">Gò Vấp, Hồ Chí Minh</div>
                                    </div>
                                    <div class="div-icon-text">
                                        <div class="div-block-ico _2"></div>
                                        <div class="div-block-txt">3,000,000 VNĐ/tháng</div>
                                    </div>
                                    <div class="div-icon-text">
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room"style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div style="font-size: 10px;width:15px;height:15px;margin-left:10px;color:#f60867" class="fas fa-plus"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--end Item -->
                        <!-- Item-->
                        <div class="col-md-6 col-lg-3 col-xs-12">
                    <a href="#" class="div-home">
                        <div class="item-home item-block">
                            <div class="div-photo-home" style="background-image:url('{{asset('images/home/16938477_632057193663178_7888863733659049703_n.jpg')}}')"></div>
                            <div class="number-pic">10 ảnh</div>
                            <div class="div-block-con">
                                <div class="div-block-name">
                                    <h3>Cho thuê nhà trọ nguyên căn quận Gò Vấp</h3>
                                </div>
                                <div class="div-block-det">
                                    <div class="div-icon-text">
                                        <div class="div-block-ico _1"></div>
                                        <div class="div-block-txt">30m2</div>
                                    </div>
                                    <div class="div-icon-text">
                                        <div class="div-block-ico"></div>
                                        <div class="div-block-txt">Gò Vấp, Hồ Chí Minh</div>
                                    </div>
                                    <div class="div-icon-text">
                                        <div class="div-block-ico _2"></div>
                                        <div class="div-block-txt">3,000,000 VNĐ/tháng</div>
                                    </div>
                                    <div class="div-icon-text">
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room"style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div style="font-size: 10px;width:15px;height:15px;margin-left:10px;color:#f60867" class="fas fa-plus"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--end Item -->
                        <!-- Item-->
                <div class="col-md-6 col-lg-3 col-xs-12">
                    <a href="#" class="div-home">
                        <div class="item-home item-block">
                            <div class="div-photo-home" style="background-image:url('{{asset('images/home/16938477_632057193663178_7888863733659049703_n.jpg')}}')"></div>
                            <div class="number-pic">10 ảnh</div>
                            <div class="div-block-con">
                                <div class="div-block-name">
                                    <h3>Cho thuê nhà trọ nguyên căn quận Gò Vấp</h3>
                                </div>
                                <div class="div-block-det">
                                    <div class="div-icon-text">
                                        <div class="div-block-ico _1"></div>
                                        <div class="div-block-txt">30m2</div>
                                    </div>
                                    <div class="div-icon-text">
                                        <div class="div-block-ico"></div>
                                        <div class="div-block-txt">Gò Vấp, Hồ Chí Minh</div>
                                    </div>
                                    <div class="div-icon-text">
                                        <div class="div-block-ico _2"></div>
                                        <div class="div-block-txt">3,000,000 VNĐ/tháng</div>
                                    </div>
                                    <div class="div-icon-text">
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room"style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div class="icon-faci-2" data-toggle="tooltip" data-placement="top" title="Gym room" style="margin-left:10px"></div>
                                        <div style="font-size: 10px;width:15px;height:15px;margin-left:10px;color:#f60867" class="fas fa-plus"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--end Item -->

            </div>
        </div>
    </div>
</div>

@include('subpage.left-main-content')
@endsection

@section('script')
    <script src="{{asset('js/home.js')}}"></script>
@endsection