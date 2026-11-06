<?php
  echo "<h1>Data Pasien</h1>";
  echo <form method="POST" action="">
        <p>Nama    : <br /><input type="text" name="nama" /></p>
        <p>ID Pasien   : <br /><input type="text" name="id  " /></p>
        <p>Keluhan    : <br /><textarea name="keluhan" /></p>
        <button type="submit">Kirim</button>
     </form>';
     
     
   if ($_SERVER[ 'REQUEST_METHOD' ] === 'POST') {
       $nama = $_POST['nama'];  
       $id = $_POST['id'];
       $keluhan = $_POST['keluhan'];
       echo "Pasien " . htmlspecialchars($nama) . " / " . htmlspecialchars($id) . " / " . " memiliki keluhan " . htmlspecialchars($keluhan);    
    } else {
        echo "Silahkan Isi Formulir Di Atas Untuk Mengirimkan Data Pasien.";   
    }
?>