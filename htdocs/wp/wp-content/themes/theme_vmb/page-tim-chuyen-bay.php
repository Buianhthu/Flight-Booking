<?php
// Turn off all error reporting
error_reporting(0);
$now = time(); // DDOS
$expired_time = 0; // in seconds
$ran = rand(99, 999999);
$enCode = md5(time() . $ran . "NpTcbCom");
date_default_timezone_set("Asia/Ho_Chi_Minh");
$refer = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
$domain = parse_url(get_bloginfo('url'), PHP_URL_HOST);

get_header();

$diem_di = $_POST['diem-di'];
$diem_den = $_POST['diem-den'];
$date_di = $_POST['date_di'];
$date_ve = $_POST['date_ve'];
$direction = $_POST['journey'];

$adult = $_POST['num-adault-xs'];
$child = $_POST['num-child-xs'];
$baby = $_POST['num-baby-xs'];
$direction = $_POST['journey'];
$customerInfo = array(
  "adultNo" => $adult,
  "childNo" => $child,
  "babyNo" => $baby
);

function getName($code)
{
  $name = $GLOBALS['CODECITY'][$code];
  return $name;
}

function _getName($code)
{
	$name = $GLOBALS['_CODECITY'][$code];
  	return $name;
}


function formatDate($date)
{
	$var = str_replace('/', '-', $date);
	$result = date('d-m-Y', strtotime($var));
  	return $result;
}

$depDate = formatDate($date_di);
$retDate = formatDate($date_ve);

$dep = _getName($diem_di);
$res = _getName($diem_den);

$data = get_flight_from_ws("VN", $dep, $res, $depDate, $retDate, $direction);
$data2 = get_flight_from_ws("VJ", $dep, $res, $depDate, $retDate, $direction);
$data3 = get_flight_from_ws("QH", $dep, $res, $depDate, $retDate, $direction);
$data4 = get_flight_from_ws("BL", $dep, $res, $depDate, $retDate, $direction);

// echo $data;
// echo $data2;
// echo $data3;
// echo $data4;

$pdata = parseData($data);
$pdata2 = parseData($data2);
$pdata3 = parseData($data3);
$pdata4 = parseData($data4);

// data Chuyến đi 
if ($direction == 0) {
  $nes = $pdata['data']['dep'];
  $nes2 = $pdata2['data']['dep'];
  $nes3 = $pdata3['data']['dep'];
  $nes4 = $pdata4['data']['dep'];

  // data Chuyến về
  $retData = $pdata['data']['ret'];
  $retData2 = $pdata2['data']['ret'];
  $retData3 = $pdata3['data']['ret'];
  $retData4 = $pdata4['data']['ret'];

} else {
  $nes = $pdata['data'];
  $nes2 = $pdata2['data'];
  $nes3 = $pdata3['data'];
  $nes4 = $pdata4['data'];
}

function testForeach($array)
{
  foreach ($array['data'] as $value) {
    var_dump($value);
  }
}

function printNotFound()
{
  $html = "<tr><td colspan='5'><trong>Không tìm thấy chuyến bay nào</trong></td></tr>";
  return $html;
}

function printResult($arr, $cusInfo)
{
  foreach ($arr as $resultNum) {
    $money = displayVNMoney($resultNum['price']);
    echo "<tr>

    		<td style='text-align:left'>".displayAirlineLogo($resultNum['airlinecode'])."<span class='flight-text d-none d-lg-inline'>" . $resultNum['flightno'] . "</span></td>
        <td hidden id='logo_flight".$resultNum['flightno']."'>".displayAirlineLogo($resultNum['airlinecode'])."</td>
        <td hidden id='airline".$resultNum['filghtno']."'>".$resultNum['airline']."</td>
        <td hidden id='airlinecode".$resultNum['flightno']."'>".$resultNum['airlinecode']."</td>
    		<td name='deptime' style='text-align:left'>" . $resultNum['deptime'] . "(" . $resultNum['dep'] . ")</td>
        <td hidden id='dep".$resultNum['flightno']."'>".$resultNum['dep']."</td>
        <td hidden id='deptime".$resultNum['flightno']."'>".$resultNum['deptime']."</td>

    		<td style='text-align:left'>" . $resultNum['arvtime'] . "(" . $resultNum['arv'] . ")</td>
        <td hidden id='arv".$resultNum['flightno']."'>".$resultNum['arv']."</td>
        <td hidden id='arvtime".$resultNum['flightno']."'>".$resultNum['arvtime']."</td>

    		<td style='text-align:left'>" . $money . "</td>
        <td hidden id='money".$resultNum['flightno']."'>".$resultNum['price']."</td>

        <td hidden id='book".$resultNum['flightno']."'>".$resultNum['flightno']."</td>

        <td hidden id='from_place".$resultNum['flightno']."'>".getValueFromGlobal($resultNum['dep'], 'CODECITY')."</td>
        <td hidden id='to_place".$resultNum['flightno']."'>".getValueFromGlobal($resultNum['arv'], 'CODECITY')."</td>
        <td hidden id='date_di'>".$_POST['date_di']."</td>
        <td hidden id='date_ve'>".$_POST['date_ve']."</td>
        <td hidden id='loai_ve".$resultNum['flightno']."'>".$resultNum['class']."</td>

        <td hidden id='adult".$resultNum['flightno']."'>".$_POST['num-adault-xs']."</td>
        <td hidden id='child".$resultNum['flightno']."'>".$_POST['num-child-xs']."</td>
        <td hidden id='baby".$resultNum['flightno']."'>".$_POST['num-baby-xs']."</td>
        <td style='text-align:left'>
    			<button type='button' id='".$resultNum['flightno']."' class='btn btn-primary' onclick='Detail_Flight(this.id)' data-toggle='modal' data-target='#myModal'><i class='fas fa-plus-circle'></i></button>";
            if (_getname($_POST['diem-di']) == $resultNum['dep']){
                echo "<input type='submit' id='".$resultNum['flightno']."' name='flightno' value='CHỌN' onclick='Book_From(this.id)'/>";
            } else {
              echo "<input type='submit' id='".$resultNum['flightno']."' name='flightno' value='CHỌN' onclick='Book_To(this.id)'/>";
            }
    		echo "</td>
        </tr>";
	}
  if ($_POST['journey'] == 0){
          echo "<td hidden id='direction'>0</td>";
        } else {
           echo "<td hidden id='direction'>1</td>";
        }
}
?>


<div class="container">
    <div class="row">
      <div class='col-md-8' id='result'>
        <div id='result_di'></div>
        <div id='result_ve'></div>
        <div id='thongtinhanhkhach'></div>
        <button type='button' class='btn btn-success' onclick='Book()'>Đặt vé</button>
      </div>
      <div class="col-md-8" data-spy="scroll">
            <div id='chuyendi'>
               <h4 class="mt-3" style="text-align:center">THÔNG TIN CHUYẾN BAY ĐI</h4>
                <table class="table table-hover table-striped mt-2" style="text-align:center">
                  <thead class="thead-dark">
                    <tr>
                      <th style="width:20%">Chuyến bay</th>
                      <th style="width:20%">Khởi hành</th>
                      <th style="width:20%">Đến</th>
                      <th style="width:20%">Giá vé</th>
                      <th style="width:20%">Xem</th>
                    </tr>
                  </thead>
                  <tbody id="flight-result">
                    <?php
                      if ($nes == NULL && $nes2 == NULL && $nes3 == NULL && $nes4 == NULL) {
                        echo printNotFound();
                      } else {
                        if ($nes != NULL) {
                          printResult($nes, $customerInfo);
                        }
                        if ($nes2 != NULL) {
                          printResult($nes2, $customerInfo);
                        }
                        if ($nes3 != NULL) {
                          printResult($nes3, $customerInfo);
                        }
                        if ($nes4 != NULL) {
                          printResult($nes4, $customerInfo);
                        }
                      }
                      ?>
                  </tbody>
                </table>
              </div>
              <?php 
          if ($_POST['journey'] == 0){ ?>
            <div id='chuyenve'>
              <h4 class="mt-3" style="text-align:center">THÔNG TIN CHUYẾN BAY VỀ</h4>
              <table class="table table-hover table-striped mt-2" style="text-align:center">
                  <thead class="thead-dark">
                    <tr>
                      <th style="width:20%">Chuyến bay</th>
                      <th style="width:20%">Khởi hành</th>
                      <th style="width:20%">Đến</th>
                      <th style="width:20%">Giá vé</th>
                      <th style="width:20%">Xem</th>
                    </tr>
                  </thead>
                  <tbody id="flight-result">
                    <?php
                      if ($retData == NULL && $retData2 == NULL && $retData3 == NULL && $retData4 == NULL) {
                        echo printNotFound();
                      } else {
                        if ($retData != NULL) {
                          printResult($retData, $customerInfo);
                        }
                        if ($retData2 != NULL) {
                          printResult($retData2, $customerInfo);
                        }
                        if ($retData3 != NULL) {
                          printResult($retData3, $customerInfo);
                        }
                        if ($retData4 != NULL) {
                          printResult($retData4, $customerInfo);
                        }
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            <?php } ?>
         </div>
      	
      <div class="col-md-4" id="info_search" height=40rem>
      	<h4> Thông tin tìm kiếm </h4>
      	<ul>
      		<li>
      			<label>Nơi đi:</label>
  				<input type="text" name="noi-di" value="<?php echo $_POST['diem-di'] ?>" readonly/>
      		</li>
      		<li>
      			<label>Nơi đi:</label>
  				<input type="text" name="noi-den" value="<?php echo $_POST['diem-den'] ?>" readonly/>
      		</li>
      	</ul>
      	<ul>
      		<li>
      			<label>Ngày đi:</label>
  				<input type="text" name="ngay-di" value="<?php echo $_POST['date_di'] ?>" readonly/>
      		</li>
          <?php
            if ($direction == 0){
                echo "<li>
                  <label>Ngày đến:</label>
                <input type='text' name='ngay-den' value='".$_POST['date_ve']."' readonly/>
                </li>";
            }
          ?>
      	</ul>
      	<ul>
      		<li> 
      			<label>Số lượng hành khách</label>
    				<p> Người lớn: <?php echo $_POST['num-adault-xs'] ?> </p>
    				<p> Trẻ em: <?php echo $_POST['num-child-xs'] ?> </p>
    				<p> Em bé: <?php echo $_POST['num-baby-xs'] ?> </p>
      		</li>
      	</ul>
      </div>

      

      <!-- Modal Detail -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <!-- <h4 class="modal-title"></h4> -->
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
      </div>

      <script type="text/javascript">
        function Detail_Flight(clickId){
            // var id = document.getElementById('book' + clickId).innerHTML;
            // alert(id);
            $.ajax({ // Hàm ajax
               type : "post", //Phương thức truyền post hoặc get
               dataType : "html", //Dạng dữ liệu trả về xml, json, script, or html
              url : '<?php echo admin_url('admin-ajax.php');?>',// Nơi xử lý dữ liệu
               data: {
                    'action' : "detail",
                    'id' :document.getElementById('book' + clickId).innerHTML,
                    'from' : document.getElementById('from_place' + clickId).innerHTML,
                    'to' : document.getElementById('to_place' + clickId).innerHTML,
                    'dep' : document.getElementById('dep' + clickId).innerHTML,
                    'arv' : document.getElementById('arv' + clickId).innerHTML,
                    'arvtime' : document.getElementById('arvtime' + clickId).innerHTML,
                    'deptime' : document.getElementById('deptime' + clickId).innerHTML,
                    'date_di' : document.getElementById('date_di').innerHTML,
                    'date_ve' : document.getElementById('date_ve').innerHTML,
                    'airline' : document.getElementById('airline').innerHMTL,
                    'loaive' : document.getElementById('loai_ve' + clickId).innerHTML,
                    'money' : document.getElementById('money' + clickId).innerHTML,
                    'adult' : document.getElementById('adult' + clickId).innerHTML,
                    'child' : document.getElementById('child' + clickId).innerHTML,
                    'baby' : document.getElementById('baby' + clickId).innerHTML,
                    'airlinecode' : document.getElementById('airlinecode' + clickId).innerHTML,
                    'direction' : document.getElementById('direction').innerHTML//Tên action, dữ liệu gởi lên cho server
               },
               beforeSend: function(){
                    // Có thể thực hiện công việc load hình ảnh quay quay trước khi đổ dữ liệu ra
               },
               success: function(response) {
                   $('.modal-body').html(response);
                    // setTimeout(function(){
                    //     location.reload();
                    // }, 2000); 
               },
               error: function( jqXHR, textStatus, errorThrown ){
                    //Làm gì đó khi có lỗi xảy ra
                    console.log( 'The following error occured: ' + textStatus, errorThrown );
               }
          });
        }

        function Book_From(clickId){
            $.ajax({ // Hàm ajax
               type : "post", //Phương thức truyền post hoặc get
               dataType : "html", //Dạng dữ liệu trả về xml, json, script, or html
              url : '<?php echo admin_url('admin-ajax.php');?>',// Nơi xử lý dữ liệu
               data: {
                    'action' : "book1",
                    'id' :document.getElementById('book' + clickId).innerHTML,
                    'from' : document.getElementById('from_place' + clickId).innerHTML,
                    'to' : document.getElementById('to_place' + clickId).innerHTML,
                    'dep' : document.getElementById('dep' + clickId).innerHTML,
                    'arv' : document.getElementById('arv' + clickId).innerHTML,
                    'arvtime' : document.getElementById('arvtime' + clickId).innerHTML,
                    'deptime' : document.getElementById('deptime' + clickId).innerHTML,
                    'date_di' : document.getElementById('date_di').innerHTML,
                    'date_ve' : document.getElementById('date_ve').innerHTML,
                    'airline' : document.getElementById('airline').innerHMTL,
                    'loaive' : document.getElementById('loai_ve' + clickId).innerHTML,
                    'money' : document.getElementById('money' + clickId).innerHTML,
                    'adult' : document.getElementById('adult' + clickId).innerHTML,
                    'child' : document.getElementById('child' + clickId).innerHTML,
                    'baby' : document.getElementById('baby' + clickId).innerHTML,
                    'airlinecode' : document.getElementById('airlinecode' + clickId).innerHTML,
                    'direction' : document.getElementById('direction').innerHTML//Tên action, dữ liệu gởi lên cho server
               },
               beforeSend: function(){
                   $("#chuyendi").slideUp("slow");
               },
               success: function(response) {
                   $('#result_di').html(response);
                    // setTimeout(function(){
                    //     location.reload();
                    // }, 2000); 
               },
               error: function( jqXHR, textStatus, errorThrown ){
                    //Làm gì đó khi có lỗi xảy ra
                    console.log( 'The following error occured: ' + textStatus, errorThrown );
               }
          });
        }

        function Book_To(clickId){
            $.ajax({ // Hàm ajax
               type : "post", //Phương thức truyền post hoặc get
               dataType : "html", //Dạng dữ liệu trả về xml, json, script, or html
              url : '<?php echo admin_url('admin-ajax.php');?>',// Nơi xử lý dữ liệu
               data: {
                    'action' : "book2",
                    'id' :document.getElementById('book' + clickId).innerHTML,
                    'from' : document.getElementById('from_place' + clickId).innerHTML,
                    'to' : document.getElementById('to_place' + clickId).innerHTML,
                    'dep' : document.getElementById('dep' + clickId).innerHTML,
                    'arv' : document.getElementById('arv' + clickId).innerHTML,
                    'arvtime' : document.getElementById('arvtime' + clickId).innerHTML,
                    'deptime' : document.getElementById('deptime' + clickId).innerHTML,
                    'date_di' : document.getElementById('date_di').innerHTML,
                    'date_ve' : document.getElementById('date_ve').innerHTML,
                    'airline' : document.getElementById('airline').innerHMTL,
                    'loaive' : document.getElementById('loai_ve' + clickId).innerHTML,
                    'money' : document.getElementById('money' + clickId).innerHTML,
                    'adult' : document.getElementById('adult' + clickId).innerHTML,
                    'child' : document.getElementById('child' + clickId).innerHTML,
                    'baby' : document.getElementById('baby' + clickId).innerHTML,
                    'airlinecode' : document.getElementById('airlinecode' + clickId).innerHTML,
                    'direction' : document.getElementById('direction').innerHTML//Tên action, dữ liệu gởi lên cho server
               },
               beforeSend: function(){
                   $("#chuyenve").slideUp("slow");
               },
               success: function(response) {
                   $('#result_ve').html(response); 
               },
               error: function( jqXHR, textStatus, errorThrown ){
                    //Làm gì đó khi có lỗi xảy ra
                    console.log( 'The following error occured: ' + textStatus, errorThrown );
               }
          });
        }

      </script>

   
