<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog App</title>
</head>

<body>

    <nav>
        <ul>
            <li><a href="{{ route('blog.index') }}">Home</a></li>
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>

</body>

</html>