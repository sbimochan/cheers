<?php


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Category Page
			<small> Edit Category Form</small>
		</h1>
		<!--          <ol class="breadcrumb">-->
		<!--            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
		<!--            <li><a href="#">Examples</a></li>-->
		<!--            <li class="active">Blank page</li>-->
		<!--          </ol>-->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">edit Form</h3>

				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
					<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">

				<?php SessionHelper::flashMessage();
				?>
				<form action="" class="" method="post" id="categoryform" novalidate="">
					<div class="form-group">
						<label>Category Name</label>
						<input type="text" name="name" class="form-control" required="" value="<?php echo $this->catdata[0]->name; ?>">
					</div>
					<div>
						<label>Category Role</label>
						<select name="role" class="form-control"required="">
							<?php if($this->catdata[0]->role=='category'){?>

							<!-- <option value="">Select Role</option> -->
							<option value="category" checked="">Category</option>
							<?php }else{?>
							<option value="subcategory">Sub Category</option>
							<?php } ?>
							<?php if($this->catdata[0]->role=='subcategory'){?>
							<option value="category" >Category</option>
							<?php }else{?>
							<option value="subcategory" checked="">Sub Category</option>
							<?php } ?>

						</select>


					</div>
					<div>
						<label>Parent Id</label>
						<input type="number" name="parent_id" class="form-control" required="" value="<?php echo $this->catdata[0]->parent_id; ?>">
					</div>
					<div>
						<label>Category rank</label>
						<input type="number" name="rank" class="form-control" required="" value="<?php echo $this->catdata[0]->rank; ?>">
					</div>
					<div>
						<label>Category status</label>
						<?php if($this->catdata[0]->status ==0){ ?>
						<input type="radio" name="status" value="1">Active
						<input type="radio" name="status" checked="">Deactive
							<?php }else{ ?>
							<input type="radio" name="status" checked="">Active
						<input type="radio" name="status" value="0">Deactive
						<?php }?>
					</div>
					<div>

						<label>Category slug</label>
						<input type="text" name="slug" class="form-control" value="<?php echo $this->catdata[0]->slug ?>">
					</div>
					<label>Category description</label>
					<textarea name="description" class="form-control ckeditor"><?php echo $this->catdata[0]->description ?></textarea>

					<label>Category image</label>
					<input type="file" name="image" class="form-control" >



			</div>
			<input type="submit" name="btnUpdate" value="Update Category" class="btn btn-success">

			</form>
		</div><!-- /.box-body -->
		<div class="box-footer">
<!--			Footer-->
		</div><!-- /.box-footer-->
</div><!-- /.box -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<script src="<?php echo base_url(); ?>public/plugins/ckeditor_modified/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/validatation/dist/jquery.validate.min.js"></script>
<script>
	$('#categoryform').validate();
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' // optional
		});
	});
</script>
