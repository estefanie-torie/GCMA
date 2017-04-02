$(document).ready(function() {
    $('.main-nav ul li a').click(function(){
		$('.container').hide();
		
		var obj = $(this);
		var target = obj.attr('rel');
		
		$('#'+target).fadeIn('slow');
	});
});