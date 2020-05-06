<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Programming Class')</title>
</head>
<body>
    <ul>
        <a href="php"><li>PHP Page</li></a>
        <a href="js"><li>JS Page</li></a>
    </ul>
    @yield('content')
</body>
</html>