<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css')?>">
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
</head>  
<body>
<div class="container">
  <div class="row">
        <div class="col-4"></div>
        <div class="col">
        <div class="card" style="margin-top:0px">
    <div class="card-header text-center">Signup</div>
    <div class="card-body">
     <form action="">
    <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" class="form-control" id="NIK" placeholder="email" name="NIK">
    </div>
    <div class="form-group">
      <label for="divisi">Divisi :</label>
      <select name="Divisi" class="custom-select mb-3">
      <option selected>Pilih Divisi</option>
      <option value="IT Product Development">IT & Product Development</option>
      <option value="Acount, Product & Provider Relations">Acount, Product & Provider Relations</option>
      <option value="Operations">Operations</option>
    </select>
    </div>
    <div class="form-group">
      <label for="username">Username :</label>
      <input type="text" class="form-control" id="NIK" placeholder="Username" name="NIK">
    </div>
    <div class="form-group">
      <label for="Password">Password :</label>
      <input type="Password" class="form-control" id="Password" placeholder="Password" name="Password">
    </div>
    <center>
   <button type="submit" class="btn btn-primary">Signup</button>
     </center>
  </form>
  
    </div> 
    
  </div>
        </div>
        <div class="col-4"></div>
        
      </div>
      </div>
    </body>
    

