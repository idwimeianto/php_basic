<?php
  $db_host = "localhost";
  $db_user = "root";
  $db_pass = "";
  $link   = mysqli_connect($db_host,$db_user,$db_pass);

  if(!$link){
    die ("connection failed ".mysqli_connect_errno()." - ".mysqli_connect_error());
  }

  $query = "DROP DATABASE IF EXISTS db_universitas";
  $result = mysqli_query($link, $query);

  if(!$result){
    die ("Query Error: ".mysqli_errno($link)." - ".mysqli_error($link));
  }
  else {
    echo "Deleted <b>db_universitas</b> Database<br>";
  }

  $query = "CREATE DATABASE IF NOT EXISTS db_universitas";
  $result = mysqli_query($link, $query);

  if(!$result){
    die ("Query Error: ".mysqli_errno($link)." - ".mysqli_error($link));
  }
  else {
    echo "Created <b>db_universitas</b><br>";
  }

  $result = mysqli_select_db($link, "db_universitas");

  if(!$result){
    die ("Query Error: ".mysqli_errno($link). " - ".mysqli_error($link));
  }
  else {
    echo "select <b>db_universitas</b><br>";
  }

  $query = "DROP TABLE IF EXISTS mahasiswa";
  $result = mysqli_query($link, $query);

  if(!$result){
    die ("Query Error: ".mysqli_errno($link)." - ".mysqli_error($link));
  }
  else {
    echo "delete <b>mahasiswa</b> table<br>";
  }

  $query  = "CREATE TABLE mahasiswa (id int NOT NULL AUTO_INCREMENT, nim CHAR(7), nama VARCHAR(100), ";
  $query .= "tempat_lahir VARCHAR(50), tanggal_lahir DATE, jenis_kelamin varchar(50), ";
  $query .= "fakultas VARCHAR(50), jurusan VARCHAR(50), ";
  $query .= "ipk DECIMAL(3,2), PRIMARY KEY (id))";

  $result = mysqli_query($link, $query);

  if(!$result){
      die ("Query Error: ".mysqli_errno($link)." - ".mysqli_error($link));
  }
  else {
    echo "create <b>mahasiswa</b> table<br>";
  }

  /*
    INSERT INTO mahasiswa (nim, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, fakultas, jurusan, ipk) VALUES 
    ('1904499', 'Imam Firdaus Dwimeianto', 'Majalengka', '2000-05-15', 'Laki-laki', 'FPMIPA', 'Ilmu Komputer', 3.8), 
    ('1805566', 'Zahra Elgysha', 'Bandung', '1999-01-06', Perempuan','FPIPS', 'Ilmu Komunikasi', 3.9), 
    ('1704455', 'Uzukami Nartanto', 'Cikampek', '1998-11-11', 'Laki-laki', 'FPBS', 'Bahasa dan Sastra Inggris', 3.2), 
    ('1608497', 'Rio Lebaran', 'Cirebon', '1997-05-28', Laki-laki', 'FPTK', 'Teknik Elektro', 3.1), 
    ('1908877', 'Listya Kusnadi', 'Medan', '2000-07-02', 'Perempuan', 'FPEB','Manajemen', 2.9);
  */

  $query  = "INSERT INTO mahasiswa (nim, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, fakultas, jurusan, ipk) VALUES ";
  $query .= "('1904499', 'Imam Firdaus Dwimeianto', 'Majalengka', '2000-05-15', ";
  $query .= "'Laki-laki', 'FPMIPA', 'Ilmu Komputer', 3.8), ";
  $query .= "('1805566', 'Zahra Elgysha', 'Bandung', '1999-01-06', ";
  $query .= "'Perempuan','FPIPS', 'Ilmu Komunikasi', 3.9), ";
  $query .= "('1704455', 'Uzukami Nartanto', 'Cikampek', '1998-11-11', ";
  $query .= "'Laki-laki', 'FPBS', 'Bahasa dan Sastra Inggris', 3.2), ";
  $query .= "('1608497', 'Rio Lebaran', 'Cirebon', '1997-05-28', ";
  $query .= "'Laki-laki', 'FPTK', 'Teknik Elektro', 3.1), ";
  $query .= "('1908877', 'Listya Kusnadi', 'Medan', '2000-07-02', ";
  $query .= "'Perempuan', 'FPEB','Manajemen', 2.9)";

  $result = mysqli_query($link, $query);

  if(!$result){
      die ("Query Error: ".mysqli_errno($link)." - ".mysqli_error($link));
  }
  else {
    echo "fill <b>mahasiswa</b> table<br>";
  }

  // tutup koneksi dengan database mysql
  mysqli_close($link);
?>
