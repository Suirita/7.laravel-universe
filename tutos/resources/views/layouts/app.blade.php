<!DOCTYPE html>
<html>
<head>
    <title>My Laravel application</title>
</head>
<body>
    <header>
        <h1>My site</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>
    @yield('content')
    <footer>
        &copy; All rights reserved.
    </footer>
</body>
</html>
