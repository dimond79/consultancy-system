@extends('frontend.layouts.app')


@section('main-content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}

        </div>
    @endif

    {{-- {{ $courses }} --}}


    <!-- Carousel Start -->

    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('frontend/uploads/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Business Consultancy</h5>
                            <h1 class="display-1 text-white mb-md-4">We Provide Solution On Your Business</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Get Quote</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('frontend/uploads/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Business Consultancy</h5>
                            <h1 class="display-1 text-white mb-md-4">Take Our Help To Reach The Top Level</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Get Quote</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- Carousel End -->


    <!-- About Start -->

    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Welcome To <span class="text-primary">CONSULT</span></h1>
                <h4 class="text-primary mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no lorem sit clita
                    duo justo magna dolore</h4>
                <p class="mb-4">Et stet ipsum nonumy rebum eos justo, accusam invidunt aliquyam stet magna at et sanctus,
                    vero sea sit amet dolores, sit dolor duo invidunt dolor, kasd rebum consetetur diam invidunt erat stet.
                    Accusam nonumy lorem kasd eirmod. Justo clita sadipscing ea invidunt rebum sadipscing consetetur. Amet
                    diam amet amet sanctus sanctus invidunt erat ipsum eirmod.</p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 rounded-pill">Get A Quote</a>
            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Business Planning</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem
                                et sit sed stet lorem sit clita duo</p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-chart-line fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Financial Analaysis</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem
                                et sit sed stet lorem sit clita duo</p>
                        </div>
                    </div>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-balance-scale fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>legal Advisory</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem
                                et sit sed stet lorem sit clita duo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- About End -->


    <!-- Services Start -->

                        {{-- //another approach of image it just place image inside circle
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <img src="{{ asset('frontend/uploads/img/nzf.png') }}" alt="NZ-flag" style="width: 80px; height:auto;" >

                    </div> --}}
    <div class="container-fluid py-4 px-4">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h2 class="display-5 mb-0">Select Your Dream Destination</h2>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">

            <div class="col-lg-4 col-md-6">
                <a href="https://www.nepalec.edu.np/destination/study-in-usa" style="text-decoration:none;">
                    <div class="service-item bg-secondary text-center px-5 mb-4"
                        style="background-image: url('{{ asset('frontend/uploads/img/usa.png') }}'); background-size: cover;
                        background-position: center; border-radius: 10px;">

                        <div class="rounded-circle mx-auto mb-3"
                            style="width: 90px; height: 90px;
                    background-image: url('{{ asset('frontend/uploads/img/usaf.png') }}');
                    background-size: cover;
                    background-position: center;
                    border: 2px solid white;">
                        </div>

                        <h3 class="text-white mb-3">Study in U.S.A</h3>

                    </div>
                </a>
            </div>

          <div class="col-lg-4 col-md-6">
                <a href="https://www.nepalec.edu.np/destination/study-in-united-kingdom" style="text-decoration:none;">
                    <div class="service-item bg-secondary text-center px-5 mb-4"
                        style="background-image: url('{{ asset('frontend/uploads/img/uk.png') }}'); background-size: cover;
                        background-position: center; border-radius: 10px;">

                        <div class="rounded-circle mx-auto mb-3"
                            style="width: 90px; height: 90px;
                    background-image: url('{{ asset('frontend/uploads/img/ukf.png') }}');
                    background-size: cover;
                    background-position: center;
                    border: 2px solid white;">
                        </div>

                        <h3 class="text-white mb-3">Study in United Kingdom</h3>

                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://eduvibe.com.np/study-in-germany-at-best-institute-in-nepal/" style="text-decoration:none;">
                    <div class="service-item bg-secondary text-center px-5 mb-4"
                        style="background-image: url('{{ asset('frontend/uploads/img/ger.png') }}'); background-size: cover;
                        background-position: center; border-radius: 10px;">

                        <div class="rounded-circle mx-auto mb-3"
                            style="width: 90px; height: 90px;
                    background-image: url('{{ asset('frontend/uploads/img/gerf.png') }}');
                    background-size: cover;
                    background-position: center;
                    border: 2px solid white;">
                        </div>

                        <h3 class="text-white mb-3">Study in Germany</h3>

                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://www.nepalec.edu.np/destination/study-in-canada" style="text-decoration:none;">
                    <div class="service-item bg-secondary text-center px-5"
                        style="background-image: url('{{ asset('frontend/uploads/img/can.png') }}'); background-size: cover;
                        background-position: center; border-radius: 10px;">

                        <div class="rounded-circle mx-auto mb-3"
                            style="width: 90px; height: 90px;
                    background-image: url('{{ asset('frontend/uploads/img/canf.png') }}');
                    background-size: cover;
                    background-position: center;
                    border: 2px solid white;">
                        </div>

                        <h3 class="text-white mb-3">Study in Canada</h3>

                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="https://www.nepalec.edu.np/destination/study-in-australia" style="text-decoration:none;">
                    <div class="service-item bg-secondary text-center px-5"
                        style="background-image: url('{{ asset('frontend/uploads/img/aus.png') }}'); background-size: cover;
                        background-position: center; border-radius: 10px;">

                        <div class="rounded-circle mx-auto mb-3"
                            style="width: 90px; height: 90px;
                    background-image: url('{{ asset('frontend/uploads/img/ausf.png') }}');
                    background-size: cover;
                    background-position: center;
                    border: 2px solid white;">
                        </div>

                        <h3 class="text-white mb-3">Study in Australia</h3>

                    </div>
                </a>
            </div>
           <div class="col-lg-4 col-md-6">
                <a href="https://www.nepalec.edu.np/destination/study-in-new-zealand" style="text-decoration:none;">
                    <div class="service-item bg-secondary text-center px-5"
                        style="background-image: url('{{ asset('frontend/uploads/img/nz.jpg') }}'); background-size: cover;
                        background-position: center; border-radius: 10px;">

                        <div class="rounded-circle mx-auto mb-3"
                            style="width: 90px; height: 90px;
                    background-image: url('{{ asset('frontend/uploads/img/nzf.png') }}');
                    background-size: cover;
                    background-position: center;
                    border: 2px solid white;">
                        </div>

                        <h3 class="text-white mb-3">Study in New Zealand</h3>

                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Services End -->


    <!-- Features Start -->
    {{-- <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Why Choose Us!!!</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes fs-4 text-white"></i>
                        </div>
                        <h3>Best In Industry</h3>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam et diam dolor ea</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-percent fs-4 text-white"></i>
                        </div>
                        <h3>99% Success Rate</h3>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam et diam dolor ea</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
                        <h3>Award Winning</h3>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam et diam dolor ea</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-block bg-primary h-100 text-center">
                    <img class="img-fluid" src="img/feature.jpg" alt="">
                    <div class="p-4">
                        <p class="text-white mb-4">Clita nonumy sanctus nonumy et clita tempor, et sea amet ut et sadipscing rebum amet takimata amet, sed accusam eos eos dolores dolore et. Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
                        <a href="" class="btn btn-light py-md-3 px-md-5 rounded-pill mb-2">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="far fa-smile-beam fs-4 text-white"></i>
                        </div>
                        <h3>100% Happy Client</h3>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam et diam dolor ea</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4 text-white"></i>
                        </div>
                        <h3>Professional Advisors</h3>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam et diam dolor ea</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-headset fs-4 text-white"></i>
                        </div>
                        <h3>24/7 Customer Support</h3>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam et diam dolor ea</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Features Start -->


    <!-- Quote Start -->
    <div class="container-fluid bg-secondary px-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h4 class="display-9 mb-4">Get in touch.</h4>
                <h1 class="display-5 mb-4">Please drop your Inquiry here.</h1>
                <p class="mb-4">To start consultation and admission, kindly fill up the form , one of our advisers will
                    contact you via email in less than 24 hours</p>
                <form action="{{ route('client.create') }}" method="POST">
                    @csrf
                    <div class="row gx-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control" id="form-floating-1"
                                    placeholder="John Doe">
                                <label for="form-floating-1">Full Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="number" name ="mobile" class="form-control" id="mobile"
                                    placeholder="Enter you number">
                                <label for="form-floating-2">Mobile No.</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="form-floating-2"
                                    placeholder="name@example.com">
                                <label for="form-floating-2">Email address</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="number" name="percentage" class="form-control" id="percentage"
                                    placeholder="Enter Percentage/GPA">
                                <label for="form-floating-2">Percentage/GPA</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <select type="text" name="education" class="form-select" id="floatingSelect"
                                    required>
                                    <option selected>Education level</option>
                                    <option value="High School">High School</option>
                                    <option value="Bachelor">Bachelor</option>
                                    <option value="Master">Master</option>

                                </select>
                                <label for="floatingSelect">Highest Education</label>
                            </div>
                        </div>
                        {{-- <div class="col-6">
                            <div class="form-floating">
                                <select type="text" name="course_id" class="form-select" id="floatingSelect"
                                    required>
                                    <option selected>Education level</option>
                                    <option value="1">High School</option>
                                    <option value="2">Bachelor</option>
                                    <option value="3">Master</option>

                                </select>
                                <label for="floatingSelect">Course</label>
                            </div>
                        </div> --}}
                        <div class="col-6">
                            <select name="course_id" id="floatingSelect" class="form-select" required>
                                <option selected disabled>Courses</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Course</label>
                        </div>



                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="number" name="age" class="form-control" id="form-floating-2"
                                    placeholder="Age">
                                <label for="form-floating-2">Age</label>
                            </div>
                        </div></br>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                {{-- <input type="textbox" class="form-control" id="form-floating-2" placeholder="Your Message!"> --}}
                                <textarea class="form-control" name="message" id="form-floating-2" placeholder="Your Message!"></textarea>
                                <label for="form-floating-2">Message</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary w-100 h-100" type="submit">Request A Quote</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src=" {{ asset('frontend/uploads/img/quote.jpg') }}"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>


    <!-- Quote End -->




    <!-- Testimonial Start -->
    {{-- <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/testimonial.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">What Say Our Client!!!</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" alt="">
                            <div class="ps-4">
                                <h3>Client Name</h3>
                                <span class="text-uppercase">Profession</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" alt="">
                            <div class="ps-4">
                                <h3>Client Name</h3>
                                <span class="text-uppercase">Profession</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->
@endsection
