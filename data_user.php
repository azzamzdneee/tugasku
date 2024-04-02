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
          <li><a href="dashboard.php" class="flex items-center text-white py-2 px-4 rounded bg-gray-800 hover:bg-gray-700 hover:shadow-lg">Menu Penjual</a></li>
          <li><a href="api/logout.php" class="flex items-center text-white py-2 px-4 rounded bg-blue-800 hover:bg-blue-600 hover:shadow-lg">
            <img src="SIM 2/login bagus.png" alt="Signup" class="h-5 w-5 mr-4">
            Logout</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main class="container mx-auto px-20 py-8">
    <table class="w-full table-auto">
        <thead>
        <tr>
            <th class="px-4 py-2">No</th>
            <th class="px-4 py-2">ID Customer</th>
            <th class="px-4 py-2">Nama Customer</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">No. Telpon</th>
        </tr>
        </thead>
        <tbody>
        <!-- Data 1 -->
        <tr>
            <td class="border px-4 py-2">1</td>
            <td class="border px-4 py-2">Makaroni Pedas</td>
            <td class="border px-4 py-2">Rp. 20.000</td>
            <td class="border px-4 py-2">2</td>
            <td class="border px-4 py-2">001</td>
            <td class="border px-4 py-2">azzam</td>
            <td class="border px-4 py-2">azzam@gmail.com</td>
            <td class="border px-4 py-2">081339485089</td>
            <td class="border px-4 py-2">Kletek</td>
        </tr>
        <!-- Data 2 -->
        <tr>
            <td class="border px-4 py-2">2</td>
            <td class="border px-4 py-2">Kerupuk Seblak Pedas</td>
            <td class="border px-4 py-2">Rp. 20.000</td>
            <td class="border px-4 py-2">1</td>
            <td class="border px-4 py-2">002</td>
            <td class="border px-4 py-2">azzam</td>
            <td class="border px-4 py-2">azzam@gmail.com</td>
            <td class="border px-4 py-2">081339485089</td>
            <td class="border px-4 py-2">Kletek</td>
        </tr>
        <!-- Data 3 -->
        <tr>
            <td class="border px-4 py-2">3</td>
            <td class="border px-4 py-2">Basreng Pedas</td>
            <td class="border px-4 py-2">Rp. 20.000</td>
            <td class="border px-4 py-2">3</td>
            <td class="border px-4 py-2">003</td>
            <td class="border px-4 py-2">azzam</td>
            <td class="border px-4 py-2">azzam@gmail.co</td>
            <td class="border px-4 py-2">081339485089</td>
            <td class="border px-4 py-2">Kletek</td>
        </tr>
        </tbody>
    </table>
  </main>
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