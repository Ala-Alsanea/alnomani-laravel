<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Divider extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>

            <!-- divider two -->
            <div class="divider-two mt-10">
                <div class="auto-container">
                    <div class="row">
                        <div class="divider-two-container">
                            <div class="divider-two-contant contant-one">
                                <p></p>
                                <span>$</span>
                            </div>
                            <div class="divider-two-contant content-two">
                                <p> </p>
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- divider two -->

        </div>
        HTML;
    }
}
