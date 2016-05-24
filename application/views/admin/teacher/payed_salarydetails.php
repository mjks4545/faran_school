<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Teacher / Pay Salary</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Salary Payment</h1>
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-10 margin_left">
            <div class="panel panel-default">
                <div class="panel-heading">
                <a href="<?= site_url()?>admin/teacher_view" type="button" class="btn btn-primary btn-outline margin col-sm-1  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">                            
                    <form role="form" method="post" action="<?= site_url()?>admin/teacher_salary"> 
                        <input type="hidden" name="t_id" value="<?= $result->t_id?>">
                        <input type="hidden" name="fkuser_id" value="<?= $result->fkuser_id?>">
                        <input type="hidden" name="qualification" value="<?= $result->qualification?>">
                        <input type="hidden" name="age" value="<?= $result->age?>">
                        <input type="hidden" name="contact" value="<?= $result->contact?>">
                        <input type="hidden" name="address" value="<?= $result->address?>">
                        <div class="row">
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-6">
                            <label>Total Salary</label>
                            <input type="text"  style="background:#444D53; color:white;" class="form-control" value="<?= $result->salary?>" readonly="">
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-1"></div>
                            <div class="form-group col-md-6">
                            <label>Date</label>
                            <input type="date" name="date"  style=" color:white;" class="form-control" value="" required="">
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-6">
                            <label>Reason</label>
                            <input type="text" name="amount_reason" style=" color:white;" class="form-control" placeholder="Reason" required="">
                        </div>
                         
                        </div>
                        
                        <div class="row">
                      
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-6">
                            <label>Enter Amount</label>
                            <input type="text" name="payed_salary" style="color: white" class="form-control" placeholder="Enter Amount" required>
                        </div>
                        </div>
                        <div class="row">
                         <div class="form-group col-md-1"></div>
                         <div class="form-group col-md-6">
                             <button style="position: relative;top: 15px;" type="submit" class="btn btn-primary col-sm-4">Submit</button>
                         </div>
                        </div>
                        
                    </form>   

                </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
</div>
</div>


