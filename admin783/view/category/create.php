<?php


?>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
Category Page
<small>Category Form</small>
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
              <h3 class="box-title">Category form</h3>

              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

  <?php SessionHelper::flashMessage();
			?>
<form action="" class="" method="post" id="categoryform" novalidate="" enctype="multipart/form-data">
  <div class="form-group">
    <label>Category Name</label>

    <input type="text" name="name" class="form-control" required="">
</div>
<div>
    <label>Category Role</label>
    <select name="role" class="form-control"required="">

      <option value="">Select Role</option>
      <option value="category">Category</option>
      <option value="subcategory">Sub Category</option>
    </select>
</div>
<div>
    <label>Parent Id</label>

    <!-- <input type="number" name="parent_id" class="form-control" required=""> -->
    <select name="parent_id" class="form-control">
      <option value="">Select Parent Category</option>
       <?php foreach ($this->catmain as $cm) { ?>
      <option value="<?php echo $cm->id ?>"><?php echo $cm->name ?></option>
      <?php } ?>
    </select>

</div>
<div>
    <label>Category rank</label>
    <input type="number" name="rank" class="form-control" required="">
    </div>
<div>
  <label>Category status</label>
    <input type="radio" name="status" value="1">Active
    <input type="radio" name="status" value="0" checked="">Deactive
</div>
    <div>

    <label>Category slug</label>
    <input type="text" name="slug" class="form-control">
</div>
<label>Category description</label>
    <textarea name="description" class="form-control ckeditor"></textarea>

<label>Category image</label>
    <input type="file" name="image" class="form-control">

  </div>
  <input type="submit" name="btnSave" value="Save Category" class="btn btn-success">

</form>
</div><!-- /.box-body -->
<div class="box-footer">
	Footer
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
