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
            <div class="box-body">

           <?php
//echo $_SESSION['admin_email'];
//			echo $_SESSION['admin_username'];
//			echo $_SESSION['admin_name'];

			?>

<table class="table table-bordered">
  <thead>
    <th>sno</th>
    <th>name</th>
    <th>rank</th>
    <th>status</th>
    <th>role</th>
    <th>Description</th>
    <!-- <th>Image</th> -->
    <th>Action</th>

  </thead>
  <tbody>
    <?php $i=1;
	foreach ($this->clist as $cl) {?>
    <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $cl->name ?> </td>
    <td><?php echo $cl->rank ?></td>
    <td><?php if ($cl->status==1){
      echo "<span class='label label-success'>Active</span>";
    }else{
      echo "<span class='label label-danger'>Deactive</span>";
    }

       ?></td>
    <td><?php echo $cl->role ?></td>
    <td><?php echo $cl->description ?></td>
    <!-- <td><img src="../public/images/category/<?php echo $cl->image ?>" width="80" height="auto"></td> -->
    <td><a href="<?php echo base_url()?>category/edit/<?php echo $cl->id; ?>" class="btn btn-info">Edit</a>
<a href="<?php echo base_url()?>category/delete/<?php echo $cl->id; ?>" class="btn btn-danger" onClick="return confirm('Are you sure you wanna delete?')">Delete</a>
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
