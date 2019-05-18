<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dokumen</title>
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
      <div class="row col-8 bg-info"><a class="nav-link text-dark" href="<?php echo base_url().'home' ?>"><h7>Home</h7></a></div>
    </div>
    </li>

   <li class="nav-item">
      <div class="row">
       <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/user.png')?>" class="float-right" style="margin-top:10px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-dark" href="<?php echo base_url().'user' ?>"><h7>User</small></h7></a></div>
    </div>
    </li>
    <li class="nav-item">
      <div class="row">
       <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/dokumen.png')?>" class="float-right" style="margin-top:10px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-dark" href="<?php echo base_url().'dokumen' ?>"><h7>Dokumen</h7></a></div>
    </div>
    </li>
    <li class="nav-item">
      <div class="row">
       <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/issue.png')?>" class="float-right" style="margin-top:10px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-dark" href="<?php echo base_url().'issue' ?>"><h7>  Issue</</h7></a></div>
    </div>
    </li>
   <li class="nav-item">
      <div class="row">
       <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/berita.png')?>" class="float-right" style="margin-top:10px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-dark" href="<?php echo base_url().'informasi' ?>"><h7> Informasi</h7></a></div>
    </div>
    </li>
    <li class="nav-item">
      <div class="row">
      <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/notulen.png')?>" class="float-right" style="margin-top:10px; margin-left: 160px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-dark" href="<?php echo base_url().'notulen_rapat' ?>"><h7>Notulen Rapat</h7></a></div>
    </div>
    </li>
    <li class="nav-item">
      <div class="row">
       <div class="col-4 bg-info"><img src="<?php echo base_url('assets/gambar/logout.png')?>" class="float-right" style="margin-top:10px"></div>
      <div class="row col-8 bg-info"><a class="nav-link text-dark" href="<?php echo base_url().'logout' ?>"><h7>Logout</h7></a></div>
    </div>
    </li>
  </ul>
</nav>
</div>
    <div class="col-9">
    <div class="row">
        <div class="col-1"></div>
        <div class="col">
        <div class="card" style="margin-top:50px">
    <div class="card-header text-center"> Dokumen</div>
    <div class="card-body">
       <div class="col">
          <div class="row">
            <div class="col-6"><a href=" <?php  echo base_url().'dokumen/request'?>" class="btn btn-primary pull-right" style="margin-bottom: 15px"> Request Dokumen   </a></div>
            <div class="col-6"><div class="input-group">
    <input type="text" class="form-control" placeholder="Search by nama dokumen">
    <div class="input-group-apend" style="width:40%">
      <button class="btn btn-success" type="submit">Search</button>  
     </div>
  </div></div>
          </div>
        </div>
    <div class="table-responsive">
    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th class="text-center">No</th>
          <th class="text-center">Nama Dokumen</th>
          <th class="text-center">Divisi</th>
          <th class="text-center">Requester</th>
          <th class="text-center">Tanggal Request</th>
          <th class="text-center">Uploader</th>
          <th class="text-center">Tanggal Uppload</th>
          <th colspan="2" class="text-center">Validasi</th>
          <th colspan="2" class="text-center">Status</th>
          <th colspan="2" class="text-center">Aksi</th>
          <th colspan="2" class="text-center">Setting</th>
        </tr>
      </thead>
      <?php   
        $no = 1;
      foreach($dokumen as $u) { ?>
      <tbody>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $u->nama_dokumen; ?></td>
          <td><?php echo $u->divisi; ?></td>
          <td><?php echo $u->requester; ?></td>
          <td><?php echo $u->tgl_request; ?></td>
          <td><?php echo $u->uploader; ?></td>
          <td><?php echo $u->tgl_uppload; ?></td>
          <td><button type="button" class="btn btn-success">tervalidasi</button></td>
          <td><button type="button" class="btn btn-danger">tidak tervalidasi</button></td>
          <td><button type="button" class="btn btn-warning">Belum ada file</button></td>
          <td><button type="button" class="btn btn-info">Belum di validasi</button></td>
          <td><a href="<?php  echo base_url().'dokumen/uppload'?>" class="btn btn-info">Uppload</a> </td>
          <td><button type="button" class="btn btn-secondary">Download</button></td>
          <td><a href="<?php  echo base_url().'dokumen/edit/'?>" class="btn btn-warning">Edit</a> </td>
          <td><a href="<?php  echo base_url().'dokumen/delete/'.$u->id_dokumen; ?>" class="btn btn-danger">Delete</a> </td>
        </tr>
        <?php   } ?>
      </tbody>
    </table>
  </div>
  
    </div> 
    
  </div>
        </div>
        <div class="col-1"></div>
        
      </div>
      </div>
    </div>
  </div>
</body>

