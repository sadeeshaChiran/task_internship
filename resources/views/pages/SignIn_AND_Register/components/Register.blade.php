<form wire:submit.prevent="SigninLayer"  method="POST" enctype="multipart/form-data">
     @csrf


        {{-- Session messages --}}
        @if (session('status'))
            <div class="col-12 " id="msgdiv">
                <div class="alert alert-success" role="alert" id="msg">
                    <span class="mb-4 text-sm font-medium text-green-600">
                        {{ session('status') }}
                    </span>
                </div>

            </div>


        @endif




            <div class="mt-4 col-12 ">
                <div class="row">

                    {{-- First Name --}}
                    <div class="mt-3 col-12 col-md-6 col-lg-6 form-outline">
                        <input type="text" class="form-control form-control-lg" placeholder="fName" wire:model='fName'/>
                        @error('fName')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Last Name --}}
                    <div class="mt-3 col-12 col-md-6 col-lg-6 form-outline">
                        <input type="text" class="form-control form-control-lg" placeholder="lName" wire:model='lName'/>
                        @error('lName')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="mt-3 col-12 col-md-6 col-lg-6 form-outline">
                        <input type="email" aria-label="Email address" name="email" class="form-control form-control-lg" placeholder="Email Address" wire:model='email' />
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>

                    {{-- Mobile Number --}}
                    <div class="mt-3 col-12 col-md-6 col-lg-6 form-outline">
                        <input type="text" class="form-control form-control-lg" placeholder="number" wire:model='number'/>
                        @error('number')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>



                    {{-- Birth of date --}}
                    <div class="mt-3 col-12 col-md-6 col-lg-6 form-outline">
                        <input type="date" class="form-control form-control-lg" placeholder="Birthday" wire:model='dob'/>
                        @error('dob')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Profile Image --}}
                    <div class="mt-3 col-12 col-md-6 col-lg-6 form-outline">

                        <input type="file" name="image" class="form-control form-control-lg" placeholder="Profile Image"  wire:model='image' />
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>

                    {{-- Password --}}
                    <div class="mt-3 col-12 col-md-6 col-lg-6 form-outline">
                        <input type="password" class="form-control form-control-lg" placeholder="password" aria-describedby="emailHelp" wire:model='password'/>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Recheck Password --}}
                    <div class="mt-3 col-12 col-md-6 col-lg-6 form-outline">
                        <input type="password" class="form-control form-control-lg" placeholder="Re-password" aria-describedby="emailHelp" wire:model='repassword'/>
                        @error('repassword')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>

                    {{-- discription --}}
                    <div class="mt-3 col-12 form-outline">
                        <input type="text" name="description" class="form-control form-control-lg" placeholder="description" wire:model='description' />
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>


                </div>

            </div>


            {{-- Submit button --}}
            <div class="pt-1 mt-4 mb-5 text-center col-12 d-grid ">
                <button type="submit" class="btn btn-outline-dark btn-lg rounded-5" type="button">
                    signup
                </button>
            </div>
        </div>
    </div>

</form>
