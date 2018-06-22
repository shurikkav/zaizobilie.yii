			
$(document).ready(function() {

	$(function() {
		$( "#datepicker" ).datepicker();
	});
	/*
	$('#autors-gallery').jcarousel({
		wrap: 'circular',
		scroll: 1
	});*/
	$('#infograph').jcarousel({
		wrap: 'circular',
		scroll: 1
	});
	$('img').each(function(){
		var img = new Image(),
		that = this;
		img.onerror = function(){that.src = '/templates/bold/img/nopreview.jpg'};
		img.src = this.src;
	})
	
	$('#commentsform > div').each(function(){
		$(this).children('span:first-child').addClass('date');
			$(this).find('.date').appendTo($(this).find('#authorlist'));
			$(this).find('#authorlist a').clone().addClass('avatar').insertBefore($(this).find('#authorlist'))
			$(this).find('.avatar span').remove();
			$(this).find('#authorlist a img').remove();
		})
		$('.avatar').each(function(){
			if($(this).html() == '')
				$(this).remove();
		})
	$('#mailtofriends a').each(function(){$(this).html('<i />'+$(this).text())})
	$('#actual').jcarousel({
		wrap: 'circular',
		scroll: 1
	});
	
	$('.medialist').each(function(){
		$(this).find('h4').appendTo($(this));
		$(this).find('a').addClass('preview left');
		a = $(this).find('a').attr('href');
		$(this).find('h4').find('span').replaceWith('<a href="'+a+'">'+$(this).find('h4').find('span').text()+'</a>');
		$(this).find('.textmedia').appendTo($(this));
	})
	
	
	$('select').change(function() { 
		var selectID = $(this).attr('id')
		$(this).parents('.select').find('input').val($('#'+selectID+' option:selected').text()) ;
	});
	
	if($('#number option:selected').val() !== '0'){
		$('#number').parents('.select').find(':text').val($('#number option:selected').val());
	}
	
	$('.photoalbums li a').each(function(){
		if($(this).attr('rel') == 'rr'){
			a = $(this).attr('href');
			t = $(this).attr('title');
			h = $(this).html();
			$(this).replaceWith('<a href="'+a+'" title="'+t+'" rel="lightbox[album]" class="preview">'+h+'</a>')
		}
	})
	

	$('.more a').click(function(){
		$('.left_menu li').toggleClass('viz');
		$(this).find('span').toggle();
		return false;
	})
	
	$('.show').click(function(){
		$('.catalog li').toggleClass('viz');
		$(this).find('span').toggle();
	
	})
	
	$('#more_articles').prev('h3').addClass('title');
	
	
	
	// DOM change
	
	$('.block-title').each(function(){
		if($(this).html() == '')
			$(this).remove();
	})
	mtA = $('.main-threads').children('li').children('.link_name').attr('href');
	$('.main-title').find('.fresh').attr('href', mtA);
	$('.main-threads').children('li').children('.link_name').remove();
	
	$('.news').children('li').each(function(){
		
		rName = $(this).children('a.link_name').text();
		rHref = $(this).children('a.link_name').attr('href');
		
		$(this).children('ul').children('li').each(function(){
			$(this).find('a.link_img1').wrap('<div class="preview left" />');
			$(this).find('.preview').append('<div class="rubric" />');
			$(this).find('.rubric').append('<span><a href="'+rHref+'" title="'+rName+'">'+rName+'</a></span><i />');
			$(this).find('.rubric').append($(this).find('.date_start').text());
			$(this).find('.date_start').remove();
			$('<div class="meta" />').insertBefore($(this).find('.link_intro'));
			$($(this).find('.view')).appendTo($(this).find('.meta'));
			$($(this).find('.comm')).appendTo($(this).find('.meta'));
			viewVal = $(this).find('.view').text();
			commVal = $(this).find('.comm').text();
			$($(this).find('.view').replaceWith('<span class="icon views"><i class="icon" /><span>'+viewVal+'</span></span>'));
			$($(this).find('.comm').replaceWith('<span class="icon comments"><i class="icon" /><span>'+commVal+'</span></span>'));
		})

	})


	
	$('.news').children('li').children('a.link_name').remove();
	
	$('.left-rubrics-tabs li span').click(function(){
		$('.left-rubrics-tabs li span').removeClass('current')
		$(this).addClass('current');
		$('.left-rubrics > li').hide();
		$('.left-rubrics > li:eq('+$(this).parent().index()+')').show();
	})
	
	$('.newslist').prev('h3').addClass('block-title ');
	
	// active
	$('.archiveis_item:odd').css('margin-right', 0)
	$('.archiveis_item').each(function(){
			
		$(this).find('h3').insertAfter($(this).find('.img1'));
		$(this).find('.filepopup').text('').html('Скачать PDF <i>').insertAfter($(this).find('p'));
		str = $(this).find('p').text();
		if(str !== '')
			str = str.replace(/ /g, '<br />');
		$(this).find('p').html(str);
	})
	
});