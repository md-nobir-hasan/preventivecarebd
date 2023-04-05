
<!DOCTYPE html>
<html dir="ltr" lang="bn">

    {{-- Header  --}}
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>{{ $site_info->title ?? env('APP_NAME') }} </title>
        <base />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{ $site_info->logo }}" rel="icon" />
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        @stack('custom-css')
    </head>

<body class="common-home">
    <div class="toastr-div">
    </div>
    @yield('page_conent')

    {{-- Header  --}}
    @include('frontend.partials.footer')

    @stack('js')

</body>

</html>
