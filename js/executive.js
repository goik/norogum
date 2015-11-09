$(document).ready(function(){


	// target blank on link
	$(".tb").each(function(){
		$(this).attr("target","_blank");
	});

	// hide visible tag alt & title
	var getAlt="",getTitle="";
	$("body").on("mouseenter",".hta",function(){
		tag=$(this);
		getAlt=tag.attr("alt");
		getTitle=tag.attr("title");
		tag.attr("alt","");
		tag.attr("title","");
	});

	$("body").on("mouseleave",".hta",function(){
		tag=$(this);
		tag.attr("alt",getAlt);
		tag.attr("title",getTitle);
	});

	//login drop down
	$("body").on("mouseenter",".enter-btn",function(){
		dropDown=$(this).find(".login-drop-down");
		dropDown.css({display:"block"}).stop().animate({opacity:1},300);
		clearTimeout(dropDownTimeOut);
	});
	$("body").on("mouseleave",".enter-btn",function(){
		dropDown=$(this).find(".login-drop-down");
		dropDownTimeOut=setTimeout(function(){
			dropDown.stop().animate({opacity:0},300,function(){
				$(this).css({display:"none"});
			});
		},600);
	});

	$("body").on("click",".js-drop-down-selector",function(e){
		e.stopPropagation();
		return false;
	});

	$("body").click(function(){
			clearTimeout(dropDownTimeOut);		
			$(".login-drop-down").stop().animate({opacity:0},300,function(){
				$(this).css({display:"none"});
			});
	});


	// link anchor aminamte
	$('a[href*=#]:not([href=#])').click(function(){
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 1200);
			return false;
		  }
		}
	});

 });