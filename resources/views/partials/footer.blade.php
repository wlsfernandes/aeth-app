<div class="scroll-to-top">
    <div>
        <div class="scroll-top-inner">
            <div class="scroll-bar">
                <div class="bar-inner"></div>
            </div>
            <div class="scroll-bar-text">Go To Top</div>
        </div>
    </div>
</div>

<!--</div> Attention div  close from header <div class="boxed_wrapper"> -->

<!-- Scripts -->


</body>

<footer class="main-footer">
    <div class="auto-container">
        <div class="footer-top">
            <figure class="footer-logo"><a href="/"><img src="{{ asset('assets/images/logo-3.png') }}"
                        alt="AETH Logo"></a></figure>
            <figure class="footer-logo" style="max-width: 120px;"><a
                    href="https://www.charitynavigator.org/ein/582022462" target="blank"><img
                        src="{{ asset('assets/images/logo/charity-navigator-white.png') }}" alt="Charity Navigator"></a>
            </figure>
            <ul class="social-links">
                <li><a href="http://www.facebook.com/groups/somosaeth/" target="blank"><i
                            class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/aeth_org/" target="blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li><a href="https://vimeo.com/aeth" target="blank"><i class="fab fa-vimeo"></i></a></li>
                <li><a href="https://wa.me/14077546863" target="blank"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
        </div>
        <!--   <div class="widget-section">
            <div class="row clearfix">

                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="links-widget footer-widget ml_50">
                        <div class="widget-title">
                            <h3>Quick Link</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="index.php">About Us</a></li>
                                <li><a href="index.php">Services</a></li>
                                <li><a href="index.php">Case</a></li>
                                <li><a href="index.php">Pricing</a></li>
                                <li><a href="index.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="links-widget footer-widget ml_30">
                        <div class="widget-title">
                            <h3>Usefull Links</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Terms & Condition</a></li>
                                <li><a href="">Support</a></li>
                                <li><a href="">Disclaimer</a></li>
                                <li><a href="">Faq</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="contact-widget footer-widget ml_30">
                        <div class="widget-title">
                            <h3>Contact</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li><i class="icon-17"></i>160 Clairemont Ave. Suite 300 Decatur, GA 30030</li>
                                <li><i class="icon-18"></i><a href="mailto:jcgcenter@aeth.org">jcgcenter@aeth.org</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="footer-bottom centred">
            <div class="copyright">
                <p><small>Copyright <span id="currentYear"></span> by <a href="https://aeth.org"
                            target="_blank">AETH</a> All Right Reserved.</small>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->

<!-- Set current year in footer -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const yearEl = document.getElementById("currentYear");
        if (yearEl) yearEl.textContent = new Date().getFullYear();
    });
</script>


<!-- 🐘 Core libraries: defer to prevent render-blocking -->
<script src="{{ asset('assets/js/jquery.js') }}" defer></script>
<script src="{{ asset('assets/js/popper.min.js') }}" defer></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>

<!-- 🐇 Carousel, animation, validation -->
<script src="{{ asset('assets/js/owl.js') }}" defer></script>
<script src="{{ asset('assets/js/wow.js') }}" defer></script>
<script src="{{ asset('assets/js/validation.js') }}" defer></script>

<!-- 🎨 UI + interaction scripts -->
<script src="{{ asset('assets/js/jquery.fancybox.js') }}" defer></script>
<script src="{{ asset('assets/js/appear.js') }}" defer></script>
<script src="{{ asset('assets/js/scrollbar.js') }}" defer></script>
<script src="{{ asset('assets/js/isotope.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}" defer></script>
<script src="{{ asset('assets/js/parallax-scroll.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}" defer></script>
<script src="{{ asset('assets/js/nav-tool.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery.bootstrap-touchspin.js') }}" defer></script>
<script src="{{ asset('assets/js/bxslider.js') }}" defer></script>

<!-- 🧠 Main logic -->
<script src="{{ asset('assets/js/script.js') }}" defer></script>