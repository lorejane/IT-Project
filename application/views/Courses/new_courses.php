<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1>Hello Bootstrap!</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<p class="lead">Menu</p>
		</div>
		<div class="col-md-8 contents">
			<p class="lead">Add New Course</p>
			<form role="form" class="" method="post">
				
				<div class="text-danger">
				<?php
			
				
				if( isset($errors) ){
					echo $errors;
				}
				?>
				</div>
				
				<div class="form-group">
					<label for="coursecode">Course Code:</label>
					<input type="text" class="form-control" id="coursecode" name="coursecode" />
				</div>
				<div class="form-group">
					<label for="coursedes">Course Description:</label>
					<input type="text" class="form-control" id="coursedes" name="coursedes" />
				</div>	
				
				
			</form>
	
			<hr />
			<!--
			<form role="form" class="form-horizontal">
				<div class="form-group">
					<label for="idno" class="control-label col-md-2">ID No.:</label>
					<div class="col-md-10">
						<input type="text" class="form-control" id="idno" name="idno" />
					</div>
				</div>
				<div class="form-group">
					<label for="lname" class="control-label col-md-2">Last Name:</label>
					<div class="col-md-10">
						<input type="text" class="form-control" id="lname" name="lname" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2">
						<button type="submit" class="btn btn-primary">
						Save <span class="glyphicon glyphicon-save"></span> 
						</button>				
					</div>				

				</div>
			</form>-->	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Star Na Si Van Damme Stallone.
		</div>
	</div>
</div>

<?php
if( isset($saved) && $saved==TRUE ){
?>
<script type="text/javascript">
	alert("The new student record was successfully saved!");
	location.href = '<?php echo base_url('students'); ?>';
</script>
<?php
}

?>




