<?php
// java script . No one can see php when they do view source . This is good thing about php . 

?>


<script src ="//code.jquery.com/jquery-1.10.2.min.js"></script>

<script src ="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#console-debug").hide();
		$("#btn-debug").click(function(){
			
			$("#console-debug").toggle();
			
		}) ;
		
		
		
	} )
</script>