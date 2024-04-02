<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("location: login.php?message=Harap login terlebih dahulu");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sayang Anak | A&W Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-900 text-gray-200 font-sans flex flex-col min-h-screen">

  <!-- Header -->
  <header class="bg-gray-800">
    <?php include("navbar_account.php");?>
  </header>

  <!-- Dashboard Sapa -->
<div class="dashboard-sapa flex-grow bg-cover bg-center flex justify-center items-center" style="background-image: url('https://i.pinimg.com/736x/2b/49/b3/2b49b315b7139ed2baf9d1b43ff31c66.jpg');">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-4 text-white">
      <strong class="text-3xl font-bold mb-4 text-white">Selamat Datang</strong>
    <?php
    if(isset($_SESSION['name'])){
      echo $_SESSION['name'];
    } else {
      echo null;
    }
    ?>
    </h2>
    <p class="text-lg font-semibold text-white mb-6">Nikmati pengalaman berbelanja di A&W Shop. Temukan produk terbaik untuk Anda!</p>
    <div class="flex justify-center space-x-4">
      <a href="Data_customer.php" class="bg-blue-700 hover:bg-blue-500 text-white px-4 py-2 rounded data-btn">Data Customer</a>
      <a href="Data_produk.php" class="bg-green-700 hover:bg-green-400 text-white px-4 py-2 rounded data-btn">Data Produk</a>
    </div>
  </div>
</div>

  <!-- Footer Section -->
  <footer class="bg-gray-800 text-white py-6 mt-auto">
    <div class="container mx-auto px-4 flex flex-col items-center">
      <p class="text-lg leading-relaxed text-center mb-8">Selamat Datang di A&W Shop, Enjoyy Your Shoppingg...</p>
      <h2 class="text-xl font-semibold mb-4">Contact me</h2>
      <div class="flex space-x-4 mb-4">
        <a href="https://wa.me/6281339485089" class="flex items-center bg-gray-800 hover:bg-gray-500 text-white px-4 py-2 rounded">
          <img src="SIM 2/WA.png" alt="WhatsApp" class="h-8 w-8">
        </a>
        <a href="https://instagram.com/zam_zdneee" class="flex items-center bg-gray-800 hover:bg-gray-500 text-white px-4 py-2 rounded">
          <img src="SIM 2/IG.png" alt="Instagram" class="h-8 w-8">
        </a>
      </div> 
    </div>
  </footer>

</body>
</html>
