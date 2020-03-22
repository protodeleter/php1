$(document).ready(function(){

    $('#albums a').on('click' , function (e) {
        e.preventDefault();
        let d_id = $(this).data('id');
        $.ajax({
            url:'',
            type:'post',
            data:{ action: 'update', d_id: d_id },
            success:function(){
                // location.reload(); // reloading page
            }
        });
    });

    $("form#alb_insert").submit(function(e){
        e.preventDefault();


        $.ajax({
            url:'',
            type:'post',
            // contentType: 'application/json',
            data: $(this).serialize() + '&action=create',
            success:function(){


                // location.reload(); // reloading page
            }
        });
    });
});