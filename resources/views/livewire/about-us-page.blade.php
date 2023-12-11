<div>

    <br><br>
    @livewire('components.divider-with-image', [
        'title' => __('about us'),
        'text' => '',
    ])



    <section style="margin: 1% 10% 5% 10%; display: flex; justify-content: end; align-items: center; ">
            <x-markdown style=" color: black; font-weight: 400;  direction: rtl;  text-align: right; width: 50%; margin: 0 50px 0 0  ">

                {{ $main_text }}

            </x-markdown>

        {{-- <div class="col-lg-3 col-md-6"> --}}
            <div class="footer-widget footer-logo-widget">
                <div class="footer-logo">
                    <img src="{{ asset('images/llogoo.png') }}" style="margin: 0 15px; width: 300px;" alt="logo">
                </div>

            </div>
        {{-- </div> --}}
    </section>

</div>
