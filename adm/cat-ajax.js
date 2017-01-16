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
                    $('.cat-list-chk').prepend("<input type='checkbox' name='categories[]' form='criar-post' value='" + data.id + "'>" + $('input[name=cat-name]').val() + "</br>");

                }
            });
            event.preventDefault();
    });
});
