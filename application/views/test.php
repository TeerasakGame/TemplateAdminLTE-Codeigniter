<!-- โหลดหัวและเมนู -->
<?php 
	$this->load->view('template/head'); 
	$this->load->view('template/menu');
?>
<!-- ./โหลดหัวและเมนู -->

<!-- ใส่เนื้อหา -->
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
   		
  	</section>
   <!-- /.content -->
</div>
<!-- ./ใส่เนื้อหา-->

<!-- footer -->
<?php $this->load->view('template/footer') ?>
<!-- ./footer -->