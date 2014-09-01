$(function () {
    //$('.navbar-nav a').smoothScroll();
<<<<<<< HEAD
=======

>>>>>>> 06865ab11a30ef428e6d9774afa00739d67f0798

    $('#frmContactBuy input').tooltip();

    //setup email here
    $('#frmContactBuy').submit(function (event) {        
        event.preventDefault();
        $('#buy-send').html($('#btnRequesting').val());
        $.ajax({
            type: 'POST',
            url: '/contactBuy',
            data: $('#frmContactBuy').serialize(),
            success: function (html) {
                if (JSON.parse(html).success == 0) {                    
                    $('#frmContactBuy > .form-group').each(function() {
                      $(this).removeClass('has-error').addClass('has-success');
                    });
                    $('#error').hide();                    
                    $('#buy-send').html($('#btnRequested').val());
                    //$('#buy-send').removeClass('btn-primary').addClass('btn-success');
                    $('#success').show();                    
                    $('#buy-send').html($('#btnRequest').val());
                    //$('#buy-send').removeClass('btn-success').addClass('btn-primary');
                }
                else {
                    $('#success').hide(); 
                    $('#error').show();                    
                    $('#buy-send').html($('#btnRequest').val());
                    
                    var idItems = $('#frmContactBuy').find('.form-group > .input-group > input'); 
                    var inputs = [];
                    idItems.each(function(i, item) {
                      inputs.push(item.id);
                    });                        
                    
                    $.each( JSON.parse(html)[0], function( key, value ) {
                        $.each(inputs, function(i, val) {
                          if(val == key)
                            inputs.splice(i, 1);
                        });                         
                        
                        $.each(inputs, function(i, item) {
                          $('#'+item).removeAttr('data-original-title');
                          $('#'+item).closest('.form-group').removeClass('has-error');
                        });

                        $('#'+key).attr({
                          'data-original-title': value,
                          'data-placement': 'top'
                        });
                
                        $('#'+key).closest('.form-group').addClass('has-error');                      
                      });
                      $('#error').addClass('has-error').show();   
                    }
            },
            error: function () {
                $(this).html($('#btnRequest').val());
                $('#success').hide(); 
                $('#error').show();
            }
        });
<<<<<<< HEAD

    });	
});

=======
    });	
});
>>>>>>> 06865ab11a30ef428e6d9774afa00739d67f0798
