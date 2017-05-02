<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('partials._head')
<body>
    <div id="app">

        @include('partials._header')
        @yield('content')
    </div>
    @include('partials._footer')

    @include('partials._scripts')
</body>
</html>
