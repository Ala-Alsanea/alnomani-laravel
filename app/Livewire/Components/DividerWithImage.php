<?php

namespace App\Livewire\Components;

use Livewire\Component;

class DividerWithImage extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>

            <!-- divider-with-image -->
            <section class="divider">
                <!-- <div class="auto-container_"> -->
                    <div class="divider-container" style="background-image: url(images/banner/banner-01.jpg);">
                        <div class="divider-content">
                            <span class="popular-sale"></span>
                            <h4>ابحث عن العنصر المثالي لسيارتك </h4>
                            <p>دائما نلبي مطالبك</p>
                            <!-- <a href="#" class="theme-btn btn-style-one">تسوق الان<i class="flaticon-right-arrow"></i></a> -->
                        </div>
                    </div>
                <!-- </div> -->
            </section>
            <!-- divider-with-image -->

        </div>
        HTML;
    }
}
