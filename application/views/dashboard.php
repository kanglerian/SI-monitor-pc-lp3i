<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-television"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Jumlah Seluruh</span>
            <span class="info-box-number"><?php echo $list_komputer->num_rows();?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="fa fa-television"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">LAB 1</span>
            <span class="info-box-number"><?php echo $jml_lab1->num_rows();?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-television"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">LAB 2</span>
            <span class="info-box-number"><?php echo $jml_lab2->num_rows();?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-television"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">LAB 3</span>
            <span class="info-box-number"><?php echo $jml_lab3->num_rows();?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

    </section>
    <!-- /.content -->


    <!-- /.row (main row) -->

  </section>
</div>
