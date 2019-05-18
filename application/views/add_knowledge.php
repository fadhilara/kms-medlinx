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
       <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/knowledge.png')?>" class="float-right" style="margin-top:10px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-reset" href="<?php echo base_url().'knowledge' ?>"><h7>  Knowledge</h7></a></div>
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
      <div class="row col-8 bg-info"><a class="nav-link text-reset" href="<?php echo base_url().'berita' ?>"><h7> Berita</h7></a></div>
    </div>
    </li>
    <li class="nav-item">
      <div class="row">
      <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/notulen.png')?>" class="float-right" style="margin-top:10px; margin-left: 160px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-reset" href="echo base_url().'notulen_rapat'"><h7>Notulen Rapat</h7></a></div>
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
    <div class="card-header text-center">Add Knowledge</div>
    <div class="card-body">
     <form action="">
    <div class="form-group">
      <label for="Judul Berita">Nama Knowledge :</label>
      <input type="text" class="form-control" id="NIK" placeholder="Judul Berita" name="NIK">
    </div>
    <div class="form-group">
      <label for="username">Topik :</label>
      <textarea class="form-control" rows="3" id="isi berita"></textarea>
    </div>
    <div class="form-group">
      <label for="pwd">Divisi :</label>
      <select name="Divisi" class="custom-select mb-3">
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
      <label for="Uppload Knowledge">Uppload Knowledge :</label>
      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="filename">
      <label class="custom-file-label" for="customFile">Choose file</label>
      </div>
    </div>
    <div class="form-group">
      <label for="Publisher">Dibagikan oleh :</label>
      <input type="text" class="form-control" id="Publisher" placeholder="Publisher" name="Publisher">
    </div>
    <div class="form-group">
      <label for="Tanggal Dibagikan">Tanggal Dibagikan :</label>
      <input type="text" class="form-control-plaintext" id="Tanggal Dibagikan" placeholder="<?php 
      $tgl=date('d-m-Y');
      echo $tgl;
       ?>" name="Tanggal Dibagikan">
    </div>
    <center>
   <button type="submit" class="btn btn-primary">Send</button>
   <button type="submit" class="btn btn-danger">Cancel</button>
     </center>
  </form>
  
    </div> 
    
  </div>
        </div>
        <div class="col-3"></div>
        
      </div>
      </div>
    </div>
  </div>
  <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</body>

