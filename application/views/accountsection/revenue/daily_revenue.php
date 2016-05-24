
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Daily Revenue</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Daily Report
                 <a href="<?= site_url()?>accountsection/revenue_index" type="button"  class="btn btn-primary btn-outline margin col-sm-1  pull-right"><b>Back</b></a>
                </div>
           
                <h4 style="position: relative;text-align:center; top: 30px;"><b>Daily Income/Expense Details</b></h4>
                <div class="panel-body" style="position: relative;top: 25px;">
                    <table data-toggle="table" data-show-refresh="false" data-search="false" data-pagination="false" data-sort-name="false" data-sort-order="false">
                        <thead>
                        <tr>
                            <th class="text-center" data-sortable="true"><b>Date</b></th>
                            <th class="text-center" data-sortable="true"><b>Daily Income</b></th>
                            <th class="text-center" data-sortable="true"><b>Daily Expenses</b></th>
                            <th class="text-center" data-sortable="true"><b>Daily Revenue</b></th>
                        </tr>
                        </thead>
                       <?php 
                        
                            $total_expense_daily = 0;
                            $total_income_amount_daily = 0;
                           
                            foreach( $expenses_day as $expense_d){
                                $total_expense_daily += $expense_d->item_amount;
                                
                            }
                            
                            foreach( $payment_day as $payment_d){
                              $total_income_amount_daily += $payment_d->amount;
                            } 
                            $revenue = $total_income_amount_daily - $total_expense_daily;
                           
                        ?>          
        
                        <tbody>
                        
                        <tr>
                            <td class="text-center"><?=mdate("%y-%m-%d")?></td>
                            <td class="text-center"><?=$total_income_amount_daily?></td>
                            <td class="text-center"><?=$total_expense_daily?></td>
                            <td class="text-center"><?=$revenue?></td>
                        </tr>
                      
                        </tbody>

                    </table>
                </div>
               
            </div>

        </div>

    </div><!--/.row-->
 </div><!--/.row-->
 
</div>



