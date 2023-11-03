@include("layouts.partials.head")

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTWLF8D2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('layouts.partials.root-errors')
    @include("layouts.partials.prebody")
    @include('layouts.partials.success')
    @yield('content')
    @include('layouts.partials.js')
</body>

</html>