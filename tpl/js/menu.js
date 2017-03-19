$(document).ready(function(){
	$(".nav li").hover(
	  function () {
	    $(".nav_open").css("display","block");
	  	$(".logo").children().attr("src","images/szu_logo.png");
	  	$(".logo").children().attr("srcset","images/szu_logo@2x.png 2x");
	  },
	  function () {
	    $(".nav_open").css("display","none");
	    $(".logo").children().attr("src","images/logo.png");
	  	$(".logo").children().attr("srcset","images/logo@2x.png 2x");
	  }
	);
	$(".nav_open").hover(
	  function () {
	    $(".nav_open").css("display","block");
	    $(".logo").children().attr("src","images/szu_logo.png");
	  	$(".logo").children().attr("srcset","images/szu_logo@2x.png 2x");
	  },
	  function () {
	    $(".nav_open").css("display","none");
	    $(".logo").children().attr("src","images/logo.png");
	  	$(".logo").children().attr("srcset","images/logo@2x.png 2x");
	  }
	);
}
);