<div>
            <!-- brand -->
            <section class="brand">
                <div class="auto-container">
                    <div class="row">
                        <div class="common-section-title">
                            <div class="section-title">
                                <!-- <img src="images/icons/featured-nav-left.png" alt="icon"> -->
                                 <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.4 4h17.2A2.4 2.4 0 0 1 23 6.4v11.2a2.4 2.4 0 0 1-2.4 2.4H3.4A2.4 2.4 0 0 1 1 17.6V6.4A2.4 2.4 0 0 1 3.4 4ZM5 9a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1Z" fill="#c7282c"></path></g></svg>

                                <h4>العلامات التجارية</h4>
                            </div>
                        </div>

                        @foreach ($brands as $brand )

                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                           <div class="brand-container">
                               <div class="brand-logo">
                                   <a href="#">
                                       <img src="{{asset('storage/'.$brand->image)}}" alt="logo">

                                   </a>
                               </div>
                           </div>
                       </div>
                        @endforeach





                    </div>
                </div>
            </section>
            <!-- brand -->

        </div>
