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
	
	$('#bar ul ul').hide();
	
	$('#bar li').mouseover(function(){
		$('ul', this).stop().slideDown('fast');
	});
	
	$('#bar li').mouseleave(function(){
		$('ul', this).hide();
	});
	
});