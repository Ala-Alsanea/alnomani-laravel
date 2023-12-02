 <div>

    @if (!$type_id)

        <!-- divider-with-image -->
        @livewire('components.divider-with-image',
        [
        'title' => __('Find the perfect item for your car'),
        'text' => __('We always meet your demands'),
    ])
        <!-- divider-with-image -->
    @endif

     <!-- items -->
     <section class="week-deal new-product">
         <div class="auto-container">
             <div class="common-section-title">
                 <div class="common-section-title-left">
                     <div class="section-title">
                         {{-- <img src="images/icons/featured-nav-left.png" alt="icon"> --}}

                         <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                             <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                             <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                             <g id="SVGRepo_iconCarrier">
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                     d="M3.4 4h17.2A2.4 2.4 0 0 1 23 6.4v11.2a2.4 2.4 0 0 1-2.4 2.4H3.4A2.4 2.4 0 0 1 1 17.6V6.4A2.4 2.4 0 0 1 3.4 4ZM5 9a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1Z"
                                     fill="#c7282c"></path>
                             </g>
                         </svg>

                         <h4>{{$title}}</h4>
                     </div>
                 </div>
                 <div class="common-more-btn">
                     {{-- <a href="#">المزيد <i class="flaticon-right-arrow"></i></a> --}}
                 </div>
             </div>
             {{-- <div class="row"> --}}

             {{-- <div class="col-xl-4 col-lg-6">
                            <div class="item-left-container">

                                <div class="item-left-carousol single-item-carousel owl-theme owl-carousel ">
                                    <div class="item-carousol-content">
                                        <div class="item-left-image">
                                            <img src="images/add/off-80.png" alt="engine">
                                        </div>
                                        <div class="item-content">

                                        </div>
                                    </div>
                                    <div class="item-carousol-content">
                                        <div class="item-left-image">
                                            <img src="images/add/off-80.png" alt="tair">
                                        </div>
                                        <div class="item-content item3-content">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> --}}


             <div class="col-xl-12 col-lg-12">
                 <div class="row">
                     @foreach ($products as $product)
                         <div class="col-xl-3 col-lg-3 col-md-6">
                             <div class="product-block-one item-block-one">

                                 <div class="product-block-one-image">
                                     <div class="image"><img src="{{ asset('storage/' . $product->image) }}"
                                             alt="parts"></div>
                                 </div>
                                 <div class="product-block-one-cintent">


                                     <div class="price-container">
                                         {{ __('brand').': ' . $product->brand->name }}
                                     </div>
                                     <div class="price-container">
                                         {{ __('type').': '. $product->type->name }}
                                     </div>

                                     {{-- <div class="product-block-one-heart">
                                                <a href=""><i class="flaticon-heart"></i></a>
                                            </div> --}}
                                 </div>

                             </div>
                         </div>
                     @endforeach
                 </div>
             </div>

             {{-- </div> --}}
         </div>
     </section>
     <!-- items -->



     {{-- <!-- items -->
     <section class="item">
         <div class="auto-container">
             <div class="row">
                 <div class="col-xl-4 col-lg-6">
                     <div class="item-left-container">

                         <div class="item-left-carousol single-item-carousel owl-theme owl-carousel ">
                             <div class="item-carousol-content">
                                 <div class="item-left-image">
                                     <img src="images/add/off-80.png" alt="engine">
                                 </div>
                                 <div class="item-content">

                                 </div>
                             </div>
                             <div class="item-carousol-content">
                                 <div class="item-left-image">
                                     <img src="images/add/off-80.png" alt="tair">
                                 </div>
                                 <div class="item-content item3-content">

                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="col-xl-8 col-lg-12">
                     <div class="row">
                         <div class="col-xl-4 col-lg-4 col-md-6">
                             <div class="product-block-one item-block-one">

                                 <div class="product-block-one-image">
                                     <div class="image"><img src="images/product/s-1.jpg" alt="parts"></div>
                                 </div>
                                 <div class="product-block-one-cintent">


                                     <div class="product-block-one-heart">
                                         <a href=""><i class="flaticon-heart"></i></a>
                                     </div>
                                 </div>

                             </div>
                         </div>
                         <div class="col-xl-4 col-lg-4 col-md-6">
                             <div class="product-block-one item-block-one">

                                 <div class="product-block-one-image">
                                     <div class="image"><img src="images/product/s-2.jpg" alt="parts"></div>
                                 </div>
                                 <div class="product-block-one-cintent">

                                     <div class="price-container">

                                     </div>
                                     <div class="product-block-one-heart">
                                         <a href=""><i class="flaticon-heart"></i></a>
                                     </div>
                                 </div>

                             </div>
                         </div>
                         <div class="col-xl-4 col-lg-4 col-md-6">
                             <div class="product-block-one item-block-one">

                                 <div class="product-block-one-image">
                                     <div class="image"><img src="images/product/s-3.jpg" alt="parts"></div>
                                 </div>
                                 <div class="product-block-one-cintent">


                                     <div class="price-container">

                                     </div>
                                     <div class="product-block-one-heart">
                                         <a href=""><i class="flaticon-heart"></i></a>
                                     </div>
                                 </div>

                             </div>
                         </div>
                         <div class="col-xl-4 col-lg-4 col-md-6">
                             <div class="product-block-one item-block-one">

                                 <div class="product-block-one-image">
                                     <div class="image"><img src="images/product/s-4.jpg" alt="parts"></div>
                                 </div>
                                 <div class="product-block-one-cintent">

                                     <div class="price-container">

                                     </div>
                                     <div class="product-block-one-heart">
                                         <a href=""><i class="flaticon-heart"></i></a>
                                     </div>
                                 </div>

                             </div>
                         </div>
                         <div class="col-xl-4 col-lg-4 col-md-6">
                             <div class="product-block-one item-block-one">

                                 <div class="product-block-one-image">
                                     <div class="image"><img src="images/product/s-5.jpg" alt="parts"></div>
                                 </div>
                                 <div class="product-block-one-cintent">

                                     <div class="price-container">

                                     </div>
                                     <div class="product-block-one-heart">
                                         <a href=""><i class="flaticon-heart"></i></a>
                                     </div>
                                 </div>

                             </div>
                         </div>
                         <div class="col-xl-4 col-lg-4 col-md-6">
                             <div class="product-block-one item-block-one">

                                 <div class="product-block-one-image">
                                     <div class="image"><img src="images/product/s-6.jpg" alt="parts"></div>
                                 </div>
                                 <div class="product-block-one-cintent">

                                     <div class="price-container">

                                     </div>
                                     <div class="product-block-one-heart">
                                         <a href=""><i class="flaticon-heart"></i></a>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- items --> --}}


 </div>
