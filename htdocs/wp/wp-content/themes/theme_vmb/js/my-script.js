$(document).ready(function() {

    //Disable = true
    function displayHide($tag){
        $tag.css('opacity', '0.3');
        $tag.css('cursor', 'not-allowed');
        $tag.prop('disabled', true);
    }

    function displayShow($tag){
        $tag.css('opacity', '1');
        $tag.css('cursor', 'auto');
        $tag.prop('disabled', false);
    }

    // Nút khứ hồi 
    $('input:radio[name="journey"]').change(function () {
    	var checked = $(this).val();
    	var result = checked == 0 ? false : true;
    	var displayShow = checked == 0 ? '1' : '0.3';
        var displayCursor = checked == 0 ? 'auto' : 'not-allowed';
        // Khứ hồi - 2
        if ($(this).is(':checked') && $(this).val() == checked) {
            $("#date_ve").prop('disabled', result);
            $("#date_ve").css('opacity', displayShow);
            $("#date_ve").css('cursor', displayCursor);
        }
    });


    // Datepicker
        $('#date_di').datepicker({
            dateFormat: 'dd-mm-yy',
            minDate: new Date(),
            maxDate:new Date(2030, 12 - 1, 31),
            onSelect: function(){
                var day1 = $("#date_di").datepicker('getDate').getDate();                 
                var month1 = $("#date_di").datepicker('getDate').getMonth() + 1;             
                var year1 = $("#date_di").datepicker('getDate').getFullYear();
                var fullDate = day1 + "-" + month1 + "-" + year1;
                $('#date_di').val(fullDate);
            }
        });

        $('#date_ve').datepicker({
            dateFormat: 'dd-mm-yy',
            minDate: new Date(),
            maxDate:new Date(2030, 12 - 1, 31),
            onSelect: function(){
                var day1 = $("#date_ve").datepicker('getDate').getDate();                 
                var month1 = $("#date_ve").datepicker('getDate').getMonth() + 1;             
                var year1 = $("#date_ve").datepicker('getDate').getFullYear();
                var fullDate = day1 + "-" + month1 + "-" + year1;
                $('#date_ve').val(fullDate);
                var x = $('#date_ve').val();
                var y = $('#date_di').val();
                console.log(x);
                console.log(y);
                console.log(typeof x);
                var d = Date.parse('March 21, 2012');
                console.log(d);
                
            }
        });
    
    //Chọn địa điểm 
    $('input[name="diem-di"]').click(function(){
        $('.dropdown-menu-1').show();
    });
    $('.go-flight ul li').click(function(){
        var from = ($(this).text());
        $('input:text[name="diem-di"]').val(from);
    });

    $('.back-flight ul li').click(function(){
        var to = ($(this).text());
        $('input:text[name="diem-den"]').val(to);
        if(($('input:text[name="diem-di"]').val()) == ($('input:text[name="diem-den"]').val())){
            alert('Điểm đến và điểm đi không được trùng');
            $('input:text[name="diem-den"]').val('');
        }
    });


    // Số lượng hành khách 

    // if ($('.adults_plus').length > 0 || $('.child_plus').length > 0 || $('.baby-plus').length > 0){
        var sum = $('.btn-pp span').text();
        var adults =  $('#adults').text();
        var child = $('#child').text();
        var baby = $('#baby').text();

        //Người lớn
        $('#adults_plus').click(function() {
            if($('#adults').text() >= 9){
                displayHide($('#adults_plus'));
                return;
            } else {
                displayShow($('#adults_minus'));
                ++adults;
                $('#adults').text(adults);
                ++sum;
                $('.btn-pp span').text(sum);
                $('.show').show();
            }
        });

        $('#adults_minus').click(function(){
            if($('#adults').text() <= 1){
                 displayHide($('#adults_minus'));
            } else {
                displayShow($('#adults_plus'));
                --adults;
                $('#adults').text(adults);
                --sum;
                $('.btn-pp span').text(sum);
            }
        });

        //Trẻ em
        $('#child_plus').click(function() {
            displayShow($('#child_minus'));
            ++child;
            $('#child').text(child);
            ++sum;
            $('.btn-pp span').text(sum);
        });

        $('#child_minus').click(function(){
            if($('#child').text() <= 0){
                displayHide($('#child_minus'));
            } else {
                displayShow($('#child_minus'));
                --child;
                $('#child').text(child);
                --sum;
                $('.btn-pp span').text(sum);
            }
        });

        //Baby 
        $('#baby_plus').click(function() {
            if($('#baby').text() >= $('#adults').text() || $('#baby').text() >= 9){
                displayHide($('#baby_plus'));
                return;
            } else {
                displayShow($('#baby_minus'));
                ++baby;
                $('#baby').text(baby);
                ++sum;
                $('.btn-pp span').text(sum);
            }
        });

        $('#baby_minus').click(function(){
            if($('#baby').text() <= 0){
                displayHide($('#baby_minus'));
            } else {
                displayShow($('#baby_plus'));
                --baby;
                $('#baby').text(baby);
                --sum;
                $('.btn-pp span').text(sum);
            }
        });

        $('.btn.btn-pp.dropdown-toggle').click(function(){
            $('.passenger.dropdown-menu').show();
        });

        $('#selected-pp').click(function(){
            var sumAdults = $('#adults').text();
            var sumChild = $('#child').text();
            var sumBaby = $('#baby').text();
            $('.passenger.dropdown-menu').hide();
            $('#num-adault-xs').val(sumAdults);
            $('#num-child-xs').val(sumChild);
            $('#num-baby-xs').val(sumBaby);
        });

        $('select[name="dep_addbaggage[]"]').change(function(){
            var check = $(this).val();
            var checked = check.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') +'VND';
            $('#dep_pricebaggage').text(checked);
            ///////////////////////
            var format_checked = parseInt(check);
            var detail_total = parseInt($('#detail_total').val());
            var _total = detail_total + format_checked;
            var total = _total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
            $('#dep_total').text(total);
            
        })


});



