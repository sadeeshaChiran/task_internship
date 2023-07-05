


<div class="container-fluid justify-content-center col-12 ">
    <div class="row bg-slate-50">

        <div class="mt-4 mb-4 offset-lg-0 offset-0 justify-content-center col-12 text-dark">
            <div class="row align-content-center ">


                <div class=" col-lg-2 col-4 text-start">

                    <a href="/" class="ms-3 fs-3 text-danger">ROBO MASTER</a>

                </div>

                <div class="col-lg-4 col-1">

                    <nav class=" navbar-expand-lg">
                        <div class="container-fluid">


                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                                <div class="offcanvas-header">
                                    <span class="fs-2 " data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark fa-beat" style="color: red;"></i></span>
                                </div>
                                <ul class="mt-2 mb-2 col-12 navbar-nav me-auto mb-lg-0">


                                    <!-- Header search bar start -->
                                    <div class="text-center col-12 ul justify-content-center">
                                        <div class=" row">


                                            <div class="text-center li nav-item col-lg col-12">
                                                <a class="a nav-link" href="#">Home</a>
                                            </div>
                                            <div class="text-center li nav-item col-lg col-12">
                                                <a class="a nav-link" href="#">About</a>
                                            </div>
                                            <div class="text-center li nav-item col-lg col-12">
                                                <a class="a nav-link" href="#">Rent</a>
                                            </div>
                                            <div class="text-center li nav-item col-lg col-12">
                                                <a class="a nav-link" href="#"> Contact</a>
                                            </div>
                                            <div class="text-center li nav-item col-lg col-12">
                                                <a class="a nav-link" href="#"> About</a>
                                            </div>


                                        </div>

                                    </div>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="d-flex justify-content-end col-7 col-lg-6">
                    <div>
                        <a href="#" class="me-lg-3 ms-lg-3 me-1 ms-1 fs-3 col "><i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i></a>

                        <a href="#" class=" me-lg-3 ms-lg-3 me-1 ms-1 fs-3 col"><i class="fa-solid fa-circle-user fa-shake" style="color: #000000;"></i></a>
                        <span class="border-none navbar-toggler me-lg-3 ms-lg-3 me-1 ms-1 fs-3 col d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" class=" me-1 fs-2"><i class="fa-solid fa-bars" style="color: #000000;"></i></span>

                    </div>
                </div>




            </div>

        </div>






    </div>

</div>





<style>

    .ul .li {
            display: inline-block;

            transition: all 0.3s ease-in-out;
        }

        .submenu {
            z-index: 10;
        }

        .ul .li:hover .submenu {
            height: auto;
            padding: 0rem 5rem 0rem 5rem;



        }

        .ul .li:hover a {
            color: #3862a0;
        }

        .ul .li:hover .a::before {
            visibility: visible;
            transform: scale(1, 1);
        }

        .ul .li .submenu {
            overflow: hidden;
            position: absolute;
            left: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.889);

            height: 0;
            line-height: 40px;
            box-sizing: border-box;
            transition: height 0.3s ease-in-out;
            transition-delay: 0.1s;
        }

        .ul .li .submenu .a {
            color: #fff;
            margin-top: 20px;
            font-size: 16px;
            z-index: 10;
        }

        .ul .li .submenu .a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .ul .li .a {
            color: #000000;
            display: block;
            padding: 0 7px 0 7px;
            margin: 0 0 10px;
            text-decoration: none;
            position: relative;
        }

        .ul .li .a::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 3px;
            bottom: -10px;
            left: 0px;
            background-color: #3862a0;
            transition: all 0.2s ease-in-out;
            transform: scale(0, 0);
            visibility: hidden;
        }


    .hr {
        border: 2px solid blue;
    }

    .div:hover .hr {
        border: 2px solid red;
        /* transition: all 0.2s ease-in-out;
            transform: scale(1, 2); */
    }
    .div:hover img {
        border: 2px solid white;

    }
</style>




