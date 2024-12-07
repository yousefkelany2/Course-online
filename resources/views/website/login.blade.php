@include("website.layout.navbar")

        <!-- Header Start -->
        <div class="container-fluid bg-primary py-5 mb-5 page-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Login</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Login</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->



    <!-- Login Start -->
    <div class="container-xxl py-2 mt-4">
        <div class="container">

            <div class="row g-4 wow fadeInUp" data-wow-delay="0.5s ">
                <center>
                    <form  class="shadow p-4" action="{{ route("Login.store") }}" method="POST"  style="max-width: 550px;">
                        @csrf
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="mb-5 bg-white text-center px-3">Login</h1>

                        </div>
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    @error('email') <p style="color: red" >{{ $message }}</p> @enderror
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                    <label for="email">Email Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    @error('password') <p style="color: red" >{{ $message }}</p> @enderror
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    <label for="password">Password</label>
                                </div>
                            </div>



                            <div class="col-12">
                                <button class="btn text-light w-100 py-3" type="submit">Login</button>
                            </div>

                            <div class="col-12 text-center">
                                <p>Don't have an account? <a class="text-decoration-none" href="{{ route("Signup.index") }}">Signup</a></p>
                            </div>
                            <div class="col-12 text-center">
                                <p>Do You want Exit Website ? <a class="text-decoration-none" href="{{ route("Login.create") }}">Logout</a></p>
                            </div>
                        </div>
                    </form>
                </center>


            </div>
        </div>
    </div>
    <!-- Login End -->
    @include("website.layout.footer")
