<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="<?php    echo base_url().'assets/images/icons/favicon.ico';  ?>" >
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php    echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css';  ?>" >

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php    echo base_url().'assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css';  ?>" >

<!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="<?php    echo base_url().'assets/vendor/animate/animate.css';  ?>" >

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php    echo base_url().'assets/vendor/select2/select2.min.css';  ?>" >

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php    echo base_url().'assets/vendor/perfect-scrollbar/perfect-scrollbar.css';  ?>" >


    <link rel="stylesheet" type="text/css" href="<?php    echo base_url().'assets/css/util.css';  ?>" >
    <link rel="stylesheet" type="text/css" href="<?php    echo base_url().'assets/css/main.css';  ?>" >
    <link rel="stylesheet" type="text/css" href="<?php    echo base_url().'assets/vendor/bootstrap/css/fontawesome';  ?>" >
    <link rel="stylesheet" type="text/css" href="<?php    echo base_url().'assets/vendor/bootstrap/css/fontawesome';  ?>" >

<!--===============================================================================================-->
</head>
<body>

 

 <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
            <?php 
    $success=$this->session->userData('success');
    if($success != ""){ ?>
    <div class="alert alert-success"><?php echo $success;  ?> </div><?php 
    }
    ?><?php
        $failure=$this->session->userData('failure');
    if($failure != ""){ ?>
    <div class="alert alert-success"><?php echo $failure;  ?> </div>
    <?php 
    }
    ?>
    





 <h4>Add patient Report Result <?php echo "\r\n" ?><a   href="<?php echo base_url(). 'index.php/data/create'; ?>" class="btn btn-success "><i class="fa fa-plus "></i> </a> 
 </h4><hr>
    <center>






  <table class="table table-hover table-striped" 
   >
  <tr>
  <th colspan="3">ID</th>
  <th colspan="3">Type</th>
  <th colspan="3">Detection</th>
  <th colspan="3">Date</th>
  <th colspan="3">Edit</th>
  <th colspan="3">Delete</th>
  </tr>
  <?php if(!empty($data)) { foreach($data as $mdata) { ?>
  <tr>
  <td colspan="3">  <?php echo $mdata['p_id'] ?> </td>
  <td colspan="3">  <?php echo $mdata['type'] ?> </td>
  <td colspan="3">  <?php echo $mdata['detection'] ?> </td>
  <td colspan="3">  <?php echo $mdata['date'] ?> </td>
  <td colspan="3"> <a href="<?php echo base_url().'index.php/data/edit/' .$mdata['id']?>" class="btn btn-primary" ><i class="fa fa-edit"></i></a>  </td>
  <td colspan="3"> <a href="<?php echo base_url().'index.php/data/delete/' .$mdata['id']?>" class="btn btn-danger" ><i class="fa fa-trash"></i></a>  </td>
  
  
  </tr><?php }} else { ?>
  <tr> 
      <td colspan="5"> Record Not ound</td>  
  </tr>
  <?php 
  }  ?>
  </table>
</center>
  </div>
  
  </div></div>


	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js'); 
   ?>js/sample.js"></script>
<!--===============================================================================================-->

    <script type = 'text/javascript' src = "<?php echo base_url('assets/vendor/bootstrap/js/popper.js'); 
   ?>js/sample.js"></script>
     <script type = 'text/javascript' src = "<?php echo base_url('assets/vendor/bootstrap/js/popper.js'); 
   ?>js/sample.js"></script>

    <script type = 'text/javascript' src = "<?php echo base_url('assets/vendor/select2/select2.min.js'); 
   ?>js/sample.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url('assets/js/main.js'); 
   ?>js/sample.js"></script>
</body>
</html>