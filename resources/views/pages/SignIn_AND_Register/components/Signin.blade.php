

<form wire:submit.prevent="LoginLayer"  method="POST">
    @csrf
    @if (session('status'))
    <div class=" col-12" id="msgdiv">
        <div class="alert alert-success" role="alert" id="msg">
            <span class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </span>
        </div>

    </div>
    @elseif (session('erro'))

        <div class="col-12" id="msgdiv">
            <div class="alert alert-danger" role="alert" id="msg">
                <span class="mb-4 text-sm font-medium text-red-950">
                    {{ session('erro') }}
                </span>
            </div>

        </div>

    @endif


    {{-- Email --}}
    <div class="mt-4 col-12 ">
        <div class="form-outline">
            <input type="email" aria-label="Email address" name="email" class="form-control form-control-lg" placeholder="Email Address" aria-describedby="emailHelp" wire:model='email' />
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    {{-- Password --}}
    <div class="mt-4 mb-4 col-12 ">
        <div class="form-outline">
            <input type="password" class="form-control form-control-lg" placeholder="password" aria-describedby="emailHelp" wire:model='password'/>
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>


    {{-- Submit button --}}
    <div class="pt-1 mb-3 text-center col-12 d-grid">
        <button class="mb-3 btn-lg btn btn-outline-dark rounded-5" type="submit" >Login</button>
    </div>

</form>
