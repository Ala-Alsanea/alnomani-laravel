<?php

namespace App\Livewire\Components;

use Livewire\Component;

class BrandSection extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>

            <!-- brand -->
            <section class="brand">
                <div class="auto-container">
                    <div class="row">
                        <div class="common-section-title">
                            <div class="section-title">
                                <img src="images/icons/featured-nav-left.png" alt="icon">
                                <h4>العلامات التجارية</h4>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="brand-container">
                                <div class="brand-logo">
                                    <a href="#"><img src="images/news/1.jpg" alt="logo"> <span>مرسيدس</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="brand-container">
                                <div class="brand-logo">
                                    <a href="#"><img src="images/news/2.jpg" alt="logo"> <span>لاندلوفر</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="brand-container">
                                <div class="brand-logo">
                                    <a href="#"><img src="images/product/c-1 (1).jpg" alt="logo">
                                        <span>مرسيدس</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="brand-container">
                                <div class="brand-logo">
                                    <a href="#"><img src="images/product/c-2.jpg" alt="logo">
                                        <span>لاندلوفر</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="brand-container">
                                <div class="brand-logo">
                                    <a href="#"><img src="images/product/c-3.jpg" alt="logo"> <span>مرسيدس</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="brand-container">
                                <div class="brand-logo">
                                    <a href="#"><img src="images/product/c-4.jpg" alt="logo">
                                        <span>لاندلوفر</span></a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
            <!-- brand -->

        </div>
        HTML;
    }
}
