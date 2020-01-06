<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <header>
        <nav class="my-navbar">
            <a href="/" class="navbar-brand">Blog</a>
            <div class="my-navbar-control navbar-right">
                @if (Auth::check())
                <a href="{{route('users.show', ['user' => Auth::user()])}}" class="my-navbar-item">My Page</a>
                |
                <a href="#" id="logout" class="my-navbar-item">logout</a>
                <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;">
                    @csrf
                </form>
                @else
                <a href="{{route('login')}}" class="my-navbar-item">Login</a>
                |
                <a href="{{route('register')}}" class="my-navbar-item">Register</a>
                @endif
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    @if (Auth::check())
        <script>
            document.getElementById('logout').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('logout-form').submit();
            });
        </script>
    @endif
</body>

</html>
