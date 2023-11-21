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
                            <img src="images/icons/featured-nav-left.png" alt="icon">
                            <h4>تعليقات العملاء</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="testimonial-left">
                                <h5>تعليقات العلامات عن اعمالنا</h5>
                                <div class="testimonial-left-content">
                                    <div class="testimonial-left-icon">
                                        <img src="images/icons/tetimonial-icon-01.png" alt="icon">
                                    </div>
                                    <h6>نحن نثق في أكثر من عميلًا راضيًا وسعيدًا</h6>
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
