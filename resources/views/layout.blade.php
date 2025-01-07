<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <!-- Add your CSS or other head elements here -->
</head>
<body>
    <header>
        <h1>Welcome to the To-Do List App</h1>
    </header>

    <div class="container">
        @yield('content') <!-- This is where content will be injected -->
    </div>

</body>
</html>
