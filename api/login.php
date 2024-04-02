<?php
// Include file koneksi database
include "../db/connection.php";
session_start();

if(isset($_POST['login'])){
    // menyimpan data email yang diinput dari form ke variabel $email 
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Mengambil data user dari database berdasarkan email
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if($result->num_rows > 0){
        // Jika email ditemukan, verifikasi password
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];

        // Memverifikasi password menggunakan password_verify
        if(password_verify($password, $hashed_password)){
            // Password cocok, set session dan arahkan ke halaman yang sesuai
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['login'] = true; 

            if($row['role'] == 'admin'){
                header("Location: ../dashboard.php");
            }else{
                header("Location: ../menu_pembeli.php");
            }
        }else{
            // Password tidak cocok
            header("Location: ../login.php?message=Email atau password salah");
        }
    }else{
        // Email tidak ditemukan
        header("Location: ../login.php?message=Email tidak ditemukan");
    }
}
?>
