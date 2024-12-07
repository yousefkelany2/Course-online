@include("website.layout.navbar")

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Student Reviews</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Reviews</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h1 class=" bg-white text-center px-3" style="color: #fb873f;">Success stories</h1>
                <p class="mb-5">Can Secret Coder courses help your career? Our learners tell us how.</p>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('website')}}/img/testimonial-1.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Sarah K.</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">I stumbled upon Secret Coder while searching for free courses. The quality
                            surpassed my expectations! The content was rich, and the instructors were knowledgeable.
                            I've already recommended it to my friends.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('website')}}/img/testimonial-2.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John M.</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">As a working professional, finding free courses that match my schedule was a
                            game-changer. The courses are engaging, and the community aspect adds immense value. Highly
                            recommended!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('website')}}/img/testimonial-3.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">David P.</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">I've taken multiple courses here, and each one has been fantastic. The
                            platform's design makes learning enjoyable, and the knowledge gained is invaluable. It's
                            hard to believe these courses are free!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('website')}}/img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Lisa S.</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">I'm amazed at the quality of the free courses available. The instructors are
                            experts in their fields, and the interactive lessons make learning a breeze. Thank you for
                            this opportunity!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    @include("website.layout.footer")
