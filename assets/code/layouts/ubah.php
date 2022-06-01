
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require('head-static.php'); ?>
    <title>Ubah Barang</title>
  </head>
  <body>
    <div class="container">
      <h1>Ubah Barang</h1>
      <div class="main">
        <form method="post" action="ubah.php" enctype="multipart/form-data">
          <div class="input">
            <label>Nama Barang</label>
            <input type="text" name="nama" value="<?php echo $data['nama'];?>" />
          </div>
          <div class="input">
            <label>Kategori</label>
            <select name="kategori">
              <option <?php echo is_select ('Komputer', $data['kategori']);?> value="Komputer">Komputer </option>
              <option <?php echo is_select ('Komputer', $data['kategori']);?> value="Elektronik">Elektronik </option>
              <option <?php echo is_select ('Komputer', $data['kategori']);?> value="Hand Phone">Hand Phone </option>
            </select>
          </div>
          <div class="input">
            <label>Harga Jual</label>
            <input type="text" name="harga_jual" value="<?php echo $data['harga_jual'];?>" />
          </div>
          <div class="input">
            <label>Harga Beli</label>
            <input type="text" name="harga_beli" value="<?php echo $data['harga_beli'];?>" />
          </div>
          <div class="input">
            <label>Stok</label>
            <input type="text" name="stok" value="<?php echo $data['stok'];?>" />
          </div>
          <div class="input">
            <label>File Gambar</label>
            <input type="file" name="file_gambar" />
          </div>
          <div class="submit">
            <input type="hidden" name="id" value="<?php echo $data['id_barang'];?>" />
            <input type="submit" name="submit" value="Simpan" />
          </div>
        </form>
      </div>
      <?php require('layouts/footer.php'); ?>
    </div>
  </body>
</html>