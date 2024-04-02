<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">

<div class="flex h-screen items-center justify-center bg-cover bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1543339503-6dffa8e76647?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
    <section id="login" class="p-4 flex flex-col justify-center min-h-screen max-w-md mx-auto"> 
        <div class="p-6 bg-gray-900 rounded">
            <video autoplay loop muted playsinline>
                <source background src="SIM 2/mukbang.mp4" type="video/webm">
            </video>
            <div class="flex items-center justify-center text-4xl font-black text-sky-900 m-3">
                <img src="SIM 2/logo bagus.png">
            </div>
            <form id="login_form" action="api/login.php" method="POST" class="flex flex-col justify-center">
                <label class="text-sm text-white font-medium">Email</label>
                <input class="mb-3 px-2 py-1.5 mb-3 mt-1 block w-full px-2 py-1.5 border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-red-500 focus:invalid:ring-red-500" type="text" name="email" placeholder="WAHYU" required>
                <label class="text-sm text-white font-medium">Password</label>
                <input class="mb-3 mt-1 block w-full px-2 py-1.5 border border-gray-300 rounded-md text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-red-500 focus:invalid:ring-red-500" type="password" name="password" placeholder="********" required>
                <input class="px-4 py-1.5 rounded-md shadow-lg bg-sky-600 font-medium text-gray-100 block hover:bg-sky-700 transition duration-300" type="submit" value="Login" name="login">
                <?php if(isset($_GET["message"])) { ?>
                    <div class="text-red-500 text-sm mt-2"><?php echo $_GET["message"]; ?></div>
                <?php } ?>
            </form>
            <div class="flex justify-between mt-4">
                <a href="index.php" class="text-sm text-blue-500 hover:underline">Kembali ke Home</a>
                <a href="registration.php" class="text-sm text-blue-500 hover:underline">Buat Akun</a>
            </div>
        </div>
    </section>
</div>

</body>
</html>
