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
                                 <img src="{{ asset('images/llogoo.png') }}" height="200" width="200" alt="logo">
                             </div>

                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                         <div class="footer-widget footer-services-links-widget">
                             <h4 class="footer-widget-title">{{ __('about us') }}</h4>
                             <P>{{ __('Mercedes and Land Rover spare parts company in Riyadh, Saudi Arabia') }}</P>
                             <ul class="social-icon">
                                 <li><a href="{{$contact_info->facebook_link}}"><i class="fab fa-facebook-f"></i></a></li>
                                 <li><a href="{{$contact_info->insta_link}}"><i class="fab fa-instagram"></i></a></li>
                                 {{-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> --}}
                                 <!-- <li><a href="#"><i class="fab fa-dribbble"></i></a></li> -->
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-2 col-md-6 offset-lg-1">
                         <div class="footer-widget footer-links-widget">
                             <h4 class="footer-widget-title">{{ __('work hours') }}</h4>
                             <ul class="lsit">
                                 <li><a href="#">{{ __('Saturday') }} : 8:00ص - 7:00م</a></li>
                                 <li><a href="#">{{ __('Sunday') }} : 8:00ص - 7:00م</a></li>
                                 <li><a href="#">{{ __('Monday') }} : 8:00ص - 7:00م</a></li>
                                 <li><a href="#">{{ __('Tuesday') }} : 8:00ص - 7:00م</a></li>
                                 <li><a href="#">{{ __('Wednesday') }} : 8:00ص - 7:00م</a></li>
                                 <li><a href="#">{{ __('Thursday') }} : 8:00ص - 7:00م</a></li>
                                 <li><a href="#">{{ __('Friday') }} : مغلق</a></li>

                             </ul>
                         </div>
                     </div>


                     <div class="col-lg-3 col-md-6">
                         <div class="footer-widget footer-contact-widget">
                             <h4 class="footer-widget-title">{{ __('call us') }}</h4>
                             <ul>
                                 <li><a href="#">{{ __('calling') }}</a></li>
                                 <li><a href="tel:{{ $contact_info->phone_1 }}"
                                         class="footer-contact-info">{{ $contact_info->phone_1 }} <br>
                                         {{$contact_info->phone_2}}</a></li>
                                 <li><a href="#">{{ __('email') }}</a></li>
                                 <li><a href="mailto: {{$contact_info->email}}" class="footer-contact-info">
                                         {{$contact_info->email}}</a></li>
                                 <li><a href="#">{{ __('address') }}</a></li>
                                 <li><a href="#"
                                         class="footer-contact-info">{{ __('Al Riyadh, Saudi Arabia') }}</a></li>


                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="footer-bottom-one">
             <div class="auto-container">
                 <div class="row m-0 align-items-center justify-content-between">
                     <div class="copyright-text">Copyright © {{ date('Y') }}.</div>
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
