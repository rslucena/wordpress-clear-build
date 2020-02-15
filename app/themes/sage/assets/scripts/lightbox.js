(function(d,c){if(typeof define==="function"&&define.amd){define(["jquery"],c)}else{if(typeof exports==="object"){module.exports=c(require("jquery"))}else{d.lightbox=c(d.jQuery)}}}(this,function(d){function c(a){this.album=[];this.currentImageIndex=void 0;this.init();this.options=d.extend({},this.constructor.defaults);this.option(a)}c.defaults={albumLabel:"Image %1 of %2",alwaysShowNavOnTouchDevices:false,fadeDuration:500,fitImagesInViewport:true,positionFromTop:50,resizeDuration:700,showImageNumberLabel:true,wrapAround:false};c.prototype.option=function(a){d.extend(this.options,a)};c.prototype.imageCountLabel=function(a,b){return this.options.albumLabel.replace(/%1/g,a).replace(/%2/g,b)};c.prototype.init=function(){this.enable();this.build()};c.prototype.enable=function(){var a=this;d("body").on("click","a[rel^=lightbox], area[rel^=lightbox], a[data-lightbox], area[data-lightbox]",function(b){a.start(d(b.currentTarget));return false})};c.prototype.build=function(){var a=this;d('<div id="lightboxOverlay" class="lightboxOverlay"></div><div id="lightbox" class="lightbox"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" /><div class="lb-nav"><a class="lb-prev" href="" ></a><a class="lb-next" href="" ></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div>').appendTo(d("body"));this.$lightbox=d("#lightbox");this.$overlay=d("#lightboxOverlay");this.$outerContainer=this.$lightbox.find(".lb-outerContainer");this.$container=this.$lightbox.find(".lb-container");this.containerTopPadding=parseInt(this.$container.css("padding-top"),10);this.containerRightPadding=parseInt(this.$container.css("padding-right"),10);this.containerBottomPadding=parseInt(this.$container.css("padding-bottom"),10);this.containerLeftPadding=parseInt(this.$container.css("padding-left"),10);this.$overlay.hide().on("click",function(){a.end();return false});this.$lightbox.hide().on("click",function(b){if(d(b.target).attr("id")==="lightbox"){a.end()}return false});this.$outerContainer.on("click",function(b){if(d(b.target).attr("id")==="lightbox"){a.end()}return false});this.$lightbox.find(".lb-prev").on("click",function(){if(a.currentImageIndex===0){a.changeImage(a.album.length-1)}else{a.changeImage(a.currentImageIndex-1)}return false});this.$lightbox.find(".lb-next").on("click",function(){if(a.currentImageIndex===a.album.length-1){a.changeImage(0)}else{a.changeImage(a.currentImageIndex+1)}return false});this.$lightbox.find(".lb-loader, .lb-close").on("click",function(){a.end();return false})};c.prototype.start=function(r){var a=this;var v=d(window);v.on("resize",d.proxy(this.sizeOverlay,this));d("select, object, embed").css({visibility:"hidden"});this.sizeOverlay();this.album=[];var b=0;function j(e){a.album.push({link:e.attr("href"),title:e.attr("data-title")||e.attr("title")})}var p=r.attr("data-lightbox");var i;if(p){i=d(r.prop("tagName")+'[data-lightbox="'+p+'"]');for(var s=0;s<i.length;s=++s){j(d(i[s]));if(i[s]===r[0]){b=s}}}else{if(r.attr("rel")==="lightbox"){j(r)}else{i=d(r.prop("tagName")+'[rel="'+r.attr("rel")+'"]');for(var t=0;t<i.length;t=++t){j(d(i[t]));if(i[t]===r[0]){b=t}}}}var q=v.scrollTop()+this.options.positionFromTop;var u=v.scrollLeft();this.$lightbox.css({top:q+"px",left:u+"px"}).fadeIn(this.options.fadeDuration);this.changeImage(b)};c.prototype.changeImage=function(a){var g=this;this.disableKeyboardNav();var b=this.$lightbox.find(".lb-image");this.$overlay.fadeIn(this.options.fadeDuration);d(".lb-loader").fadeIn("slow");this.$lightbox.find(".lb-image, .lb-nav, .lb-prev, .lb-next, .lb-dataContainer, .lb-numbers, .lb-caption").hide();this.$outerContainer.addClass("animating");var h=new Image();h.onload=function(){var n;var q;var p;var e;var r;var f;var o;b.attr("src",g.album[a].link);n=d(h);b.width(h.width);b.height(h.height);if(g.options.fitImagesInViewport){o=d(window).width();f=d(window).height();r=o-g.containerLeftPadding-g.containerRightPadding-20;e=f-g.containerTopPadding-g.containerBottomPadding-120;if(g.options.maxWidth&&g.options.maxWidth<r){r=g.options.maxWidth}if(g.options.maxHeight&&g.options.maxHeight<r){e=g.options.maxHeight}if((h.width>r)||(h.height>e)){if((h.width/r)>(h.height/e)){p=r;q=parseInt(h.height/(h.width/p),10);b.width(p);b.height(q)}else{q=e;p=parseInt(h.width/(h.height/q),10);b.width(p);b.height(q)}}}g.sizeContainer(b.width(),b.height())};h.src=this.album[a].link;this.currentImageIndex=a};c.prototype.sizeOverlay=function(){this.$overlay.width(d(window).width()).height(d(document).height())};c.prototype.sizeContainer=function(l,p){var m=this;var n=this.$outerContainer.outerWidth();var a=this.$outerContainer.outerHeight();var b=l+this.containerLeftPadding+this.containerRightPadding;var o=p+this.containerTopPadding+this.containerBottomPadding;function k(){m.$lightbox.find(".lb-dataContainer").width(b);m.$lightbox.find(".lb-prevLink").height(o);m.$lightbox.find(".lb-nextLink").height(o);m.showImage()}if(n!==b||a!==o){this.$outerContainer.animate({width:b,height:o},this.options.resizeDuration,"swing",function(){k()})}else{k()}};c.prototype.showImage=function(){this.$lightbox.find(".lb-loader").stop(true).hide();this.$lightbox.find(".lb-image").fadeIn("slow");this.updateNav();this.updateDetails();this.preloadNeighboringImages();this.enableKeyboardNav()};c.prototype.updateNav=function(){var b=false;try{document.createEvent("TouchEvent");b=(this.options.alwaysShowNavOnTouchDevices)?true:false}catch(a){}this.$lightbox.find(".lb-nav").show();if(this.album.length>1){if(this.options.wrapAround){if(b){this.$lightbox.find(".lb-prev, .lb-next").css("opacity","1")}this.$lightbox.find(".lb-prev, .lb-next").show()}else{if(this.currentImageIndex>0){this.$lightbox.find(".lb-prev").show();if(b){this.$lightbox.find(".lb-prev").css("opacity","1")}}if(this.currentImageIndex<this.album.length-1){this.$lightbox.find(".lb-next").show();if(b){this.$lightbox.find(".lb-next").css("opacity","1")}}}}};c.prototype.updateDetails=function(){var b=this;if(typeof this.album[this.currentImageIndex].title!=="undefined"&&this.album[this.currentImageIndex].title!==""){this.$lightbox.find(".lb-caption").html(this.album[this.currentImageIndex].title).fadeIn("fast").find("a").on("click",function(f){if(d(this).attr("target")!==undefined){window.open(d(this).attr("href"),d(this).attr("target"))}else{location.href=d(this).attr("href")}})}if(this.album.length>1&&this.options.showImageNumberLabel){var a=this.imageCountLabel(this.currentImageIndex+1,this.album.length);this.$lightbox.find(".lb-number").text(a).fadeIn("fast")}else{this.$lightbox.find(".lb-number").hide()}this.$outerContainer.removeClass("animating");this.$lightbox.find(".lb-dataContainer").fadeIn(this.options.resizeDuration,function(){return b.sizeOverlay()})};c.prototype.preloadNeighboringImages=function(){if(this.album.length>this.currentImageIndex+1){var a=new Image();a.src=this.album[this.currentImageIndex+1].link}if(this.currentImageIndex>0){var b=new Image();b.src=this.album[this.currentImageIndex-1].link}};c.prototype.enableKeyboardNav=function(){d(document).on("keyup.keyboard",d.proxy(this.keyboardAction,this))};c.prototype.disableKeyboardNav=function(){d(document).off(".keyboard")};c.prototype.keyboardAction=function(i){var a=27;var b=37;var k=39;var l=i.keyCode;var j=String.fromCharCode(l).toLowerCase();if(l===a||j.match(/x|o|c/)){this.end()}else{if(j==="p"||l===b){if(this.currentImageIndex!==0){this.changeImage(this.currentImageIndex-1)}else{if(this.options.wrapAround&&this.album.length>1){this.changeImage(this.album.length-1)}}}else{if(j==="n"||l===k){if(this.currentImageIndex!==this.album.length-1){this.changeImage(this.currentImageIndex+1)}else{if(this.options.wrapAround&&this.album.length>1){this.changeImage(0)}}}}}};c.prototype.end=function(){this.disableKeyboardNav();d(window).off("resize",this.sizeOverlay);this.$lightbox.fadeOut(this.options.fadeDuration);this.$overlay.fadeOut(this.options.fadeDuration);d("select, object, embed").css({visibility:"visible"})};return new c()}));