 <div>

     <!-- week deal -->
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
                         <h4>{{__('new products')}}</h4>
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
                                     {{ __('brand').': ' . $product->brand->name }}
                                 </div>
                                  <div class="price-container">
                                     {{ __('type').': ' . $product->type->name }}
                                 </div>
                             </div>
                             {{-- <div class="product-block-one-heart">
                                    <a href=""><i class="flaticon-heart"></i></a>
                                </div> --}}
                             <div class="overlay">
                                 {{-- {{ $product->brand->name }}
                                 {{ $product->type->name }} --}}
                             </div>
                         </div>
                     </div>
                 @endforeach


             </div>
         </div>
     </section>
     <!-- week deal -->

 </div>
