<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
     content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>ACADEMICS</title>
    <!--  -->
</head>
<body>
    <div class="container">
        
        <h2 class="text-center mt-4 mb-4">NEW RECORD</h2>

        <?php

        $validation = \Config\Services::validation();

        ?>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">NEW RECORD</div>
                    <div class="col text-right">
                        
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="<?php echo base_url("/students/exam_validation")?>">
                    <div class="form-group">
                        <label>Student name</label>
                        <input type="text" name="stu_name" class="form-control" />
                        <?php
                        if($validation->getError('stu_name'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('stu_name').'</div>';
                        }
                        ?>
                    </div>
                     <label>EXAM NAME</label>
                        <input type="text" name="exam_name" class="form-control" />
                        <?php
                        if($validation->getError('exam_name'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('exam_name').'</div>';
                        }
                        ?>
                    
                    </div>
                    <div class="form-group">
                        <label>DATE DONE</label>
                        <input type="text" name="date_done" class="form-control" />
                        <?php
                        if($validation->getError('date_done'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('date_done').'</div>';
                        }
                        ?>
                    </div>
                     <div class="form-group">
                        <label>MATH</label>
                        <input type="text" name="MATH" class="form-control" />
                        <?php
                        if($validation->getError('MATH'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('MATH').'</div>';
                        }
                        ?>
                    </div>
                     <div class="form-group">
                        <label>ENG</label>
                        <input type="text" name="ENG" class="form-control" />
                        <?php
                        if($validation->getError('ENG'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('ENG').'</div>';
                        }
                        ?>
                    </div>
                     <div class="form-group">
                        <label>KISW</label>
                        <input type="text" name="KISW" class="form-control" />
                        <?php
                        if($validation->getError('KISW'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('KISW').'</div>';
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>SCIE</label>
                        <input type="text" name="SCIE" class="form-control" />
                        <?php
                        if($validation->getError('SCIE'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('SCIE').'</div>';
                        }
                        ?>
                    </div>
                     <div class="form-group">
                        <label>SS/REL</label>
                        <input type="text" name="SS/REL" class="form-control" />
                        <?php
                        if($validation->getError('SS/REL'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('date_done').'</div>';
                        }
                        ?>
                    </div>
                     
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <a href="<?php echo base_url("school/signin")?>" class="btn btn-success btn-sm">BACK</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
 
</body>
</html>
<?php include("footer.php"); ?>

