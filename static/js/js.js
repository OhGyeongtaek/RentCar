$(function(){
	/*slide js*/
	if($('.slide').length > 0){
		var slide_play = null;

		$('.slide_btn a').click(function(e){

			clearTimeout(slide_play);
			$('.slide ul').stop();

			$('.slide_btn .active').removeClass('active');
			var left = 100 * ($(this).attr('href').substr(-1,2)-1);
			$('.slide ul').animate({'left':-1*left+'%'},300);
			$(this).addClass('active');

			img_slide();
		});

		function img_slide(){
			var href = $('.slide_btn .active').attr('href'),
				target = '#slide'+(3-$('.slide_btn .active').attr('href').substr(-1,2));
			
			slide_play = setTimeout(function(){
					$('.slide_btn a[href="'+target+'"]').click(); 
			},3000);
		}

		img_slide();
	}

	if($('.car').length > 0){
		$('input[type=button]').click(function(){
			$('body').animate({scrollTop:'0'},500);
		});
	}

	if($('.reserve').length > 0){
		var is_submit = false;
		$('.reserve .product > div').draggable({
			revert :true
		});

		$('.drop-car').droppable({
			drop:function(event,ui){
				if($('img',this).length > 0) return false;
				var target	= ui.draggable,
					html	= target.html(),
					car		= null;
				$('.drop-car').html(html).addClass('in').removeClass('off');
				car = $('.drop-car input').val();
				$(target).css('opacity',0)
				$('.drop-box form').animate({'opacity':1},300);
				$('.drop-box form input[type=hidden]').val(car);
			}
		});
		
		$('#s_date').datepicker({
			minDate : 0,
			dateFormat : "yy-mm-dd",
			onSelect:function(date){

				$('#e_date').removeAttr('disabled');
				$('#e_date').datepicker({
						dateFormat : "yy-mm-dd",
						onSelect : function(date){
							$('#s_date').datepicker('option','maxDate',date);
						}
				});
				$('#e_date').datepicker('option','minDate',date);
			}
		});
		
		$('input[type=button]').click(function(){
			if($('.drop-car img').length > 0&&$('#date').val() !== ''){
				var cash	= Date();

				var option	= {
						car		: $('.drop-car input[type=hidden]').val(),
						s_date	: $('#s_date').val(),
						e_date	: $('#e_date').val(),
						color	: $('#color').val(),
						fuel	: $('#fuel').val()
				}

				if(option.s_date != '' && option.e_date != ''){
					$.get('/action/reserve/reserve_chk?cash='+cash,option,function(data){
						var chk = data != '';
						$('input[type=button]').css('display',chk? 'block' : 'none');
						$('input[type=submit]').css('display',chk? 'none' : 'block');
						is_submit = !chk ? true : false;
					});
				}
			}
		});

		$('.reserve form').submit(function(){
			return is_submit;
		});
	}

	if($('.login-form').length > 0){
		$('.login-form').dialog({
			'autoOpen' : false,
			'modal' : true
		});

		$('.login').click(function(){
			$('.login-form').dialog('open');
		});
	}

	if($('.list').length > 0){
		$('.list a').button();
	}

	if($('.search').length > 0){
		$('.search input').keyup(function(data){
			option = { 
				'standard'	: 0,
				'key'		: $('.search-put').val()
			};
			$.get('/action/search/getList',option,function(data){
				$('.list tbody').html(data);	
			});
		});
	}
});