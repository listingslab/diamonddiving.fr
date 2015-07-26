// Cufon
Cufon.set('fontFamily', 'helvetica-heavy-ex').replace('#content .main-content H1')('#content .main-content H2')('#content .main-content H3')('#footer .column H4')
('#sidebar .prices h3')('#sidebar .prices ul li span')('.social-area ul.coord li a')('.social-area ul.coord li span')('.social-area ul.coord li');

$(document).ready(function(){
	
	$('.slider UL').cycle({fx: 'fade'});
	
	$('INPUT.auto-hint').focus(function(){
		if ($(this).attr('value') == $(this).attr('title')) $(this).attr('value', '');
	});
	$('INPUT.auto-hint').blur(function(){
		if ($(this).attr('value') == '') $(this).attr('value', $(this).attr('title'));
	});
	
	$('.offer-rotator UL').cycle({fx: 'fade'});
	
	$('.ad-rotator UL').cycle({fx: 'fade'});
	
	$('#footer .column:first').addClass('contact-info');
	
	if ($('.main-menu-bg UL LI.first').hasClass('current-menu-item') == true ) {
		$('.main-menu-bg UL LI.first a>span').css({
			background: "url('../public/images/bg/menu-hover-right.gif') no-repeat right bottom"
		});
	}
	
})

