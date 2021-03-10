<!doctype html>
<html lang="en">

<!-- Head -->
@include('partials.head')
<!-- End Of Head -->

<body>
   <div id="app"></div>
    <script src="{{ asset('js/jquery.min.js') }}"></script> 
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/preview-files.js') }}"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    @yield('script')
</body>

</html>