<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Students / Add Fine</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Fine</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div  class="panel-heading">Add Fine Form
                <a href="<?= site_url()?>admin/student_view" type="button" style="position: relative;width: 120px;" class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
               
                <div class="panel-body margin_left">
		    
                    <form role="form" method="post" action="<?= site_url()?>admin/create_fines_after_post"> 
                        <div class="row ">
                            <div class="form-group col-sm-5">
                                <label >Description</label>
                                <select  name="fine_reason" class="form-control" style="background:#444D53; color:white;">
                                    <option value="#">Select Fine Reason</option>
                                    <?php foreach ($result as $reason){ ?>
                                        <option value="<?= $reason->fine_reason_name;?>"><?= $reason->fine_reason_name;?></option>
                                    <?php } ?>
                                 </select>
                            </div>
                            
                            <div class="form-group col-sm-2">
                                <label class="margin_left">Amount</label>
                                <input type="hidden" name="userid" value="<?php echo $id?>" />
                                <input type="text" name="item_amount_1" style="color: white" class="form-control" placeholder="Amount" >
                                <input type="hidden" id="number" name="number" value="1" />
                            </div>
                            <div class="form-group col-sm-2">
				<label></label>
                                <a id="add-another" href="#" style="position: relative;top: 25px;right: 40px;" class="btn btn-primary col-sm-7 btn-outline margin  pull-right"><b>Add Another</b></a>
                            </div>
                        </div>
			<div id="add-another-one">
			    
			</div>    
			  
			</div>
                       
                        <div class="row">
                            <div class=" col-md-12">
                                <button style="position: relative;bottom: 10px;left: 60px;" type="submit" class="btn btn-primary col-sm-2">Submit</button>
                            </div>

                         </div>
                  
                    </form>

                </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
</div>



