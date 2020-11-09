/*--------------------------------------
		CUSTOM FUNCTION WRITE HERE		
--------------------------------------*/
"use strict";
jQuery(document).on('ready', function() {
	$(".at-btniconsearch").click(function(){
		$(".at-hideinput").toggleClass("at-inputhideshow");
	});
	$(".at-sidebarbtn").click(function(){
		$(".at-wrapper").toggleClass("at-showmenu")
	})
	$(".at-btneyeicons").click(function(){
		$(".at-wrapper").toggleClass("at-closemenu")
	})
	$(".at-btnaddquetion").click(function(){
		$(".at-wtitequestion").css({"display" : "block"});
	});
	$(".at-btnaddquetion").click(function(){
		$(".at-btnaddquetion").css({"display" : "none"});
	});
	$(".at-btnnext").click(function(){
		$(".at-wtitequestion , .at-btnnext").css({"display" : "none"});
	});
	$(".at-btnnext").click(function(){
		$(".at-addoptionholder").css({"display" : "block"});
	});
	$(".at-btnaddoption").click(function(){
		$(".at-writeoption").css({"display" : "block"});
	});
	$(".at-btnnexttwo").click(function(){
		$(".at-writeoption , .at-addoptionholder").css({"display" : "none"});
	});
	$(".at-btnnexttwo").click(function(){
		$(".at-showquetionopetion").css({"display" : "block"});
	});
	$(".at-btniconmenu").click(function(){
		$(".at-navigation").slideToggle();
	});
});
