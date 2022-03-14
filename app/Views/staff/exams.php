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
        
        <h2 class="text-center mt-4 mb-4">EXAM RECORDS</h2>

        <?php

        $session = \Config\Services::session();

        if($session->getFlashdata('success'))
        {
            echo '
            <div class="alert alert-success">'.$session->getFlashdata("success").'</div>
            ';
        }

        ?>
         <div class="container">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible"
            content="ie=edge" />
    <meta author="Emmanuel Onah" />

    <title>
        GeeksforGeeks Search Bar
    </title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .container {
        box-sizing: border-box;
    }

    header {
        display: flex;
        align-content: center;
        align-items: center;
        justify-content: space-evenly;
        background: #d87093;
        padding: 0.5rem 1rem;
    }

    h3 {
        color: #000;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.98rem;
    }

    input[type='search'] {
        padding: 0.5rem 2rem 0.5rem 0.4rem;
        border-radius: 4rem;
        font-size: 0.98rem;
    }

    .movieCollection {
        width: 100%;
        margin: 0 auto;
        padding: 1rem;
        box-sizing: border-box;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        font-family: -apple-system,
            BlinkMacSystemFont,
            'Segoe UI', Roboto, Oxygen,
            Ubuntu, Cantarell, 'Open Sans',
            'Helvetica Neue', sans-serif;
    }

    .movieWrapper {
        margin-top: 1.5rem;
    }

    img {
        width: 400px;
        height: 400px;
        display: block;
    }
</style>


<body>
    <div class="container">
       <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit" id="s">Search</button>
        </form>
      </div>
    </nav>

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">AVAILABLE RECORD</div>
                    <div class="col text-right">
                        <a href="<?php echo base_url("/students/add_exam")?>" class="btn btn-success btn-sm">NEW RECORDt</a>
                        <a href="<?php echo base_url("school/signin")?>" class="btn btn-success btn-sm">BACK</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Student name</th>
                            <th>Exam Name</th>
                            <th>Date Done</th>
                            <th>MATH</th>
                            <th>ENG</th>
                            <th>KISW</th>
                            <th>SCIE</th>
                            <th>SS/REL</th>
                            <th>UPDATE</th>
                            <th>DELETE</th>
                        </tr>
                        <?php

                        if($querry)
                        {
                            foreach($querry as $user)
                            {
                                echo '
                                <tr>
                                    <td>'.$user["id"].'</td>
                                    <td>'.$user["stu_name"].'</td>
                                    <td>'.$user["exam_name"].'</td>
                                    <td>'.$user['created_at'].'</td>
                                    <td>'.$user["MATH"].'</td>
                                    <td>'.$user["ENG"].'</td>
                                    <td>'.$user["KISW"].'</td>
                                    <td>'.$user["SCIE"].'</td>
                                    <td>'.$user["SS/REL"].'</td>
                                    <td><a href="'.base_url().'/students/edit/'.$user["id"].'" class="btn btn-sm btn-warning">UPDATE</a></td>
                                    <td><button type="button" onclick="delete_data('.$user["id"].')" class="btn btn-danger btn-sm">DELETE</button></td>
                                </tr>';
                            }
                        }

                        ?>
                    </table>
                </div>
            
            </div>
        </div>

    </div>
 
</body>
</html>
<style>
.pagination li a
{
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6;
}

.pagination li.active a {
    z-index: 1;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
</style>

<script>
function delete_data(id)
{
    if(confirm("Are you sure you want to remove it?"))
    {
        window.location.href="<?php echo base_url(); ?>/students/delete/"+id;
    }
    return false;
}
</script>
<?php include("footer.php"); ?>