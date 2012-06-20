	function slide() {
	   $('.slideTogglebox').slideUp(0);   
	   $('.slideTogglebox2').slideUp(0);
	   $('.slideTogglebox3').slideUp(0); 
	   $('.slideTogglebox4').slideUp(0);	
	   $('.slideTogglebox5').slideUp(0);	
	   $('.slideTogglebox6').slideUp(0); 
	}

	$(document).ready(function() {
		$("#slideToggle").click(function () {
			$('.slideTogglebox').slideToggle();
			$('.slideTogglebox2').slideUp();
			$('.slideTogglebox3').slideUp();	
		   $('.slideTogglebox4').slideUp();	
		   $('.slideTogglebox5').slideToggle();	 
		   $('.slideTogglebox6').slideUp();						
		});

		$("#slideToggle2").click(function () {
		   $('.slideTogglebox2').slideToggle();
		   $('.slideTogglebox').slideUp();
		   $('.slideTogglebox3').slideUp();
		   $('.slideTogglebox4').slideUp();	
		   $('.slideTogglebox5').slideToggle();	 
		   $('.slideTogglebox6').slideUp();				   
		});
		
		$("#slideToggle3").click(function () {
		   $('.slideTogglebox3').slideToggle();
		   $('.slideTogglebox').slideUp();
		   $('.slideTogglebox2').slideUp();	
		   $('.slideTogglebox4').slideUp();
		   $('.slideTogglebox5').slideUp();			   		   
		   $('.slideTogglebox6').slideUp();			   
		});	

		$("#slideToggle4").click(function () {
		   $('.slideTogglebox').slideUp();
		   $('.slideTogglebox1').slideUp();
		   $('.slideTogglebox2').slideUp();	
		   $('.slideTogglebox4').slideToggle();	
		   $('.slideTogglebox5').slideUp();	
		   $('.slideTogglebox6').slideUp();			   		   		   		   
		});

		$("#slideToggle5").click(function () {
		   $('.slideTogglebox').slideUp();
		   $('.slideTogglebox1').slideUp();
		   $('.slideTogglebox2').slideUp();
		   $('.slideTogglebox4').slideUp();	
		   $('.slideTogglebox5').slideToggle();	 
		   $('.slideTogglebox6').slideUp();		     		   
		});	

		$("#slideToggle6").click(function () {
		   $('.slideTogglebox6').slideToggle();
		   $('.slideTogglebox').slideUp();
		   $('.slideTogglebox2').slideUp();	
		   $('.slideTogglebox3').slideUp();		   
		   $('.slideTogglebox4').slideUp();
		   $('.slideTogglebox5').slideUp();			   		   
		});				

	});