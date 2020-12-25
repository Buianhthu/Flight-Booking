<?php


    function getRandomUserAge(){
      $userAgent = array(
        "Mozilla/5.0 CK={} (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko",
        "Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148",
        "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36",
        "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36",
        "Mozilla/5.0 (iPad; CPU OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148"
      );

      $randomNum = rand(0, count($userAgent)-1);
      return $userAgent[$randomNum];

    }
    
    function get_flight_from_ws($airline, $dep, $des, $depdate, $retdate, $direction){
  
      $timeout = 30;
      $xApiKey = '61c64e6ec2d11d33bff0bfcae7547d750d1cf2a5'; 
      if($airline == "VN" || $airline == "QH" || $airline == 'BL'){
        $urlArr = array(
                'http://fs2.vietjet.net',
                'http://fs3.vietjet.net',
                'http://fs4.vietjet.net',
                'http://fs5.vietjet.net',
                'http://fs6.vietjet.net',
                'http://fs7.vietjet.net',
                'http://fs8.vietjet.net',
                'http://fs9.vietjet.net',
                'http://fs10.vietjet.net',
                'http://fs11.vietjet.net',
                'http://fs12.vietjet.net',
                'http://fs13.vietjet.net',
                'http://fs14.vietjet.net',
                'http://fs15.vietjet.net',
                'http://fs16.vietjet.net',
                'http://fs17.vietjet.net',
                'http://fs18.vietjet.net',
                'http://fs19.vietjet.net',
                'http://fs20.vietjet.net',
                'http://fs21.vietjet.net',
                'http://fs22.vietjet.net',
                'http://fs23.vietjet.net',
                'http://fs24.vietjet.net',
                'http://fs25.vietjet.net',
                'http://fs26.vietjet.net',
                'http://fs27.vietjet.net',
                'http://fs28.vietjet.net',
                'http://fs29.vietjet.net',
                'http://fs30.vietjet.net'
        );
      }
      else{
        $urlArr = array("http://fs.vietjet.net");
        $timeout = 35;
      }
      $url = $urlArr[array_rand($urlArr)];

      $array = array(
        CURLOPT_URL => $url.'/index.php/apiv1/api/flight_search/format/json/airline/'.$airline. '/depcode/'.$dep.'/descode/'.$des.'/departdate/'.$depdate.'/returndate/'.$retdate.'/direction/'.$direction.'?X-API-KEY='.$xApiKey.'',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => $timeout,
        CURLOPT_CONNECTTIMEOUT => $timeout,
        CURLOPT_USERAGENT => getRandomUserAge(),
        CURLOPT_SSL_VERIFYPEER => false
      );
      $curl = curl_init();
      curl_setopt_array($curl, $array);
      $resp = curl_exec($curl);
      curl_close($curl);
      return ($resp);
    }

?>