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
        
        <h2 class="text-center mt-4 mb-4">List of registered students</h2>

        <?php

        $session = \Config\Services::session();

        if($session->getFlashdata('success'))
        {
            echo '
            <div class="alert alert-success">'.$session->getFlashdata("success").'</div>
            ';
        }

        ?>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit" id="search">Search</button>
        </form>
      </div>
    </nav>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">Available data</div>
                    <div class="col text-right">
                        <a href="<?php echo base_url("/students/add")?>" class="btn btn-success btn-sm">New student</a>
                        <a href="<?php echo base_url("school/signin")?>" class="btn btn-success btn-sm">BACK</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>First name</th>
                            <th>Last Name</th>
                            <th>Class</th>
                            <th>Stream</th>
                            <th>Scl Id</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php

                        if($tbl_std7)
                        {
                            foreach($tbl_std7 as $user)
                            {
                                echo '
                                <tr>
                                    <td>'.$user["id"].'</td>
                                    <td>'.$user["fname"].'</td>
                                    <td>'.$user["lname"].'</td>
                                    <td>'.$user["class"].'</td>
                                    <td>'.$user["stream"].'</td>
                                    <td>'.$user["sch_id"].'</td>
                                    <td><a href="'.base_url().'/students/fetch_single_data/'.$user["id"].'" class="btn btn-sm btn-warning">UPDATE</a></td>
                                    <td><button type="button" onclick="delete_data('.$user["id"].')" class="btn btn-danger btn-sm">DELETE</button></td>
                                </tr>';
                            }
                        }

                        ?>
                    </table>
                </div>
                <div>
                    <?php

                    if($pagination_link)
                    {
                        $pagination_link->setPath('student');

                        echo $pagination_link->links();
                    }
                    
                    ?>

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