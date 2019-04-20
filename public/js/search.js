$(function(){
    
    $('#province').select2();
    $('#district').select2();

    $('#type').ddslick();
    $('#price').ddslick();
    $('#area').ddslick();
    $('#service').ddslick();
    $("#form-search").validate({
        rules:{
            type:{
                required:true
            }

        },
        messages:{
            type:{
                required:"Chọn loại tin cần lọc!"
            }
        },
        errorLabelContainer: '.errorTxt'
    });


    $('document').on('change','#province',function(event){
        var provinceid = $(this).val();
        console.log('aaaaa');
         url = '/province/'+ provinceid;
            
        $.ajax({
            type: 'get',
            url : url ,
            success:function(resp){
                $("#district").html(resp);

            }
        });
    });
    $(document).on('click','.button-advance-show',function(){
        $('.row-search-advance').slideToggle();
        if($(this).find('i').css('transform') =='matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)'){
            $(this).find('i').css('transform','rotate(0deg)');
        }else{
            $(this).find('i').css('transform','rotate(180deg)')
        }
        
    })
})