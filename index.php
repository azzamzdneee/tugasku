<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sayang Anak | A&W Shop</title>
  </head>
  <body>
    <!-- Header -->
    <header class="bg-gray-800">
     <?php include('navbar_customer.php')?> 
    </header>
    <!-- Slider -->
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img
            src="SIM 2/basreng landscape.jpg"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt=""
          />
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img
            src="SIM 2/kripik usus landscape.jpg"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="..."
          />
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img
            src="SIM 2/kerupuk seblak landscape.png"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="..."
          />
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img
            src="SIM 2/makaroni landscape.jpg"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="..."
          />
        </div>
      </div>
      <!-- Slider indicators -->
      <div
        class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse"
      >
        <button
          type="button"
          class="w-3 h-3 rounded-full"
          aria-current="true"
          aria-label="Slide 1"
          data-carousel-slide-to="0"
        ></button>
        <button
          type="button"
          class="w-3 h-3 rounded-full"
          aria-current="false"
          aria-label="Slide 2"
          data-carousel-slide-to="1"
        ></button>
        <button
          type="button"
          class="w-3 h-3 rounded-full"
          aria-current="false"
          aria-label="Slide 3"
          data-carousel-slide-to="2"
        ></button>
        <button
          type="button"
          class="w-3 h-3 rounded-full"
          aria-current="false"
          aria-label="Slide 4"
          data-carousel-slide-to="3"
        ></button>
      </div>
      <!-- Slider controls -->
      <button
        type="button"
        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev
      >
        <span
          class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
        >
          <svg
            class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 6 10"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M5 1 1 5l4 4"
            />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button
        type="button"
        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next
      >
        <span
          class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
        >
          <svg
            class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 6 10"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="m1 9 4-4-4-4"
            />
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>
    <!-- About Section -->
    <section class="about-section bg-gray-800 text-white py-10">
      <div class="container mx-auto px-4">
        <div class="block lg:flex justify-center items-center">
          <img
            src="SIM 2/logo A&W non bg.png"
            width="250"
            class="mr-8"
            alt="Logo MiHoYo"
          />

          <div>
            <h2 class="text-3xl font-semibold mb-4">A&W SHOP</h2>
            <p class="text-lg leading-relaxed">
              Selamat datang di E-Commerce Sayang Anak! Kami adalah destinasi
              terbaik untuk pecinta camilan pedas yang mencari pengalaman rasa
              yang unik dan memuaskan. Dalam koleksi kami, Anda akan menemukan 4
              macam camilan pedas yang menggugah selera, termasuk keripik usus
              pedas, basreng pedas, kerupuk seblak pedas, dan makaroni pedas.
              Setiap camilan diproduksi dengan teliti dan menggunakan
              bahan-bahan berkualitas tinggi, sehingga menjamin cita rasa yang
              autentik dan kualitas yang prima. Dengan sentuhan rempah yang khas
              dan tingkat kepedasan yang tepat, camilan-camilan kami akan
              memuaskan hasrat Anda akan sensasi pedas yang menggoda. Nikmati
              kemudahan berbelanja online dengan kami dan dapatkan camilan pedas
              favorit Anda hanya dengan beberapa klik. Segera kunjungi
              E-Commerce Sayang Anak dan temukan pengalaman rasa yang tak
              terlupakan!
            </p>
          </div>
        </div>
      </div>
    </section>
    <main class="bg-gray-900 mx-auto px-8 py-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div
          class="produk flex flex-col items-center justify-center bg-gray-800 rounded-lg p-4"
        >
          <img src="SIM 2/usus.jpg" alt="Keripik usus pedas" />
          <h2 class="text-lg text-white font-semibold mt-2">
            Keripik usus pedas
          </h2>
          <p class="text-white mt-1">Harga: Rp. 20.000</p>
        </div>
        <div
          class="produk flex flex-col items-center justify-center bg-gray-800 rounded-lg p-4"
        >
          <img src="SIM 2/seblak.jpg" alt="Kerupuk seblak pedas" />
          <h2 class="text-lg text-white font-semibold mt-2">
            Kerupuk seblak pedas
          </h2>
          <p class="text-white mt-1">Harga: Rp. 20.000</p>
        </div>
        <div
          class="produk flex flex-col items-center justify-center bg-gray-800 rounded-lg p-4"
        >
          <img src="SIM 2/makaroni.jpg" alt="Makaroni pedas" />
          <h2 class="text-lg text-white font-semibold mt-2">Makaroni pedas</h2>
          <p class="text-white mt-1">Harga: Rp. 20.000</p>
        </div>
        <div
          class="produk flex flex-col items-center justify-center bg-gray-800 rounded-lg p-4"
        >
          <img src="SIM 2/basreng.jpg" alt="Basreng pedas" />
          <h2 class="text-lg text-white font-semibold mt-2">Basreng pedas</h2>
          <p class="text-white mt-1">Harga: Rp. 20.000</p>
        </div>
      </div>
    </main>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
      <div class="container mx-auto px-4 flex flex-col items-center">
        <p class="text-lg leading-relaxed text-center mb-8">
          Selamat Datang di A&W Shop, Enjoyy Your Shoppingg...
        </p>
        <h2 class="text-xl font-semibold mb-4">Contact me</h2>
        <div class="flex space-x-4 mb-4">
          <a
            href="https://wa.me/6281339485089"
            class="flex items-center bg-gray-800 hover:bg-gray-500 text-white px-4 py-2 rounded"
          >
            <img src="SIM 2/WA.png" alt="WhatsApp" class="h-8 w-8" />
          </a>
          <a
            href="https://instagram.com/zam_zdneee"
            class="flex items-center bg-gray-800 hover:bg-gray-500 text-white px-4 py-2 rounded"
          >
            <img src="SIM 2/IG.png" alt="Instagram" class="h-8 w-8" />
          </a>
        </div>
      </div>
    </footer>
  </body>
  <script src="./js/index.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</html>
