<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @isset($meta)
        {{ $meta }}
    @endisset

    <!-- General Template CSS Files -->
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">
    <link rel="stylesheet" href="{{ mix('css/components.css') }}">

    <!-- Page Specific CSS File -->
    @isset($style)
        {{ $style }}
    @endisset

    <!-- General Template JS Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="layout-3">

    <div id="app">
        <div class="main-wrapper container">

            @include('components.app.main-navbar')

            @include('components.app.secondary-navbar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        @isset($header_content)
                            {{ $header_content }}
                        @else
                            {{ __('Pages') }}
                        @endisset
                    </div>

                    <div class="section-body">
                        {{ $slot }}
                    </div>
                </section>
            </div>
            @include('components.app.footer')
        </div>
    </div>

    @isset($script)
        {{ $script }}
    @endisset

</body>

</html>
