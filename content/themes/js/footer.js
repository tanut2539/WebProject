$(function(){
 var url = window.location.pathname;  
 var activePage = url.substring(url.lastIndexOf('/')+1);
$('#header-primary nav a').each(function(){  
var currentPage = this.href.substring(this.href.lastIndexOf('/')+1);

if (activePage == currentPage) {
$(this).parent().addClass('current-menu-item'); 
} 
});
 })
if(jQuery)(function(d){function p(b){b=d.extend({},g,b||{});for(var a=d(this),c=0,e=a.length;c<e;c++)q(a.eq(c),b);return a}function q(b,a){if(!b.data("scroller")){d.extend(a,b.data("scroller-options"));var c;c='<div class="scroller-bar"><div class="scroller-track"><div class="scroller-handle">';c+="</div></div></div>";a.paddingRight=parseInt(b.css("padding-right"),10);a.paddingBottom=parseInt(b.css("padding-bottom"),10);b.addClass(a.customClass+" scroller").wrapInner('<div class="scroller-content" />').prepend(c); a.horizontal&&b.addClass("scroller-horizontal");a=d.extend({$scroller:b,$content:b.find(".scroller-content"),$bar:b.find(".scroller-bar"),$track:b.find(".scroller-track"),$handle:b.find(".scroller-handle")},a);a.$content.on("scroll.scroller",a,l);a.$scroller.on("mousedown.scroller",".scroller-track",a,r).on("mousedown.scroller",".scroller-handle",a,s).data("scroller",a);h.reset.apply(b,[a]);d(window).one("load",function(){h.reset.apply(b,[a])})}}function l(b){b.preventDefault();b.stopPropagation(); b=b.data;if(!0==b.horizontal){var a=b.$content.scrollLeft();0>a&&(a=0);a/=b.scrollRatio;a>b.handleBounds.right&&(a=b.handleBounds.right);b.$handle.css({left:a})}else a=b.$content.scrollTop(),0>a&&(a=0),a/=b.scrollRatio,a>b.handleBounds.bottom&&(a=b.handleBounds.bottom),b.$handle.css({top:a})}function r(b){b.preventDefault();b.stopPropagation();var a=b.data,c=a.$track.offset();!0==a.horizontal?(a.mouseStart=b.pageX,a.handleLeft=b.pageX-c.left-a.handleWidth/2,k.apply(a.$scroller,[a,a.handleLeft])): (a.mouseStart=b.pageY,a.handleTop=b.pageY-c.top-a.handleHeight/2,k.apply(a.$scroller,[a,a.handleTop]));a.$scroller.data("scroller",a);a.$content.off(".scroller");d("body").on("mousemove.scroller",a,m).on("mouseup.scroller",a,n)}function s(b){b.preventDefault();b.stopPropagation();var a=b.data;!0==a.horizontal?(a.mouseStart=b.pageX,a.handleLeft=parseInt(a.$handle.css("left"),10)):(a.mouseStart=b.pageY,a.handleTop=parseInt(a.$handle.css("top"),10));a.$scroller.data("scroller",a);a.$content.off(".scroller"); d("body").on("mousemove.scroller",a,m).on("mouseup.scroller",a,n)}function m(b){b.preventDefault();b.stopPropagation();var a=b.data,c=0;!0==a.horizontal?(b=a.mouseStart-b.pageX,c=a.handleLeft-b):(b=a.mouseStart-b.pageY,c=a.handleTop-b);k.apply(a.$scroller,[a,c])}function n(b){b.preventDefault();b.stopPropagation();b=b.data;b.$content.on("scroll.scroller",b,l);d("body").off(".scroller")}function k(b,a){if(!0==b.horizontal){a<b.handleBounds.left&&(a=b.handleBounds.left);a>b.handleBounds.right&&(a=b.handleBounds.right); var c=Math.round(a*b.scrollRatio);b.$handle.css({left:a});b.$content.scrollLeft(c)}else a<b.handleBounds.top&&(a=b.handleBounds.top),a>b.handleBounds.bottom&&(a=b.handleBounds.bottom),c=Math.round(a*b.scrollRatio),b.$handle.css({top:a}),b.$content.scrollTop(c)}var g={customClass:"",duration:0,handleSize:!1,horizontal:!1,trackMargin:0},h={defaults:function(b){g=d.extend(g,b||{});return d(this)},destroy:function(){return d(this).each(function(b){if(b=d(this).data("scroller"))b.$scroller.removeClass(b.customClass).removeClass("scroller").removeClass("scroller-active"), b.$content.replaceWith(b.$content.html()),b.$bar.remove(),b.$content.off(".scroller"),b.$scroller.off(".scroller").removeData("scroller")})},scroll:function(b,a){return d(this).each(function(a){a=d(this).data("scroller");var e=e||g.duration;if("number"!=typeof b){var f=d(b);0<f.length?(f=f.position(),b=!0==a.horizontal?f.left+a.$content.scrollLeft():f.top+a.$content.scrollTop()):b=a.$content.scrollTop()}!0==a.horizontal?a.$content.stop().animate({scrollLeft:b},e):a.$content.stop().animate({scrollTop:b}, e)})},reset:function(b){return d(this).each(function(a){a=b||d(this).data("scroller");if("undefined"!=typeof a){a.$scroller.addClass("scroller-setup");if(!0==a.horizontal)a.barHeight=a.$content[0].offsetHeight-a.$content[0].clientHeight,a.frameWidth=a.$content.outerWidth(),a.trackWidth=a.frameWidth-2*a.trackMargin,a.scrollWidth=a.$content[0].scrollWidth,a.ratio=a.trackWidth/a.scrollWidth,a.trackRatio=a.trackWidth/a.scrollWidth,a.handleWidth=a.handleSize?a.handleSize:a.trackWidth*a.trackRatio,a.scrollRatio= (a.scrollWidth-a.frameWidth)/(a.trackWidth-a.handleWidth),a.handleBounds={left:0,right:a.trackWidth-a.handleWidth},a.$scroller.data("scroller",a),a.$content.css({paddingBottom:a.barHeight+a.paddingBottom}),a.$content.scrollLeft(),a.scrollWidth<=a.frameWidth?a.$scroller.removeClass("scroller-active"):a.$scroller.addClass("scroller-active"),a.$bar.css({width:a.frameWidth}),a.$track.css({width:a.trackWidth,marginLeft:a.trackMargin,marginRight:a.trackMargin}),a.$handle.css({width:a.handleWidth});else{a.barWidth= a.$content[0].offsetWidth-a.$content[0].clientWidth;a.frameHeight=a.$content.outerHeight();a.trackHeight=a.frameHeight-2*a.trackMargin;a.scrollHeight=a.$content[0].scrollHeight;a.ratio=a.trackHeight/a.scrollHeight;a.trackRatio=a.trackHeight/a.scrollHeight;a.handleHeight=a.handleSize?a.handleSize:a.trackHeight*a.trackRatio;a.scrollRatio=(a.scrollHeight-a.frameHeight)/(a.trackHeight-a.handleHeight);a.handleBounds={top:0,bottom:a.trackHeight-a.handleHeight};a.$scroller.data("scroller",a);var c=a.$content.scrollTop()* a.ratio;a.scrollHeight<=a.frameHeight?a.$scroller.removeClass("scroller-active"):a.$scroller.addClass("scroller-active");a.$bar.css({height:a.frameHeight});a.$track.css({height:a.trackHeight,marginBottom:a.trackMargin,marginTop:a.trackMargin});a.$handle.css({height:a.handleHeight})}k.apply(a.$scroller,[a,c]);a.$scroller.removeClass("scroller-setup")}})}};d.fn.scroller=function(b){return h[b]?h[b].apply(this,Array.prototype.slice.call(arguments,1)):"object"!==typeof b&&b?this:p.apply(this,arguments)}})(jQuery);;

!function($) {
    function getAndroidVersion(ua) {
        ua = ua || navigator.userAgent;
        var match = ua.match(/Android\s([0-9\.]*)/);
        return match ? match[1] : !1;
    }
    /**
	 * Responsive helper / debug info.  Triggered by adding ?responsive_helper to URL.
	 */
    if ($(function() {
        function disableScroll(ev) {
            ev.preventDefault();
        }
        // reposition like box (required if there is content above the primary header)
        // like the language notice.
        function positionLikeButton() {
            // must use arbitrary number here since page can be loaded at any width
            // if loaded at mobile width, like button will be position (static) in footer
            var newsroom_like_top = 20, $header_primary = $("#header-primary"), $newsroom_like = $("#newsroom-like");
            $newsroom_like.css({
                top: newsroom_like_top + $header_primary.offset().top
            });
        }
        function hideChosenMenu() {
            $chosen_select.trigger("chosen:close.chosen"), $("body").unbind("click", hideChosenMenu);
        }
        var $menu_toggle = $("#primary-menu-toggle"), $menu = $("#header-2");
        $menu.height();
        /**
		 * Show/hide responsive menu.  Note: we temporarily disable the "touchmove" event because
		 * there is a bug if the menu is triggered and the page is scrolled at the same time.
		 * See FN-251
		 */
        $menu_toggle.on("click", function() {
            var $this = $(this);
            $(document).bind("touchmove", disableScroll), $this.is(".open") && !$menu.is(":animated") ? ($menu.slideUp("slow", function() {
                $(document).unbind("touchmove", disableScroll);
            }), $this.removeClass("open")) : ($menu.slideDown("slow", function() {
                $(document).unbind("touchmove", disableScroll);
            }), $this.addClass("open"));
        }), $(window).resize(positionLikeButton), positionLikeButton();
        //console.log($newsroom_like.position().top + $header_primary.offset().top);
        //$('#newsroom-like');
        /**
		 * Set up Chosen and make sure the dialog closes if touching elsewhere.
		 */
        var $chosen_select = $(".chosen-select");
        $chosen_select.chosen({
            disable_search_threshold: 20
        }), Modernizr && Modernizr.touch && $chosen_select.on("chosen:showing_dropdown", function() {
            $("body").bind("click", hideChosenMenu);
        });
        // Blur the search bar on resize.  On tablet orientation change,
        // if on search, the keyboard can remain open. FN-216
        //Need to conditionally load menu if search bar is active... ?
        var $search_text = $("#search");
        $(window).on("resize", function() {
            $search_text.is(":visible") || $search_text.blur();
        });
        var androidVersion = getAndroidVersion();
        // Don't initialize for android 4 or less.
        (!androidVersion || parseInt(androidVersion) > 4) && $(".select2").select2({
            minimumResultsForSearch: -1
        }), $(".select2").on("change", function() {
            //alert( $(this).val() );
            var href = $(this).val();
            window.location = href;
        }), // prevents keyboard from popping up on iOS when select is touched
        $(".select2 input").prop("readonly", !0), // Localization notice close button
        $(".page-notice .close").on("click", function() {
            $(this).parents(".page-notice").hide(), positionLikeButton();
        });
    }), /**
	 * Select box navigation that is shown on News page for mobile
	 */
    $(".responsive-nav select").on("change", function() {
        var $this = $(this), href = $this.find("option:selected").attr("value");
        href && (window.location = href);
    }), $("#responsive").length) {
        var $responsive_dimensions = $("#responsive-dimensions"), w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0), h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
        $responsive_dimensions.html(w + " x " + h), $(window).on("resize", function() {
            var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0), h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
            $responsive_dimensions.html(w + " x " + h);
        });
    }
}(jQuery), function($) {
    jQuery.fn.autoResizeFbPost = function() {
        var fixWidth = function($container, $clonedContainer, doParse) {
            // should we call FB.XFBML.parse? we don't want to do this at page load because it will happen automatically
            doParse = "undefined" == typeof doParse ? !0 : doParse;
            var updatedWidth = $container.width();
            // update all div.fb-post with correct width of container
            $clonedContainer.find("div.fb-post").each(function() {
                $(this).attr("data-width", updatedWidth);
            }), // update all fb:post with correct width
            $clonedContainer.find("fb\\:post").each(function() {
                $(this).attr("width", updatedWidth);
            }), // update page with adjusted markup
            $container.html($clonedContainer.html()), doParse && FB && FB.XFBML && FB.XFBML.parse && FB.XFBML.parse();
        };
        return this.each(function() {
            var $container = $(this), $clonedContainer = $container.clone();
            // make sure there is a .fb-post element before we set up event handlers
            if (!$container.find("div.fb-post").length) return !1;
            // execute once (document.ready) and do not call FB.XFBML.parse()
            fixWidth($container, $clonedContainer, !1);
        });
    }, jQuery(function() {
        $(".post-content").autoResizeFbPost();
    });
}(jQuery);;