@include("website.layout.navbar")

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route("CourseHome.index") }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->






    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center px-3">Popular Courses</h6>
                <h1 class="mb-5" style="color: #fb873f;">Explore new and trending free online courses</h1>
            </div>
            <div class="row g-3  gap-6 py-2">



                @foreach ($Category as $category)
                <div class="align-content-center   mt-3 mb-5">
                    <div class="p-2 pb-0 mt-3 mb-2  text-center">

                        <h1 class="" >Courses <span style="color: #fb873f"  class="">{{ $category->name }}</span></h1>
                    </div>


                </div>
                @foreach ($category->course as $course)





                    <div class="col-lg-4   col-md-6  wow fadeInUp" data-wow-delay="0.1s">
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

                                <h5 class=""><a href="{{ route("Courses.show",$category->id) }}" class="">{{ $course->category["name"]}} </a></h5>
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
    <!-- Courses End -->

    @include("website.layout.footer")
