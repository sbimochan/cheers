  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           List Category
            <small>it all starts here</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">  List Category</h3>
				<?php SessionHelper::flashMessage();
				?>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body table-responsive">

           <?php
//echo $_SESSION['admin_email'];
//			echo $_SESSION['admin_username'];
//			echo $_SESSION['admin_name'];

			?>

<table class="table table-bordered">
  <thead>
    <th>sno</th>
    <th>name</th>
    <th>category_id</th>
    <th>subcategory_id</th>
    <th>color</th>
   <!--  <th>size</th> -->
    <th>price</th>
    <th>discount</th>
    <th>stock</th>
    <th>quantity</th>
    <th>image1</th>
    <th>image2</th>
    <th>image3</th>
    <th>image4</th>
    <th>short_description</th>
    <th>description</th>
    <th>status</th>
    <th>slug</th>
    <th>feature_key</th>
    <th>slider_key</th>
    <th>Action</th>



  </thead>
  <tbody>
    <?php $i=1;
	foreach ($this->plist as $pl) {?>
    <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $pl->category_id ?> </td>
    <td><?php echo $pl->subcategory_id ?> </td>
    <td><?php echo $pl->name ?> </td>
    <td><?php echo $pl->color ?> </td>
 <!--    <td><?php echo $pl->size ?> </td> -->
    <td><?php echo $pl->price ?> </td>
    <td><?php echo $pl->discount ?> </td>
    <td><?php echo $pl->stock ?> </td>
    <td><?php echo $pl->quantity ?> </td>
    <td><img src="../public/images/product/<?php echo $pl->image1 ?>" width="80" height="auto"></td>
    <td><img src="../public/images/product/<?php echo $pl->image2 ?>" width="80" height="auto"></td>
    <td><img src="../public/images/product/<?php echo $pl->image3 ?>" width="80" height="auto"></td>
    <td><img src="../public/images/product/<?php echo $pl->image4 ?>" width="80" height="auto"></td>
    <td><?php echo $pl->short_description ?></td>
      <td><?php echo $pl->description ?></td>
    <td><?php if ($pl->status==1){
      echo "<span class='label label-success'>Active</span>";
    }else{
      echo "<span class='label label-danger'>Deactive</span>";
    }

       ?></td>
       <td><?php echo $pl->slug ?></td>

       <td><?php if ($pl->feature_key==1){
         echo "<span class='label label-success'>Active</span>";
       }else{
         echo "<span class='label label-danger'>Deactive</span>";
       }

          ?></td>
          <td><?php if ($pl->slider_key==1){
            echo "<span class='label label-success'>Active</span>";
          }else{
            echo "<span class='label label-danger'>Deactive</span>";
          }

             ?></td>



    <td><a href="<?php echo base_url()?>product/edit/<?php echo $pl->id; ?>" class="btn btn-info">Edit</a>
<a href="<?php echo base_url()?>product/delete/<?php echo $pl->id; ?>" class="btn btn-danger" onClick="return confirm('Are you sure you wanna delete?')">Delete</a>
    </td>
    </tr>
    <?php } ?>
  </tbody>
</table>

				<!-- Start creating your amazing applicasaation! -->
            </div><!-- /.box-body -->
            <div class="box-footer">
              Footer
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
