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
                     {{-- <a href="#">المزيد <i class="flaticon-right-arrow"></i></a> --}}
                 </div>
             </div>

             <div class="row">

                 @foreach ($newProducts as $product)
                     <div class="col-lg-3 col-md-6">

                         <div class="product-block-one week-deal-one">

                             <div class="product-block-one-image">
                                 <div class="image"><img src="{{ asset('storage/' . $product->image) }}"
                                         alt="parts">
                                 </div>
                             </div>
                             <div class="product-block-one-cintent">

                                 <div class="price-container">
                                     {{-- {{'الاسم'. $product->name }} --}}
                                     {{'الموديل: '. $product->brand->name }}
                                     <br>
                                     {{'النوع: '. $product->type->name }}
                                 </div>
                             </div>
                             {{-- <div class="product-block-one-heart">
                                    <a href=""><i class="flaticon-heart"></i></a>
                                </div> --}}
                             <div class="overlay">
                                 {{ $product->brand->name }}
                                 {{ $product->type->name }}
                             </div>
                         </div>
                     </div>
                 @endforeach


             </div>
         </div>
     </section>
     <!-- week deal -->

 </div>
