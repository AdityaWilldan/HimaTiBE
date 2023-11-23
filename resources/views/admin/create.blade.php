<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <!-- Tambahkan link ke Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white p-8">
    <h1 class="text-3xl mb-4 text-center">Buat Data Baru</h1>
    <form action="/store" method="POST" class="max-w-sm mx-auto" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="title" class="bg-gray-800 text-white p-2 rounded mb-2 w-full">
        <textarea type="text" name="konten" placeholder="konten" class="bg-gray-800 text-white p-2 rounded mb-2 w-full"></textarea>
        <input type="text" name="admin" placeholder="admin" class="bg-gray-800 text-white p-2 rounded mb-2 w-full">
        <input name="tanggal" placeholder="tanggal" class="bg-gray-800 text-white p-2 rounded mb-2 w-full resize-none">
        <input type="file" name="gambar" size="39" class="bg-gray-800 text-white p-2 rounded mb-2 w-full">
        <input type="submit" name="submit" value="kirim" class="bg-purple-500 hover:bg-purple-600 text-white p-2 rounded w-full">
    </form>
</body>
</html>
