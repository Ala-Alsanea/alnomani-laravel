<?php

namespace App\Livewire\Components;

use Livewire\Component;

class CommentSection extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>

            @livewire('components.divider')

            <!-- testimonial -->
            <section class="testimonial">
                <div class="auto-container">
                    <div class="common-section-title">
                        <div class="section-title">
                            <!-- <img src="images/icons/featured-nav-left.png" alt="icon"> -->
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.4 4h17.2A2.4 2.4 0 0 1 23 6.4v11.2a2.4 2.4 0 0 1-2.4 2.4H3.4A2.4 2.4 0 0 1 1 17.6V6.4A2.4 2.4 0 0 1 3.4 4ZM5 9a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1Z" fill="#c7282c"></path></g></svg>

                            <h4>{{__('Customer comments')}}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="testimonial-left">
                                <h5>{{__('Customer comments about our works')}}</h5>
                                <div class="testimonial-left-content">
                                    <div class="testimonial-left-icon">
                                        <!-- <img src="images/icons/tetimonial-icon-01.png" alt="icon"> -->
                                        <svg width="100px" height="100px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.4" d="M17.5291 7.77C17.4591 7.76 17.3891 7.76 17.3191 7.77C15.7691 7.72 14.5391 6.45 14.5391 4.89C14.5391 3.3 15.8291 2 17.4291 2C19.0191 2 20.3191 3.29 20.3191 4.89C20.3091 6.45 19.0791 7.72 17.5291 7.77Z" fill="#c7282c"></path> <path opacity="0.4" d="M20.7896 14.6999C19.6696 15.4499 18.0996 15.7299 16.6496 15.5399C17.0296 14.7199 17.2296 13.8099 17.2396 12.8499C17.2396 11.8499 17.0196 10.8999 16.5996 10.0699C18.0796 9.86992 19.6496 10.1499 20.7796 10.8999C22.3596 11.9399 22.3596 13.6499 20.7896 14.6999Z" fill="#c7282c"></path> <path opacity="0.4" d="M6.44039 7.77C6.51039 7.76 6.58039 7.76 6.65039 7.77C8.20039 7.72 9.43039 6.45 9.43039 4.89C9.43039 3.3 8.14039 2 6.54039 2C4.95039 2 3.65039 3.29 3.65039 4.89C3.66039 6.45 4.89039 7.72 6.44039 7.77Z" fill="#c7282c"></path> <path opacity="0.4" d="M6.54914 12.8501C6.54914 13.8201 6.75914 14.7401 7.13914 15.5701C5.72914 15.7201 4.25914 15.4201 3.17914 14.7101C1.59914 13.6601 1.59914 11.9501 3.17914 10.9001C4.24914 10.1801 5.75914 9.8901 7.17914 10.0501C6.76914 10.8901 6.54914 11.8401 6.54914 12.8501Z" fill="#c7282c"></path> <path d="M12.1208 15.87C12.0408 15.86 11.9508 15.86 11.8608 15.87C10.0208 15.81 8.55078 14.3 8.55078 12.44C8.55078 10.54 10.0808 9 11.9908 9C13.8908 9 15.4308 10.54 15.4308 12.44C15.4308 14.3 13.9708 15.81 12.1208 15.87Z" fill="#c7282c"></path> <path d="M8.87078 17.9399C7.36078 18.9499 7.36078 20.6099 8.87078 21.6099C10.5908 22.7599 13.4108 22.7599 15.1308 21.6099C16.6408 20.5999 16.6408 18.9399 15.1308 17.9399C13.4208 16.7899 10.6008 16.7899 8.87078 17.9399Z" fill="#c7282c"></path> </g></svg>
                                    </div>
                                    <h6>{{__('We trust with more than one satisfied and happy customer')}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="testimonial-carousol two-item-carousel owl-carousel owl-theme">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="triangle-border">
                                            <img src="images/shape/border-triangle.png" alt="triangle">
                                        </div>
                                        <div class="testimonial-content-border">
                                            <img src="images/shape/border.png" alt="border">
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="quote-icon">
                                            <img src="images/icons/quote.svg" alt="icon">
                                        </div>
                                        <p>الخيار الافضل لقطع غيار مرسيدس ولاندروفر واودي وانصح التعامل مع صالح انسان محترم
                                            والقطع اصلية بالكامل وانجاز
                                            وسرعة وتقدير للزبون

                                        </p>

                                    </div>
                                    <div class="testimonial-member-info">
                                        <div class="member-image">

                                        </div>
                                        <div class="member-info">
                                            <h6>احمد</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="triangle-border">
                                            <img src="images/shape/border-triangle.png" alt="triangle">
                                        </div>
                                        <div class="testimonial-content-border">
                                            <img src="images/shape/border.png" alt="border">
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="quote-icon">
                                            <img src="images/icons/quote.svg" alt="icon">
                                        </div>
                                        <p>ممتاز جدا سعر وتعامل وجودة</p>
                                    </div>
                                    <div class="testimonial-member-info">
                                        <div class="member-image">

                                        </div>
                                        <div class="member-info">
                                            <h6>Mohammed</h6>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial -->

        </div>
        HTML;
    }
}
