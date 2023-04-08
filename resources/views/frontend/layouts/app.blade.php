
<!DOCTYPE html>
<html dir="ltr" lang="bn">

    {{-- Header  --}}
    @include('frontend.partials.header')

<body class="common-home">
    <div class="toastr-div">
    </div>
    @yield('page_conent')

    {{-- Header  --}}
    @include('frontend.partials.footer')
<script>
    const element = document.getElementById("form");
    const orderbtn = document.getElementById("orderbtn");

    let y = element.scrollHeight;


    function height(){
        // console.log(y,orderbtn.scrollHeight,window.scrollHeight );
    }
</script>
    @stack('js')

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZ23H78"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>
