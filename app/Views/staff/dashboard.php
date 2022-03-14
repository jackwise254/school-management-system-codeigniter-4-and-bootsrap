<?php include("header.php"); ?>

 <div class="container">
 	<h3 class="display-3" style="text-align: center;">ACADEMICS</h3>
 	<hr>
 	<div class="my-4">
 		<div class="row">
 		<div class="col text-right">
                        <a href="<?php echo base_url("/students/exams")?>" class="btn btn-success btn-sm">Examamination</a>
                    </div>
 		<div class="col text-right">
        <a href="<?php echo base_url("/school/login")?>" class="btn btn-success btn-sm">Time Table</a>
        </div>
        <div class="col text-right">
        <a href="<?php echo base_url("/school/login")?>" class="btn btn-success btn-sm">Subjects</a>
        </div>
        <div class="col text-right">
        <a href="<?php echo base_url("/school/login")?>" class="btn btn-success btn-sm">Active classes</a>
        </div>

 		</div>
 	</div>

 </div>

<?php include("footer.php"); ?>