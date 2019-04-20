<section class="search-sec">
    <form action="#" method="post" novalidate="novalidate">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row row-search-basic">
                    <div class="col-lg-3 col-md-3 col-sm-12 item-search">
                        <input type="text" class="form-control search-slt select" id="key" name="key" placeholder="Từ khóa">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 item-search">
                        <select class="form-control search-slt" id="province"  name="province">
                            <option>Chọn Tỉnh Thành</option>
                            @foreach($province as $provinces)
                            <option <?php if (isset($_GET['provinces'])) {if ($provinces->provinceid == $_GET['province']) {echo "selected='selected'";}}?>
                            value="{{$provinces->provinceid}}">{{$provinces->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 item-search">
                        <select id="district" class="form-control search-slt" name="district">
                            <option value="">Quận Huyện</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 item-search btn-response">
                        <button type="button" class="btn btn-primary wrn-btn">Search</button>
                        <div  class="button-advance-show">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                </div>


                <div class="row row-search-advance">
                    <div class="col-lg-3 col-md-3 col-sm-12 item-search">
                        <select class="form-control search-slt" name="type" id="type">
                            <option>Chọn Loại Tin</option>
                            @foreach($hometype as $hometypes)
                            <option
                            <?php if (isset($_GET['type'])) {if ($hometypes->id == $_GET['type']) {echo "selected='selected'";}}?>
                            value="{{$hometypes->id}}">{{$hometypes->nametype}}</option>
                            @endforeach
                        </select> 
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 item-search">
                        <select class="form-control search-slt" id="price"  name="price">
                            <option>Giá tiền</option>
                            <option>Dưới 1 triệu</option>
                            <option>1- 3 triệu</option>
                            <option>3 -5 triệu</option>
                            <option>5- 10 triệu</option>
                            <option>10- 50 triệu</option>
                            <option>Trên triệu</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 item-search">
                        <select id="area" class="form-control search-slt" name="area" >
                            <option value="">Diện tích</option>
                            <option value="">Trên 10 mét vuông</option>
                            <option value="">Từ 10 đến 30 mét vuông</option>
                            <option value="">Từ 30 đến 60 mét vuông</option>
                            <option value="">Trên 60 mét vuông</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 item-search">
                        <select id="service" class="form-control search-slt" name="service" >
                            <option value="">Tiện ích</option>
                        </select>
                    </div>
                </div>

                <div class="row row-search-button-response">
                    <div class="item-search">
                        <button type="button" class="btn btn-primary wrn-btn">Search</button>
                        <div class="button-advance-show">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </form>
</section>

<script src="{{asset('js/search.js')}}"></script>


