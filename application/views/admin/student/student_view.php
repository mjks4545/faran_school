<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Admin / View Students</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Students</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div  class="panel-heading">Students Record
                <a href="<?= site_url()?>admin/student_add" type="button" style="position: relative;width: 170px; " class="btn btn-primary btn-outline margin  pull-right"><b>Add New Record</b></a>
                <a href="<?= site_url()?>admin/index" type="button" style="position: relative;width: 120px;left: 35px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">
                    <table data-toggle="table" data-show-refresh="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                        <tr>
                            <th  data-sortable="true"><b>Reg No</b></th>
                            <th  data-sortable="true"><b>Name</b></th>
                            <th  data-sortable="true"><b>Father Name</b></th>
                            <th  data-sortable="true"><b>Guardian Contact</b></th>
                            <th  data-sortable="true"><b>Email</b></th>
                            <th  data-sortable="true"><b>Date Of Birth</b></th>
                            <th  data-sortable="true"><b>Class</b></th>
                            <th  data-sortable="true"><b>Address</b></th>
                            <th  data-sortable="true"><b>Remaining Fee</b></th>
                            <th  class="text-center " data-sortable="true"><b>Actions</b></th>
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
                            <?php foreach ( $result_1 as $array_1 ){
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
                            <td><?=$array->s_id?></td>
                            <td><?=$array->name?></td>
                            <td><?=$array->f_name?></td>
                            <td><?=$array->guardian_number?></td>
                            <td><?=$array->email?></td>
                            <td><?=$array->age?></td>
                            <td><?=$array->class?></td>                            
                            <td><?=$array->address?></td>
                            <td><?=$remaining_amount?></td>
                            <td>
                                <a href="<?= site_url()?>admin/student_edit/<?= $array->s_id?>" type="button" class="btn btn-primary glyphicon glyphicon-edit btn-outline margin pull-left"> Edit</a>
                                <a href="<?= site_url()?>admin/student_remainingpayment/<?= $array->s_id?>" type="button" class="btn btn-primary glyphicon glyphicon-briefcase btn-outline margin pull-left"> Pay Dues</a>
                                <a href="<?= site_url()?>admin/add_studentfine/<?= $array->s_id?>" type="button" class="btn btn-primary glyphicon glyphicon-briefcase btn-outline margin pull-left"> Add Fine</a>
                                <a href="<?= site_url()?>admin/student_delete/<?= $array->s_id?>/<?= $array->u_id?>" type="button" class="btn btn-primary glyphicon glyphicon-trash btn-outline margin pull-left"> Delete</a>

                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->

</div><!--/.main-->