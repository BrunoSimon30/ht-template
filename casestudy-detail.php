<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title>ForjWell - Marketing Agency | Home</title>
    <?php include("includes/style.php"); ?>
</head>

<body>
    <?php include("includes/header.php"); ?>

    <!-- Main -->
    <main>
        <!-- Hero -->
        <div class="cas-sec section  pb-0 px-xl-0">
            <div class="case-detail">
                <img src="assets/image/case/case.png" class="img-fluid" alt="">
            </div>
        </div>
        <!-- End Hero -->
        <div class="section case-detail-sec">
            <div class="r-container">
                <div class="row    ">
                    <div class="col-md-7 mb-3">
                        <div class="d-flex flex-column gap-3">

                            <h5 class="scrollanimation animated fadeInDown adr-9">Project Overview</h5>
                            <p>
                                In 2025, Vision-Tech Solutions partnered with us to enhance its digital presence and
                                optimize its performance across various online platforms. The company sought to leverage
                                data-driven insights to refine its marketing strategies, improve engagement rates, and
                                drive more traffic to its website. Through our Performance Analytics service, we
                                conducted in-depth data analysis, monitored key metrics, and implemented strategic
                                improvements that led to substantial growth in user interaction and conversions.
                            </p>

                        </div>

                    </div>
                    <div class="col-xl-5 mb-3">
                        <div class="leads">
                            <form class="d-flex flex-column gap-4 h-100 w-100 needs-validation   form" novalidate>
                                <h4 class="scrollanimation animated fadeInDown adr-9 adl-2">Your Growth?</h4>
                                <p>Fill out the form below, and we’ll get back to you as soon as possible.</p>
                                <input type="text" class="form-control py-3 px-4" name="name" id="name"
                                    placeholder="First Name" required="">
                                <div class="invalid-feedback">
                                    The field is required.
                                </div>
                                <div class="row row-cols-lg-2 row-cols-1">
                                    <div class="col mb-3 m-xl-0">
                                        <input type="email" class="form-control py-3 px-4" name="email" id="email"
                                            placeholder="Your Email" required="">
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                    <div class="col">
                                        <input type="tel" class="form-control py-3 px-4" name="phone" id="phone"
                                            placeholder="Your Phone Number" required="">
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                </div>
                                <select name="service" class="form-select py-3 px-4"
                                    aria-label="Default select example">
                                    <option value="" disabled selected>Your Subject</option>
                                    <option value="">Web Development</option>
                                    <option value="Pet Grooming">UI/UX Designer</option>
                                    <option value="Pet Daycare">Mobile Development</option>
                                    <option value="Pet Insurance">Game Devolepment</option>
                                    <option value="Pet Adoption Services">Graphic Design</option>
                                    <option value="Lost and Found Services:">Animation Development
                                    </option>
                                </select>
                                <textarea class="form-control py-3 px-4" id="message" name="message" rows="5"
                                    placeholder="Your Message"></textarea>

                                <button type="submit" class="w-max-content btn btn-accent align-self-center mt-3">
                                    Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="e119" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content bg-dark-color">
                        <iframe class="ifr-video" src="https://www.youtube.com/embed/FK2RaJ1EfA8?autoplay=1"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-c">
            <div class="r-container">
                <div class="case-c-img">
                    <img src="assets/image/case/case1.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>


        <?php include("includes/counter.php"); ?>
        <div class="section">
            <div class="r-container">
                <div class="row    ">
                    <div class="col-md-12 mb-3">
                        <div class="d-flex flex-column gap-3">

                            <h5 class="scrollanimation animated fadeInDown adr-9">Project Overview</h5>
                            <p>
                                In 2025, Vision-Tech Solutions partnered with us to enhance its digital presence and
                                optimize its performance across various online platforms. The company sought to leverage
                                data-driven insights to refine its marketing strategies, improve engagement rates, and
                                drive more traffic to its website. Through our Performance Analytics service, we
                                conducted in-depth data analysis, monitored key metrics, and implemented strategic
                                improvements that led to substantial growth in user interaction and conversions.
                            </p>

                        </div>

                    </div>
                   
                </div>
            </div>
            <div class="modal fade" id="e119" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content bg-dark-color">
                        <iframe class="ifr-video" src="https://www.youtube.com/embed/FK2RaJ1EfA8?autoplay=1"></iframe>
                    </div>
                </div>
            </div>
        </div>
      
        <?php include("includes/case-study.php"); ?>

    </main>
    <!-- End Main -->


    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>
</body>

</html>