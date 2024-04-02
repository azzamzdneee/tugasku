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
<body class="bg-gray-900 text-gray-200 font-sans flex flex-col min-h-screen">

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
          <li><a href="menu_pembeli.php" class="flex items-center text-white py-2 px-4 rounded bg-gray-800 hover:bg-gray-700 hover:shadow-lg">Menu Pembeli</a></li>
          <li><a href="keranjang.php" class="flex items-center text-white py-2 px-4 rounded bg-gray-700">Keranjang</a></li>
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
 <!-- Cart Section -->
 <section class="py-12 bg-gray-900">
  <div class="container mx-auto px-24">
    <h2 class="text-3xl font-semibold text-white mb-6">Keranjang Pembelian</h2>
    <!-- Cart Items -->
    <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden">
      <!-- Cart Table -->
      <table class="min-w-full">
        <thead class="bg-gray-700">
          <tr>
            <th class="px-4 py-2">Gambar Produk</th>
            <th class="px-4 py-2">Nama Produk</th>
            <th class="px-4 py-2">Nama Toko</th>
            <th class="px-4 py-2">Jumlah</th>
            <th class="px-4 py-2">Harga</th>
            <th class="px-4 py-2">Total</th>
          </tr>
        </thead>
        <tbody>
          <!-- Single Cart Item -->
          <tr>
            <td class="px-4 py-2"><img src="SIM 2/basreng.jpg" class="w-20 h-20 object-cover rounded"></td>
            <td class="px-4 py-2">Product Name</td>
            <td class="px-4 py-2">Shop Name</td>
            <td class="px-4 py-2">
              <input type="number" min="1" max="10" value="1" class="w-16 px-2 py-1 border rounded-md text-center bg-gray-800">
            </td>
            <td class="px-4 py-2">Rp. 20.000</td>
            <td class="px-4 py-2">Rp. 20.000</td>
          </tr>
        </tbody>
      </table>
    </div>
  <!-- Cart Summary -->
  <div class="mt-8 mb-16 bg-gray-800 shadow-md rounded-lg overflow-hidden">
    <div class="px-4 py-3 border-b border-gray-200">
      <h3 class="text-lg font-bold">Cart Summary</h3>
    </div>
    <div class="px-4 py-3 flex justify-between">
      <span class="font-bold">Total:</span>
      <span class="font-bold">Rp. 20.000</span>
    </div>
    <div class="flex justify-end">
      <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:bg-indigo-700" onclick="redirectToCheckout()">Checkout</button>
    </div>
  </div>
</section>
   <!-- Footer Section -->
   <footer class="bg-gray-800 text-white py-6 bottom-0 w-full">
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
  <script>
    function redirectToCheckout() {
        window.location.href = 'Checkout.html';
    }
</script>
</body>

</html>