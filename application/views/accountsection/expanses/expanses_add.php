<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Accounts / Expenses</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Expenses</h1>
        </div>
    </div><!--/.row-->
     
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div  class="panel-heading">Add Expanses Form
                <a href="<?= site_url()?>accountsection/expanses_index" type="button" style="position: relative;width: 120px;" class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
               
                <div class="panel-body margin_left">
		    
                    <form role="form" method="post" action="<?= site_url()?>accountsection/create_expenses_after_post"> 
                        <div class="row ">
                            <div class="form-group col-sm-5">
                                <label >Description</label>
                                <select  name="item_name_1" class="form-control" style="background:#444D53; color:white;">
                                    <option>Select desired option</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Utility Bills">Utility Bills</option>
                                    <option value="Stationary">Stationary</option>
                                    <option value="Tax">Tax</option>
                                    <option value="Others">Others</option>
                               </select>
                            </div>
                            <div class="form-group col-sm-2">
                                <label class="margin_left">Amount</label>
                                <input type="text" name="item_amount_1" style="color: white" class="form-control" placeholder="Amount" >
                                <input type="hidden" id="number" name="number" value="1" />
                            </div>
                            <div class="form-group col-sm-2">
				<label></label>
                                <a id="add_another_expenses" href="#" style="position: relative;top: 22px;right: 80px;" class="btn btn-primary btn-outline margin  pull-right"><b>Add Another</b></a>
                            </div>
                        </div>
			<div id="add-another-one_func">
			    
			</div>    
			<div class="row">
                            <div class=" col-md-12">
                                <button style="position: relative;top: 10px;" type="submit" class="btn btn-primary col-sm-2">Submit</button>
                            </div>

                         </div>
                  
                    </form>

                </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
</div>

