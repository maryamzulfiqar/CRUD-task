<html>
    <head>
        <title>Contact Form Tutorial by Bootstrapious.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
   <style>
       .bg-pr {
    background-color: 'orange';
}
</style>
    </head>
    <body  style="background-color:#B7CEEC;">

        <div class="container bg-light mx-auto m-5">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">

              
                <form name="createData" id="createData" method="post" action="<?php  echo base_url().'index.php/data/create'; ?>"> 
  


<div class="messages"></div>

<div class="controls">

    <div class="row">
   
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Patient Id</label>
                <input type="text" name="p_id" values="<?php echo set_value('p_id'); ?>"  class="form-control">
        <?php echo form_error("p_id"); ?>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
            Radiographs Type &nbsp;&nbsp;&nbsp;
<?php
$rg = array("Wrist","Shoulder", "Forearm", "Finger","knee", 'Foot');
$array_length = count($rg);
?>
<select name="type">
<?php
for ($i=0;$i<$array_length;$i++){
?>
<option value="<?=$rg[$i];?>"><?=$rg[$i];?></option>
<?php
}
?>
</select>

<?php 
$this->input->post('type');
?>


            </div>
        </div>
       
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
         


            Abnormality &nbsp;&nbsp;&nbsp;
<input type="radio" name="detection"  id="detection" value="Detected"  
<?php 
echo set_radio('detection', 'Detected', true);
?>
>Detected &nbsp;&nbsp;&nbsp;
<input type="radio" name="detection"  id="detection" value="Not Detected"  
<?php 
echo set_radio('detection', 'Not Detected');
?>
>Not Detected
            </div>
        </div>
        <div class="col-md-12">
        <button class="btn btn-primary">
Add
</button>
<a href="<?php echo base_url(). 'index.php/data/index'; ?>" class="btn-secondary btn">Cancel</a>
        </div>
    </div>
   
</div>

</form>

                </div>

            </div>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        <script src="contact.js"></script>
    </body>
</html>