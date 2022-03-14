<?php include("header.php"); ?>

 <div class="container">
 	<h3 class="display-3" style="text-align: center;">Admin dashboard</h3>
 	<hr>
 	<div class="my-4">
 		<div class="row">
 		<div class="col text-right">
                        <a href="<?php echo base_url("/school/adminRegister")?>" class="btn btn-success btn-sm">Staff Register</a>
                    </div>
 		<div class="col text-right">
        <a href="<?php echo base_url("/school/login")?>" class="btn btn-success btn-sm">Staff login</a>
        </div>
 		</div>
 	</div>
 </div>

<?php include("footer.php"); ?>