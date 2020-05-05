(function($, w, d, undefined){
	
	$.pageFlip = function(options, element) {
		
		// This.
		$this = this;
		
		// Element
		this.element = element;
		
		// For jQuery
		this.$element = $(element);

		// Run function
		this.init(options);
		
		
	}
	
	$.pageFlip.defaults = { 
		
		// Time duration of the page flip
		time : 1,
		
		// Turn shadow on? This can cause some performance issues on some devices
		shadow: true
		
	}
	
	$.pageFlip.prototype = {  
		
		init: function(options) {
			
			// Extend defaults
			this.options = $.extend(true, {}, $.pageFlip.defaults, options);
			
			// Is it being animated?
			this.animated = false;
			
			// Change the images so they can fold
			this.append();	
			
			// Events
			this.events();
			
			// Pagination
			this.pagination(true);
		},
		
		append : function() {
			
			this.$element.append('<div class="prev">&#x25C5;</div><div class="next">&#x25BB;</div>');
			
			$('.slide:first').addClass('current').prependTo($this.$element);	
			
			this.$element.find('.slide').each(function() {
				
				$(this).append('<div class="img"></div><div class="img"></div>');
			
				// Duplicate images
				var image = $(this).find('img').css('display', 'none').attr('src');
				
				$(this).find('.img').css({
					'background' : 'url("'+image+'")', 
					'transition-duration' : ($this.options.time/2)+'s, '+($this.options.time/2)+'s'
				});
				$(this).find('.img:last-of-type').css({'right' : '0', 'left' : 'auto', 'background-position' : '100% 0'});
				
			});
			
			
		},
		
		events : function() {
			
			$('.next').on("click", function() {
				
				if($this.animated === false) {
				
					$this.animated = true;
					
					var current = $('.current .img:last-of-type', $this.$element);
					var next = $('.current', $this.$element).nextAll('.slide:first').find('.img:first');
				
					$('.slide .img').css({'transition-duration' : ($this.options.time/2)+'s'});
					
					
					next.css({
						'opacity' : '0', 
						'transform' : 'rotateY(90deg)', 
						'transform-origin' : '100% 100%',
						
					});
					
					if($this.options.shadow === true) {
						next.css({'box-shadow' : 'inset 0 0 2000px 5000px rgba(0,0,0,0.3)'});
						current.css({'box-shadow' : 'inset 0 0 2000px 5000px rgba(0,0,0,0.3)'});	
					}
					
					$('.current').nextAll('.slide:first').css('z-index', '999');
					current.css({
						'transform' : 'rotateY(-90deg)',
					});
					
					setTimeout(function() {
						
						next.css({
							'opacity' : '1',
							'transform' : 'rotateY(0deg)',
							'box-shadow' : 'none'
						});
						
						$('.current').nextAll('.slide:first').css({'z-index' : '999999'});
						
					}, (($this.options.time/2) * 1000))					
					
					setTimeout(function() {
						
						$('.current').nextAll('.slide:first').addClass('current').css({'z-index' : ''}).siblings().removeClass('current');
						$('.slide > .img:first').css({
							'transform' : 'none', 
							'left' : '0', 'right' : '0', 
							'box-shadow' : 'none'
						});
						$('.slide > .img:last').css({
							'transform' : 'none', 
							'transition-duration' : '0', 
							'box-shadow' : 'none'
						});
						$('.slide:first', $this.$element).appendTo($this.$element);
						
						$this.animated = false;
						$this.pagination(false);
						
					}, ($this.options.time * 1000));
										
				}
					
			});
			
			$('.prev').on("click", function() {
				
				if($this.animated === false) {
				
					$this.animated = true;
					
					var current = $('.current .img:first', $this.$element);
					var prev = $('.current', $this.$element).nextAll('.slide:last').find('.img:last');
					
					$('.slide .img').css({'transition-duration' : ($this.options.time/2)+'s'});
					
					
					prev.css({
						'opacity' : '0', 
						'transform' : 'rotateY(90deg)', 
						'transform-origin' : '0 0',
						'box-shadow' : 'inset 0 0 2000px 5000px rgba(0,0,0,0.3)'
					});
					
					
					
					current.css({
						'transform' : 'rotateY(90deg)',
						'transform-origin' : '100% 100%',
						'box-shadow' : 'inset 0 0 2000px 5000px rgba(0,0,0,0.3)'
					});
					
					if($this.options.shadow === true) {
						prev.css({'box-shadow' : 'inset 0 0 2000px 5000px rgba(0,0,0,0.3)'});
						current.css({'box-shadow' : 'inset 0 0 2000px 5000px rgba(0,0,0,0.3)'});	
					}
					
					setTimeout(function() {
						
						prev.css({
							'opacity' : '1',
							'transform' : 'rotateY(0)',
							'box-shadow' : 'none'
						});
						
						$('.slide:last').css({'z-index' : '999999'});
						
					}, (($this.options.time/2) * 1000))					
					
					setTimeout(function() {
						
						$('.slide:last').addClass('current').css({'z-index' : ''}).siblings().removeClass('current');
						$('.slide > .img:first').css({
							'transform' : 'none', 
							'left' : '0', 
							'right' : '0', 
							'transition-duration' : '0',
							'box-shadow' : 'none'
						});
						$('.slide > .img:last').css({
							'transform' : 'none',
							'box-shadow' : 'none'
						});
						$('.slide:last', $this.$element).prependTo($this.$element);
						
						$this.animated = false;
						$this.pagination(false);
						
					}, ($this.options.time * 1000));
					
				}
					
			});
			
		},
		
		pagination: function(append) {
			
			var i = 0,
				classid;
			
			if(append === true) {
				
				$(this.element).append('<div id="pagination"></div>');
				
				this.$element.find('.slide').each(function() {
					
					$(this).addClass('s-'+i);
					
					$('#pagination').append('<div class="p-'+i+'"></div>');
					
					++i;
						
				});
				
				classid = $('.current').attr('class').split(' ')[2].split('-')[1];
				
			} else {
				
				classid = $('.current').attr('class').split(' ')[1].split('-')[1];
			
			}
			
			$('#pagination div').each(function() {
				
				var pageid = $(this).attr('class').split('-')[1];

				
				if(pageid === classid) {
				
					$(this).addClass('cur');
				
				} else {
	
					$(this).removeClass('cur');
			
				}
				
			})
				
		}
		
	}

	$.fn.pageFlip = function(options, content) {
		
		return this.each(function() {
			
			new $.pageFlip(options, this);
			
		});
	
	};
	
})(jQuery, window, document);