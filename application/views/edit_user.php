<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css')?>">
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-3 bg-info" style="min-height:533px">
  <nav class="navbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <div class="row">
       <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/home.png')?>" class="float-right" style="margin-top:10px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-reset" href="<?php echo base_url().'home' ?>"><h7>Home</h7></a></div>
    </div>
    </li>

   <li class="nav-item">
      <div class="row">
       <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/user.png')?>" class="float-right" style="margin-top:10px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-reset text-center" href="<?php echo base_url().'user' ?>"><h7>User</small></h7></a></div>
    </div>
    </li>
    <li class="nav-item">
      <div class="row">
       <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/dokumen.png')?>" class="float-right" style="margin-top:10px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-reset" href="<?php echo base_url().'dokumen' ?>"><h7>Dokumen</h7></a></div>
    </div>
    </li>
    <li class="nav-item">
      <div class="row">
       <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/issue.png')?>" class="float-right" style="margin-top:10px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-reset" href="<?php echo base_url().'issue' ?>"><h7>  Issue</</h7></a></div>
    </div>
    </li>
   <li class="nav-item">
      <div class="row">
       <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/berita.png')?>" class="float-right" style="margin-top:10px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-reset" href="<?php echo base_url().'informasi' ?>"><h7> Informasi </h7></a></div>
    </div>
    </li>
    <li class="nav-item">
      <div class="row">
      <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/notulen.png')?>" class="float-right" style="margin-top:10px; margin-left: 160px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-reset" href="<?php echo base_url().'notulen_rapat' ?>"><h7>Notulen Rapat</h7></a></div>
    </div>
    </li>
    <li class="nav-item">
      <div class="row">
       <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/logout.png')?>" class="float-right" style="margin-top:10px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-reset" href="<?php echo base_url().'logout' ?>"><h7>Logout</h7></a></div>
    </div>
    </li>
  </ul>
</nav>
</div>
    <div class="col-9">
    <div class="row">
        <div class="col-3"></div>
        <div class="col">
        <div class="card" style="margin-top:0px">
    <div class="card-header text-center">Edit User</div>
    <div class="card-body">
            <?php foreach($user as $u){ ?>
     <form method="post" action="<?php echo base_url(). 'user/update'; ?>">
    <div class="form-group">
      <label for="Nama">Nama :</label>
      <input type="text" class="form-control" value="<?php echo $u->nama ?>" name="nama">
    </div>
    <div class="form-group">
      <label for="Email">Email :</label>
      <input type="text" class="form-control" value="<?php echo $u->email ?>" name="email">
    </div>
    <div class="form-group">
      <label for="Divisi">Divisi :</label>
       <select name="divisi" class="custom-select mb-3">
      <option selected>Pilih Divisi</option>
      <option value="IT">IT</option>
      <option value="Provider Relations">Provider Relations</option>
      <option value="Product Development">Product Development</option>
      <option value="Acount & Product">Acount & Product</option>
      <option value="Operations">Operations</option>
      <option value="Sales">Sales</option>
    </select>
    </div>
    <div class="form-group">
      <label for="Level">Level :</label>
       <select name="level" class="custom-select mb-3">
      <option selected>Pilih Level</option>
      <option value="Kepala Divisi">Kepala Divisi</option>
      <option value="Pegawai">Pegawai</option>
    </select>
    </div>
     <div class="form-group">
      <label for="Password">Password :</label>
      <input type="password" class="form-control-plaintext" value="<?php echo $u->password ?>" name="password">
    </div>
    
    
    
    <center>
   <button type="submit" class="btn btn-primary">Update</button>
   <a href="<?php echo base_url().'user'?>" class="btn btn-danger">Cancel</a>
     </center>
  </form>
  <?php } ?>
    </div> 
    
  </div>
        </div>
        <div class="col-3"></div>
        
      </div>
      </div>
    </div>
  </div>
</body>

