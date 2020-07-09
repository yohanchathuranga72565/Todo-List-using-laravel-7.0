<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Todos</title>
</head>
<body>
    <div class="text-center flex justify-center pt-10">
        <div class="w-1/3 border border-gray-400 rounded py-4">
            @yield('content')
        </div>
      
    </div>
    
</body>
</html>