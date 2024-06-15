<?php require('include/header.php') ?>

<!-- Hero Section -->
<section id="hero" class="hero section">

    <img src="assets/img/contact_us.png" alt="" data-aos="fade-in">

    <div class="container">

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center align-items-center ">
                <h2 data-aos="fade-up" data-aos-delay="100" class='text-center'>Contact Us</h2>

            </div>

        </div>

    </div>

</section><!-- /Hero Section -->

<!-- Contact Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="contact_left">
                    <p>Let’s contact</p>
                    <h2>CONTACT US</h2>
                    <h6>Reach out to us – whether you have questions about our packages,
                        need assistance with bookings, or simply want expert advice on your next destination.</h6>
                </div>

            </div>
            <div class="col-lg-6 col-12">
                <div class="contact_right">
                    <h2>Get a call back</h2>
                    <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">First Name</label>
                                <input type="text" name="name" class="form-control" required="">
                            </div>

                            <div class="col-md-6 ">
                                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lastname" required="">
                            </div>

                            <div class="col-md-12">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required="">
                            </div>
                            <div class="col-md-12">
                                <label for="exampleInputEmail1" class="form-label">Phone No.</label>
                                <input type="text" class="form-control" name="phone" required="">
                            </div>

                            <div class="col-md-12">
                                <label for="exampleInputEmail1" class="form-label">Your Message</label>
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                    required=""></textarea>
                            </div>

                            <div class="col-md-12">
                               

                                <button type="submit" class='rounded-pill text-white sentbtn'>Send</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->

<?php require('include/footer.php') ?>