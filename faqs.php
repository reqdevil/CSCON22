<!DOCTYPE html>
<html lang="en">

<?php include 'utilities/headers.html' ?>

<body>

    <div class="page-wrapper">

        <!-- Yükleyici -->
        <div class="preloader"></div>

        <!-- Header Span -->
        <span class="header-span"></span>

        <!-- Üst Menü -->
        <header class="main-header header-style-two">
            <?php include 'utilities/menu.html' ?>
        </header>

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/5.jpg);">
            <div class="auto-container">
                <h1>FAQ's</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>FAQ's</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- FAQ's Section -->
        <section class="faq-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <span class="title">FAQ'S</span>
                    <h2>General <span>Questions</span></h2>
                </div>

                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!--Accordian Box-->
                            <ul class="accordion-box">
                                <!--Block-->
                                <li class="accordion block wow fadeInUp">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span>
                                        </div>What is Cohousing?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod
                                                tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis
                                                nostrud exercitation ullamco laboris.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block active-block wow fadeInUp">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span>
                                        </div>Can we change the design?
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod
                                                tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis
                                                nostrud exercitation ullamco laboris.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block wow fadeInUp">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span>
                                        </div>How is the privacy issues?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod
                                                tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis
                                                nostrud exercitation ullamco laboris.</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!--Accordian Box-->
                            <ul class="accordion-box">
                                <!--Block-->
                                <li class="accordion block active-block wow fadeInUp">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span>
                                        </div>What is Cancelation Period?
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod
                                                tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis
                                                nostrud exercitation ullamco laboris.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block wow fadeInUp">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span>
                                        </div>What is Cohousing?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod
                                                tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis
                                                nostrud exercitation ullamco laboris.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block wow fadeInUp">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span>
                                        </div>How is the privacy issues?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod
                                                tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis
                                                nostrud exercitation ullamco laboris.</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End FAQ's Section -->

        <!-- Faq Form Section -->
        <section class="faq-form-section">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Didn’t Find Your Answer?</h2>
                </div>
                <!-- Faq Form -->
                <div class="faq-form">
                    <form method="post" action="index.html">
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12">
                                <input type="text" name="username" placeholder="Name" required>
                            </div>

                            <div class="form-group col-lg-12 col-md-12">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>

                            <div class="form-group col-lg-12 col-md-12">
                                <input type="text" name="subject" placeholder="Subject" required>
                            </div>

                            <div class="form-group col-lg-12 col-md-12">
                                <textarea name="message" placeholder="Question Detail"></textarea>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 text-right">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                        class="btn-title">Get A Quote</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--End Contact Section -->

        <!-- Footer -->
        <?php include 'utilities/footer.html' ?>
    </div>

    <!-- Scriptler -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
    <script src="js/color-settings.js"></script>
</body>

</html>