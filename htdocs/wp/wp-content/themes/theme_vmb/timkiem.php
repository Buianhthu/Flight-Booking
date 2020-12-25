<?php
$date  = date("d/m/Y", time());
?>
<div class="search-box tab-ve-ks">
    <style type="text/css">
        @media (max-width: 992px){
        .search-box .nav-tabs>li {
        text-align: center;
        width: calc(100%/2);
        }
        .search-box .nav-tabs>li a {
        padding: 10px 0px 0;
        }
        }
        @media (max-width: 767px){
        .tab-text-xs {
        font-size: 14px;
        }
        }
    </style>
    <ul class="nav nav-tabs main-tabs">
        <li class="active">
            <a data-toggle="tab" href="#ve_may_bay" id="head-tab-vemaybay">
            <i class="fa fa-paper-plane-o hidden-md hidden-lg" aria-hidden="true"></i>
            <span class="tab-text-xs">Vé máy bay</span>
            </a>
        </li>
        <li>
            <a href="/tours">
            <i class="fa fa-tumblr-square hidden-md hidden-lg" aria-hidden="true"></i>
            <span class="tab-text-xs">Tours</span>
            </a>
        </li>
    </ul>
    <form class="timkiem" method="POST" action="<?php echo get_bloginfo('url')."/tim-chuyen-bay"?>">
        <div class="tab-content">
            <!-- Tab vé máy bay -->
                <div class="list-search row tab-pane fade in active" id="ve_may_bay" style="margin: 0 auto">
                        <div id="row1" style="margin-left: 3rem">
                            <div class="dropdown show div-input box-diem go-flight">
                                <!--  -->
                                <input type="text" name="diem-di" data-code="HAN" code="HAN" class="form-control btn-place bt-diem-di btn btn-secondary dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Nhập tên điểm khởi hành" value="Hà Nội">
                                <!-- <input type="text" name="" class="form-control btn-place bt-diem-di  border-color-red " placeholder="Nhập tên điểm khởi hành"> -->
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                <!-- Box Hidden -->
                                <div class="box-select-option dropdown-menu">
                                    <button type="button" class="btn btn-close close1">
                                        <i class="fa fa-times hidden-xs"></i>
                                    </button>
                                    <div class="title hidden-xs ">
                                        Lựa chọn thành phố hoặc sân bay xuất phát
                                    </div>
                                    <div class="row scroll-touch">
                                        <div class="kv-noi-dia row">
                                            <div class="col-sm-12 col-sm-12 col-sm-12">
                                                <h3>MIỀN BẮC</h3>
                                                <ul>
                                                    <li class="item-diem-di" data-code="HAN">Hà Nội</li>
                                                    <li class="item-diem-di" data-code="HPH">Hải Phòng</li>
                                                    <li class="item-diem-di" data-code="DIN">Điện Biên Phủ</li>
                                                    <li class="item-diem-di" data-code="VDO">Vân Đồn</li>
                                                </ul>
                                                <h3>MIỀN NAM</h3>
                                                <ul>
                                                    <li class="item-diem-di" data-code="SGN">Hồ Chí Minh</li>
                                                    <li class="item-diem-di" data-code="PQC">Phú Quốc</li>
                                                    <li class="item-diem-di" data-code="CAH">Cà Mau</li>
                                                    <li class="item-diem-di" data-code="VCA">Cần Thơ</li>
                                                    <li class="item-diem-di" data-code="VCS">Côn Đảo</li>
                                                    <li class="item-diem-di" data-code="VKG">Kiên Giang</li>
                                                </ul>
                                                <h3>MIỀN TRUNG</h3>
                                                <ul>
                                                    <li class="item-diem-di" data-code="DAD">Đà Nẵng</li>
                                                    <li class="item-diem-di" data-code="CXR">Nha Trang</li>
                                                    <li class="item-diem-di" data-code="DLI">Đà Lạt</li>
                                                    <li class="item-diem-di" data-code="HUI">Huế</li>
                                                    <li class="item-diem-di" data-code="BMV">Ban Mê Thuột</li>
                                                    <li class="item-diem-di" data-code="PXU">PleiKu</li>
                                                    <li class="item-diem-di" data-code="TBB">Phú Yên</li>
                                                    <li class="item-diem-di" data-code="THD">Thanh Hóa</li>
                                                    <li class="item-diem-di" data-code="UIH">Qui Nhơn</li>
                                                    <li class="item-diem-di" data-code="VCL">Chu Lai</li>
                                                    <li class="item-diem-di" data-code="VDH">Quảng Bình</li>
                                                    <li class="item-diem-di" data-code="VII">Vinh</li>
                                                </ul>
                                            </div>
                                            <!-- <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                </div> -->
                                        </div>
                                        <div class="kv-quoc-te row">
                                            <div class="col-sm-12 col-sm-12 col-sm-12">
                                                <h3>CHÂU Á</h3>
                                                <ul>
                                                    <li class="item-diem-di" data-code="BKK">Băng Cốc</li>
                                                    <li class="item-diem-di" data-code="CAN">Quảng Châu</li>
                                                    <li class="item-diem-di" data-code="HKG">Hồng Kông</li>
                                                    <li class="item-diem-di" data-code="KUL">Kuala Lumpur</li>
                                                    <li class="item-diem-di" data-code="ICN">Seoul, Incheon</li>
                                                    <li class="item-diem-di" data-code="SHA">Thượng Hải</li>
                                                    <li class="item-diem-di" data-code="SIN">Singapore</li>
                                                    <li class="item-diem-di" data-code="TPE">Đài Bắc</li>
                                                    <li class="item-diem-di" data-code="TYO">Tokyo</li>
                                                    <li class="item-diem-di" data-code="KOS">Campuchia</li>
                                                </ul>
                                                <h3>CHÂU ÂU</h3>
                                                <ul>
                                                    <li class="item-diem-di" data-code="AMS">Amsterdam</li>
                                                    <li class="item-diem-di" data-code="CPH">Cô-pen-ha-gen</li>
                                                    <li class="item-diem-di" data-code="FRA">Frankfurt</li>
                                                    <li class="item-diem-di" data-code="LON">London</li>
                                                    <li class="item-diem-di" data-code="PAR">Paris</li>
                                                    <li class="item-diem-di" data-code="PRG">Praha</li>
                                                    <li class="item-diem-di" data-code="STO">Stockholm</li>
                                                    <li class="item-diem-di" data-code="ZRH">Zurich</li>
                                                </ul>
                                                <h3>CHÂU ÚC &amp; MỸ</h3>
                                                <ul>
                                                    <li class="item-diem-di" data-code="DFW">Dallas</li>
                                                    <li class="item-diem-di" data-code="HOU">Houston</li>
                                                    <li class="item-diem-di" data-code="LAX">Los Angeles</li>
                                                    <li class="item-diem-di" data-code="MEL">Men-bơn</li>
                                                    <li class="item-diem-di" data-code="NYC">New York</li>
                                                    <li class="item-diem-di" data-code="SFO">San Francisco</li>
                                                    <li class="item-diem-di" data-code="SYD">Sydney</li>
                                                    <li class="item-diem-di" data-code="YTO">Toronto</li>
                                                    <li class="item-diem-di" data-code="YVR">Vancouver</li>
                                                </ul>
                                            </div>
                                            <!-- <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Box Hidden -->
                            <div class="dropdown show div-input box-diem back-flight">
                                <input type="text" id="diem-den" data-code="SGN" code="SGN" name="diem-den" class="form-control btn-place bt-diem-den btn btn-secondary dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Nhập tên điểm đến" value="Hồ Chí Minh">
                                <i class="fa fa-plane i-come" aria-hidden="true"></i>
                                <!-- Box Hidden -->
                                <div class="box-select-option dropdown-menu">
                                    <button type="button" class="btn btn-close close1">
                                        <i class="fa fa-times hidden-xs"></i> 
                                    </button>
                                    <div class="title hidden-xs">
                                        Lựa chọn thành phố hoặc sân bay xuất phát
                                    </div>
                                   <!--  <div class="div-in-search"> -->
                                        <!--  <div class="visible-xs title-mb">Chọn điểm đến</div> -->
                                        <!-- <div class="div-input-search">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                            <i class="fa fa-times"></i>
                                            <input type="text" placeholder="Nhập tên thành phố hoặc mã sân bay" class="form-control typeahead input-flight" id="city_name_back" value="Sài Gòn, Việt Nam">
                                            <ul class="typeahead dropdown-menu" style="max-height:220px;overflow:auto;"></ul>
                                            <button class="btn btn-orange-34 hidden-xs btn-choice-area">CHỌN</button>
                                        </div>
                                    </div> -->
                                    <div class="row scroll-touch">
                                        <div class="kv-noi-dia row m0">
                                            <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                <h3>MIỀN BẮC</h3>
                                                <ul class="">
                                                    <li class="item-diem-den" data-code="HAN">Hà Nội</li>
                                                    <li class="item-diem-den" data-code="HPH">Hải Phòng</li>
                                                    <li class="item-diem-den" data-code="DIN">Điện Biên Phủ</li>
                                                    <li class="item-diem-den" data-code="VDO">Vân Đồn</li>
                                                </ul>
                                                <h3>MIỀN NAM</h3>
                                                <ul>
                                                    <li class="item-diem-den" data-code="SGN">Hồ Chí Minh</li>
                                                    <li class="item-diem-den" data-code="PQC">Phú Quốc</li>
                                                    <li class="item-diem-den" data-code="CAH">Cà Mau</li>
                                                    <li class="item-diem-den" data-code="VCA">Cần Thơ</li>
                                                    <li class="item-diem-den" data-code="VCS">Côn Đảo</li>
                                                    <li class="item-diem-den" data-code="VKG">Kiên Giang</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                <h3>MIỀN TRUNG</h3>
                                                <ul class="">
                                                    <li class="item-diem-den" data-code="DAD">Đà Nẵng</li>
                                                    <li class="item-diem-den" data-code="CXR">Nha Trang</li>
                                                    <li class="item-diem-den" data-code="DLI">Đà Lạt</li>
                                                    <li class="item-diem-den" data-code="HUI">Huế</li>
                                                    <li class="item-diem-den" data-code="BMV">Ban Mê Thuột</li>
                                                    <li class="item-diem-den" data-code="PXU">PleiKu</li>
                                                    <li class="item-diem-den" data-code="TBB">Phú Yên</li>
                                                    <li class="item-diem-den" data-code="THD">Thanh Hóa</li>
                                                    <li class="item-diem-den" data-code="UIH">Qui Nhơn</li>
                                                    <li class="item-diem-den" data-code="VCL">Chu Lai</li>
                                                    <li class="item-diem-den" data-code="VDH">Quảng Bình</li>
                                                    <li class="item-diem-den" data-code="VII">Vinh</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="kv-quoc-te row m0">
                                            <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                <h3>CHÂU Á</h3>
                                                <ul>
                                                    <li class="item-diem-den" data-code="BKK">Băng Cốc</li>
                                                    <li class="item-diem-den" data-code="CAN">Quảng Châu</li>
                                                    <li class="item-diem-den" data-code="HKG">Hồng Kông</li>
                                                    <li class="item-diem-den" data-code="KUL">Kuala Lumpur</li>
                                                    <li class="item-diem-den" data-code="ICN">Seoul, Incheon</li>
                                                    <li class="item-diem-den" data-code="SHA">Thượng Hải</li>
                                                    <li class="item-diem-den" data-code="SIN">Singapore</li>
                                                    <li class="item-diem-den" data-code="TPE">Đài Bắc</li>
                                                    <li class="item-diem-den" data-code="TYO">Tokyo</li>
                                                    <li class="item-diem-den" data-code="KOS">Campuchia</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                <h3>CHÂU ÂU</h3>
                                                <ul>
                                                    <li class="item-diem-den" data-code="AMS">Amsterdam</li>
                                                    <li class="item-diem-den" data-code="CPH">Cô-pen-ha-gen</li>
                                                    <li class="item-diem-den" data-code="FRA">Frankfurt</li>
                                                    <li class="item-diem-den" data-code="LON">London</li>
                                                    <li class="item-diem-den" data-code="PAR">Paris</li>
                                                    <li class="item-diem-den" data-code="PRG">Praha</li>
                                                    <li class="item-diem-den" data-code="STO">Stockholm</li>
                                                    <li class="item-diem-den" data-code="ZRH">Zurich</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-sm-6 p0">
                                                <h3>CHÂU ÚC &amp; MỸ</h3>
                                                <ul>
                                                    <li class="item-diem-den" data-code="DFW">Dallas</li>
                                                    <li class="item-diem-den" data-code="HOU">Houston</li>
                                                    <li class="item-diem-den" data-code="LAX">Los Angeles</li>
                                                    <li class="item-diem-den" data-code="MEL">Men-bơn</li>
                                                    <li class="item-diem-den" data-code="NYC">New York</li>
                                                    <li class="item-diem-den" data-code="SFO">San Francisco</li>
                                                    <li class="item-diem-den" data-code="SYD">Sydney</li>
                                                    <li class="item-diem-den" data-code="YTO">Toronto</li>
                                                    <li class="item-diem-den" data-code="YVR">Vancouver</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Box Hidden -->
                            </div>
                            <!-- --------- -->
                            <div class="div-number dropdown show" style="float:left; width: 20rem">
                                <button type="button" class="btn btn-pp dropdown-toggle">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span>1</span>
                                </button>
                                <ul class="passenger dropdown-menu">
                                    <li class="row m0" data-min="1" data-max="9">
                                        <div class="row m0">
                                            <div class="pull-left" style="margin-right: 3rem">
                                                Người lớn
                                                <p class="m0">(Trên 18)</p>
                                            </div>
                                            <div class="pull-right">
                                                <button type='button' class="btn btn-math" id="adults_minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                <span id="adults">1</span>
                                                <button type="button" class="btn btn-math" id="adults_plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                            </div>
                                            <input type="hidden" name="num-adault-xs" id="num-adault-xs" value="1">
                                        </div>
                                    </li>
                                    <li class="row m0">
                                        <div class="row m0">
                                            <div class="pull-left" style="margin-right: 4.2rem">
                                                Trẻ em
                                                <p class="m0">(2 - 12)</p>
                                            </div>
                                            <div class="pull-right">
                                                <button type='button' class="btn btn-math" id="child_minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                <span id="child">0</span>
                                                <button type='button' class="btn btn-math" id="child_plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                            </div>
                                            <input type="hidden" name="num-child-xs" id="num-child-xs" value="0">
                                        </div>
                                    </li>
                                    <li class="row m0">
                                        <div class="row m0">
                                            <div class="pull-left" style="margin-right: 4.8rem">
                                                Em bé
                                                <p class="m0">(0 - 2)</p>
                                            </div>
                                            <div class="pull-right">
                                                <button type='button' class="btn btn-math" id="baby_minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                <span id="baby">0</span>
                                                <button type='button' class="btn btn-math" id="baby_plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                            </div>
                                            <input type="hidden" name="num-baby-xs" id="num-baby-xs" value="0">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;" id="selected-pp" class="btn btn-orange-48">CHỌN</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                       <!--  ------------------------- -->
                        <div class="row2">
                            <div id="date" style="margin-top:10rem; margin-left:5rem">
                                <div class="div-date form-date date_di" >
                                    <div class='input-group date' > 
                                        <?php
                                        echo "<input class='form-control date' id='date_di' name='date_di' placeholder=".$date." type='text' width='100px' value=".$date.">";
                                        ?>
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                    <div class="label-bottom-flight hidden-xs">
                                        <input id="journey1" type="radio" name="journey" value="1"><label for="journey1">Một chiều</label>
                                    </div>
                            
                                </div>
                                <div class="div-date form-date date_ve" id="to-container">
                                    <div class='input-group date'>
                                      <?php
                                        echo "<input class='form-control date' id='date_ve' name='date_ve' placeholder=".$date." type='text' width='100px' value=".$date.">";
                                        ?>
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                    <div class="label-bottom-flight hidden-xs">
                                        <input id="journey2" type="radio" checked="checked" name="journey" value="0"><label for="journey2">Khứ hồi</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="div-btn">
                            <input type='submit' class="btn btn-orange-48 btn-tim-ve" id="BtnSearch" value="Tìm chuyến bay"/>
                        </div>
                        <!-- <input type="hidden" name="partner" id="partner" value="SGN">
                        <input type="hidden" name="product_key" id="product_key" value="HAN"> -->
                </div>
            </div>
    </form>
</div>
<!-- End Tab vé máy bay -->