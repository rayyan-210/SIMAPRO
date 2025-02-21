<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMASTOK</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/tailwind.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js\SIMASTOK.js" defer></script>
</head>

<body>
    <!--navbar-->
    <nav class="bg-red-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <img class="h-8 w-auto" src="LOGO_RINS.png" alt="Your Company">
                </div>
                <div class="hidden sm:block">
                    <div class="flex space-x-10">
                        <a href="admin_chart.php" class="text-gray-300 hover:text-amber-300 px-3 py-2 rounded-md text-xl font-medium">Chart</a>
                        <a href="admin_catalog.php" class="text-gray-300 hover:text-amber-300 px-3 py-2 rounded-md text-xl font-medium">Catalog</a>
                        <a href="admin_image.php" class="text-gray-300 hover:text-amber-300 px-3 py-2 rounded-md text-xl font-medium">Image</a>
                    </div>
                </div>
                <div class="flex items-center">
                    <i class='bx bxs-user-circle text-4xl px-7 text-gray-300 hover:text-amber-300'></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- #container-->

    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white shadow-xl border border-black rounded-lg p-16 ">
            <!-- Image Upload Section -->
            <div class="flex flex-col md:flex-row items-start gap-4">
                <div class="w-32 h-72 border-dashed border-2 border-gray-300 flex flex-col justify-center items-center">
                <button>
                <i class="bx bx-plus text-3xl text-black hover:text-amber-300"onclick="showAlert()"></i>
                    <p class="text-gray-400 text-sm">Upload Gambar</p></button>
                </div>

                <!-- Form Fields -->
                <div class="flex-1 space-y-4">
                    <div>
                        <label for="namaProduk" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                        <input type="text" id="namaProduk" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Nama Produk">
                    </div>
                    <div>
                        <label for="jenisProduk" class="block text-sm font-medium text-gray-700">Jenis produk</label>
                        <input type="text" id="jenisProduk" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Jenis Produk">
                    </div>
                    <div>
                    <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 py-2 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">Rp.</span>
                        <input type="text" id="harga" class="block w-full px-3 py-2 border border-gray-300 rounded-r-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" placeholder="Harga">
                    </div>
                </div>
                    <button class="flex mx-auto bg-blue-500 text-white font-bold px-4 py-2 rounded-xl hover:bg-blue-600">Submit</button>
                </div>
            </div>
        </div>
    </div>


</html>