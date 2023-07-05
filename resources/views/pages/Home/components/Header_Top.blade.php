<div class="container-fluid justify-content-center col-lg12 ">
    <div class="bg-black row">

        <div class="mt-2 mb-2 text-white offset-lg-1 offset-0 offset-md-1 justify-content-center col-12 col-lg-10 col-md-10">
            <div class="row align-content-center ">


                <div class="col-6">

                    @if ( auth()->user()  )

                    <span>Welcome <span class="text-danger"> {{ auth()->user()->fName }} {{ auth()->user()->lName }} </span> </span>

                    @else
                     <span>Welcome <span class="text-danger"> user </span> </span>

                    @endif

                </div>


                <div class="col-6 d-flex justify-content-end">

                    <span><i class="ms-5 fa-solid fa-user fa-fade" style="color: #ffffff;"></i></span>

                    @if ( auth()->user()  )

                    <a href="{{ route('logout') }}" class="ms-2">Log out</a>


                    @else
                    <a  href="{{ route('login_viwe') }}" class="ms-2">Login</a>

                    @endif

                </div>
            </div>

        </div>

    </div>

</div>
