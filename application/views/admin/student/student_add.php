
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Reception/Student Registration</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Student Registration</h1>
        </div>
    </div><!--/.row-->
    

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registration Form
                 <a href="<?= site_url()?>admin/student_view" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">

                <form role="form" method="post" action="<?= site_url()?>admin/create_student_after_post/<?= $result_1[0]->course_id?>">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input type="text" name="name" style="color: white" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Father Name</label>
                            <input type="text" name="f_name" style="color: white" class="form-control" placeholder="Father Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Date Of Birth</label>
                            <input type="date" name="age" style="color: white" class="form-control" placeholder="Date of Birth" required>
                        </div>
                        <div class="form-group col-md-6">
                                <label>Address</label>
                                <input type="text" name="address" style="color: white" class="form-control" placeholder="Address" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Guardian Number</label>
                            <input type="text" name="g_number" style="color: white" class="form-control" placeholder="Guardian Number" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" name="email" style="color: white" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                 
                   
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Class</label>
                            <input type="text" name="class" style="color: white" class="form-control" placeholder="Class" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Admission Fee</label>
                            <input type="text" name="admission_fee" style="color: white" class="form-control" placeholder="Admission Fee" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Monthly Fee</label>
                            <input type="text" name="monthly_fee" style="color: white" class="form-control" placeholder="Monthly Fee" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Amount Received</label>
                            <input type="text" name="amount_received" style="color: white" class="form-control" placeholder="Amount Recieved" required>
                        </div>
                    </div>
                    <input type="hidden" name="tobepaid_or_paidfee" style="color: white" class="form-control">
                    <input type="hidden" name="entry_against" style="color: white" class="form-control">
                    <input type="hidden" name="description" style="color: white" class="form-control">



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
<script>
    jQuery(document).ready(function(){
	jQuery(".chosen").data("placeholder","Select Frameworks...").chosen();
    });
</script>
    

  
                       