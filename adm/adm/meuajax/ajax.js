$(document).ready(function() {
    $('form').submit(function(event) {
       
        var formData = {
            'email' : $('input[name=email]').val(),
            'password' : $('input[name=password]').val(),
            'passchk' : $('input[name=passchk]').val(),
            'name' : $('input[name=name]').val()
        };
        
        $.ajax({
            type:'POST',
            url:'process.php',
            data:formData,
            dataType:'json',
            encode:true
        })
        
            .done(function(data) {
                
                if(data.success) {
                    $('form').append('<div class="alert alert-success">' + data + '</div>');

                }
            });
            event.preventDefault();
    });
});
