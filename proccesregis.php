<?php
require_once('koneksi.php');

if (isset($_POST['daftar'])) {
  $username = mysqli_real_escape_string($mysqli, $_POST['nama']);
  $email = mysqli_real_escape_string($mysqli, $_POST['email']);
  $password = mysqli_real_escape_string($mysqli, $_POST['password']);
  $telepon = mysqli_real_escape_string($mysqli, $_POST['telepon']);

  if (empty($username) || empty($email) || empty($password) || empty($telepon)) {
    echo 'tolong diisi sir yang kosong';
  } else {
    $sql = "insert into pengguna (username,email,password,telepon) values('$username','$email','$password','$telepon')";
    $result = mysqli_query($mysqli, $sql);

    if ($result) {
      echo header("Location:index.php");
    } else {
      echo 'please check your query';
    }
  }
}


?>
