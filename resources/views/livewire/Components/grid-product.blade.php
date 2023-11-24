 <div>

     <!-- divider-with-image -->
     @livewire('components.divider-with-image')
     <!-- divider-with-image -->

     <!-- items -->
     <section class="item mt-9">
         <div class="auto-container">
             <div class="common-section-title">
                 <div class="common-section-title-left">
                     <div class="section-title">
                         <img src="images/icons/featured-nav-left.png" alt="icon">
                         <h4>المنتجات</h4>
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
                                         {{-- {{'الاسم'. $product->name }} --}}
                                         {{ 'الموديل: ' . $product->brand->name }}
                                         <br>
                                         {{ 'النوع: ' . $product->type->name }}
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
