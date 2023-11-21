<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Filter extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
             <!-- auto parts -->
        <section class="auto-parts home4-auto-parts">
            <div class="auto-container">
                <div class="auto-parts-container">
                    <div class="banner-right-container-top">
                        <div class="banner-right-car">
                            <img src="images/icons/car-1.png" alt="car">
                        </div>
                        <div class="banner-right-title">
                            <h6> اكثر من 800 قطعة</h6>
                            <h5>ابحث عن قطع غيار السيارات الخاصة بك</h5>
                        </div>
                    </div>
                    <div class="select-container">
                        <select name="make">
                            <option value="*">حدد الصنع </option>
                            <option value=".category-1">Make 01</option>
                            <option value=".category-2">Make 02</option>
                            <option value=".category-3">Make 03</option>
                        </select>
                        <select name="make">
                            <option value="*">حدد النموذج </option>
                            <option value=".category-1">Make 01</option>
                            <option value=".category-2">Make 02</option>
                            <option value=".category-3">Make 03</option>
                        </select>
                        <select name="make">
                            <option value="*">حدد السنة </option>
                            <option value=".category-1">Make 01</option>
                            <option value=".category-2">Make 02</option>
                            <option value=".category-3">Make 03</option>
                        </select>
                        <select name="make">
                            <option value="*">حدد الخيار </option>
                            <option value=".category-1">Make 01</option>
                            <option value=".category-2">Make 02</option>
                            <option value=".category-3">Make 03</option>
                        </select>

                        <div class="select-btn">
                            <a href="#" class="theme-btn btn-style-one"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- auto parts -->
        </div>
        HTML;
    }
}
