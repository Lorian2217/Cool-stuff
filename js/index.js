(jQuery)(document).ready(function ($) {

    $(document).on('submit', '.tForm', function(e){

        $.ajax({
            url: '../php/index.php',
            method: 'POST',
            dataType: 'HTML',
            data: $(this).serialize(),
            success: function(data){
                $('.tResult').html(data);
            },
            error: function(jqXHR, data){
                console.log(jqXHR);
            }
        });

        return false;
    });
});