<?php

include "../db/connection.php";

if(isset($_POST["submit"])) {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $country = $_POST["country"];
  $zip = $_POST["zip"];
  $phone = $_POST["phone"];
  $role = "member";


  if($password !== $confirm_password) {
    header("Location: /registration.php?message=Password tidak sama");
    exit();
  }

  $hash_password = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO users (name, email, password, tlp, address, country, city, zip, role) VALUES ('$name', '$email', '$hash_password', '$phone', '$address', '$country', '$city', '$zip', '$role')";

  $result = mysqli_query($conn, $query);

  if($result) {
    header("Location: ../login.php?message=Register success");
    exit; 
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}


