@include('layouts.includes.header')

<body>
@include('layouts.includes.nav')
    <div id="app" class="lapp">



    @yield('content')


    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/conf.js') }}"></script>
</body>
</html>
