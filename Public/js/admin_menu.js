jQuery(document).ready(function($) {
	$('.menu-list:first').show();
	$('.menu>li').click(function() {
		var $ul = $(this).next('ul'); 
		if($ul.css('display') == 'none')
		{
			$('.menu-list').slideUp();
			$ul.slideToggle();
		}
	});
	$('.menu-list>li').click(function(){
		$('.menu-list>li').css('border' , '1px solid #ccc');
		$(this).css('border','1px dashed #000');
		var l = $(this).find('a').attr('href');
		window.parent.right.location.href=l;
	});
});