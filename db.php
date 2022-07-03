<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'lsp_petsqushop';

$conn = mysqli_connect($hostname, $username, $password, $dbname) or die('Gagal terhubung ke Database');

//function register

function register($data) {
  global $conn;
  $name = $data['name'];
  $address = $data['address'];
  $email = $data['email'];
  $phone_number = $data['phone_number'];
  $username = $data["username"];
  $password = $data["password"];


  // enkripsi password
  // $password = password_hash($password, PASSWORD_DEFAULT);

  //tambah user ke database
  mysqli_query($conn, "INSERT INTO user VALUES ('', '$name', '$address', '$email', '$phone_number', '$username', '$password', '')");

  return mysqli_affected_rows($conn);
}


?>
