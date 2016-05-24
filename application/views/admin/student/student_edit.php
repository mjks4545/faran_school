<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Admin / Edit Student</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Update Student</h1>
        </div>
    </div><!--/.row-->
    <?php //echo '<pre>';
//print_r($result);die()?>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Form
                <a href="<?= site_url()?>admin/student_view" type="button" style="position: relative;width: 120px; " class="btn btn-primary btn-outline margin  pull-right"><b>Back</b></a>
                </div>
                <div class="panel-body">

                    <form role="form" method="post" action="<?= site_url()?>admin/update_student_after_post/<?= $result->s_id; ?>/<?= $result->u_id; ?>">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Student Name</label>
                                <input type="text" name="name" style="color: white" class="form-control" placeholder="Name" value="<?php echo $result->name ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Father Name</label>
                                <input type="text" name="f_name" style="color: white" class="form-control" placeholder="Father Name" value="<?php echo $result->f_name ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Date Of Birth</label>
                                <input type="date" name="age" style="color: white" class="form-control" value="<?php echo $result->age ?>" placeholder="Age" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Village Address</label>
                                <input type="text" name="address" style="color: white" class="form-control" placeholder="Address" value="<?php echo $result->address ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Guardian Number</label>
                                <input type="text" name="g_number" style="color: white" class="form-control" placeholder="Guardian Number" value="<?php echo $result->guardian_number ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" style="color: white" class="form-control" placeholder="Email" value="<?php echo $result->email ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Class</label>
                                <input type="text" name="class" style="color: white" class="form-control" placeholder="Class" value="<?= $result->class ?>" required>
                            </div>
                        </div>
                       
                        <div class="row">
                          
                            <div class=" col-sm-10">
                                <button type="submit" class="btn btn-primary col-sm-2">Submit</button>
                            </div>
                    </form>

                </div>
            </div>
        </div><!-- /.col-->
    </div>
    </div>
</div>