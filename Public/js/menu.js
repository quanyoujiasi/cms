$(function(){

	$('.menu > li').hover(
		function(){
			$this = $(this);
			var pos = $this.position();
			menu = $this.find('.nav-menu');
			//console.log();
			$this.addClass('on');
			menu.css({top:pos.top+50,left:pos.left});
			menu.show();
		},
		function(){
			$this.removeClass('on');
			menu.hide();
		}
	);

	 $(window).scroll(function(){  
        if ($(window).scrollTop()>100){  
            $("#to-top").fadeIn(800);  
        }  
        else  
        {  
            $("#to-top").fadeOut(800);  
        }  
    });

	$("#to-top").click(function(){  
        $('body,html').animate({scrollTop:0},800);  
            return false;  
    }); 

});