<?php 	if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>
<head>
	<!--<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">-->
	<link rel="manifest" href="manifest.json">
<meta name="mobile-web-app-capable" content="yes">
<link rel="icon" sizes="192x192" href="icon.png">
	<title>Rate Our Service</title>
	<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/func.js" ></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/index-style.css">
</head>
<body>
	<div class="form-container">
		<div class="form-center">
				<p align="center" class="header"><i><b>Please rate our service</b></i></p>
				<?php echo form_open('rating/add_rating');?>
					<table align="center" >
						<tr>
							<td><div class="image-container" ><img src="<?php echo base_url(); ?>assets/star1.png" onclick="input1()" id="check1" oncontextmenu="return false"></div></td>
							<td><div class="image-container"><img src="<?php echo base_url(); ?>assets/star2.png" onclick="input2()" id="check2"></div></td>
							<td><div class="image-container"><img src="<?php echo base_url(); ?>assets/star3.png" onclick="input3()" id="check3"></div></td>
							<td><div class="image-container"><img src="<?php echo base_url(); ?>assets/star4.png" onclick="input4()" id="check4"></div></td>
							<td><div class="image-container"><img src="<?php echo base_url(); ?>assets/star5.png" onclick="input5()" id="check5"></div></td>
						</tr>
					</table>
					<br>
					<input type="text" name="a" value="<?php echo $department?>" hidden>
					<input type="text" id="point" name="points" hidden>
					<div class="text-container">
						<div>
							<input type="text" name="name" id="nameFont" class="form-control" placeholder=
							"Enter Your Name">
							<label>Suggestions or Comments</label>
							<textarea rows="5" cols="50" name="feedback" id="wideInput" class="form-control" placeholder="Let us know more.." onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }"></textarea>
						</div>
						<div class="btn-container">
							<input type="image" id="rSubmit" src="<?php echo base_url(); ?>/assets/Submit_button.png" name="rateSubmit" value="Submit">
						</div>
					</div>
				<?php echo form_close();?>
		</div>		
	</div>

		

</body>
</html>