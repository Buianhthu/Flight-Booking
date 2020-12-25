//Check mail
$(document).ready(function(){
	$("#contact_email").keyup(function(){
	    var email = $(this).val();
	    // var x = email.substr(1,1);
	    // console.log(x);
	    var message = "";
	    if(email.length == 0)
	      message = "";
	    else if(isEmail(email) == false){
	      message = "*Email không hợp lệ !!!";
	    }
	  	document.getElementById('mess-email').innerHTML = message;
	})

	function isEmail(str) {
		var check_cham = 0;
		var i;
	  // const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	  const re = /^[a-zA-Z]+@[a-zA-Z]+(?:\.[a-zA-Z]+)*$/;
	  const x =  /^[a-zA-Z]+[0-9-]+@[a-zA-Z]+(?:\.[a-zA-Z]+)*$/;
	  if (re.test(String(str).toLowerCase()) || x.test(String(str).toLowerCase())){
	  	for (i=0; i<str.length; i++){
		    if (str[i] == '.'){
		    	check_cham++;
		    }

		}
		if (check_cham < 3){
		   return true;
		}
	  }
	  return false;
	}
})
	// window.onload = function()
	// 	{
	// 	    var str = 'abcdefghij';
	// 	    var i;
	// 	    var check_cham = 0;
	// 	    
		    
	// 	};

