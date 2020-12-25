$(document).ready(function(){
    $('#call-ajax').click(function(){ // Khi click vào button thì sẽ gọi hàm ajax
        $.ajax({ // Hàm ajax
           type : "post", //Phương thức truyền post hoặc get
           dataType : "html", //Dạng dữ liệu trả về xml, json, script, or html
           url : '&lt;?php echo admin_url('admin-ajax.php');?&gt;', // Nơi xử lý dữ liệu
           data : {
                action: "random", //Tên action, dữ liệu gởi lên cho server
           },
           beforeSend: function(){
                // Có thể thực hiện công việc load hình ảnh quay quay trước khi đổ dữ liệu ra
           },
           success: function(response) {
                //Làm gì đó khi dữ liệu đã được xử lý
                $('.display-post').html(response); // Đổ dữ liệu trả về vào thẻ &lt;div class="display-post"&gt;&lt;/div&gt;
           },
           error: function( jqXHR, textStatus, errorThrown ){
                //Làm gì đó khi có lỗi xảy ra
                console.log( 'The following error occured: ' + textStatus, errorThrown );
           }
       });
    });

});