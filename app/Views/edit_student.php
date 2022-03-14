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
        
        <h2 class="text-center mt-4 mb-4">Add student</h2>

        <?php

        $validation = \Config\Services::validation();

        ?>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">UPDATE STUDENTS</div>
                    <div class="col text-right">
                        
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="<?php echo base_url("/students/add_validation")?>">
                    <div class="form-group">
                        <label>FIRST NAME</label>
                        <input type="text" name="fame" class="form-control" />
                        <?php
                        if($validation->getError('fname'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('fname').'</div>';
                        }
                        ?>
                    </div>
                     <label>LAST NAME</label>
                        <input type="text" name="lname" class="form-control" />
                        <?php
                        if($validation->getError('lname'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('lname').'</div>';
                        }
                        ?>
                    </div>  
                        <div class="form-group">
                        <label>ClASS</label>
                        <select name="gender" class="form-control">
                            <option value="">select</option>
                            <option value="stds">STD 6</option>
                            <option value="stdv">STD 7</option>
                            <option value="stde">STD 8</option>
                        </select>

                        <?php
                        if($validation->getError('class'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('class').'</div>';
                        }
                        ?>
                    </div>

                     <div class="form-group">
                        <label>STREAM</label>
                        <select name="gender" class="form-control">
                            <option value="">select</option>
                            <option value="stds">NORTH</option>
                            <option value="stdv">WEST</option>
                            <option value="stde">EAST</option>
                        </select>

                        <?php
                        if($validation->getError('stream'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('class').'</div>';
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>STUDENT ID</label>
                        <input type="text" name="fame" class="form-control" />
                        <?php
                        if($validation->getError('fname'))
                        {
                            echo '<div class="alert alert-danger mt-2">'.$validation->getError('fname').'</div>';
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