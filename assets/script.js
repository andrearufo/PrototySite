$(document).ready(function() {
	
	$('#bar').hide();
	
	var hide = true;
	
	$('#container').click(function(){
		if(hide){
			$('#bar').slideDown('fast');
			hide = false;
		}else{
			$('#bar').slideUp('fast');
			hide = true;
		}
	});
	
	$('.list ul').hide();
	
	$('.list').mouseover(function(){
		$('ul', this).slideDown('fast');
	});
	
	$('.list').mouseleave(function(){
		$('ul', this).delay(300).slideUp('fast');
	});
	
});