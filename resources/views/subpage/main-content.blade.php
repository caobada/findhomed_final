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
            <div class="row div-wrapper-home">
            @foreach($top_view as $val)
                <!-- Item-->
                <div class="div-block-home">
                    <a href='{{url("detail/$val->home_id")}}' class="div-home">
                        <div class="item-home item-block">
                            @php
                            if(strpos($val->image, ';') !== false) {
                                $img = explode(';',$val->image);
                            } else {
                                $img = (array)$val->image;
                            }
                           
                            @endphp
                          
                            <div class="div-photo-home" style='background-image:url("{{asset("images/home/$img[0]")}}"'></div>
                            <div class="number-pic">
                           {{count($img)}} Hình
                            </div>  
                            <div class="div-block-con">
                                <div class="div-block-name">
                                    <h3>{{$val->title}}</h3>
                                </div>
                                <div class="div-block-det">
                                    <div class="div-icon-text">
                                        <div class="div-block-ico _1"></div>
                                        <div class="div-block-txt">{{$val->area}}m2</div>
                                    </div>
                                    <div class="div-icon-text">
                                        <div class="div-block-ico"></div>
                                        <div class="div-block-txt">{{$val->districted->type}} {{$val->districted->name}}, {{$val->province->name}}</div>
                                    </div>
                                    <div class="div-icon-text">
                                        <div class="div-block-ico _2"></div>
                                        <div class="div-block-txt">
                                            @php
                                                $money = $val->price;
                                                if(strpos($money, '@') !== false) {
                                                    $money = explode('@',$money);
                                                } else {
                                                    $money = (array)$money;
                                                }
                                                if($money[1] == 0){
                                                    $money_string = $money[0] .' triệu/tháng';
                                                }else{
                                                    $money_string = number_format($money[0], 0, '', ',') .' VNĐ/tháng';
                                                }
                                                echo $money_string;
                                            @endphp
                                        </div>
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
                @endforeach
                        
            </div>
        </div>
    </div>
</div>

@include('subpage.left-main-content')
@endsection

@section('script')
    <script src="{{asset('js/home.js')}}"></script>
@endsection