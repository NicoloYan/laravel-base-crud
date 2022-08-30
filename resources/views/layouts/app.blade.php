<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <header>
        <div>
            <a href="/">Home</a>
        </div>
        <div>
            <a href="{{ route('comics.index') }}">Products</a>
        </div>
        <div>
            <a href="{{ route('comics.create') }}">Create a new product</a>
        </div>
    </header>

    <main>
        @yield('main_content')
    </main>
</body>
</html>