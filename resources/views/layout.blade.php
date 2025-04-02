<!DOCTYPE html>
<html lang="en-us">

<x-head :title="env('APP_NAME')" />

<body>
    <x-navigation-menu />


    <main>

        @yield('content')

    </main>


    <x-scripts />

</body>

</html>
