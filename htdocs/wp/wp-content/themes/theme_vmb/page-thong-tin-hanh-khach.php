<?php
    get_header();
    // echo $_GET['number_flight_to'];
    // echo $_GET['number_flight_from']; 
    // echo $_GET['deptime_from']; 
    // echo $_GET['deptime_to']; 
    // echo $_GET['from_from'];
    // echo $_GET['from_to']; 
    // echo $_GET['to_from']; 
    // echo $_GET['to_to']; 
    // echo $_GET['arvtime_from']; 
    // echo $_GET['arvtime_to']; 
    // echo $_GET['depto']; 
    // echo $_GET['arvto']; 
    // echo $_GET['depfrom']; 
    // echo $_GET['arvfrom']; 
    // echo $_GET['money_from'];  
    // echo $_GET['money_to']; 
    // echo $_GET['loaivefrom']; 
    // echo $_GET['loaiveto']; 
    // echo $_GET['adult']; 
    // echo $_GET['child'];
    // echo $_GET['baby']; 
    ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 sidebar-separator">
            <div class="passsenger">
                <form action="" method="post" id="frmBookingFlight">
                    <div class="passsenger">
                        <div class="heading-with-icon-and-ruler">
                            <div class="heading-icon"><i class="icons-sprite icons-plane_3d_encircled"></i></div>
                            <div class="heading-title">Thông tin chuyến bay</div>
                            <hr>
                        </div>
                        <div class="field-table" width="100%">
                            <div class="row">
                                <div class="col-md-12 col-sm-6 col-xs-12 config-mobile-width-cs">
                                    <h4><strong><?php echo getValueFromGlobal($_GET['from_from'], 'CODECITY') ."<span> => </span>". getValueFromGlobal($_GET['from_to'], 'CODECITY')?></strong></h4>
                                </div>
                                <!--  <div class="col-md-8 col-sm-6 col-xs-12 config-mobile-width-cs">
                                    <label>Số lượng :
                                    <strong></strong>
                                    </label>
                                    </div> -->
                            </div>
                        </div>
                        <div class="field-table" width="100%">
                            <?php
                                function ThongTinChuyenBay($number_flight,$date_di,$time_from,$money,$loaive, $direction) {
                                        $html.="<div class='composite-heading clearfix hidden-mobile-info-departure'>
                                                <div class='composite-heading-title'>
                                                <div class='composite-heading-element heading-title'>Lượt đi</div>
                                                <div class='composite-heading-element heading-icon tall-heading-icon'><i class='icons-sprite icons-plane_right_muted icon-red-plane-new'></i></div>
                                                </div>
                                                </div>
                                                <div class='row config-info-padding-top hidden-xs'>
                                                <div class='col-md-4 col-sm-3 col-xs-6 padding-right-dep'>
                                                <b></b>
                                                <i class='fa fa-arrow-right arrow-padding-dep hidden-sm hidden-md hidden-lg aria-hidden=true'></i>
                                                Ngày đi: <b>".$date_di."</b> <b>(".$time_from.")</b>
                                                </div>
                                                <div class='col-md-4 col-sm-3 col-xs-6'>
                                                    Giá vé: <b>".$money."</b>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-12'>
                                            Mã chuyến: <b>".$number_flight."</b>
                                            <p class='aircode-info-mobile'>Loại vé: <b>".$loaive."</b></p>
                                        </div>";
                                            if ($direction == 0){
                                                $html.="<div class='col-md-4 col-sm-3 col-xs-6 padding-right-dep'>
                                                <b></b>
                                                <i class='fa fa-arrow-right arrow-padding-dep hidden-sm hidden-md hidden-lg aria-hidden=true'></i>
                                                Ngày đi: <b>".$date_di."</b> <b>(".$time_from.")</b>
                                                </div>
                                                <div class='col-md-4 col-sm-3 col-xs-6'>
                                                    Giá vé: <b>".$money."</b>
                                                </div>
                                                <div class='col-md-4 col-sm-4 col-xs-12'>
                                                Mã chuyến: <b>".$number_flight."</b>
                                                <p class='aircode-info-mobile'>Loại vé: <b>".$loaive."</b></p>
                                                </div>";
                                            }
                                        $html.="</div>";
                                    echo $html;
                                }
                            ?>

                            <!--Thong Tin Chang Di--> <!-- MỘT CHIỀU -->
                            <?php 
                                if ($_GET['direction'] == 1){
                                     ThongTinChuyenBay($_GET['number_flight_from'], $_GET['from_date_di'], $_GET['deptime_from'], $_GET['money_from'], $_GET['loaive_from']);
                                }
                            ?>

                           
                                <!-- <div class="col-md-2 col-sm-2 col-xs-12 bg_vj hidden-logo-flight-mobile">
                                    </div> -->
                                
                                
                            <!-- Thông tin chặng về -->

                        </div>
                        <!-- THÔNG TIN HÀNH KHÁCH -->
                        <div class="heading-with-icon-and-ruler">
                            <div class="heading-icon"><i class="icons-sprite icons-users_encircled"></i></div>
                            <div class="heading-title"> Thông tin hành khách</div>
                            <hr>
                        </div>
                        <!-- THÔNG TIN HÀNH KHÁCH : ADULT -->
                        <div>
                            <div class="field-table">
                                <div class="row">
                                    <?php
                                        $html = '<div class="col-md-2 col-sm-4 col-xs-4">
                                          <div class="form-group">
                                              <label>Giới tính</label>
                                              <select name="passenger_title[]" class="form-control">
                                                  <option value="0">Nam</option>
                                                  <option value="1">Nữ</option>
                                              </select>
                                              <input type="hidden" name="passenger_type[]" value="0">
                                          </div>
                                        </div>
                                        <div class="col-md-10 col-sm-12 col-xs-12 col-xs-8-mobile">
                                          <div class="form-group">
                                              <label>Họ và tên</label>
                                              <input type="text" name="passenger_name[]" class="passenger_name form-control" id="passenger_name" onkeyup="validateCheckPassengerName()" placeholder="Nguyễn Văn A" required>
                                          </div>
                                        </div>'; 
                                        ?>
                                </div>
                            </div>
                            <?php
                                for ($i=1; $i <= $_GET['adult']; $i++){
                                echo "<p><strong>Người lớn<b><span style='margin-left:3px'>".$i."</span></b></strong></p>";
                                echo $html;
                                }
                                
                                for ($i=1; $i <= $_GET['child']; $i++){
                                echo "<p><strong>Trẻ em<span style='margin-left:3px'>".$i."</span></strong></p>";
                                echo $html;
                                }
                                
                                for ($i=1; $i <= $_GET['baby']; $i++){
                                echo "<p><strong>Em bé<span style='margin-left:3px'>".$i."</span></strong></p>";
                                echo $html;
                                }
                                
                                ?>
                            <table class="field-table">
                                <tbody>
                                    <tr>
                                        <td colspan="2" style="height:10px;">
                                            <p><strong>Hành lý </strong>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php Dep_addBaggage($_GET['airlinecode'])?>
                                    <tr>
                                        <td style="width:120px; height:10px;"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--THÔNG TIN HÀNH KHÁCH: CHILDREN-->
                        <!--THÔNG TIN HÀNH KHÁCH: INFANT-->
                        <!--THÔNG TIN LIÊN HỆ-->
                        <div class="heading-with-icon-and-ruler">
                            <div class="heading-icon">
                                <i class="icons-sprite icons-phone_encircled"></i>
                            </div>
                            <div class="heading-title">
                                Thông tin liên hệ
                            </div>
                            <hr>
                        </div>
                        <p id="err_info" class="line_error"></p>
                        <p style="margin:0 0 5px 0px;">(<font style="color:#ED0000;font-weight:bold">**</font>) Vui lòng cung cấp đầy đủ thông tin chi tiết liên hệ chính xác: họ tên, số ĐT chính, gmail</p>
                        <div class="field-table">
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-4">
                                    <div class="form-group">
                                        <label for="contact_title" style="font-weight:bold">Quý danh <font style="color:#ED0000;font-weight:bold">*</font></label>
                                        <select name="contact_title" id="contact_title" class="form-control">
                                            <option value="0">Ông</option>
                                            <option value="1">Bà</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-8">
                                    <div class="form-group">
                                        <label for="contact_name" style="font-weight:bold">Họ và tên <font style="color:#ED0000;font-weight:bold">*</font></label>
                                        <input type="text" name="contact_name" id="contact_name" class="form-control" onkeyup="validateCheckContactName()" placeholder="Nguyễn Văn A">
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="form-group">
                                        <label for="contact_phone" style="font-weight:bold">Điện thoại di động <font style="color:#ED0000;font-weight:bold">*</font></label>
                                        <input type="text" name="contact_phone" id="contact_phone" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="contact_email" style="font-weight:bold">Email</label>
                                        <input type="text" name="contact_email" id="contact_email" class="form-control">
                                        <div class="mb-3 message" id="mess-email" style='color:red'></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="contact_address" style="font-weight:bold">Địa chỉ</label>
                                        <input type="text" name="contact_address" id="contact_address" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="dtc-fare-wraper" id="dtc-payment-method">
                                        <div class="dtc-title dtc-color-border">   <i class="fa fa-credit-card" aria-hidden="true"></i> Phương thức thanh toán  </div>
                                        <div class="dtc-box-option">
                                            <ul class="dtc-payment">
                                                <li>
                                                    <div class="dtc-group-box"> <label class="dtc-checkbox">Thanh toán tại văn phòng      <input type="radio" name="payment-method" value="1" checked="checked"><span class="dtc-radio-mark"></span>    </label>  </div>
                                                    <div class="dtc-payment-content dtc-none"></div>
                                                </li>
                                                <li>
                                                    <div class="dtc-group-box">    <label class="dtc-checkbox">Thanh toán tại nhà quý khách      <input type="radio" name="payment-method" value="2"><span class="dtc-radio-mark"></span>    </label>  </div>
                                                    <div class="dtc-payment-content dtc-none"></div>
                                                </li>
                                                <li>
                                                    <div class="dtc-group-box">    <label class="dtc-checkbox">Chuyển khoản ngân hàng      <input type="radio" name="payment-method" value="3"><span class="dtc-radio-mark"></span>    </label>  </div>
                                                    <div class="dtc-payment-content dtc-block"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <p id="err_info" class="line_error"></p> -->
                        <h3 class="title">Yêu cầu đặc biệt</h3>
                        <p style="margin:0 0 10px 0px;">Khi bạn có thêm yêu cầu, hãy viết vào ô bên dưới.</p>
                        <div class="field-table">
                            <div>
                                <textarea name="special_request" class="form-control" rows="5" id="special_request"></textarea>
                            </div>
                            <button type="submit" id="sm_bookingflight" name="sm_bookingflight" class="button mt30 pull-right config-button-search-size">Tiếp tục</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--end coleft-->
                </form>
            </div>
        </div>
        <!------------>
        <div class="col-md-4 col-right-detail-price">
            <div class="box detail-price-info-cs" id="reviewprice">
                <div class="heading-with-icon">
                    <div class="heading-icon skip-horizontal-flip"><i class="currency_tags-sprite currency_tags-EUR_tag_large"></i></div>
                    <div class="heading-title">Chi tiết giá</div>
                </div>
                <div class="widgetblock-content">
                        <div class="composite-heading clearfix">
                            <div class="composite-heading-title">
                                <div class="composite-heading-element heading-title">Lượt đi</div>
                                <div class="composite-heading-element heading-icon tall-heading-icon"><i class="icons-sprite icons-plane_right_muted icon-red-plane-new"></i></div>
                            </div>
                        </div>
                        <?php
                            $so_luong_adult = $_GET['adult'];
                            $so_luong_child = $_GET['child'];
                            $so_luong_baby = $_GET['baby'];
                            $price = $_GET['money']; 
                            $total_adult = $so_luong_adult * $price;
                            $total_child = $so_luong_child * $price;
                        ?>
                        <table class="table table-hover">
                                <tr>
                                    <th style="width:30%"></th>
                                    <th style="width:10%"></th>
                                    <th style="width:30%"></th>
                                    <th style="width:30%"></th>
                                </tr>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="hidden" id="wayflight" value="1">
                                        <h4>Giá vé</h4>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php
                                    echo "<tr>";
                                        echo "<td><strong>Người lớn:</td></strong>";
                                        echo "<td><strong>".$_GET['adult']."</strong>&nbsp;x</td>";
                                        echo "<td style='text-align:right'>".displayVNMoney($_GET['money'])."&nbsp;VND&nbsp;=</td>";
                                        echo "<td style='text-align:right'><strong>".displayVNMoney($total_adult)."&nbsp;VND</strong></td>";
                                        echo "</tr>";
                                        if ($_GET['child'] > 0){
                                        echo "<tr>
                                            <td><strong>Trẻ em:</strong></td>
                                            <td><strong>".$_GET['child']."</strong>&nbsp;x</td>
                                            <td style='text-align:right'>".displayVNMoney($_GET['money'])."&nbsp;VND&nbsp;=</td>
                                            
                                            <td style='text-align:right'><strong>".displayVNMoney($total_child)."&nbsp;VND</strong></td>
                                        </tr>";
                                        }
                                        if ($_GET['baby'] > 0){
                                        echo "<tr>
                                            <td><strong>Em bé:</strong></td>
                                            <td><strong>".$_GET['baby']."</strong>&nbsp;x</td>
                                            <td style='text-align:right'>0&nbsp;VND&nbsp;=</td>
                                            
                                            <td style='text-align:right'><strong>0&nbsp;VND</strong></td>
                                        </tr>";
                                        }
                                       
                                    ?>
                                <tr>
                                    <td>
                                        <input type="hidden" id="wayflight" value="1">
                                        <h5>Thuế & Phí</h5>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php
                                    $fee_adult = getTaxFee_adult($_GET['money'], $_GET['airlinecode']);
                                    $fee_child = getTaxFee_child($_GET['money'], $_GET['airlinecode']);
                                    $fee_baby = getTaxFee_infant($_GET['money'], $_GET['airlinecode']);
                                    $total_fee_adult = $so_luong_adult * $fee_adult;
                                    $total_fee_child = $so_luong_child * $fee_child;
                                    $total_fee_baby = $so_luong_baby * $fee_baby;
                                            echo "<tr>";
                                            echo "<td><strong>Người lớn:</td></strong>";
                                            echo "<td><strong>".$_GET['adult']."</strong>&nbsp;x</td>";
                                            echo "<td style='text-align:right'>".displayVNMoney(getTaxFee_adult($_GET['money'],$_GET['airlinecode']))."&nbsp;VND&nbsp;=</td>";
                                            echo "<td style='text-align:right'><strong>".displayVNMoney($total_fee_adult)."&nbsp;VND</strong></td>";
                                            echo "</tr>";
                                        if ($_GET['child'] > 0){
                                            echo "<tr>";
                                            echo "<td><strong>Trẻ em:</td></strong>";
                                            echo "<td><strong>".$_GET['child']."</strong>&nbsp;x</td>";
                                            echo "<td style='text-align:right'>".displayVNMoney(getTaxFee_child($_GET['money'],$_GET['airlinecode']))."&nbsp;VND&nbsp;=</td>";
                                            echo "<td style='text-align:right'><strong>".displayVNMoney($total_fee_child)."&nbsp;VND</strong></td>";
                                            echo "</tr>";
                                        }
                                        if ($_GET['baby'] > 0){
                                            echo "<tr>";
                                            echo "<td><strong>Em bé:</td></strong>";
                                            echo "<td><strong>".$_GET['baby']."</strong>&nbsp;x</td>";
                                            echo "<td style='text-align:right'>".displayVNMoney(getTaxFee_infant($_GET['money'],$_GET['airlinecode']))."&nbsp;VND&nbsp;=</td>";
                                            echo "<td style='text-align:right'><strong>".displayVNMoney($total_fee_baby)."&nbsp;VND</strong></td>";
                                            echo "</tr>";
                                        }
                                    echo "</td>";
                                    echo "</tr>";
                                    ?>
                                <tr>
                                    <td colspan="5" style="border-top:1px solid #DDD"></td>
                                </tr>
                                <tr>
                                    <?php 
                                        $total = $total_adult + $total_child + $total_fee_adult + $total_fee_baby + $total_fee_baby;
                                        ?>
                                    <td colspan="2">Tổng giá</td>
                                    <td colspan="3" style="text-align: right;" class="config-color-total">
                                        <b id='total' style='color:red'><?php echo displayVNMoney($total); ?>VND</b>
                                        <?php 
                                            echo "<input type='hidden' id='detail_total' value='".$total."' />";
                                            ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Hành lý thêm</td>
                                    <td colspan="3" style="text-align: right;"><b><span id="dep_pricebaggage">0</span></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5" style="border-top:1px solid #DDD;text-align: right">
                                        <p style="color:#777;font-size:11px;padding: 5px 0;" class="config-color-dep">Lượt
                                            đi tổng cộng
                                        </p>
                                        <strong style="font-size:15px;" class="config-color-total"><span id="dep_total" style='color:red'>
                                            <?php 
                                            echo displayVNMoney($total); ?>VND</strong>
                                        </span>
                                        <input type="hidden" id="hddeptotalprice" value="">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                    <div class="total">
                        <div class="cont">Tổng cộng
                        <p><span id="amounttotal"></span>VND</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
                                
            <!--panel-->
            <div class="summary-info box-can-you-know">
                <div class="heading-with-icon hidden-mobile-cs">
                    <div class="heading-icon"><i class="icons-sprite icons-magnify_lens_encircled"></i></div>
                    <div class="heading-title">Bạn cần biết</div>
                </div>
                <div class="box-content">
                    <ul>
                        <li class="hidden-mobile-cs"> <a href="http://bats-macbook-pro.local/vmb_timchuyenbay/huong-dan-dat-ve" title=""> <img src="http://bats-macbook-pro.local/vmb_timchuyenbay/assets/themes/goibibo/images/icon01.png">&nbsp;&nbsp;&nbsp;Hướng dẫn đặt vé</a> </li>
                        <li class="hidden-mobile-cs"> <a href="http://bats-macbook-pro.local/vmb_timchuyenbay/cau-hoi-thuong-gap" title=""> <img src="http://bats-macbook-pro.local/vmb_timchuyenbay/assets/themes/goibibo/images/icon01.png">&nbsp;&nbsp;&nbsp;Câu hỏi thường gặp</a> </li>
                        <li class="margin-top-info-cs">
                            <img src="http://bats-macbook-pro.local/vmb_timchuyenbay/assets/themes/goibibo/images/icon03.png" class="icon-order-ticket-des">
                            <p class="phone-order-ticket">Gọi điện đặt vé</p>
                            <span class="tel-number-ticket"> 1900 63 6060</span> 
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="sidebar-support" class="mt20"> <img class="img-responsive" src="http://bats-macbook-pro.local/vmb_timchuyenbay/assets/themes/goibibo/images/ads1.jpg" alt=""><br>
                <img class="img-responsive" src="http://bats-macbook-pro.local/vmb_timchuyenbay/assets/themes/goibibo/images/ads2.jpg" alt=""> 
            </div>
        </div>
    </div>
    <!--End #wgbox--> 
</div>
<!--End #accordion-->