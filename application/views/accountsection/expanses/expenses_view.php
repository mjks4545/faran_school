
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Expenses</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Expenses Details
                 <a href="<?= site_url()?>accountsection/expanses_index" type="button"  class="btn btn-primary btn-outline margin col-sm-1 pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">
                   <legend> <h2 style="text-align:center;">Expenses Report</h2></legend>
                    <button class="btn btn-primary btn-outline margin pull-right col-sm-1"  type="button"><span class="glyphicon glyphicon-print"></span>Print</button>
                    <table data-toggle="table"  data-show-refresh="true"  data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                          <tr>
                             <th class="text-center"><b>S.No</b></th>
                             <th class="text-center"><b>Description</b></th>
                             <th class="text-center"><b>Amount</b></th>
                             <th class="text-center"><b>Date</b></th>
                          </tr>
                         
                        </thead>
                            <tbody>
                                <?php 
                                    $amm = '';    
                                    foreach ($result as $array) {?>
                                <tr>
                                  <td><?= $array->expense_id?></td>
                                  <td><?= $array->item_name?></td>
                                  <?php $amm += $array->item_amount; ?>
                                  <td><?= $array->item_amount?></td>
                                  <td><?= $array->created_at?></td>
                                </tr>
                                
                                <?php }?>
                                <tr>
                                    
                                    <td  class="text-center"><b>TOTAL</b></td>
                                    <td></td>
                                    <td colspan="3" class="text-capitalize text-center"><?=$amm?></td>
                                    <td></td>
                                </tr>
                            </tbody>
                               
                    </table>
            </div>

        </div>

    </div><!--/.row-->
 
</div>