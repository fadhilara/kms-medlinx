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
    <div class="card-header text-center"> Issue </div>
    <div class="card-body">
       <div class="col">
          <div class="row">
            <div class="col-6"><a href=" <?php  echo base_url().'issue/create'?>" class="btn btn-primary pull-right" style="margin-bottom: 15px"> Create Issue   </a></div>
            <div class="col-6"><div class="input-group">
    <input type="text" class="form-control" placeholder="Search by nama issue">
    <div class="input-group-apend" style="width:30%">
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
          <th class="text-center">Nama Issue</th>
          <th class="text-center">Client</th>
          <th class="text-center">Permasalahan</th>
          <th class="text-center">Solusi</th>
          <th class="text-center">Dibuat Oleh</th>
          <th class="text-center">Tanggal Dibuat</th>
          <th colspan="2" class="text-center">Setting</th>
        </tr>
      </thead>
      <?php   
        $no = 1;
      foreach($issue as $u) { ?>
      <tbody>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $u->nama_issue; ?></td>
          <td><?php echo $u->client; ?></td>
          <td><?php echo $u->permasalahan; ?></td>
          <td><?php echo $u->solusi; ?></td>
          <td><?php echo $u->dibuat_oleh; ?></td>
          <td><?php echo $u->tanggal_dibuat; ?></td>
          <td><a href="<?php  echo base_url().'issue/edit/'.$u->id_issue;?>" class="btn btn-warning">Edit</a> </td>
          <td><a href="<?php  echo base_url().'issue/delete/'.$u->id_issue; ?>" class="btn btn-danger">Delete</a> </td>
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

