$(document).ready(function() {

    // Nút khứ hồi 
    $('input:radio[name="journey"]').change(function () {
    	var checked = $(this).val();
    	var result = checked == 2 ? false : true;
    	var displayShow = checked == 2 ? '1' : '0.3';
        var displayCursor = checked == 2 ? 'auto' : 'not-allowed';
        // Khứ hồi - 2
        if ($(this).is(':checked') && $(this).val() == checked) {
            $("#date_ve").prop('disabled', result);
            $(".date-return #date_ve").css('opacity', displayShow);
            $(".date-return #date_ve").css('cursor', displayCursor);
        }
    });

    //Datetime
    $(function() {
        $('#date_di').datepicker({
           dateFormat: 'dd-mm-yy',
           changeMonth: true,
           changeYear: true,
        });

        $('#date_ve').datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
        });
    });
    //Chọn địa điểm 
    $('.go-flight ul li').click(function(){
        var from = ($(this).text());
        $('input:text[name="diem-di"]').val(from);
    });

    $('.back-flight ul li').click(function(){
        var to = ($(this).text());
        $('input:text[name="diem-den"]').val(to);
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
                $('#adults_plus').css('opacity', '0.3');
                $('#adults_plus').css('cursor', 'not-allowed');
                $('#adults_plus').prop('disabled', true);
                return;
            } else {
                ++adults;
                $('#adults').text(adults);
                ++sum;
                $('.btn-pp span').text(sum);
                $('.show').show();
            }
        }); 

        $('#adults_minus').click(function(){
            if($('#adults').text() <= 1){
                $('#adults_minus').css('opacity', '0.3');
                $('#adults_minus').css('cursor', 'not-allowed');
                $('#adults_minus').prop('disabled', true);
            } else {
                --adults;
                $('#adults').text(adults);
                --sum;
                $('.btn-pp span').text(sum);
            }
        })

        //Trẻ em
        $('#child_plus').click(function() {
            ++child;
            $('#child').text(child);
            ++sum;
            $('.btn-pp span').text(sum);
        }); 

        $('#child_minius').click(function(){
            --child;
            $('#child').text(child);
            --sum;
            $('.btn-pp span').text(sum);
        }) 

        //Baby 
        $('#baby_plus').click(function() {
            if($('#baby').text() >= $('#adults').text()){
                $('#baby_plus').css('opacity', '0.3');
                $('#baby_plus').css('cursor', 'not-allowed');
                $('#baby_plus').prop('disabled', true);
                return;
            } else {
                ++baby;
                $('#baby').text(baby);
                ++sum;
                $('.btn-pp span').text(sum);
            }
        }); 

        $('#baby_minius').click(function(){
            if($('#baby').text() < 0){
                $('#baby_minus').css('opacity', '0.3');
                $('#baby_minus').css('cursor', 'not-allowed');
                $('#baby_minus').prop('disabled', true);
            } else {
                --baby;
                $('#baby').text(baby);
                --sum;
                $('.btn-pp span').text(sum);
            }
        })

        $('.btn.btn-pp.dropdown-toggle').click(function(){
            $('.dropdown-menu').show();
        })

        $('#selected-pp').click(function(){
            var sumAdults = $('#adults').text();
            var sumChild = $('#child').text();
            var sumBaby = $('#baby').text();
            $('.dropdown-menu').hide();
            $('#num-adault-xs').val(sumAdults);
            console.log($('num-adault-xs').val());
            $('#num-child-xs').val(sumChild);
            $('#num-baby-xs').val(sumBaby);
        })
    
});



