// Carousel Auto-Cycle
$(document).ready(function() {
		
	
	/* check box  options */      
	
	 $('#check15')[0].checked = true; 
		$("#ur").fadeIn();
			$("#em").fadeOut();
			$("#up").fadeOut();
	$('.myCheckbox').click(function() {
			
			$(this).siblings('input:checkbox').prop('checked', false);
			
		});
	      
   
        
	$("#checkbox input:checkbox").on('click',function(){
		
        $this = $(this);
		 
        if( $this.val() == "check15" ){
            $("#ur").fadeIn("slow");
			$("#em").fadeOut("slow");
			$("#up").fadeOut("slow");
			
        }
		
		else if($this.val() == "check16") {
            $("#ur").fadeOut("slow");
			$("#em").fadeIn("slow");
			$("#up").fadeOut("slow");
			
        } 
		else if($this.val() == "check17") {
            $("#ur").fadeOut("slow");
			$("#em").fadeOut("slow");
			$("#up").fadeIn("slow");
			
        }
		
		
		else{
			 $("#ur").fadeIn("slow");
			$("#em").fadeOut("slow");
			$("#up").fadeOut("slow");
			
            
		}
    });
   
  
	
   
});
	
