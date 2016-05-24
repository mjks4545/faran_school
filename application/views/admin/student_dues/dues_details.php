
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Student Dues</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Student Dues Details
                 <a href="<?= site_url()?>admin/index" type="button" style="position: relative;width: 120px; left: 35px;" class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">
                   <legend> <h2 style="text-align:center;">Student Dues Report</h2></legend>
                    <button class="btn btn-primary btn-outline margin pull-right col-sm-1"  type="button"><span class="glyphicon glyphicon-print"></span>Print</button>
                    <table data-toggle="table"  data-show-refresh="false"  data-search="true" data-select-item-name="toolbar1" data-pagination="false" data-sort-name="name" data-sort-order="desc">
                        <thead>
                          <tr>                              
                             <th class="text-center"><b>Date</b></th>
                             <th class="text-center"><b>Student Id</b></th>
                             <th class="text-center"><b>Student Name</b></th>
                             <th class="text-center"><b>Father Name</b></th>
                             <th class="text-center"><b>Email</b></th>
                             <th class="text-center"><b>Contact</b></th>
                             <th class="text-center"><b>Address</b></th>
                             <th class="text-center"><b>Remaining Dues</b></th>
                             <th class="text-center"><b>Action</b></th>
                          </tr>
                         
                        </thead>
                            <tbody>
                                <?php foreach($result as $array){?>
				<?php 
				    $received_fee       = 0;
				    $fee_to_paid        = 0;
				    $remaining_amount   = 0;
				  ?>
				<tr>
				<?php foreach ( $payment as $array_1 ){
					if( $array_1->fkstudent_id == $array->s_id ){  
					      if( $array_1->tobepaid_or_paid_fee == 1 ){
						    $received_fee += $array_1->amount;
					      }else{
						    $fee_to_paid += $array_1->amount;
						  }
					      } 
				      }
				      $remaining_amount = $fee_to_paid - $received_fee;
				?>
                                  <td><?= $array->created_at?></td>
                                  <td><?= $array->s_id?></td>
                                  <td><?= $array->name?></td>
                                  <td><?= $array->f_name?></td>
                                  <td><?= $array->email?></td>
                                  <td><?= $array->guardian_number?></td>
                                  <td><?= $array->address?></td>
                                  <td><?= $remaining_amount?></td>
                                  <td>
                                      <a href="<?= site_url()?>admin/dues_invoice/<?= $array->s_id?>" type="button" class="btn btn-primary glyphicon glyphicon-print btn-outline margin pull-left"> Print Invoice</a>
                                  </td>
                                </tr>                               
                              <?php }?>
                            </tbody>
                    </table>
                </div>    
            </div>
        </div>
    </div> 
</div>

