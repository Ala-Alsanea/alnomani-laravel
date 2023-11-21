<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Hero extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
           <!-- home four banner -->
        <section class="home-two-banner home-four-banner">
            <div class="banner-carousel home-two-banner-carousel owl-carousel owl-theme">
                <!-- item -->
                <div class="home-two-item">
                    <div class="home-two-banner-bg" style="background-image: url(/images/banner/banner-4.jpg);">
                    </div>
                    <div class="home-two-wrapper">
                        <div class="home-two-wrapper-inner">
                            <h6>متجر قطع الغيار عبر الإنترنت</h6>
                            <h2>نستطيع مساعدتك للعثور <br> على قطع الغيار لاي سيارة</h2>
                            <p>كل ما تحتاجة سيارتك واكثر. </p>
                            <div class="btn-box clearfix">
                                <a href="#" class="theme-btn btn-style-one">المزيد <i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- item -->
                <div class="home-two-item">
                    <div class="home-two-banner-bg" style="background-image: url(/images/banner/banner-4.jpg);">
                    </div>
                    <div class="home-two-wrapper">
                        <div class="home-two-wrapper-inner">
                            <h6>متجر قطع الغيار عبر الإنترنت</h6>
                            <h2>test</h2>
                            <p>كل ما تحتاجة سيارتك واكثر. </p>
                            <div class="btn-box clearfix">
                                <a href="#" class="theme-btn btn-style-one">المزيد <i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- home four banner -->
        </div>
        HTML;
    }
}
