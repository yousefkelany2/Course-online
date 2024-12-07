@include("website.layout.navbar")


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-4">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('website')}}/img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class=" text-uppercase mb-3 animated slideInDown" style="color: #fb873f;">Best
                                    E-learning platform</h5>
                                <h1 class="display-3 text-white animated slideInDown">Learn Job ready skills from free
                                    online courses with certificates</h1>
                                <p class=" text-white mb-4 pb-2">Explore a wide range of courses designed to enhance
                                    your expertise in technology, business, arts, and more. Start learning today!</p>
                                <a href="About"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="{{ route("Signup.index") }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('website')}}/img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class=" text-uppercase mb-3 animated slideInDown" style="color: #fb873f;">Welcome to
                                    Secret Coder</h5>
                                <h1 class="display-3 text-white animated slideInDown">Interactive Learning Experience
                                </h1>
                                <p class=" text-white mb-4 pb-2">Engage with interactive lessons, quizzes, and
                                    projects. Experience hands-on learning that keeps you motivated and inspired.</p>
                                <a href="About"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="{{ route("Signup.index") }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-2 text-center">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 style="color: #fb873f;">Invest in your professional goals with Secret Coder</h1>
                    <p class="mb-5">Get unlimited access to over 90% of courses, Projects, Specializations, and
                        Professional Certificates on Coursera, taught by top instructors.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3 shadow">
                        <div class="p-4">
                            <img src="{{asset('website')}}/img/icon1.png" alt="" width="60px" class="mb-4">
                            <h5 class="mb-3">Learn anything</h5>
                            <p>Explore any interest or trending topic, take prerequisites, and advance your skills</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3 shadow">
                        <div class="p-4">
                            <img src="{{asset('website')}}/img/icon2.png" alt="" width="60px" class="mb-4">
                            <h5 class="mb-3">Save money</h5>
                            <p>Spend less money on your learning if you plan to take multiple courses this year</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3 shadow">
                        <div class="p-4">
                            <img src="{{asset('website')}}/img/icon3.png" alt="" width="60px" class="mb-4">
                            <h5 class="mb-3">Flexible learning</h5>
                            <p>Learn at your own pace, move between multiple courses, or switch to a different course
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3 shadow">
                        <div class="p-4">
                            <img src="{{asset('website')}}/img/icon4.png" alt="" width="60px" class="mb-4">
                            <h5 class="mb-3">Unlimited certificates</h5>
                            <p>Earn a certificate for every learning program that you complete at no additional cost</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('website')}}/img/about.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start pe-3">About Us</h6>
                    <h1 class="mb-4" style="color: #fb873f;">Welcome to Secret Coder</h1>
                    <p class="mb-4">At Secret Coder, we believe in accessible, innovative learning experiences that
                        adapt to your schedule and learning style. Join us in embracing the future of education and
                        unlock your potential with our immersive online courses.</p>
                    <p class="mb-4"> Welcom to Secret Coder, your gateway to boundless learning opportunities. We're
                        dedicated to democratizing education, offering a diverse range of courses taught by industry
                        experts. Our mission is to empower learners worldwide, fostering a community-driven platform
                        where knowledge knows no limits.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right  me-2"></i>Expert Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>Live Interactive Sessions</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>Comprehensive Course Catalog</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>Community Engagement</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>Personalized Learning Paths</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right me-2"></i>Certification and Recognition</p>
                        </div>
                    </div>
                    <a class="btn text-light py-3 px-5 mt-2" href="About">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Banner-1 Start -->
    <div class="container-xxl py-5 pt-5 bg-light">
        <div class="container">
            <div class="row g-5 ">
                <div class="col-lg-6 p-5 wow fadeInUp" data-wow-delay="0.3s">

                    <h1 class="mb-4" style="color: #fb873f;">Explore Free Courses</h1>
                    <p class="mb-4">Start your online learning journey at Great Learning Academy for free with our
                        short-term basic courses across various in-demand domains.</p>

                    <a class="btn text-light py-3 px-5 mt-2" href="{{ route("Signup.index") }}">Start For Free</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('website')}}/img/banner-1.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner-1 End -->



    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center px-3">Categories</h6>
                <h1 class="mb-5" style="color: #fb873f;">Popular Topics to Explore</h1>
            </div>
            <div class="row g-2 m-2">
                <div class="col-lg-3 col-md-6  text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">

                        <img src="{{asset('website')}}/img/cat1.png" class="img-fluid" alt="categories"></i>

                        <h5 class="my-2">
                            <a href="#" class="text-center">Microsoft Excel</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">

                        <img src="{{asset('website')}}/img/cat2.png" class="img-fluid" alt="categories"></i>

                        <h5 class="my-2">
                            <a href="#" class="text-center"> AWS</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">

                        <img src="{{asset('website')}}/img/cat3.png" class="img-fluid" alt="categories"></i>

                        <h5 class="my-2">
                            <a href="#" class="text-center">Python</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">

                        <img src="{{asset('website')}}/img/cat4.png" class="img-fluid" alt="categories"></i>

                        <h5 class="my-2">
                            <a href="#" class="text-center">Java</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">

                        <img src="{{asset('website')}}/img/cat5.png" class="img-fluid" alt="categories"></i>

                        <h5 class="my-2">
                            <a href="#" class="text-center">Web Design</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">

                        <img src="{{asset('website')}}/img/cat6.png" class="img-fluid" alt="categories"></i>

                        <h5 class="my-2">
                            <a href="#" class="text-center">Web Development</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">

                        <img src="{{asset('website')}}/img/cat7.png" class="img-fluid" alt="categories"></i>

                        <h5 class="my-2">
                            <a href="#" class="text-center">MySQL</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">

                        <img src="{{asset('website')}}/img/cat8.png" class="img-fluid" alt="categories"></i>

                        <h5 class="my-2">
                            <a href="#" class="text-center">UI/UX Design</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->


   <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center px-3">Popular Courses</h6>
                <h1 class="mb-5" style="color: #fb873f;">Explore new and trending free online courses</h1>
            </div>






            <div class="row g-4 py-2">

             @foreach ($Category as $category)
             @foreach ($category->course->take(1) as $course)




                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            @php
                            $images=explode('+',$course->img);
                        @endphp
                        @foreach ($images as $image)
                   {{--  {{ $image->extension(); }} --}}



                      @if (pathinfo($image, PATHINFO_EXTENSION)!="mp4")

                     {{--  <video src="{{ asset("storage/images/". $image) }}" width="150" height="100" controls poster="{{ asset("storage/images/videoP.png") }}"></video>
 --}}
 <img  class="img-fluid" src="{{ asset("storage/images/". $image) }}" alt="">

                      @endif

                        @endforeach

                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#fb873f;"
                                class="px-2 py-1 fw-bold text-uppercase">Sale : {{ $course->sale }}%</div>

                        </div>
                        <div class="p-2 pb-0 mt-3 mb-2">

                            <h5 class="" style="color: #fb873f"><a style="color: #fb873f" href="single.html" class="">{{ $course->name }} </a></h5>
                        </div>
                        <div class="p-2 pb-0 ">

                            <h3  style=" font-size:20px">price : <span style="color: gray;">{{ $course->price }}$</span> </p></h3>
                        </div>
                        <div class="p-2 pb-0 ">

                            <h5 class=""><a href="single.html" class="">{{ $course->category["name"]}} </a></h5>
                        </div>
                        <div class="d-flex mt-3 mb-3">
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-star text-warning me-2"></i>
                                4.55</small>
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-user-graduate me-2"></i>5.8L+
                                Learners
                            </small>
                            <small class="flex-fill text-center py-1 px-2"><i
                                    class="fa fa-user me-2"></i>Beginner</small>
                        </div>
                        <div class="d-flex mt-3 mb-3">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>{{ $course->duration }}</small>
                            <small class="py-1 px-2 fw-bold fs-6 text-center">₹ {{ $course->count }}</small>
                            <small class=" text-primary py-1 px-2 fw-bold fs-6" style="float:right;"><a href="{{ route("Courses.edit",$course->id) }}">Enroll
                                    Now </a><i class="fa fa-chevron-right me-2 fs-10"></i></small>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach


            </div>









        </div>
    </div>
    <div class="container text-center">
        <a class="btn text-light py-3 px-5 mt-2 mb-5" href="{{ route("Courses.index") }}">All Courses</a>
    </div>
    <!-- Courses End -->


    <!-- Banner-2 Start -->
    <section class="pb-5" style="background: url('img/banner-3.jpg');">
        <div class="container-xxl mt-5" >
            <div class="container" >
                <div class="row g-5 ">

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100 bg-light" src="{{asset('website')}}/img/banner-2.png" alt=""
                                style="object-fit: cover;">
                        </div>
                    </div>

                    <div class="col-lg-6 p-5 wow fadeInUp" data-wow-delay="0.3s">

                        <h1 class="mb-4" style="color: #fb873f;">Become an Instructor</h1>
                        <p class="mb-4 text-white">Instructors from around the world teach millions of learners on Udemy. We provide
                            the tools and skills to teach what you love.</p>

                        <a class="btn text-light py-3 mt-2" href="#">Start Teaching Today</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Banner-2 End -->

    <!-- FAQ Start  -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

                <h1 class="mb-5">Frequently Asked Questions</h1>
            </div>
            <div class="row g-2">
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is the Secret Coder ?
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                The Secret Coder is an initiative taken by Secret Coder, where we offer 1000+ free online courses in cutting-edge technologies and have successfully enrolled a whopping 5 Million+ learners across all domains. Secret Coder covers courses on Data Science, Machine Learning, Artificial Intelligence, Cloud Computing, Software Development, Sales and Business Development, Digital Marketing, Big Data, and many more.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Why should I choose Great Learning Academy for free courses with certificates ?
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Great Learning Academy is an excellent choice for free courses with certificates because of the high quality of the learning content. The courses are well-crafted, offer a great learning experience, and are interactive and engaging, making them ideal for learners in identifying what works best for their career goals.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How many free courses can I enroll in at the same time?
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can simultaneously enroll in multiple courses at Secret Coder.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How can I enroll in these free online courses?
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                You can click on the “Sign Up” button at the top-right of the page and register with your email address, or you can sign up using your Google Account.
                                </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What are the most popular free courses offered by Secret Coder ?
                              </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                Secret Coder focuses on in-demand concepts and skills, where learners can develop industry-relevant knowledge in their chosen sector. It provides a wide range of courses in prestigious fields, assisting learners across the globe in achieving their professional goals.

                                <p>Some of the most popular free courses offered by Secret Coder that are in high demand today include:</p>
                                <ul>
                                    <li>Free Data Science Courses</li>
                                    <li>Free Artificial Intelligence Courses</li>
                                    <li>Free Software Courses</li>
                                    <li>Free Cloud Computing Courses</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ End  -->

  @include("website.layout.footer")
