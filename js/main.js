$(document).ready(function(){
	// LOAD HOME READY
	$("#contentpage").load("inc/index_common.php");
	// LOAD HOME ON CLICK
	$(".home").click(function(){
		$("#contentpage").load("inc/index_common.php");
	});
	// LOAD LT RD ON CLICK
	$(".ltrd").click(function(){
		$("#contentpage").load("inc/lotteryrd_common.php");
	});
	// LOAD LT USA ON CLICK
	$(".ltusa").click(function(){
		$("#contentpage").load("inc/lotteryusa_common.php");
	});
	// TOOLS ON CLICK
	$(".tools").click(function(){
		$("#contentpage").load("inc/tools_common.php")
	});	



	//MOVILE MENU
	$(document).ready(function() {
		$('#mobile-menu-button').on('click', toggleMobileMenu);
		$('#btnselect').on('click',function(){
			alert("Hola");
		})
	});

	// TOOLS ON CLICK


	//MOVILE MENU FUN

		function toggleMobileMenu() 
		{
			var $mobileMenu = $('#mobile-main-menu');	
			$mobileMenu.slideToggle('fast');
		}

});