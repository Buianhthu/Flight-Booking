<?php
define('THEME_URL',  GET_stylesheet_directory());
/*Khai bao chuc nang trong theme */
if (!function_exists('theme_vmb_setup')){
	function theme_vmb_setup(){
		/*Tu dong them link RSS len head()*/
		add_theme_support('actomatic-feed-links');
		add_theme_support( 'post-thumbnail' );
		/* Post Format */
		add_theme_support( 'post-formats',
		    array(
		       'image',
		       'video',
		       'gallery',
		       'quote',
		       'link'
		    )
		 );

		/* Them title tag */
		add_theme_support ('title-tag');	

		/* Them custom background */
		add_theme_support ('custom-background');
	}

		
}
add_action('init', 'theme_vmb_setup');

/* Add CSS */
function enqueue_styles() {
	wp_enqueue_style( 'bootstrap-css', "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css", array());
	wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
	// wp_enqueue_style('datapicker-css', "http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css");
	wp_enqueue_style( 'mystyle', get_template_directory_uri() . '/css/my_style.css', array());
	wp_enqueue_style( 'styles-css', get_template_directory_uri() . '/css/styles.css', array());
	wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/style.css', array(), '1.2.13');

	wp_enqueue_style( 'jquery-css', "http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css", array());
	wp_enqueue_style( 'bootstrap-css1', "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css", array());
	// wp_enqueue_style( 'bootstrap-css2', "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css", array());	
 }
 add_action( 'wp_enqueue_scripts', 'enqueue_styles', 0);

/* Add JS */
add_action('wp_enqueue_scripts', 'enqueue_script', 1);
function enqueue_script(){
       	
	wp_enqueue_script('jquery-min-js', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js", array('jquery'), true);
	// wp_enqueue_script('bootstrap-bundle-min-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js", array('jquery'), true);
	// wp_enqueue_script('jquery-easing-min-js', "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js", array('jquery'), true);
	wp_enqueue_script('poper-min-js', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js", time(), true);
	wp_enqueue_script('bootstrap-min-js', "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", time(), true); 
	wp_enqueue_script('font-awesome', "https://kit.fontawesome.com/a076d05399.js", time(), true);
	wp_enqueue_script('my-script.js', get_template_directory_uri() . '/js/my-script.js', array(),'1.1.1');
	wp_enqueue_script('tim-chuyen-bay.js', get_template_directory_uri() . '/js/tim-chuyen-bay.js', array(),'1.1.1');
	wp_enqueue_script('thong-tin-hanh-khach.js', get_template_directory_uri() . '/js/thong-tin-hanh-khach.js', array(),'1.1.1');
	// wp_enqueue_script('jquery_date2', "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js", array('jquery'), true);
	wp_enqueue_script('jquery_date4', "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js", array('jquery'),true);
	// wp_enqueue_script('jquery_date5', "http://code.jquery.com/jquery-1.9.1.js", array('jquery'),true);
	wp_enqueue_script('jquery_date6', "http://code.jquery.com/ui/1.10.3/jquery-ui.js", array('jquery'),true);

	$my_array = array(
		'site_home' => get_template_directory_uri()
	);
	wp_localize_script( 'my_ajax_url', 'myvar', $my_array);
}


add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size('smallThumbnail', 250, 250);
	add_image_size('mediumThumbnail', 300, 300);
	add_image_size('larPOSThumbnail', 640, 640);
}

add_action('wp_ajax_detail', 'Modal_Detail_Flight');
add_action('wp_ajax_nopriv_detail', 'Modal_Detail_Flight');
function Modal_Detail_Flight(){
	$html = '';
    $html.= "
        <table class='table'>
            <tbody style='text-align:center'>
                  		<tr>
                  			<td> Ngày đi: ".$_POST['date_di']."</td>";
                  			if ($_POST['direction'] == 0){
                  				$html.="<td> Ngày về: ".$_POST['date_ve']."</td>";
                  			}
                  		$html.="</tr>
                      <tr>
                          <td>Khởi hành: <b class='text-danger'>" . $_POST['from'] . "</b></td>
                          <td>Điểm đến: <b class='text-danger'>" . $_POST['to'] . "</b></td>
                      </tr>
                      <tr>
                          <td>Sân bay:".POSTAirPort($_POST['dep'])."</td>
                          <td>Sân bay:".POSTAirPort($_POST['arv'])."</td>
                      </tr>
                      <tr>
                          <td>Thời gian: <b class='text-danger'>" . $_POST['deptime'] . "</td>
                          <td>Thời gian: <b class='text-danger'>" . $_POST['arvtime'] . "</td>   
                      </tr>
                      <tr>
                          <td>Chuyến bay <b class='text-danger'>" . $_POST['airline'] . "</b> (" . $_POST['id'] . ")</td>
                          <td>Loại vé: <b class='text-danger'>" . $_POST['loaive'] . "</b> </td>
                      </tr>
                  </tbody>
              </table>
              <!-- End flight-info table -->
              <table class='ticket-info table'>";
          
    $html.= "<tr>
	          <td>Hành khách</td>
	          <td>Số lượng vé</td>
	          <td>Giá vé</td>
	          <td>Thuế & phí</td>
	          <td>Tổng giá</td>
      		</tr>";
      		$adult = $_POST['adult'];
		   	$money_adult = $_POST['money'];
		    $thuephi_adult = getTaxFee_adult($_POST['money'],$_POST['airlinecode']);
		    $total_adult = $adult * ($money_adult + $thuephi_adult);
			$html.="<tr>
		      <td><strong>Người lớn:</td></strong>
		      <td>".($adult)."</strong></td>
		      <td style='text-align:right'>".displayVNMoney($money_adult)."VND</td>
		      <td style='text-align:right'>".displayVNMoney($thuephi_adult)."VND</td>
		      <td style='text-align:right'>".displayVNMoney($total_adult)."VND</strong></td>
		   	</tr>";
		   	// echo $_POST['child'];
		    if ($_POST['child'] > 0){
		    	$child = $_POST['child'];
		    	$money_child = $_POST['money'];
		    	$thuephi_child = getTaxFee_child($_POST['money'],$_POST['airlinecode']);
		    	$total_child = $child * ($money_child + $thuephi_child);
		        $html.="<tr>
			            <td><strong>Trẻ em:</strong></td>
			            <td><strong>".($child)."</strong></td>
			            <td style='text-align:right'>".displayVNMoney($money_child)."VND</td>
			            <td style='text-align:right'>".displayVNMoney($thuephi_child)."VND</td>
			            <td style='text-align:right'>".displayVNMoney($total_child)."VND</td>
		            	</tr>";
		        }
		    if ($_POST['baby'] > 0){
		    	$baby = $_POST['baby'];
		    	$thuephi_baby = getTaxFee_infant($_POST['money'],$_POST['airlinecode']);
		    	$total_baby = $baby * $thuephi_baby;
            	$html.= "<tr>
	            		<td><strong>Em bé:</strong></td>
	            		<td><strong>".$_POST['baby']."</strong></td>
	           	 		<td style='text-align:right'>0</td>
	           	 		<td style='text-align:right'>".displayVNMoney($thuephi_baby)."VND</td>
	            		<td style='text-align:right'>".displayVNMoney($total_baby)."VND</td>
	            		</tr>";
        		}
        		$totalAll = $total_adult + $total_child + $total_baby;
        		$html .= ' </table>
                <div class="">
                  <h4 class="total-cost" style="text-align:right">Tổng cộng: <b class="text-success">' . displayVNMoney($totalAll) . '</b>VND</h4>
                </div>';

      $html.="</table>";  
    	echo $html;     
	}

//Đặt vé lượt đi
add_action('wp_ajax_book1', 'Book_Flight_From');
add_action('wp_ajax_nopriv_book1', 'Book_Flight_From');
function Book_Flight_From(){
	$html.="<h4 class='mt-3' style='text-align:center'>CHUYẾN BAY BẠN ĐÃ LỰA CHỌN</h4>
            <table class='table table-hover table-striped mt-2' style='text-align:center'>
            <thead class='thead-dark'>
            <tr>
            	<th style='width:20%'>Chuyến bay</th>
                <th style='width:20%'>Khởi hành</th>
                <th style='width:20%'>Đến</th>
                <th style='width:30%'>Giá vé</th>
                <th style='width:10%'></th>
            </tr>
            </thead>
            <tbody>
            <tr>
				<td id='number_flight_from' style='text-align:left'>".displayAirlineLogo($_POST['airlinecode'])."<span class='flight-text d-none d-lg-inline'>".$_POST['id']."</span></td>
				<td hidden id='id_from'>".$_POST['id']."</td>
			    <td id='deptime_from' style='text-align:left' name='deptime'>" . $_POST['deptime'] . "(" . $_POST['dep'] . ")</td>
			    <td hidden id='from1'>".$_POST['dep']."</td>
			    <td hidden id='arv1'>".$_POST['arv']."</td>
			    <td id='arvtime_from' style='text-align:left' name='arvtime'>" . $_POST['arvtime'] . "(" . $_POST['arv'] . ")</td>
			    <td id='money_from' style='text-align:left'>" . displayVNMoney($_POST['money']) . "</td>
			    <td hidden id='loaive_from'>".$_POST['loaive']."</td>
			    <td hidden id='khuhoi'>".$_POST['direction']."</td>
			    <td hidden id='adult'>".$_POST['adult']."</td>
			    <td hidden id='child'>".$_POST['child']."</td>
			    <td hidden id='baby'>".$_POST['baby']."</td>
			    <td hidden id='from_date_di'>".$_POST['date_di']."</td>
			    <td hidden id='from_date_ve'>".$_POST['date_ve']."</td>
			    <td> 
			    	<button type='button' class='btn btn-primary' onclick='Chonlai1()'>Chọn lại</button>
			    </td>
			</tr>";

	echo $html;
	echo $_POST['adult'];
}

//Đặt vé lượt về. 
add_action('wp_ajax_book2', 'Book_Flight_To');
add_action('wp_ajax_nopriv_book2', 'Book_Flight_To');
function Book_Flight_To(){
    $html.="<table class='table table-hover table-striped mt-2' style='text-align:center'>
            <thead class='thead-dark'>
            <tr>
            	<th style='width:30%'>Chuyến bay</th>
                <th style='width:20%'>Khởi hành</th>
                <th style='width:20%'>Đến</th>
                <th style='width:30%'>Giá vé</th>
                <th style='width:10%'></th>
            </tr>
            </thead>
            <tbody>
            <tr>
				<td id='number_flight_to' style='text-align:left'>".displayAirlineLogo($_POST['airlinecode'])."<span class='flight-text d-none d-lg-inline'>".$_POST['id']."</span></td>
				<td hidden id='id_to'>".$_POST['id']."</td>
			    <td id='deptime_to' style='text-align:left' name='deptime'>" . $_POST['deptime'] . "(" . $_POST['dep'] . ")</td>
			    <td id='arvtime_to' style='text-align:left' name='arvtime'>" . $_POST['arvtime'] . "(" . $_POST['arv'] . ")</td>
			    <td id='money_to' style='text-align:left'>" . displayVNMoney($_POST['money']) . "</td>
			    <td hidden id='from2'>".$_POST['dep']."</td>;
			    <td hidden id='arv2'>".$_POST['arv']."</td>;
			    <td hidden id='loaive_to'>".$_POST['loaive']."</td>
			    <td hidden id='adult'>".$_POST['adult']."</td>
			    <td hidden id='child'>".$_POST['child']."</td>
			    <td hidden id='baby'>".$_POST['baby']."</td>
			    <td hidden id='to_date_di'>".$_POST['date_di']."</td>
			    <td hidden id='to_date_ve'>".$_POST['date_ve']."</td>
			    <td> 
			    	<button type='button' class='btn btn-primary' onclick='Chonlai2()'>Chọn lại</button>
			    </td>
			</tr>";
	echo $html;
	echo $_POST['adult'];
}


/***** AN CAO  */
// function _page($var){
// 	$ext = "";
//     switch($var):
//         case "home":
//         return POST_bloginfo('url').$ext;
//         case "flightresult":
//             return POST_bloginfo('url')."/tim-chuyen-bay".$ext;
//         case "passenger":
//             return POST_bloginfo('url')."/thong-tin-hanh-khach".$ext;
//         case "payment":
//             return POST_bloginfo('url')."/thong-tin-thanh-toan".$ext;
//         case "complete":
//             return POST_bloginfo('url')."/hoan-tat-don-hang".$ext;
//         case "flightinfo":
//             return POST_bloginfo('url')."/POST-flight-info".$ext;
//         case "flightdetail":
//             return POST_bloginfo('url')."/POST-flight-detail".$ext;
//         case "paymentinfo":
//             return POST_bloginfo("url")."/huong-dan-thanh-toan".$ext;
// 		case "bookguideinfo":
//             return POST_bloginfo("url")."/huong-dan-dat-ve".$ext;
//         case "vnalink":
//             return POST_bloginfo("url")."/resultvietnamairlines".$ext;
//         case "vjlink":
//             return POST_bloginfo("url")."/resultvietjet".$ext;
//         case "jslink":
//             return POST_bloginfo("url")."/resultjetstar".$ext;
//         case "qhlink":
//             return POST_bloginfo("url")."/resultbambooairways".$ext;
// 		case "sabrelink":
//             return POST_bloginfo("url")."/resultsabre".$ext;
// 		case "airportlink":
//             return POST_bloginfo("url")."/POST-airportcode".$ext;
// 		case "checkcaptcha":
//             return POST_bloginfo("url")."/check-captcha".$ext;
// 		case "hotelresult":
//             return POST_bloginfo("url")."/core/hotel-search.php";		
// 		case "hotelguest":
//             return POST_bloginfo("url")."/dat-phong";	
// 		case "hotelcomplete":
//             return POST_bloginfo("url")."/hoan-tat-dat-phong";
			
// 		case "cheapflightsearch":
//             return POST_bloginfo("url")."/ve-re-trong-thang";	
			
//     endswitch;
// }

require(TEMPLATEPATH . '/inc/cusFunction.php');
require(TEMPLATEPATH . '/inc/fl-functions.php');

?>