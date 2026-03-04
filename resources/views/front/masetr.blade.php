<!DOCTYPE html>
<html lang="en">

@include('front.partial.head')

<body>
    <div class="container-xxl bg-white p-0">

        @include('front.partial.spinner')

        @include('front.partial.navbar')

        @yield('about')
        @yield('newsletter')
        @yield('ourservice')
        @yield('feature')
        @yield('client')
        @yield('testimonial')
        @yield('ourteam')
        @yield('contactus')

        @include('front.partial.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @include('front.partial.script')
</body>

</html>
