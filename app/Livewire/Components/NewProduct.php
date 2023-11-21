<?php

namespace App\Livewire\Components;

use Livewire\Component;

class NewProduct extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>

            <!-- week deal -->
            <section class="week-deal new-product">
                <div class="auto-container">
                    <div class="common-section-title">
                        <div class="common-section-title-left">
                            <div class="section-title">
                                <img src="images/icons/featured-nav-left.png" alt="icon">
                                <h4>المنتجات الحديثة</h4>
                            </div>
                        </div>
                        <div class="common-more-btn">
                            <a href="#">المزيد <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="product-block-one week-deal-one">

                                <div class="product-block-one-image">
                                    <div class="image"><img src="images/product/a-1.jpg" alt="parts"></div>
                                </div>
                                <div class="product-block-one-cintent">

                                    <div class="price-container">

                                    </div>
                                </div>
                                <div class="product-block-one-heart">
                                    <a href=""><i class="flaticon-heart"></i></a>
                                </div>
                                <div class="overlay">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="product-block-one week-deal-one">

                                <div class="product-block-one-image">
                                    <div class="image"><img src="images/product/a-2.jpg" alt="parts"></div>
                                </div>
                                <div class="product-block-one-cintent">

                                    <div class="price-container">

                                    </div>
                                </div>
                                <div class="product-block-one-heart">
                                    <a href=""><i class="flaticon-heart"></i></a>
                                </div>
                                <div class="overlay">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="product-block-one week-deal-one">

                                <div class="product-block-one-image">
                                    <div class="image"><img src="images/product/a-3.jpg" alt="parts"></div>
                                </div>
                                <div class="product-block-one-cintent">

                                    <div class="price-container">

                                    </div>
                                </div>
                                <div class="product-block-one-heart">
                                    <a href=""><i class="flaticon-heart"></i></a>
                                </div>
                                <div class="overlay">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="product-block-one week-deal-one">

                                <div class="product-block-one-image">
                                    <div class="image"><img src="images/product/a-4.jpg" alt="parts"></div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- week deal -->

        </div>
        HTML;
    }
}
