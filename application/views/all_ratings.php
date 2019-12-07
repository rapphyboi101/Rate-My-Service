<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CBMS Location Database</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/ratings.css">
</head>
<body>
<h1>Ratings</h1>
 <?php
        echo form_open('rating/rate_me');
        ?>
        <select name="departments">
          <?php foreach($departments as $dept_option){?>
            <option value="<?= $dept_option['dept_id'] ?>"><?= $dept_option['dept_alias'] ?></option>
          <?php } ?>
        </select>
 <table class="data-table">
    <br>
    <thead>
        <tr>
            <th>Points</th>
            <th>Name</th>
            <th>Feedback</th>
            <th>Department</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($ratings as $rating){ ?>
        <tr>
            <td><?php echo $rating['points']; ?></td>
            <td><?php echo $rating['name']; ?></td>
            <td><?php echo $rating['feedback']; ?></td>
            <td><?php echo $rating['dept_alias']; ?></td>
        <?php } ?>
        </tr>
    </tbody>
  </table>
</body>
</html>