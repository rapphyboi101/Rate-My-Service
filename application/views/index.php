
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="manifest" href="manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="icon.png">
    <title>Rate Our Service</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="row">  
      <div class="col-md-4"></div>
      <div class="col-md-4" id="main">
          <p id="select_d">
            Select a Department
          </p><br>
          <?php
        echo form_open('rating/rate_me');
        ?>
        <select class="drop-down" name="departments">
          <?php foreach($departments as $dept_option){?>
            <option value="<?= $dept_option['dept_id'] ?>"><?= $dept_option['dept_alias'] ?></option>
          <?php } ?>
        </select><br><br>
              <input type="image" src="<?php echo base_url(); ?>/assets/Submit_button.png" name="rateSubmit" value="Submit"> 
        </form>
      
      </div>  
      <div class="col-md-4"></div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>