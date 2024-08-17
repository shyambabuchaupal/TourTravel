<footer id="footer" class="footer position-relative" style='background-image: url("assets/img/footer_bg.png");'>

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="index.php" class="logo d-flex align-items-center">
                    <img src="assets/img/bluebell-logo.png" alt="">
                </a>
                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies
                    darta donna mare fermentum iaculis eu non diam phasellus.</p>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Product Management</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>A108 Adam Street</p>
                <p>New York, NY 535022</p>
                <p>United States</p>
                <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                <p><strong>Email:</strong> <span>info@example.com</span></p>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4 d-none">
        <p>© <span>Copyright</span> <strong class="sitename">Append</strong> <span>All Rights Reserved</span></p>

    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->


<script src="assets/js/main.js"></script>
<script>
        class TypeWriter {
            constructor(txtElement, words, wait = 3000) {
                this.txtElement = txtElement;
                this.words = words;
                this.txt = '';
                this.wordIndex = 0;
                this.wait = parseInt(wait, 8);
                this.type();
                this.isDeleting = false;
            }

            type() {
                // Current index of word
                const current = this.wordIndex % this.words.length;
                // Get full text of current word
                const fullTxt = this.words[current];

                // Check if deleting
                if (this.isDeleting) {
                    // Remove char
                    this.txt = fullTxt.substring(0, this.txt.length - 1);
                } else {
                    // Add char
                    this.txt = fullTxt.substring(0, this.txt.length + 1);
                }

                // Insert txt into element
                this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

                // change color for data-text
                this.txtElement.innerHTML = `<span class="txt" style="color: #fffff">${this.txt}</span>`;

                // Initial Type Speed
                let typeSpeed = 100;

                if (this.isDeleting) {
                    typeSpeed /= 2;
                }

                // If word is complete
                if (!this.isDeleting && this.txt === fullTxt) {
                    // Make pause at end
                    typeSpeed = this.wait;
                    // Set delete to true
                    this.isDeleting = true;
                } else if (this.isDeleting && this.txt === '') {
                    this.isDeleting = false;
                    // Move to next word
                    this.wordIndex++;
                    // Pause before start typing
                    typeSpeed = 300;
                }

                setTimeout(() => this.type(), typeSpeed);
            }
        }

        // Init On DOM Load
        document.addEventListener('DOMContentLoaded', init);

        // Init App
        function init() {
            const txtElement = document.querySelector('.txt-type');
            const words = JSON.parse(txtElement.getAttribute('data-words'));
            const wait = txtElement.getAttribute('data-wait');
            // Init TypeWriter
            new TypeWriter(txtElement, words, wait);
        }
    </script>
</body>

</html>