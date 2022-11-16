    <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">

                <div class="row g-5">
                    <div class="col-lg-4">
                        <h3 class="footer-heading">About Moren-O</h3>
                        <p>MOREN-O Goodwill Foundation was incorporated in Nigeria three and half years ago as a
                            non-profit organization with the main objective of assisting the underprivileged in the
                            society through its charitable activities and programmes.
                        </p>
                        <p><a href="#" class="footer-link-more">Learn More</a></p>
                    </div>
                    <div class="col-6 col-lg-2">
                        <h3 class="footer-heading">Navigation</h3>
                        <ul class="footer-links list-unstyled">
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Home</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> About Us</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Services</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Contact</a></li>

                        </ul>
                    </div>


                    @include('pages.newsletter')
                </div>
            </div>
        </div>

        <div class="footer-legal">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <div class="copyright">
                            © Copyright <strong><span>{{ date('Y') }}</span></strong>. All Rights Reserved
                        </div>



                    </div>

                    <div class="col-md-6">
                        <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </footer>


    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('zenblog/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('zenblog/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('zenblog/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('zenblog/assets/vendor/aos/aos.js') }}"></script>
    <script src="#"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('zenblog/assets/js/main.js') }}"></script>
