<div>

    <div style="display: flex; flex-direction: column; align-items: center; margin: 5% 0%">
        <h1>{{__('send us a message')}}</h1>

        @if ($isSend)
            <span>{{__('done sending')}}</span>
        @endif

        <form class="" style="width: 26rem; margin: 5% 0% 0% 0%" wire:submit.prevent='store'>
            <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" wire:model='name' id="form4Example1" class="form-control" />
                <label class="form-label" for="form4Example1">{{__('name')}}</label>
                <span>
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" wire:model='email' id="form4Example2" class="form-control" />
                <label class="form-label" for="form4Example2">{{__('email')}}</label>
                <span>
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <!-- Message input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <textarea class="form-control" wire:model='_message' id="form4Example3" rows="4"></textarea>
                <label class="form-label" for="form4Example3">{{__('message')}}</label>
                <span>
                    @error('_message')
                        {{ $message }}
                    @enderror
                </span>
            </div>



            <!-- Submit button -->
            <button data-mdb-ripple-init style="background-color: #c7282c; border: none"
                class="btn btn-primary btn-block mb-4">
                {{__('send')}}
            </button>
        </form>
    </div>


</div>
