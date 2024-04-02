<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white">
  <!-- registration start -->
  <section class="bg-gray-900">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
      <!-- bagian kiri halaman -->
      <div class="flex flex-col justify-center items-center lg:col-span-7 lg:p-8 lg:py-12 xl:col-span-6">
        <h2 class="text-3xl font-semibold text-white text-center">Registration</h2> <!-- Tulisan Registration -->
        <div class="max-w-xl lg:max-w-3xl">
          <!-- alert error-->
          <form action="./api/register.php" method="POST" class="mt-8 grid grid-cols-6 gap-6 p-6 bg-gray-800 rounded-lg shadow-md">
            <!-- nama -->
            <div class="col-span-6">
              <label for="" class="block text-sm font-medium text-gray-200">Nama</label>
              <input type="text" class="mt-1 w-full p-2 rounded-md border-gray-300 bg-gray-700 text-sm text-gray-200 shadow-md" name="name" value="" required >
            </div>
            <!-- email -->
            <div class="col-span-6 sm:col-span-3">
              <label for="" class="block text-sm font-medium text-gray-200">Email</label>
              <input type="email" class="mt-1 w-full p-2 rounded-md border-gray-300 bg-gray-700 text-sm text-gray-200 shadow-md" name="email" value="" required >
            </div>
            <!-- nomor -->
            <div class="col-span-6 sm:col-span-3">
              <label for="" class="block text-sm font-medium text-gray-200">Telepon</label>
              <input type="text" class="mt-1 w-full p-2 rounded-md border-gray-300 bg-gray-700 text-sm text-gray-200 shadow-md" name="phone" value="" required> 
            </div>
            <!-- alamat -->
            <div class="col-span-6">
              <label for="" class="block text-sm font-medium text-gray-200">Alamat</label>
              <textarea class="mt-1 w-full p-2 rounded-md border-gray-300 bg-gray-700 text-sm text-gray-200 shadow-md" name="address"></textarea>
            </div>
            <!-- negara -->
            <div class="col-span-6 sm:col-span-2">
              <label for="" class="block text-sm font-medium text-gray-200">Negara</label>
              <input type="text" class="mt-1 w-full p-2 rounded-md border-gray-300 bg-gray-700 text-sm text-gray-200 shadow-md" name="country" value="" required> 
            </div>
            <!-- kota -->
            <div class="col-span-6 sm:col-span-2">
              <label for="" class="block text-sm font-medium text-gray-200">Kota</label>
              <input type="text" class="mt-1 w-full p-2 rounded-md border-gray-300 bg-gray-700 text-sm text-gray-200 shadow-md" name="city" value="" required> 
            </div>
            <!-- zip -->
            <div class="col-span-6 sm:col-span-2">
              <label for="" class="block text-sm font-medium text-gray-200">Kode Pos</label>
              <input type="text" class="mt-1 w-full p-2 rounded-md border-gray-300 bg-gray-700 text-sm text-gray-200 shadow-md" name="zip" value="" required> 
            </div>
            <!-- password -->
            <div class="col-span-6 sm:col-span-3">
              <label for="" class="block text-sm font-medium text-gray-200">Password</label>
              <input type="password" class="mt-1 w-full p-2 rounded-md border-gray-300 bg-gray-700 text-sm text-gray-200 shadow-md" name="password">

            </div>

            <!-- konfirmasi password -->
            <div class="col-span-6 sm:col-span-3">

              <label for="" class="block text-sm font-medium text-gray-200">Konfirmasi Password</label>
              <input type="password" class="mt-1 w-full p-2 rounded-md border-gray-300 bg-gray-700 text-sm text-gray-200 shadow-md" name="confirm">
              <p class="text-sm text-red-500 italic"><?php if (isset($_GET["message"])) {

                    echo $_GET["message"];
                  }

                  ?></p>
            </div>
            <div class="col-span-6">
              <p class="text-sm text-gray-400">
                Dengan membuat akun ini, kamu menyetujui syarat & ketentuan kami
              </p>
            </div>
            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
              <button name="submit" type="submit" class="inline-block shrink-0 rounded-md border bg-gray-500 px-12 py-3 text-sm font-medium text-white transition hover:bg-gray-600 hover:text-white focus:outline-none focus:ring active:text-white cursor-pointer hover:bg-indigo-700">Buat
                Akun</button>
              <p class="mt-4 text-sm text-gray-400 sm:mt-0">Sudah punya akun?
                <a href="login.php" class="text-gray-300 hover:text-indigo-300 underline">Masuk</a>.
              </p>
              <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                <a href="index.php" class="inline-block shrink-0 rounded-md border bg-gray-500 px-12 py-3 text-sm font-medium text-white transition hover:bg-gray-600 hover:text-white focus:outline-none focus:ring active:text-white cursor-pointer hover:bg-indigo-700">Kembali
                  ke Home</a>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- bagian kanan halaman -->
      <div class="lg:col-span-5 lg:h-full xl:col-span-6">
        <div class="relative h-full">
          <img src="SIM 2/pamflet.jpg" alt="Background" class="absolute inset-0 w-full h-full object-cover">
          <div class="absolute inset-0 flex flex-col items-center justify-center bg-gray-700 bg-opacity-50">
            </h2>
          </div>
        </div>
      </div>
  </section>
  <!-- registration end -->
</body>
<!-- <form action="registration.php" method="post" class="mt-8 grid grid-cols-6 gap-6 p-6 bg-gray-800 rounded-lg shadow-md"> -->

</html>