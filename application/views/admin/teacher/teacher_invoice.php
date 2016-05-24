<!Doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Faran Science School</title>
    <!--<link rel="stylesheet" href="css/bootstrap.css">-->
    <link href="<?=base_url()?>public/css/bootstrap.css" rel="stylesheet">
    <style>
      @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
      body, h1, h2, h3, h4, h5, h6{
      font-family: 'Bree Serif', serif;
      }
    </style>
  </head>
  
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <h1>
            <!--<img src="logo.png">-->
            <img src="../public/img/faran_school_logo.png" alt="mypic" width="190px" height="120px"/>
            </a>
          </h1>
        </div>
        <div class="col-xs-6 text-right">
          <h1>INVOICE</h1>
          <h1><small>Invoice #001</small></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
            <div class="panel-heading">
              <h4>Faran Science School</h4>
            </div>
            <div class="panel-body">
              <p>
                Address: Charsadda Road, Peshawar City  <br>
                Tel; +92 91-2244174, 2245821 <br>
                
              </p>
            </div>
        </div>
        <div class="col-xs-5 col-xs-offset-2 text-right">
         
            <div class="panel-heading">
            </div>
            <div class="panel-body">
              <p>
                Date: <?php echo $date = mdate("%y-%m-%d");?>  <br>
              </p>
            </div>
        </div>
      </div>
      <!-- / end client details section -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>
              <h4>Teacher Id</h4>
            </th>
            <th>
              <h4>Teacher Name</h4>
            </th>
            <th>
              <h4>Father Name</h4>
            </th>
            <th>
              <h4>Email</h4>
            </th>
            <th>
              <h4>Contact</h4>
            </th>
            <th>
              <h4>Address</h4>
            </th>
            <th>
              <h4>Total Salary</h4>
            </th>
            <th>
              <h4>Payed Salary</h4>
            </th>
            <th>
              <h4>Reason</h4>
            </th>
            <th>
              <h4>Remaining Salary</h4>
            </th>
            
          </tr>
        </thead>
        <tbody>
          <?php 
          $teacherid = 0;$payment = 0;$total = 0;
          foreach ($result as $array) {?>
          <tr>
            <td><?= $array->t_id?></td>
            <td><?= $array->name?></td>
            <td><?= $array->f_name?></td>
            <td><?= $array->email?></td>
            <td><?= $array->contact?></td>
            <td><?= $array->address?></td>
            <td><?= $array->salary?></td>
            <td><?= $array->payed_salary?></td>
            <td><?= $array->amount_reason?></td>
            <?php 
                if($teacherid == $array->t_id){
                    $payment = $payment - $array->payed_salary;
                    $payment = $payment;
                }else{
                    $remaining_pay = $array->salary - $array->payed_salary;
                    $payment = $remaining_pay;
                }
                $teacherid = $array->t_id;

              ?>
            <td class="text-right"><?= $payment?></td>
            <?php  
                $total += $payment;
            ?>
          </tr>      
          <?php }?>
        </tbody>
      </table>
      
  </body>
</html>

