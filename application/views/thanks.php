<?php 	if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>
<head><title>Thank You!</title>
	
	<link rel="manifest" href="manifest.json">
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="icon.png">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/thanks.css">
	<script language="javascript">
		setTimeout(function(){
			window.location.href="<?php echo base_url();?>index.php/Rating/rate_me_again";}, 5000);
	</script>
		

</head>
<body>

<div class="container">
	<p>Thank You For Your Feedback!</p>
	<div class="image-container">
		<img src="<?php echo base_url(); ?>assets/thumbs-up.png">
	</div>
</div>

</body>
</html>