@include("website.layout.navbar")

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Course</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="courses.html">Course</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">HTML Course for Beginners</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
    </div>
    <!-- Header End -->


<!-- Course Detail Start -->
<div class="container-xxl py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 wow fadeInUp">

                <div class="container">
                    <div class="row g-5 justify-content-center">

                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                            <h2>HTML Course for Beginners</h2>
                            <p>Start at the beginning by learning HTML basics — an important foundation for building and editing web pages.

                            </p>
                            <div class="d-flex">
                                <small><i class="fa fa-star text-warning"></i>
                                    4.6</small>
                                <small style="margin-left: 15px;"><i class="fa fa-user-graduate"></i> 5.8L+
                                    Learners
                                </small>
                                <small style="margin-left: 15px;"><i class="fa fa-user"></i>Beginner</small>
                                <small style="margin-left: 15px;"><i class="fa fa-clock me-2"></i> 2.0 Hrs</small>

                            </div>
                            <div class="image-div text-left mt-3">
                                <img src="{{asset('website')}}/img/testimonial-2.jpg" alt=""
                                    style="height: 40px; width: 40px; border-radius: 50%;">
                                <span style="margin-left: 10px;"><b>Instructor Name</b> - Zoe Bachman</span>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="container-fluid wow fadeInUp mt-5 tabs">


                    <!-- Tab panes -->
                    <div class="tab-content mt-4">

                        <div class="tab-pane container active" id="Overview">
                            <h2>About this Course</h2>
                            <p>Fun fact: all websites use HTML — even this one. It's a fundamental part of every web developer's toolkit. HTML provides the content that gives web pages structure, by using elements and tags, you can add text, images, videos, forms, and more. Learning HTML basics is an important first step in your web development journey and an essential skill for front- and back-end developers.</p>



                            <h2 class="mt-4">
                                Skills you'll gain
                            </h2>

                            <span class="badge rounded-pill text-white bg-primary px-4 py-2 m-2"
                                style="font-size: 15px; font-weight: normal;">Structure pages with HTML</span>

                                <span class="badge rounded-pill text-white bg-primary px-4 py-2 m-2"
                                style="font-size: 15px; font-weight: normal;">Present data with tables</span>

                                <span class="badge rounded-pill text-white bg-primary px-4 py-2 m-2"
                                style="font-size: 15px; font-weight: normal;">Write cleaner HTML</span>


                        </div>

                        <div class="container" id="Curriculum">

                            <h2 class="mt-4">
                                Syllabus
                            </h2>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Elements and Structure

                                    </button>
                                  </h2>
                                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><ul>
                                        <li><i class="fa fa-video text-danger"></i> Introduction to HTML</li>
                                        <li><i class="fa fa-video text-danger"></i> HTMl Document Standards</li>
                                    </ul></div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                       Tables
                                    </button>
                                  </h2>
                                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><ul>
                                        <li><i class="fa fa-video text-danger"></i> HTML Tables</li>
                                    </ul></div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                       Forms
                                    </button>
                                  </h2>
                                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><ul>
                                        <li><i class="fa fa-video text-danger"></i> HTML Forms</li>
                                        <li><i class="fa fa-video text-danger"></i> Form Validation</li>
                                    </ul></div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                         Semantic HTML
                                      </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                      <div class="accordion-body"><ul>
                                          <li><i class="fa fa-video text-danger"></i> Semantic HTML</li>
                                      </ul></div>
                                    </div>
                                  </div>
                              </div>



                        </div>

                        <div class="container" id="Instructor">
                            <h2 class="mt-4">About the Instructor</h2>
                            <div class="image-div text-left mt-4">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <img src="{{asset('website')}}/img/testimonial-2.jpg" alt=""
                                            style="height: 150px; width: 150px; border-radius: 50%;">
                                    </div>
                                    <div class="col-lg-9 col-md-6 mt-2">
                                        <h5>Zoe Bachman</h5>
                                        <p>Developer</p>
                                        <div class="row">
                                            <div class="col-6">
                                                <p><i class="fa fa-star"></i>
                                                    4.87 Instructor rating</p>
                                            </div>
                                            <div class="col-6">
                                                <p> <i class="fa fa-check


                                                     "></i>
                                                    1,533 reviews</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p><i class="fa fa-user"></i>
                                                    20 Students</p>
                                            </div>
                                            <div class="col-6">
                                                <p><i class="fa fa-video"></i>
                                                    29 courses</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="des mt-4 mb-5">
                                    Curriculum Director at Codecademy and creative technologist. She has designed a range of Codecademy courses, including Learn HTML, Learn C#, Learn Alexa, and the beginner-friendly Learn How to Code.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-lg-3 col-md-6 shadow wow fadeInUp" data-wow-delay="0.3s">

                <div class="image text-center">
                    <img class="img-fluid mt-2" src="{{asset('website')}}/img/course-1.jpg" alt="" height="200px" width="500px">
                </div>

                <h4 class="mt-2 p-2">Free <small></small></h4>

                <h4 class="mt-2 p-2">$
                    <small><del>20</del></small>
                </h4>


                <div class="buttons">

                    <a href="#"
                        class="text-decoration-none text-white btn p-3 w-100 mb-2">ENROLL NOW</a>



                </div>
                <div class="list mt-2">
                    <div class="list1 d-flex justify-content-between pt-2 border-bottom">
                        <p><i class="fa fa-clock"></i> Duration</p>
                        <p>2.0 Hrs</p>
                    </div>
                    <div class="list2 d-flex justify-content-between pt-2 border-bottom">
                        <p><i class="fa fa-book"></i> Lectures</p>
                        <p>4</p>
                    </div>
                    <div class="list3 d-flex justify-content-between pt-2 border-bottom">
                        <p><i class="fa fa-bolt"></i> Enrolled</p>
                        <p>240 students</p>
                    </div>
                    <div class="list4 d-flex justify-content-between pt-2 border-bottom">
                        <p><i class="fa fa-google-translate"></i> Language</p>
                        <p>English</p>
                    </div>
                    <div class="list5 d-flex justify-content-between pt-2 border-bottom">
                        <p><i class="fa fa-list"></i> Skill Level</p>
                        <p>Beginner</p>
                    </div>
                    <div class="list6 d-flex justify-content-between pt-2 border-bottom">
                        <p><i class="fa fa-list"></i> Deadline</p>
                        <p>Life Time</p>
                    </div>
                    <div class="list7 d-flex justify-content-between pt-2 border-bottom">
                        <p><i class="fa fa-certificate"></i> Certificate</p>
                        <p>Yes</p>
                    </div>
                    <div class="button pt-4 text-center mb-4">
                        <i class="fa fa-share"></i><a href=""> Share this Course</a>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>
<!-- Course Detail End -->

@include("website.layout.footer")
