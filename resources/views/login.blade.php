<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    @vite('resources/js/index.js')
    <script src="/asset/js/login.js"></script>
</head>
<body class="h-screen bg-[#013220] flex items-center justify-center relative">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('asset/css/rusalog.png');"></div>

    <!-- Form -->
    <form class="relative bg-white/70 p-8 md:p-10 lg:p-12 rounded-lg shadow-md w-[90%] max-w-md text-center transition-shadow hover:shadow-lg">
        <div class="mb-5">
            <label for="username" class="block text-black font-medium mb-2 text-sm lg:text-base">Username</label>
            <input type="text" name="username" id="username" 
                   class="w-full p-2.5 md:p-3 border-2 border-gray-300 rounded-md focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:outline-none transition text-sm lg:text-base">
        </div>
        <div class="mb-5">
            <label for="password" class="block text-black font-medium mb-2 text-sm lg:text-base">Password</label>
            <input type="password" name="password" id="password" 
                   class="w-full p-2.5 md:p-3 border-2 border-gray-300 rounded-md focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:outline-none transition text-sm lg:text-base">
        </div>
        <button type="submit" 
                class="w-1/2 px-4 py-2.5 bg-[#013220] text-white rounded-md text-sm lg:text-base font-medium hover:bg-[#04442c] transition">
            LOGIN
        </button>
    </form>
</body>
</html>