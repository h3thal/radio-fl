    jQuery(function($) {
    	$.mask.definitions['~'] = '[+-]';
    	$("input[type='tel']").mask("+7 (999) 999-9999", {
    		placeholder: "+7 (___) ___-____"
    	});
    	$('input[type=text]').focus(function() {
    		$(this).data('placeholder', $(this).attr('placeholder'))
    		$(this).attr('placeholder', '');
    	});
    	$('input[type=text]').blur(function() {
    		$(this).attr('placeholder', $(this).data('placeholder'));
    	});
    });
    $(function() {
    	$('#send').validate({
    		submitHandler: function(form) {
    			$(form).ajaxSubmit({
    				url: 'process.php',
    				success: function() {
    					$("#send")[0].reset();
    					$('.ofform').fadeIn('slow').append("<p class='thanks'>Спасибо, Ваше сообщение отправлено.<\/p>");
    					setTimeout(function() {
    						$('.ofform').fadeOut('slow');
    						$('p.thanks').remove();
    					}, 3000);
    				}
    			});
    		}
    	});
    });
    $('nav button').live('click', function() {
    	$('nav ul').slideToggle("slow").addClass('open');
    });
	$('nav ul.open').live('click', function() {
    	$(this).fadeOut();
    });
    $(function() {
    	$(window).scroll(function() {
    		if ($(this).scrollTop() > 700) {
    			$('#toTop').fadeIn();
    		} else {
    			$('#toTop').fadeOut();
    		}
    	});
    	$('#toTop').click(function() {
    		$('body,html').animate({
    			scrollTop: 0
    		}, 800);
    	});
    });
    $('a[href^="#"]').click(function() {
    	var el = $(this).attr('href');
    	$('body').animate({
    		scrollTop: $(el).offset().top
    	}, 1500);
    });