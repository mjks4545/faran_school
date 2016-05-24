<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Teachers Records</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Teacher Record Details</h1>
        </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                 <a href="<?= site_url()?>admin/teacher_invoice" type="button" class="btn btn-primary glyphicon glyphicon-print btn-outline margin pull-right"> Print</a>
                 <a href="<?= site_url()?>admin/index" type="button" style="position: relative;width: 120px; left: 35px;" class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">
                   <legend> <h2 style="text-align:center;">Teachers Records Report</h2></legend>
                    <table data-toggle="table"  data-show-refresh="false"  data-search="true" data-select-item-name="toolbar1" data-pagination="false" data-sort-name="name" data-sort-order="desc">
                        <thead>
                          <tr>                              
                             <th class="text-center"><b>Teacher Id</b></th>
                             <th class="text-center"><b>Teacher Name</b></th>
                             <th class="text-center"><b>Father Name</b></th>
                             <th class="text-center"><b>Email</b></th>
                             <th class="text-center"><b>Contact</b></th>
                             <th class="text-center"><b>Address</b></th>
                             <th class="text-center"><b>Total Salary</b></th>
                             <th class="text-center"><b>Payed Salary</b></th>
                             <th class="text-center"><b>Reason</b></th>
                             <th class="text-center"><b>Remaining Salary</b></th>
                          </tr>
                         
                        </thead>
                            <tbody>
                                <?php 
                                $teacherid = 0;
                                $payment = 0;
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
                                  <td><?= $payment?></td>
                                </tr>
                                
                                <?php }?>
                               
                            </tbody>
                    </table>
                </div>    
            </div>
        </div>
    </div> 
</div>
</div>

