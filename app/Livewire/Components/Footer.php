<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>

            <!--Main Footer-->
            <footer class="main-footer-one">
                <div class="upper-box">

                </div>
                <div class="lower-box">
                    <div class="auto-container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-widget footer-logo-widget">
                                    <div class="footer-logo">
                                        <img src="images/llogoo.png" height="200" width="200" alt="logo">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-widget footer-services-links-widget">
                                    <h4 class="footer-widget-title">من نحن</h4>
                                    <P>شركة قطع غيار سيارات مرسيدس ولاندروفر في الرياض-السعودية </P>
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 offset-lg-1">
                                <div class="footer-widget footer-links-widget">
                                    <h4 class="footer-widget-title">ساعات العمل</h4>
                                    <ul class="lsit">
                                        <li><a href="#">السبت : 8:00ص - 7:00م</a></li>
                                        <li><a href="#">الاحد : 8:00ص - 7:00م</a></li>
                                        <li><a href="#">الاثنين : 8:00ص - 7:00م</a></li>
                                        <li><a href="#">الثلاثاء : 8:00ص - 7:00م</a></li>
                                        <li><a href="#">الاربعاء : 8:00ص - 7:00م</a></li>
                                        <li><a href="#">الخميس : 8:00ص - 7:00م</a></li>
                                        <li><a href="#">الجمعة : مغلق</a></li>

                                    </ul>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6">
                                <div class="footer-widget footer-contact-widget">
                                    <h4 class="footer-widget-title">تواصل معنا</h4>
                                    <ul>
                                        <li><a href="#">الاتصال</a></li>
                                        <li><a href="tel:0502115994" class="footer-contact-info">0502115994 <br>
                                                0112040824</a></li>
                                        <li><a href="#">الايميل</a></li>
                                        <li><a href="mailto: www.alnomaniparts.com" class="footer-contact-info">
                                                www.alnomaniparts.com</a></li>
                                        <li><a href="#">العنوان</a></li>
                                        <li><a href="#" class="footer-contact-info"> الرياض-السعودية</a></li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom-one">
                    <div class="auto-container">
                        <div class="row m-0 align-items-center justify-content-between">
                            <div class="copyright-text">Copyright © {{date("Y")}}.</div>
                            <!-- <div class="copyright-card">
                                <h6>We accept :</h6>
                                <a href="#"><img src="images/icons/card-1.png" alt="card"></a>
                                <a href="#"><img src="images/icons/card-2.png" alt="card"></a>
                                <a href="#"><img src="images/icons/card-3.png" alt="card"></a>
                                <a href="#"><img src="images/icons/card-4.png" alt="card"></a>
                            </div> -->
                            <!-- <ul class="menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ’s</a></li>
                                <li><a href="#">Privacy Policy </a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </footer>
            <!--End Main Footer-->

            <!--Scroll to top-->
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
            <!-- Scroll to top end -->

        </div>
        HTML;
    }
}
