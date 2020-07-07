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
    <div class="text-center pt-10">
        <h1 class="text-2xl">What next you need TO-DO</h1>
        <form action="/todos/create" method="post" class="py-5 border">
            @csrf
            <input type="text" name = "title" class="py-2 px-2 rounded border" />
            <input type="submit" value = "create" class="p-2 rounded border"/>
        </form>
    </div>
    
</body>
</html>