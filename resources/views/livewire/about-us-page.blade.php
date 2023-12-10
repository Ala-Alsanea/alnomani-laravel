<div>

    <br><br>
    @livewire('components.divider-with-image', [
        'title' => __('about us'),
        'text' => '',
    ])
    <br><br>

    <section style="margin: 1% 10% 5% 10%;">
        <p style=" color: black; font-weight: 400;  direction: rtl;  text-align: center; ">
            <x-markdown style=" color: black; font-weight: 400;  direction: rtl;  text-align: center; ">

                {{ $main_text }}
            </x-markdown>

        </p>
    </section>

</div>
