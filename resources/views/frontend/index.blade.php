<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.headers.header')

<body>

    </audio>
    @include('frontend.layouts.navbars.navbar')

    <!-- ======= tampilan atas ======= -->
    @include('frontend.tampilanatas.index')
    <!-- End Hero -->

    <main id="main">

        <!-- ======= visi misi ======= -->
        @include('frontend.visimisi.index')
        <!-- End About Section -->

        <!-- ======= info penting ======= -->
        @include('frontend.infopenting.index')
        <!-- End Services Section -->

        <!-- ======= bpi bph ======= -->
        @include('frontend.bpibph.index')<!-- End Team Section -->

        <!-- ======= gallery  ======= -->
        @include('frontend.gallery.index')
        <!-- End Portfolio Section -->

        <div class="swiper-pagination"></div>

        <!-- ======= pesan mereka ======= -->
        @include('frontend.pesanmereka.index')
        <!-- End Testimonials Section -->

        <!-- ======= contact======= -->
        @include('frontend.contact.index')
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend.layouts.footers.footer')<!-- End Footer -->

    @include('frontend.layouts.script.script')

</body>

</html>
