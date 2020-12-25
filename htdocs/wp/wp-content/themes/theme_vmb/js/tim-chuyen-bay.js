    function Book(){
      var direction = document.getElementById('khuhoi').innerHTML;
      var a = $('#result_di').text();
      var b = $('#result_ve').text();
      if (direction == 1 && a == ''){
          alert ('Vui lòng chọn chuyến bay');
      }
      else if (direction == 0 && a == ''){
          alert ('Vui lòng chọn chuyến bay đi');
      }
      else if (direction == 0 && b == ''){
          alert ('Vui lòng chọn chuyến bay về');
      }
      else {
        var number_flight_from = document.getElementById('id_from').innerHTML;
        var deptime_from = document.getElementById('deptime_from').innerHTML;
        var arvtime_from = document.getElementById('arvtime_from').innerHTML;
        var from_from = document.getElementById('from1').innerHTML;
        var from_to = document.getElementById('arv1').innerHTML;
        var money_from = document.getElementById('money_from').innerHTML;
        var loaive_from = document.getElementById('loaive_from').innerHTML;
        var from_date_di = document.getElementById('from_date_di').innerHTML;
        var from_date_ve = document.getElementById('from_date_ve').innerHTML;
        var adult = document.getElementById('adult').innerHTML;
        var child = document.getElementById('child').innerHTML;
        var baby = document.getElementById('baby').innerHTML;
        var xhttp;
        xhttp = new XMLHttpRequest();
        if (direction == 1){
            xhttp.onreadystatechange = function(){
              if (this.readyState == 4 && this.status == 200){
                window.location.href = "http://bats-macbook-pro.local/wp/thong-tin-hanh-khach?&number_flight_from=" + number_flight_from + "&deptime_from=" 
                + deptime_from + "&arvtime_from=" + arvtime_from + "&from_from=" + from_from + "&from_to=" + from_to + "&money_from=" + money_from
                + "&loaive_from=" + loaive_from + "&adult=" + adult + "&child=" + child + "&baby=" + baby + "&from_date_di=" + from_date_di + 
                "&from_date_ve" + from_date_ve + "&direction=" + direction;
              }
            };  
            var str = "http://bats-macbook-pro.local/wp/thong-tin-hanh-khach?&number_flight_from=" + number_flight_from + "&deptime_from=" 
                + deptime_from + "&arvtime_from=" + arvtime_from + "&from_from=" + from_from + "&from_to=" + from_to + "&money_from=" + money_from
                + "&loaive_from=" + loaive_from + "&adult=" + adult + "&child=" + child + "&baby=" + baby + "&direction=" + direction;
            xhttp.open("GET", str, true);
            xhttp.send();
          }
        else {
            var number_flight_to = document.getElementById('id_to').innerHTML;
            var deptime_to = document.getElementById('deptime_to').innerHTML;
            var arvtime_to = document.getElementById('arvtime_to').innerHTML;
            var to_from = document.getElementById('from2').innerHTML;
            var to_to = document.getElementById('arv2').innerHTML;
            var money_to = document.getElementById('money_to').innerHTML;
            var loaive_to = document.getElementById('loaive_to').innerHTML;
            var to_date_di = document.getElementById('from_date_di').innerHTML;
            var to_date_ve = document.getElementById('from_date_ve').innerHTML;
            xhttp.onreadystatechange = function(){
              if (this.readyState == 4 && this.status == 200){
                window.location.href = "http://bats-macbook-pro.local/wp/thong-tin-hanh-khach ?&number_flight_from=" + number_flight_from + "number_flight_to="
                + number_flight_to + "&deptime_from=" + deptime_from + "&arvtime_from=" + arvtime_from +"&deptime_to=" + deptime_to +
                "&from_from=" + from_from + "&from_to=" + from_to + "&to_from=" + to_from + "&to_to=" + to_to + "&money_from=" + money_from + 
                "&money_to=" + money_to + "&loaive_to=" + loaive_to + "&adult=" + adult + "&child=" + child + "&baby=" + baby + "&from_date_di=" + from_date_di + 
                "&from_date_ve" + from_date_ve + "&to_date_di=" + to_date_di + "&to_date_ve" + to_date_ve + "&direction=" + direction;
              }
            };  
            var str = "http://bats-macbook-pro.local/wp/thong-tin-hanh-khach ?&number_flight_from=" + number_flight_from + "number_flight_to="
                + number_flight_to + "&deptime_from=" + deptime_from + "&arvtime_from=" + arvtime_from +"&deptime_to=" + deptime_to +
                "&from_from=" + from_from + "&from_to=" + from_to + "&to_from=" + to_from + "&to_to=" + to_to + "&money_from=" + money_from + 
                "&money_to=" + money_to + "&loaive_to=" + loaive_to + "&adult=" + adult + "&child=" + child + "&baby=" + baby + "&from_date_di=" + from_date_di + 
                "&from_date_ve" + from_date_ve + "&to_date_di=" + to_date_di + "&to_date_ve" + to_date_ve + "&direction=" + direction;
            xhttp.open("GET", str, true);
            xhttp.send();
          }
        }
      }

      //Thông tin chuyến bay. 
      
      //Dữ liệu chuyến đi (Không khứ hồi)

      //Dữ liệu chuyến về. 
      // var number_flight_to = document.getElementById('id_to').innerHTML;
      // var number_flight_from = document.getElementById('id_from').innerHTML;
      // var deptime_from = document.getElementById('deptime_from').innerHTML;
      // var deptime_to = document.getElementById('deptime_to').innerHTML;
      // var arvtime_from = document.getElementById('arvtime_from').innerHTML;
      // var arvtime_to = document.getElementById('arvtime_to').innerHTML;
      // var dep1 = document.getElementById('dep1').innerHTML;
      // var arv1 = document.getElementById('arv1').innerHTML;
      // var dep2 = document.getElementById('dep2').innerHTML;
      // var arv2 = document.getElementById('arv2').innerHTML;
      // var money_from  = document.getElementById('money_from').innerHTML;
      // var money_to = document.getElementById('money_to').innerHTML;
      // var loaive_from = document.getElementById('loaive_from').innerHTML;
      // var loaive_to = document.getElementById('loaive_to').innerHTML;
      // var adult = document.getElementById('adult').innerHTML;
      // var child = document.getElementById('child').innerHTML;
      // var baby = document.getElementById('baby').innerHTML;

      // var xhttp;
      // xhttp = new XMLHttpRequest();
      // xhttp.onreadystatechange = function(){
      //   if (this.readyState == 4 && this.status == 200){
      //     window.location.href = "http://bats-macbook-pro.local/wp/thong-tin-hanh-khach?numberflightto=" + number_flight_to + "&numberflightfrom=" + number_flight_from + "&deptimefrom=" 
      //       + deptime_from + "&deptimeto=" + deptime_to + "&arvtimefrom=" + arvtime_from + "&arvtimeto=" + arvtime_to + "&depto=" + dep1 + "&arvto=" + arv1 + "&depfrom=" + dep2 + "&arvfrom" + arv2 + "&moneyfrom=" + money_from + "&moneyto=" + money_to + "&loaivefrom=" 
      //       + loaive_from + "&loaiveto=" + loaive_to + "&adult=" + adult + "&child=" + child + "&baby=" + baby;
      //   }
      // };
      // var str = "http://bats-macbook-pro.local/wp/thong-tin-hanh-khach?numberflightto=" + number_flight_to + "&numberflightfrom=" + number_flight_from + "&deptimefrom=" 
      //       + deptime_from + "&deptimeto=" + deptime_to + "arvtimefrom=" + arvtime_from + "&arvtimeto=" + arvtime_to + "&dep1=" + dep1 + "&arv1=" + arv1 + "&dep2=" + dep2 + "&arv2" + arv2 + "&moneyfrom=" + money_from + "&moneyto=" + money_to + "&loaivefrom=" 
      //       + loaive_from + "&loaiveto=" + loaive_to + "&adult=" + adult + "&child=" + child + "&baby=" + baby;
      // xhttp.open("GET", str, true);
      // xhttp.send();
  

    function Chonlai1(){
      $('#chuyendi').show();
    }

    function Chonlai2(){
      $('#chuyenve').show();
    }


    

     // window.location.href = "http://bats-macbook-pro.local/wp/thong-tin-hanh-khach?numberflightto=" + number_flight_to + "&numberflightfrom=" + number_flight_from + "&deptimefrom=" 
     //        + deptime_from + "&deptimeto=" + deptime_to + "arvtimefrom=" + arvtime_from + "&arvtimeto=" + arvtime_to + "&moneyfrom=" + money_from + "&moneyto=" + money_to + "&loaivefrom=" 
     //        + loaive_from + "&loaiveto=" + loaive_to + "&adult=" + adult + "&child=" + child + "&baby=" + baby;