<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @yield('title-meta')

    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/website') }}/images/icons/favicon.png">
    <!-- Place favicon.png in the root directory -->

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/custom.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/color/skin-default.css">

    <!-- Modernizr JS -->
    <script src="{{ asset('assets/website') }}/js/vendor/modernizr-3.11.2.min.js"></script>

    @yield('custom-css')
</head>


