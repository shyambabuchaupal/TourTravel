<footer id="footer" class="footer position-relative" style='background-image: url("assets/img/footer_bg.png");'>

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="index.php" class="logocontent d-flex align-items-center">
                    Tour & Travel Agency
                </a>
                <p>Cras fermentum odio eu feugiat lide par naso<br> tierra. Justo eget nada terra videa magna derita<br>
                    valies
                    darta donna mare fermentum iaculis eu non<br> diam phasellus.</p>
                <div class="social-links d-flex mt-4">
                    <!-- <a href=""><i class="bi bi-twitter"></i></a> -->
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="#">Packages</a></li>
                    <li><a href="#">Contact us</a></li>

                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Legal</h4>
                <ul>
                    <li><a href="termcondition.php">Terms of use</a></li>
                    <li><a href="pravicy.php">Privacy policy</a></li>

                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-sm-start text-md-start">
                <h4>Contact Us</h4>
                <div class="col-12 d-flex">
                    <div class="col-1">
                        <p><strong><i class="bi bi-geo-alt-fill"></i></strong> </p>
                    </div>
                    <div class="col-11">
                        <p>LGF-70, Ansal Fortune Arcade,</p>
                        <p>Sector 18, Noida, U.P. 201301</p>
                    </div>
                </div>

                <div class="col-12 d-flex">
                    <div class="col-1">
                        <p class=" m-auto"><strong><i class="bi bi-telephone-fill"></i></strong> </p>
                    </div>
                    <div class="col-11">
                        <p>+91 8800150150</p>
                        <p>+91 8800140140</p>
                        <p>+91 1204314040</p>
                    </div>
                </div>

                <div class="col-12 d-flex">
                    <div class="col-1">
                        <p><strong><i class="bi bi-envelope-fill"></i></strong></p>
                    </div>
                    <div class="col-11">
                        <p> <a href="mailto:info@bluebelltravels.com" class='fs-6'
                        style='color:#F28B38;'>info@bluebelltravels.com</a></p>
                    </div>
                </div>

               
            </div>

        </div>

        <p class='text-center mb-0'>© <span id='year'></span>.All rights reserved.</p>
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
<script>
    var date = new Date().getFullYear();

document.getElementById("year").innerHTML = date;
</script>

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