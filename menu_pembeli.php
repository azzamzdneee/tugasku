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
  <nav class="container mx-auto flex justify-between items-center py-6 px-10">
    <div>
      <img src="SIM 2/logo bagus.png" alt="Logo Toko" width="150">
    </div>
    <div class="flex items-center space-x-4">
      <div class="hover:cursor-pointer sm:hidden">
        <span class="h-1 rounded-full block w-8 mb-1 bg-gradient-to-tr from-indigo-600 to-green-600"></span>
        <span class="h-1 rounded-full block w-8 mb-1 bg-gradient-to-tr from-indigo-600 to-green-600"></span>
        <span class="h-1 rounded-full block w-8 mb-1 bg-gradient-to-tr from-indigo-600 to-green-600"></span>
      </div>
      <ul class="sm:flex space-x-4 hidden items-center">
        <li><a href="menu_pembeli.php" class="flex items-center text-white py-2 px-4 rounded bg-gray-700">Menu Pembeli</a></li>
        <li><a href="keranjang.php" class="flex items-center text-white py-2 px-4 rounded bg-gray-800 hover:bg-gray-700 hover:shadow-lg">Keranjang</a></li>
        <li><a href="toko_saya.php" class="flex items-center text-white py-2 px-4 rounded bg-gray-800 hover:bg-gray-700 hover:shadow-lg">Toko Saya</a></li>
        <li><a href="" class="flex items-center font-bold text-indigo-700 py-2 px-4">
          <?php 
            if(isset($_SESSION['name'])){
              echo $_SESSION['name'];
              } else {
                echo null;
              }
          ?>
          <li><a href="api/logout.php" class="flex items-center text-white py-2 px-4 rounded bg-blue-800 hover:bg-blue-600 hover:shadow-lg">
            <img src="SIM 2/login bagus.png" alt="Signup" class="h-5 w-5 mr-4">
            Logout</a></li>
      </ul>
    </div>
  </nav>
</header>
  <!-- Product Section -->
  <section class="bg-gray-900 py-10">
    <div class="container mx-auto">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        <!-- Product 1 -->
        <div class="produk bg-gray-800 p-6 rounded-lg">
          <img src="SIM 2/basreng.jpg" class="mb-4">
          <h2 class="text-lg font-semibold text-center">Basreng pedas</h2> 
          <p class="text-white text-center">Rp. 20.000/kg</p> 
          <div class="flex justify-center items-center mt-4"> 
            <a href="Keranjang_FIX.html" class="bg-blue-700 hover:bg-blue-500 text-white px-4 py-2 rounded">Tambahkan ke Keranjang</a>
          </div>
        </div>
        
        <!-- Product 2 -->
        <div class="produk bg-gray-800 p-6 rounded-lg">
          <img src="SIM 2/makaroni.jpg" class="mb-4">
          <h2 class="text-lg font-semibold text-center">Makaroni pedas</h2> 
          <p class="text-white text-center">Rp. 20.000/kg</p> 
          <div class="flex justify-center items-center mt-4"> 
            <a href="Keranjang_FIX.html" class="bg-blue-700 hover:bg-blue-500 text-white px-4 py-2 rounded">Tambahkan ke Keranjang</a>
          </div>
        </div>
  
        <!-- Product 3 -->
        <div class="produk bg-gray-800 p-6 rounded-lg">
          <img src="SIM 2/seblak.jpg" class="mb-4">
          <h2 class="text-lg font-semibold text-center">Kerupuk seblak pedas</h2> 
          <p class="text-white text-center">Rp. 20.000/kg</p> 
          <div class="flex justify-center items-center mt-4"> 
            <a href="Keranjang_FIX.html" class="bg-blue-700 hover:bg-blue-500 text-white px-4 py-2 rounded">Tambahkan ke Keranjang</a>
          </div>
        </div>
  
        <!-- Product 4 -->
        <div class="produk bg-gray-800 p-6 rounded-lg">
          <img src="SIM 2/Keripik usus new.jpg" class="mb-4">
          <h2 class="text-lg font-semibold text-center">Keripik usus pedas</h2> 
          <p class="text-white text-center">Rp. 20.000/kg</p> 
          <div class="flex justify-center items-center mt-4"> 
            <a href="Keranjang_FIX.html" class="bg-blue-700 hover:bg-blue-500 text-white px-4 py-2 rounded">Tambahkan ke Keranjang</a>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- Footer Section -->
   <footer class="bg-gray-800 text-white py-6">
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