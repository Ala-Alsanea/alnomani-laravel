<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Preloader extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>

            <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <!-- <div class="preloader-close">x</div> -->
                <div id="handle-preloader" class="handle-preloader home-16"
                    style="background-image: url(images/817555.jpg);">
                     <div class="home-two-banner-bg"
                            style="background-color: black; opacity: .7;">
                        </div>
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="L" class="letters-loading">
                                L
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="O" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="M" class="letters-loading">
                                M
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->
        </div>
        HTML;
    }
}
