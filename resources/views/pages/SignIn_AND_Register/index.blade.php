@extends('layouts.app')
@section('content')


<div class="container-fluid col-12 ">
    <div class="row">
        <section id="big-box">
            <div class="container justify-content-center d-grid vh-100">
                <div class="row align-content-center">




                        <div class="col-12 offset-0 col-lg-8 offset-lg-2 col-md-10 offset-md-1 card rounded-5 content-background">
                            <div class="row ">


                                {{-- start contend right side --}}
                                <div class="container-fluid col-11 ">
                                    <div class="row ">



                                            {{-- start top name --}}
                                            <div class="text-center">
                                                <h4 class="mt-4 mb-2 fs-2 fw-bold ">ROBO MASTER</h4>
                                            </div>
                                            {{-- ------------- --}}



                                            {{-- start login --}}
                                                <div  id="login"  class="col-12">
                                                    <div class="row">

                                                        <h5 class="mt-4 mb-1 fs-4 fw-semibold">Sign into your account</h5>

                                                        <div>
                                                            <livewire:sign-in-and-register-page.signin-layer.signin-layer/>

                                                        </div>
                                                    </div>
                                                </div>
                                            {{-- ------------------- --}}


                                            {{-- Register --}}
                                                <div id="register" class="visually-hidden col-12">
                                                    <div class="row">
                                                        <h5 class="mt-4 mb-1 fs-4 fw-semibold">Creat your new account</h5>


                                                        <livewire:sign-in-and-register-page.register-layer.register-layer/>


                                                    </div>
                                                </div>
                                            {{-- --------------- --}}






                                                {{-- Bottom button --}}
                                                <div class="mb-4 col-12 offset-1 ">
                                                    <button onclick="loginSide();" class="col-5 btn btn-light">
                                                        Login
                                                    </button>
                                                    <button onclick="registerSide();" class="col-5 btn btn-light">
                                                        Register
                                                    </button>

                                                </div>
                                                {{-- ---------------- --}}

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


        </section>
    </div>

    </div>






@endsection


@push('css')
    <style>






        .content-background {
            background-color: hsla(212, 100%, 48%, 0.152);
        backdrop-filter: saturate(200%) blur(10px);



        }


    </style>
@endpush

@push('js')
    <script>

        // gogle

    // =======================


function registerSide (){

    document.getElementById("register").className ="visible";
    document.getElementById("login").className ="visually-hidden ";
    document.getElementById("forgetPassword").className ="visually-hidden";
}


function loginSide(){

    document.getElementById("login").className ="visible";
    document.getElementById("register").className ="visually-hidden ";
    document.getElementById("forgetPassword").className ="visually-hidden";

}

function forgetPassword(){

document.getElementById("login").className ="visually-hidden";
document.getElementById("forgetPassword").className ="visible";
document.getElementById("register").className ="visually-hidden";
}







</script>
@endpush
