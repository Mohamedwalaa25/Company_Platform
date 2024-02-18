<!DOCTYPE html>
<html lang="en">

@include("front.partials.header")
<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
     @include('front.partials.nav')

     @yield('header')
    </div>
    <!-- Navbar & Hero End -->


 @yield('content')

    <!-- Footer Start -->
 @include("front.partials.footer")
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets') }}/lib/wow/wow.min.js"></script>
<script src="{{asset('assets') }}/lib/easing/easing.min.js"></script>
<script src="{{asset('assets') }}/lib/waypoints/waypoints.min.js"></script>
<script src="{{asset('assets') }}/lib/counterup/counterup.min.js"></script>
<script src="{{asset('assets') }}/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('assets') }}/lib/isotope/isotope.pkgd.min.js"></script>
<script src="{{asset('assets') }}/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="{{asset('assets') }}/js/main.js"></script>
</body>

</html>
