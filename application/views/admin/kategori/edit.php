<?php
//Notifikasi Error
echo validation_errors('<div class="alert alert-warning">','</div>');

//Form open
echo form_open(base_url('admin/kategori/edit/'.$kategori->id_kategori),' class="form-horizontal"');
?>

<div class="form-group">
  <label class="col-md-2 control-label">Nama Pengguna</label>

  <div class="col-md-5">
    <input type="text" name="nama" class="form-control" placeholder="Nama pengguna" value=
    "<?php echo $kategori->nama ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Email</label>

  <div class="col-md-5">
    <input type="email" name="email" class="form-control" placeholder="Email pengguna" value=
    "<?php echo $kategori->email ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Kategoriname</label>

  <div class="col-md-5">
    <input type="text" name="kategoriname" class="form-control" placeholder="Kategoriname" value=
    "<?php echo $kategori->kategoriname ?>" readonly>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Password</label>

  <div class="col-md-5">
    <input type="password" name="password" class="form-control" placeholder="Password" value=
    "<?php echo $kategori->password ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Level Hak Akses</label>

  <div class="col-md-5">
  	<select name="akses_level" class="form-control">
  		<option value="Admin">Admin</option>
  		<option value="Kategori">Kategori <?php if($kategori->akses_level == "Kategori") {echo "selected";}?></option> 		
  	</select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label"></label>

  <div class="col-md-5">
  	<button class="btn btn-success btn-lg" name="submit" type="submit">
  		<i class="fa fa-save"></i> Simpan
  	</button>
  	<button class="btn btn-info btn-lg" name="reset" type="reset">
  		<i class="fa fa-times"></i> Reset
  	</button>
  </div>
</div>


<?php echo form_close(); ?>