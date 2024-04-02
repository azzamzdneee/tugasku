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
          <li><a href="keranjang.php" class="flex items-center text-white py-2 px-4 rounded bg-gray-800 hover:bg-gray-700 hover:shadow-lg">Keranjang</a></li>
          <li><a href="toko_saya.php" class="flex items-center text-white py-2 px-4 rounded bg-gray-700">Toko Saya</a></li>
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