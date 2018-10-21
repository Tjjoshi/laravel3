<!doctype html>
<html lang="en">

@include('includes.head')
<body>
<div class="container">
    <header>
        @include('includes.mainNav')

    </header>
    <main role="main">
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>
</div>

</html>
