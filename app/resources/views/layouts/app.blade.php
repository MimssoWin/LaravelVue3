<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My App')</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div id="nav-menu-root"></div>

    <main class="page-container">
        @yield('content')
    </main>
</body>
</html>
