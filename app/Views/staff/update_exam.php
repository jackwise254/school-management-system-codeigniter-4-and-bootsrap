<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
     content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>school dashboard</title>
    <!--  -->
</head>
<body>
     <div class="container">
        
        <h2 class="text-center mt-4 mb-4">Edit Record</h2>

        <?php

        $validation = \Config\Services::validation();

        ?>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">UPDATE RECORD</div>
                    <div class="col text-right">
                        
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="<?php echo base_url("/students/exam_validation")?>">
                    <div class="form-group">
                        <label>STUDENT NAME</label>
                        <input type="text" name="fame" class="form-control" />
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
                     <label>DATE DONE</label>
                        <input type="text" name="created_at" class="form-control" />
                        <?php
                        if($validation->getError('created_at'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('created_at').'</div>';
                        }
                        ?>
                    </div> 
                    </div>
                     <label>MATH</label>
                        <input type="text" name="created_at" class="form-control" />
                        <?php
                        if($validation->getError('MATH'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('MATH').'</div>';
                        }
                        ?>
                    </div> 
                </div>
                     <label>ENG</label>
                        <input type="text" name="ENG" class="form-control" />
                        <?php
                        if($validation->getError('ENG'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('ENG').'</div>';
                        }
                        ?>
                    </div> 

                    </div>
                    <div class="form-group">
                        <label>KISW</label>
                        <input type="text" name="fame" class="form-control" />
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
                        <input type="text" name="fame" class="form-control" />
                        <?php
                        if($validation->getError('KISW'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('KISW').'</div>';
                        }
                        ?>
                    </div>
                     
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <a href="<?php echo base_url("school/signin")?>" class="btn btn-success btn-sm">BACK</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
 
</body>
</html>
<?php include("footer.php"); ?>