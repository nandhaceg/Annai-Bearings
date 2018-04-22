$(document).ready(function () { $('html').hide().fadeIn(2500).delay(6000)});

jQuery(document).ready(function() {

    $('#sbtn').attr('disabled',true);
    /*
        Form validation
    */
    $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
        $('#sbtn').removeAttr('disabled');
    });
    
    $('.login-form').on('submit', function(e) { 	
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


function validate(){
    var username = document.getElementById("form-username").value;
    var password = document.getElementById("form-password").value;
    if(username == "sree" && password == "sree"){
        window.location="home.html";
        return false;
    }
    else{
        $(this).addClass('input-error');
        console.log("kumar");     
    }
}