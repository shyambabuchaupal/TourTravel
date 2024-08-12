<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
.main-sllider {
    height: 100vh;
    width: 100%;
    position: relative;
}

.center {
    height: 80%;
    width: 90%;
    position: absolute;
    left: 8%;
    top: 50%;
    transform: translate(0%, -47%);
}

.imgContainer {
    overflow: hidden;
    position: absolute;
    width: 0%;
    height: 100%;
}

img {
    height: 100%;
}

.heading-slider {
    overflow: hidden;
    height: 118px;
    width: 520px;
    z-index: 2;
    position: absolute;
    top: 20%;
    left: 28px;

}

.heading-slider h1 {
    position: absolute;
    font-size: 9vw;
    top: 100px;
    font-family: 'Exo 2';
    font-weight: 400;
    color: white;
}

.lines {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 6px;
    position: absolute;
    left: -75px;
}

.line {
    height: 120px;
    width: 2px;
    background-color: #d3d3d3;
}

.line.active {
    background-color: #000;
}


.textContainer {
    position: absolute;
    width: 480px;
    height: 130px;
    overflow: hidden;
    padding: 10px;
    top: 48%;
    left: 28px;
    z-index: 3;
}



.text {
    position: absolute;
    top: -100%;
    color: #ffff;
    font-family: 'Exo 2';
}

/* .imgContainer::before {
    position: absolute;
    content: " ";
    width: 100%;
    height: 100%;
    top: 0;
    background: rgba(255, 255, 255, 0.3);
} */

.icons {
    position: absolute;
    display: flex;
    flex-direction: column;
    gap: 2px;
    font-size: 20px;
    gap: 20px;
    right: 6%;
    bottom: 20%;
}

.Hamburger {
    position: absolute;
    right: 6%;
    top: 10%;
    width: 30px;
    display: flex;
    flex-direction: column;
    align-items: end;
    gap: 4px;
    height: 20px;
    z-index: 4;
}

.hamburger-line {
    width: 80%;
    height: 2px;
    background: #000;
}

.hamburger-line:nth-child(3) {
    width: 60%;
}

.Heading_slider h2 {
    font-size: 75px !important;
    text-align: center;
    font-weight: 500 !important;
    font-family: 'Exo 2' !important;
}

.desktopimg {
    display: block;
}

.Mobileimg {
    display: none;
}

@media(max-width: 575px),
only screen and (min-width: 576px) and (max-width: 767px),
only screen and (min-width: 768px) and (max-width: 991px),
only screen and (min-width: 992px) and (max-width: 1199px) {
    .Heading_slider h2 {
        font-size: 51px !important;
        text-align: center;
        font-weight: 500 !important;
        line-height: 57.08px;
        font-family: 'Exo 2' !important;
        margin-bottom: -51px;
    }

    .lines {
        display: none !important;
    }

    .desktopimg {
        display: none;
    }

    .Mobileimg {
        display: block;
    }
    .heading-slider h1 {
    position: absolute;
    font-size: 9vw;
    top: 100px;
    font-family: 'Exo 2';
    font-weight: 400;
    color: black;
}


}
</style>

<body>
    <section>
        <div class="col-lg-12 Heading_slider">
            <h2>DOMESTIC DESTINATIONS</h2>
            <!-- <p>Let us be your guide to discovering the vibrant hues and cultural treasures nestled within India’s heartland.</p> -->
        </div>
        <div class="container">
            <div class="main-sllider">

                <div class="center" id="">
                    <!-- Slider indicator -->
                    <div class="lines">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <!-- sliderHeading -->
                    <div class="heading-slider">
                        <h1>UDAIPUR</h1>
                        <h1>MANALI</h1>
                        <h1>KERALA</h1>
                    </div>
                    <!-- slidertext -->
                    <div class="textContainer">
                        <div class="text">
                            Marvel at the regal charm of Udaipur, the City of Lakes, where majestic palaces reflect in
                            serene waters.
                        </div>
                        <div class="text">
                            Explore Manali’s Himalayan beauty, snow-capped peaks, lush valleys, and thrilling
                            adventures.
                        </div>
                        <div class="text">
                            Immerse yourself in Kerala’s tropical paradise—lush greenery, tranquil backwaters,
                            palm-fringed beaches.
                        </div>
                    </div>

                    <!-- Slider Images -->
                    <div class="imgContainer">
                        <img src="assets/img/dbg.png" alt="" class='desktopimg'>
                        <img src="assets/img/mobileslider1.svg" alt="" class='Mobileimg'>
                    </div>
                    <div class="imgContainer">
                        <img src="assets/img/dbg1.png" alt="" class='desktopimg'>
                        <img src="assets/img/mobileslider.svg" alt="" class='Mobileimg'>
                    </div>
                    <div class="imgContainer" st>
                        <img src="assets/img/dbg2.png" alt="" class='desktopimg'>
                        <img src="assets/img/mobileslider1.svg" alt="" class='Mobileimg'>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- scroll cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
        integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- scroll cdn end -->

    <script>
    // slider css

    let tl = gsap.timeline({
        repeat: -1,
    });

    const slides = gsap.utils.toArray(".imgContainer");
    const lines = gsap.utils.toArray(".line");

    tl.to(
            slides, {
                ease: Expo.easeInOut,
                width: "100%",
                duration: 2,
                stagger: 2,
            },
            "flag"
        )
        .to(
            ".heading-slider h1", {
                ease: Expo.easeInOut,
                stagger: 2,
                duration: 2,
                top: 0,
            },
            "flag"
        )
        .to(
            ".text", {
                ease: Expo.easeInOut,
                stagger: 2,
                duration: 2,
                top: "0%",
            },
            "flag"
        )
        .to(
            ".text", {
                delay: 2,
                ease: Expo.easeInOut,
                stagger: 2,
                duration: 1,
                opacity: 0,
            },
            "flag"
        )
        .to(
            ".heading-slider h1", {
                delay: 2,
                ease: Expo.easeInOut,
                stagger: 2,
                duration: 2,
                top: "-300%",
            },
            "flag"
        );

    tl.eventCallback("onUpdate", () => {
        const progress = tl.progress();
        lines.forEach((dot, index) => {
            dot.classList.toggle(
                "active",
                index * 0.25 <= progress && progress < (index + 1) * 0.25
            );
        });
    });
    </script>
</body>

</html>