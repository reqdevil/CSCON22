<div class="schedule-tabs tabs-box">
            <div class="btns-box">
                <!--Tabs Box-->
                <ul class="tab-buttons clearfix">
                    <li class="tab-btn active-btn" data-tab="#anti-meridiem">
                        <span class="day">Öğleden Önce</span>
                        <span class="date">25</span>
                        <span class="month">Mart</span> 2022
                    </li>

                    <li class="tab-btn" data-tab="#post-meridiem">
                        <span class="day">Öğleden Sonra</span>
                        <span class="date">25</span>
                        <span class="month">Mart</span> 2022
                    </li>
                </ul>
            </div>

            <div class="tabs-content">
                <!-- Öğleden Önce (Anti Meridiem) -->
                <?php include 'schedule/anti-meridiem.html' ?>

                <!-- Öğleden Sonra (Post Meridiem) -->
                <?php include 'schedule/post-meridiem.html' ?>
            </div>
        </div>