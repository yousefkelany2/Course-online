@include("website.layout.navbar")
<style>
    .combo007{
        transition: 0.5s;
    }
    .combo007:hover{
        background: white;
    }
</style>

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
            <!--    your video part-->
            @foreach ($Course as $course)

            @php
                $images = explode('+', $course->img);
            @endphp

            <section id="video-part" style="background: rgb(225, 222, 222); padding:20px">
                <h2 class="text-center mb-4">Concept <span style="color: #fb873f;">{{ $course->name }}</span></h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="video-009p" >
                                @foreach ($images as $image)
                                    @if (pathinfo($image, PATHINFO_EXTENSION) == "mp4")
                                        <video id="main-video" src="{{ asset('storage/images/' . $image) }}" height="500" class="w-100" controls poster="{{ asset('storage/images/poster.jpg') }}"></video>
                                        @break
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="video-info08">
                                @foreach ($images as $image)
                                    @if (pathinfo($image, PATHINFO_EXTENSION) == "mp4")
                                        <div class="combo007 d-flex gap-2 w-100  align-content-center p-1 " >
                                            <div class="thumnil001">
                                                <a href="#" class="thumbnail-video" data-video-src="{{ asset('storage/images/' . $image)  }}" >
                                                    <video src="{{ asset('storage/images/' . $image) }}" height="80" width="100"  poster="{{ asset('storage/images/poster.jpg') }}"></video>
                                                </a>
                                            </div>
                                            <div class="thum002-details">

                                                     <span>How To Animate an INTRO! [Skill Development]</span>


                                            </div>
                                        </div>
                                        <br>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class=" mt-4 p-3">
                <h1 style="letter-spacing: 2px">Description</h1>
                <p style="color:  rgb(142, 137, 137);" ><span style="color: #fb873f;">{{ $course->name }}</span> is a general purpose programming language that supports various computer programming models such as object-oriented programming and generic programming.Its main purpose was to make writing good programs easier and more pleasant for the individual programmer. By learning <span style="color: #fb873f;">{{ $course->name }}</span> , you can create applications that will run on a wide variety of hardware platforms such as personal computers running Windows, Linux, UNIX, and Mac OS X.

                    The main target of this course is to help the students who are still under graduation and want to understand <span style="color: #fb873f;">{{ $course->name }}</span> programming and teach them how to solve exam problems.

                    </p>
            </div>
        @endforeach








        </div>
    </div>
    <!-- Courses End -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mainVideo = document.getElementById('main-video'); // الفيديو الرئيسي
            const thumbnailVideos = document.querySelectorAll('.thumbnail-video'); // الفيديوهات المصغرة

            thumbnailVideos.forEach(thumbnail => {
                thumbnail.addEventListener('click', function (e) {
                    e.preventDefault(); // منع إعادة تحميل الصفحة
                    const videoSrc = this.getAttribute('data-video-src'); // الحصول على مصدر الفيديو
                    mainVideo.src = videoSrc; // تغيير مصدر الفيديو الرئيسي
                    mainVideo.play(); // تشغيل الفيديو
                });
            });
        });
    </script>

    @include("website.layout.footer")
