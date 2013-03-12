/* jQuery Cookie Min */
jQuery.cookie=function(key,value,options){if(arguments.length>1&&String(value)!=="[object Object]"){options=jQuery.extend({},options);if(value===null||value===undefined){options.expires=-1}if(typeof options.expires==='number'){var days=options.expires,t=options.expires=new Date();t.setDate(t.getDate()+days)}value=String(value);return(document.cookie=[encodeURIComponent(key),'=',options.raw?value:encodeURIComponent(value),options.expires?'; expires='+options.expires.toUTCString():'',options.path?'; path='+options.path:'',options.domain?'; domain='+options.domain:'',options.secure?'; secure':''].join(''))}options=value||{};var result,decode=options.raw?function(s){return s}:decodeURIComponent;return(result=new RegExp('(?:^|; )'+encodeURIComponent(key)+'=([^;]*)').exec(document.cookie))?decode(result[1]):null};

/* Banner Settings */
var DesignModo = {};

DesignModo.headerBanner = function(cookieName, expireDays) {

	var $banner = $('.header-banner'),
		cookie = $.cookie(cookieName),
		$menu = $('#upper-menu-container');

	if (cookie !== 'banner-hidden') {
	$banner.hover(function(){},function(){})
			.removeClass('banner-hidden')
			.find('.banner-close')
			.on('click', function(event) {
				event.preventDefault();
				$banner.slideUp('slow');
				$.cookie(cookieName, 'banner-hidden', { path: '/', expires: expireDays });
				$('#header-wrapper').animate({marginTop:0},'fast');
				$('#upper-menu-container').animate({marginTop:0},'fast');
			      $('#buynow-buttons').removeClass('banner-showed').style('margin-top','85px').animate({marginTop:0},'fast');
			})

			
	}
};

DesignModo.headerBanner('brickstop', 20); // cookieName, Days to cookie expire

// EX: DesignModo.headerBanner('pandoraui', 10);
// If the user click on "close button" the banner will be hidden for 10 days, then on next user visit the banner will show again.
// If the cookie name have changed the previous cookie after expire will not show again

// If you don't want to use any banner you can just comment to not load
// EX: <!-- <script src="js/banner.js"></script-->