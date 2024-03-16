<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bamum:wght@400..700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<style>
    body{
        font-family: "Noto Sans Bamum", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }
</style>
    

<section class="h-screen inset-0 items-center justify-center">
   @yield('content')  
</section>
      

    <div class=""></div>
</body>
</html>