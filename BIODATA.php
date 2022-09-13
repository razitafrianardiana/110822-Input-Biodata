<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Tugas 2 Form Input Data</h3>

<div>
  <form action="/action_page.php">
    <label for="nama">Nama Lengkap</label>
    <input type="text" id="nama" name="nama" placeholder="Nama Lengkap">

    <label for="jkelamin">Jenis Kelamin</label>
    <select id="jkelamin" name="Jenis Kelamin">
      <option value="jk">P/L</option> 
      <option value="pr">Perempuan</option> 
      <option value="lk">Laki-Laki</option>
    </select>

    <label for="agama">Agama</label>
    <select id="agama" name="Agama">
      <option value="agama">Agama</option> 
      <option value="islam">Islam</option>
      <option value="protestan">Protestan</option>
      <option value="katolik">Katolik</option>
      <option value="buddha">Buddha</option>
      <option value="hindu">Hindu</option>
      <option value="konghucu">Konghucu</option>
    </select>

    <label for="alamat">Alamat</label>
    <input type="text" id="alamat" name="alamat" placeholder="Alamat">

    <label for="tlahir">Tempat Lahir</label>
    <input type="text" id="tlahir" name="tlahir" placeholder="Tempat Lahir">

    <label for="ttl">Tanggal Lahir</label>
    <input type="text" id="ttl" name="ttl" placeholder="Tanggal Lahir">

    <label for="hobi">Hobi</label>
    <input type="text" id="hobi" name="hobi" placeholder="Hobi">

    <label for="ctct">Cita Cita</label>
    <input type="text" id="ctct" name="ctct" placeholder="Cita Cita">

    <label for="usia">Usia</label>
    <input type="text" id="usia" name="usia" placeholder="Usia">

    <label for="asals">Asal Sekolah</label>
    <input type="text" id="asals" name="asals" placeholder="Asal Sekolah">





  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>


