
Cufon.set('fontFamily', 'Myriad Pro Regular');

Cufon.replace('.font-replace', { hover: true });
Cufon.replace('ul#main-nav li', { hover: true });
Cufon.replace('h2', { hover: true });
Cufon.replace('h3', { hover: true });
Cufon.replace('div.banner-slide h2', { fontFamily: 'Myriad Pro Bold', textShadow: '1px 1px 3px #000', hover: true });

$(function(){
	$('#you-are-here').fadeIn(2500);
	$('ul#news-list li').hover(function() {
		$('div.news-bg', $(this)).slideUp(600, 'easeInOutExpo');
    	}, function() {
    	$('div.news-bg', $(this)).slideDown(600, 'easeInOutExpo');
    });
	$('ul#news-list li').each(function(i){
    	$(this).addClass("item-" + i);
    });
     
    $('input[placeholder], textarea[placeholder]').placeholder();
});

Cufon.now();