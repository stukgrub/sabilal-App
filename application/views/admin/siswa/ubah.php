<div class="content-wrapper col-12 col-xl-10 ml-md-auto pt-3">
<div class="container">
<div class="row">
<div class="col-12">
<nav aria-label="breadcrumb">
<div class="container">

  <ol class="breadcrumb d-flex justify-content-end">
    <li class="breadcrumb-item"><a href="<?= site_url();?>Dashboard/home">Dashboard</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="<?= site_url();?>Siswa/list_siswa">Siswa</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ubah Data</li>
  </ol>
  </div>
</nav>
</div>
</div>
</div>
  <main class="my-md-4 my-2">
  <div class="container">

  <div class="row">
  <div class="col-md-8">

<div class="card">
<div class="card-header">
Form Ubah Data Siswa
</div>
<div class="card-body">

    <form class="ml-3" action="" method="post">


    
        <label for="nis">NIS</label>
        <input class="form-control" type="text" name="nis" id="nis" value="<?= $siswa['nis'];?>">

        <label for="nm_siswa">Nama Siswa</label>
        <input class="form-control" type="text" name="nm_siswa" id="nm_siswa" value="<?= $siswa['nm_siswa'];?>">
        <small class="form-text text-danger"><?= form_error('nm_siswa');?></small> 

        <label for="ttl">Tempat Lahir</label>
        <input class="form-control" type="text" name="tmpt_lhr" id="ttl" value="<?= $siswa['tmpt_lhr'];?>">
        <small class="form-text text-danger"><?= form_error('tmpt_lhr');?></small> 

        <label for="ttl2">Tanggal Lahir</label>
        <input class="form-control" type="date" name="tgl_lhr" id="ttl2" value="<?= $siswa['tgl_lhr'];?>">
        <small class="form-text text-danger"><?= form_error('tgl_lhr');?></small> 

        <label for="alamat">Alamat</label>
        <input class="form-control" type="text" name="alamat" id="alamat" value="<?= $siswa['alamat'];?>">
        <small class="form-text text-danger"><?= form_error('alamat');?></small> 

      <div class="select">
          <label for="jkel">Jenis Kelamin</label>
        <select name="jkel" id="jkel" class="form-control d-block w-50">
        <?php foreach ($jenis_kelamin as $jkel): ?>
   <?php if($jkel == $siswa['jkel']):?>
            <option value="<?= $jkel; ?>" selected><?= $jkel; ?></option>  
<?php else : ?>
<option value="<?= $jkel; ?>"><?= $jkel; ?></option>
<?php endif;?>

<?php endforeach; ?>
   
        </select>
        </div>
        <small class="form-text text-danger"><?= form_error('jkel');?></small> 
       
        <button class="btn btn-primary mt-4" type="submit">Submit</button name="tambah">
    </form>
    </div>
    </div>
  </div>
  </div>
  </div>

  </main>