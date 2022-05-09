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
        <section class="page-title" style="background-image:url(images/background/board.jpg);">
            <div class="auto-container">
                <h1 style="color: black;">Eğitim Takvimi</h1>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Etkinlik Takvimi -->
        <section class="schedule-section style-three">

            <div class="auto-container">

                <?php include 'schedule/lecture.html' ?>
            </div>
        </section>

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