jQuery(document).ready(function() {
    /*
        Form validation

    */

    $('#rbtn').attr('disabled',true);

    $('.register-form input[type="text"], .register-form input[type="password"], .register-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
        $('#rbtn').removeAttr('disabled');
    });
    
    $('.register-form').on('submit', function(e) { 	
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    });
});

$('#form-cpassword').on('keyup',function(){
    if ($(this).val() == $('#form-password').val()) {
        $('#form-password').addClass('input-sucess');
        $('#form-cpassword').addClass('input-sucess');
        $('#rbtn').removeAttr('disabled');
    }
    else{
        $('#form-password').removeClass('input-sucess');
        $('#form-cpassword').removeClass('input-sucess');
        $('#form-password').addClass('input-error');
        $('#form-cpassword').addClass('input-error');
        $('#rbtn').attr('disabled',true);       
    }
});


$('#form-password').on('keyup',function(){
    if ($(this).val() == $('#form-cpassword').val()) {
        $('#form-password').addClass('input-sucess');
        $('#form-cpassword').addClass('input-sucess');
        $('#rbtn').removeAttr('disabled');
    }
    else{
        $('#form-password').removeClass('input-sucess');
        $('#form-cpassword').removeClass('input-sucess');
        $('#form-password').addClass('input-error');
        $('#form-cpassword').addClass('input-error');
        $('#rbtn').attr('disabled',true);       
    }
});

$(document).ready(function () { $('html').hide().fadeIn(2500).delay(6000)});
