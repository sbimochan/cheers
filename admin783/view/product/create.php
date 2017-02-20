<?php


?>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
product Page
<small>product Form</small>
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
              <h3 class="box-title">product form</h3>

              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

  <?php SessionHelper::flashMessage();
			?>
<form action="" class="" method="post" id="productform" novalidate="" enctype="multipart/form-data">
  <div class="form-group">
    <label>product Name (text limit 25)</label>

    <input type="text" name="name" class="form-control" required="">
</div>
<div class="form-group">
  <label>product Color</label>

  <input type="text" name="color" class="form-control" >
</div>
<div class="form-group">
  <label>Country</label>

  <input type="text" name="country" class="form-control" >
</div>
<!-- <div >
  <label>Product Size</label>
  <select class="form-control" name="product_size">
    <option value="">Select Prodcut size</option>
    <option value="">S</option>
    <option value="">M</option>
    <option value="">L</option>
    <option value="">XL</option>
    <option value="">XXL</option>

  </select>
</div> -->
<div>
  <label>Price</label>

  <input type="text" name="product_price" class="form-control">
</div>
<div>
  <label>Discount</label>

  <input type="text" name="discount" class="form-control">
</div>
<div>
  <label>Stock</label>

  <input type="text" name="stock" class="form-control">
</div>
<div>
  <label>quantity</label>

  <input type="text" name="quantity" class="form-control">
</div>
<!-- <div>
    <label>product Role</label>
    <select name="role" class="form-control"required="">

      <option value="">Select Role</option>
      <option value="product">product</option>
      <option value="subproduct">Sub product</option>
    </select>
</div> -->
<div>
    <label>Category Id</label>
<!-- <input type="text" name="category_id" class="form-control"> -->

    <select name="category_id" class="form-control">
      <option value="">Select category id</option>
       <?php foreach ($this->catid as $cm) { ?>
      <option value="<?php echo $cm->id ?>"><?php echo $cm->name ?></option>
      <?php } ?>
    </select>

</div>
<div>
    <label>SubCategory Id</label>
<!-- <input type="text" name="subcategory_id" class="form-control"> -->

    <select name="subcategory_id" class="form-control">
      <option value="">Select subcategory id</option>
       <?php foreach ($this->subcatid as $sm) { ?>
      <option value="<?php echo $sm->id ?>"><?php echo $sm->name ?></option>
      <?php } ?>
    </select>

</div>
<!-- <div>
    <label>product rank</label>
    <input type="number" name="rank" class="form-control" required="">
    </div> -->
<div>
  <label>product status</label>
    <input type="radio" name="status" value="1">Active
    <input type="radio" name="status" value="0" checked="">Deactive
</div>
<div>
  <label>feature key</label>
    <input type="radio" name="feature_key" value="1">Active
    <input type="radio" name="feature_key" value="0" checked="">Deactive
</div>
<div>
  <label>slider key</label>
    <input type="radio" name="slider_key" value="1">Active
    <input type="radio" name="slider_key" value="0" checked="">Deactive
</div>
    <div>

    <label>product slug</label>
    <input type="text" name="slug" class="form-control">
</div>
<label>short description</label>
    <textarea name="short_description" class="form-control"></textarea>
<label>product description</label>
    <textarea name="description" class="form-control ckeditor"></textarea>


<label>product image 1</label>
    <input type="file" name="image1" class="form-control">
    <label>product image 2</label>
        <input type="file" name="image2" class="form-control">
        <label>product image 3</label>
            <input type="file" name="image3" class="form-control">
            <label>product image4 </label>
                <input type="file" name="image4" class="form-control">
</div>
  <!--  category box end -->
  <input type="submit" name="btnSave" value="Save product" class="btn btn-success">

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
    $('#productform').validate();
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
