$(document).ready(function() {
    $('#cat-form').submit(function(event) {
       
        var formData = {
            'cat-name' : $('input[name=cat-name]').val()
        };
        
        $.ajax({
            type:'POST',
            url:'cat-process.php',
            data:formData,
            dataType:'json',
            encode:true
        })
        
            .done(function(data) {
                
                if(data.success) {
                    $('form').append('<div class="alert alert-success">' + data.message + '</div>');

                }
            });
            event.preventDefault();
    });
});
