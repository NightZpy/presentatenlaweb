$(function () {
	//$('.navbar-nav a').smoothScroll();

    $('#frmContactBuy input').tooltip();

    //setup email here
    $('#buy-send').click(function (event) {
        $(this).html($('#btnRequesting').val());
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/contactBuy',
            data: $('#frmContactBuy').serialize(),
            success: function (html) {
                if (JSON.parse(html).success == 0) {                    
                    $('#frmContactBuy > .form-group').each(function() {
                    	this.removeClass('has-error').addClass('has-success');
                    });
                    $('#error').hide();
                    //$('#success').show();
                    $(this).html($('#btnRequested').val());
                }
                else {
                        $(this).html($('#btnRequest').val());
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
                $('#error').show();
            }
        });

    });	
});


