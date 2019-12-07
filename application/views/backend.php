
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rating Database</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
</head>

<body>
<?php echo form_open('Rating/getYear');?>
  <select name="rateYear">
    <?php foreach ($years as $year){?>
      <option value="<?php echo $year['rate_year'];?>"><?php echo $year['rate_year'];?></option>
        <?php } ?>
  </select>
  <input type="submit" name="BackSubmit" value="Submit">
<?php echo form_close();?>
                            <canvas id="myChartAG"></canvas>
                            <br>
                            <canvas id="myChartHP"></canvas>
                            <br>
                            <canvas id="myChartPT"></canvas>

                 
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/mdb.min.js"></script>

    <!-- Charts -->
    <script>
var ctx = document.getElementById("myChartAG").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["ACCOUNTING","AGRI - MAO","ANNEX1ST","ASSESOR","BFP","BJMP","BPLO","BTECH","BTMO","BUDGET","CAO","CEMETERY","COA","COMELEC","CONFERENCE","DILG","ENGINEERING","GSO"],
        datasets: [{
            label: 'Average Rating A-G',
            data: [<?php echo $a->avg_points?>,
                   <?php echo $b->avg_points?>,
                   <?php echo $c->avg_points?>,
                   <?php echo $d->avg_points?>,
                   <?php echo $e->avg_points?>,
                   <?php echo $f->avg_points?>,
                   <?php echo $g->avg_points?>,
                   <?php echo $h->avg_points?>,
                   <?php echo $i->avg_points?>,
                   <?php echo $j->avg_points?>,
                   <?php echo $k->avg_points?>,
                   <?php echo $l->avg_points?>,
                   <?php echo $m->avg_points?>,
                   <?php echo $n->avg_points?>,
                   <?php echo $o->avg_points?>,
                   <?php echo $p->avg_points?>,
                   <?php echo $q->avg_points?>,
                   <?php echo $r->avg_points?>,
                   ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(0, 0, 0, 1)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

<script>
var ctx = document.getElementById("myChartHP").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["HRMO","IPU","LCR","LIBRARY","MALASAKIT","MARKET","MAYORS","MDRRMO","MDRRMO","MEEM","MENRO","MHO","MICTO","MLO","MPDC","MSWDO","OSCA","PDAO"],
        datasets: [{
            label: 'Average Rating H-P',
            data: [<?php echo $s->avg_points?>,
                   <?php echo $t->avg_points?>,
                   <?php echo $u->avg_points?>,
                   <?php echo $v->avg_points?>,
                   <?php echo $w->avg_points?>,
                   <?php echo $x->avg_points?>,
                   <?php echo $y->avg_points?>,
                   <?php echo $z->avg_points?>,
                   <?php echo $aa->avg_points?>,
                   <?php echo $bb->avg_points?>,
                   <?php echo $cc->avg_points?>,
                   <?php echo $dd->avg_points?>,
                   <?php echo $ee->avg_points?>,
                   <?php echo $ff->avg_points?>,
                   <?php echo $gg->avg_points?>,
                   <?php echo $hh->avg_points?>,
                   <?php echo $ii->avg_points?>,
                   <?php echo $jj->avg_points?>,
                   ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(0, 0, 0, 1)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

<script>
var ctx = document.getElementById("myChartPT").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["PESO","PIO","PNP","POL","POPCOM/NUT","RHU I","RHU II","RHU III","RHU IV","S.B","SANITATION","SOME","SOME2","SPORTS","TOURISM","TOURISM","TREASURY"],
        datasets: [{
            label: 'Average Rating P-T',
            data: [<?php echo $kk->avg_points?>,
                   <?php echo $ll->avg_points?>,
                   <?php echo $mm->avg_points?>,
                   <?php echo $nn->avg_points?>,
                   <?php echo $oo->avg_points?>,
                   <?php echo $pp->avg_points?>,
                   <?php echo $qq->avg_points?>,
                   <?php echo $rr->avg_points?>,
                   <?php echo $ss->avg_points?>,
                   <?php echo $tt->avg_points?>,
                   <?php echo $uu->avg_points?>,
                   <?php echo $vv->avg_points?>,
                   <?php echo $ww->avg_points?>,
                   <?php echo $xx->avg_points?>,
                   <?php echo $yy->avg_points?>,
                   <?php echo $zz->avg_points?>,
                   <?php echo $aaa->avg_points?>
                   ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(0, 0, 0, 1)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>


</body>

</html>
