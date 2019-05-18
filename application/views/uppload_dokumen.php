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
      <div class="row col-8 bg-info"><a class="nav-link text-reset" href="<?php echo base_url().'informasi' ?>"><h7> Informasi</h7></a></div>
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
        <div class="col-2"></div>
        <div class="col">
        <div class="card" style="margin-top:10px">
    <div class="card-header text-center">Uppload Dokumen</div>
    <div class="card-body">
    <form action="">
    <div class="form-group">
      <label for="nama_dokumen">Nama Dokumen :</label>
      <input type="text" class="form-control" id="nama_dokumen" placeholder="Input Nama Dokumen" name="nama_dokumen">
    </div>
    <div class="form-group">
      <label for="Kategori">Kategori :</label>
      <input type="text" class="form-control" id="Kategori" placeholder="Input Kategori" name="Kategori">
    </div>
    <div class="form-group">
      <label for="divisi">Divisi :</label>
      <select name="Divisi" class="custom-select mb-3">
      <option selected>Pilih Divisi</option>
      <option value="Semua Divisi">Semua Divisi</option>
      <option value="IT Product Development">IT & Product Development</option>
      <option value="Acount, Product & Provider Relations">Acount, Product & Provider Relations</option>
      <option value="Operations">Operations</option>
    </select>
    </div>
    <div class="form-group">
      <label for="Requester">Requester :</label>
      <input type="text" class="form-control" id="Requester" placeholder="Input Requester" name="Requester">
    </div>
    <div class="form-group">
      <label for="tanggal_request">Tanggal Request :</label>
      <input type="date" class="form-control" id="pwd" placeholder="Pilih tanggal request" name="tanggal_request">
    </div>
    <center>
   <button type="submit" class="btn btn-primary">Send</button>
   <button type="submit" class="btn btn-danger" >Cancel</button>
     </center>
  </form>
    </div> 
    
  </div>
        </div>
        <div class="col-2"></div>
        
      </div>
      </div>
    </div>
  </div>

