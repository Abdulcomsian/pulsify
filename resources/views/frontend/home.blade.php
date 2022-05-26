
 
    @extends('layouts.Front.master-front')
    @section('content')
    <main class="pageWrapper">
        <div class="mainHeroSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bannerLeftDiv">
                            <h5>Best Doctors Near You</h5>
                            <h1>Meet the Best Doctors</h1>
                            <h4>We are always fully focused on helping your
                                child and you </h4>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="bannerRightDiv">
                            <img src="{{asset('img/bannerLeftImg.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="searchDiv">
                    <div class="pillsDiv">
                        <ul class="nav nav-pills">
                            <li><a class="active" data-toggle="pill" href="#home"><img
                                        src="{{asset('img/findDoctor.png')}}" alt="" class="img-fluid"> Find Doctor</a>
                            </li>
                            <li><a data-toggle="pill" href="#menu1"><img src="{{asset('img/bookAppointment.png')}}" alt=""
                                        class="img-fluid"> Book Appointment</a></li>
                        </ul>
                    </div>
                    <div class="tabDiv">
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active show">
                                <form action="">
                                    <div class="findDoctorBox">

                                        <div class="inputDiv">
                                            <input type="text" name="" id="" placeholder="Enter name or speciality ">
                                        </div>
                                        <div class="inputDiv">
                                            <select name="" id="">
                                                <option value="Location">Location</option>
                                            </select>
                                        </div>
                                        <div class="inputDiv">
                                            <select name="" id="">
                                                <option value="Speciality">Speciality</option>
                                            </select>
                                        </div>
                                        <div class="inputDiv">
                                            <select name="" id="">
                                                <option value="Health Insurance">Health Insurance</option>
                                            </select>
                                        </div>
                                        <div class="inputDiv">
                                            <button>Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <h3>Menu 1</h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="topSpecialities">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3 class="commonTitle">Find Doctor By Top Specialities</h3>
                    </div>
                </div>
                <div class="multiSpecialities">
                    <div class="commonBox">
                        <div class="imgBox">
                            <img src="{{asset('img/primaryCare.png')}}" alt="" class="img-fluid">
                        </div>
                        <p>Primary Care</p>
                    </div>
                    <div class="commonBox">
                        <div class="imgBox">
                            <img src="{{asset('img/eyeSpecialist.png')}}" alt="" class="img-fluid">
                        </div>
                        <p>Eye Specialist</p>
                    </div>
                    <div class="commonBox">
                        <div class="imgBox">
                            <img src="{{asset('img/skinSpecialist.png')}}" alt="" class="img-fluid">
                        </div>
                        <p>Skin Specialist</p>
                    </div>
                    <div class="commonBox">
                        <div class="imgBox">
                            <img src="{{asset('img/orthopedic.png')}}" alt="" class="img-fluid">
                        </div>
                        <p>Orthopedic</p>
                    </div>
                    <div class="commonBox">
                        <div class="imgBox">
                            <img src="{{asset('img/dentist.png')}}" alt="" class="img-fluid">
                        </div>
                        <p>Dentist</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="topReatedDoctor">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="mainContentHeader">
                            <h3 class="commonTitle">Top-Rated Doctors</h3>
                            <h2>90% of patients gave these doctors 5 stars</h2>
                            <p>See more highly-recommended doctors</p>
                        </div>
                    </div>
                </div>
                <div class="multiDoctorDiv">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="doctorCard">
                                <img src="{{asset('img/doctor1.png')}}" alt="" class="img-fluid">
                                <div class="cardBody">
                                    <p>John Doe</p>
                                    <span>Highly recommended</span>
                                    <div class="doctorSpecialities">
                                        <p>Orthopaedic Surgery</p>
                                        <p>New York, NY</p>
                                        <p class="rating"><i class="fa fa-star"></i>4.54<span>37 reviews</span></p>
                                    </div>
                                    <div class="doctorDetail">
                                        <p>Very personable and good listener. Makes you feel comfortable and open immediately. Felt well taken care...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="doctorCard">
                                <img src="{{asset('img/doctor2.png')}}" alt="" class="img-fluid">
                                <div class="cardBody">
                                    <p>John Doe</p>
                                    <span>Highly recommended</span>
                                    <div class="doctorSpecialities">
                                        <p>Orthopaedic Surgery</p>
                                        <p>New York, NY</p>
                                        <p class="rating"><i class="fa fa-star"></i>4.54<span>37 reviews</span></p>
                                    </div>
                                    <div class="doctorDetail">
                                        <p>Very personable and good listener. Makes you feel comfortable and open immediately. Felt well taken care...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="doctorCard">
                                <img src="{{asset('img/doctor3.png')}}" alt="" class="img-fluid">
                                <div class="cardBody">
                                    <p>John Doe</p>
                                    <span>Highly recommended</span>
                                    <div class="doctorSpecialities">
                                        <p>Orthopaedic Surgery</p>
                                        <p>New York, NY</p>
                                        <p class="rating"><i class="fa fa-star"></i>4.54<span>37 reviews</span></p>
                                    </div>
                                    <div class="doctorDetail">
                                        <p>Very personable and good listener. Makes you feel comfortable and open immediately. Felt well taken care...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="doctorCard">
                                <img src="{{asset('img/doctor4.png')}}" alt="" class="img-fluid">
                                <div class="cardBody">
                                    <p>John Doe</p>
                                    <span>Highly recommended</span>
                                    <div class="doctorSpecialities">
                                        <p>Orthopaedic Surgery</p>
                                        <p>New York, NY</p>
                                        <p class="rating"><i class="fa fa-star"></i>4.54<span>37 reviews</span></p>
                                    </div>
                                    <div class="doctorDetail">
                                        <p>Very personable and good listener. Makes you feel comfortable and open immediately. Felt well taken care...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="doctorCard">
                                <img src="{{asset('img/doctor5.png')}}" alt="" class="img-fluid">
                                <div class="cardBody">
                                    <p>John Doe</p>
                                    <span>Highly recommended</span>
                                    <div class="doctorSpecialities">
                                        <p>Orthopaedic Surgery</p>
                                        <p>New York, NY</p>
                                        <p class="rating"><i class="fa fa-star"></i>4.54<span>37 reviews</span></p>
                                    </div>
                                    <div class="doctorDetail">
                                        <p>Very personable and good listener. Makes you feel comfortable and open immediately. Felt well taken care...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="doctorCard">
                                <img src="{{asset('img/doctor6.png')}}" alt="" class="img-fluid">
                                <div class="cardBody">
                                    <p>John Doe</p>
                                    <span>Highly recommended</span>
                                    <div class="doctorSpecialities">
                                        <p>Orthopaedic Surgery</p>
                                        <p>New York, NY</p>
                                        <p class="rating"><i class="fa fa-star"></i>4.54<span>37 reviews</span></p>
                                    </div>
                                    <div class="doctorDetail">
                                        <p>Very personable and good listener. Makes you feel comfortable and open immediately. Felt well taken care...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="awardDiv">
            <div class="multiAward">
                <div class="awardBox">
                    <img src="{{asset('img/certiedDoctor.png')}}" alt="" class="img-fluid">
                    <div class="awardDetail">
                        <h5>87</h5>
                        <p>Certified Doctors</p>
                    </div>
                </div>
                <div class="awardBox">
                    <img src="{{asset('img/awardWinning.png')}}" alt="" class="img-fluid">
                    <div class="awardDetail">
                        <h5>25</h5>
                        <p>Award Winning</p>
                    </div>
                </div>
                <div class="awardBox">
                    <img src="{{asset('img/satisfiedPaitent.png')}}" alt="" class="img-fluid">
                    <div class="awardDetail">
                        <h5>16K</h5>
                        <p>Satisfied Patients</p>
                    </div>
                </div>
                <div class="awardBox">
                    <img src="{{asset('img/yearExperience.png')}}" alt="" class="img-fluid">
                    <div class="awardDetail">
                        <h5>6</h5>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="medicalExpert">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <div class="imgDiv">
                            <img src="{{asset('img/medicalExpert.png')}}" alt="" class="img-fluid">
                            <div class="qualityOurQuantity">
                                <img src="{{asset('img/quality.png')}}" alt="" class="img-fluid">
                                <div class="textDiv">
                                    <p>Quality over Quantity</p>
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="medicalRightDiv">
                            <h3>The best service from severe medical experts</h3>
                            <p>The hospital is an integral part of a social and health organization with the function of providing comprehensive (comprehensive) services.</p>
                            <a href="">Top Hospitals</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="patientFeedBack">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3 class="commonTitle">Our Patients Feedback About Us</h3>
                        <p>their impression after using our service</p>
                    </div>
                </div>
                <div class="patientsSlider">
                    <div class="patientsBox">
                        <div class="quoteImg">
                            <img src="{{asset('img/quote-right.png')}}" alt="" class="img-fluid">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  tincidunt et scelerisque etiam. Blandit hendrerit id nec elementum ligula et.</p>
                        <div class="profileDiv">
                            <img src="{{asset('img/doctor1.png')}}" alt="" class="img-fluid">
                            <div class="profileDetail">
                                <h4>David Mark</h4>
                                <span>Patient</span>
                            </div>
                        </div>
                    </div>
                    <div class="patientsBox">
                        <div class="quoteImg">
                            <img src="{{asset('img/quote-right.png')}}" alt="" class="img-fluid">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  tincidunt et scelerisque etiam. Blandit hendrerit id nec elementum ligula et.</p>
                        <div class="profileDiv">
                            <img src="{{asset('img/doctor1.png')}}" alt="" class="img-fluid">
                            <div class="profileDetail">
                                <h4>David Mark</h4>
                                <span>Patient</span>
                            </div>
                        </div>
                    </div>
                    <div class="patientsBox">
                        <div class="quoteImg">
                            <img src="{{asset('img/quote-right.png')}}" alt="" class="img-fluid">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  tincidunt et scelerisque etiam. Blandit hendrerit id nec elementum ligula et.</p>
                        <div class="profileDiv">
                            <img src="{{asset('img/doctor1.png')}}" alt="" class="img-fluid">
                            <div class="profileDetail">
                                <h4>David Mark</h4>
                                <span>Patient</span>
                            </div>
                        </div>
                    </div>
                    <div class="patientsBox">
                        <div class="quoteImg">
                            <img src="{{asset('img/quote-right.png')}}" alt="" class="img-fluid">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  tincidunt et scelerisque etiam. Blandit hendrerit id nec elementum ligula et.</p>
                        <div class="profileDiv">
                            <img src="{{asset('img/doctor1.png')}}" alt="" class="img-fluid">
                            <div class="profileDetail">
                                <h4>David Mark</h4>
                                <span>Patient</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="leatestNew">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3 class="commonTitle">Latest News</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu tincidunt et scelerisque<br> etiam. Blandit hendrerit id nec elementum ligula et.</p>
                    </div>
                </div>
                <div class="multiNews">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="newsDiv">
                                <div class="imgDiv">
                                    <img src="{{asset('img/news1.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="newsContent">
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> January 1, 2022</span>
                                    <h5>High Quality Treatment For Kids.</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
                                    <a href="">Read more <span><i class="fa fa-angle-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="newsDiv">
                                <div class="imgDiv">
                                    <img src="{{asset('img/news2.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="newsContent">
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> January 1, 2022</span>
                                    <h5>High Quality Treatment For Kids.</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
                                    <a href="">Read more <span><i class="fa fa-angle-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="newsDiv">
                                <div class="imgDiv">
                                    <img src="{{asset('img/news3.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="newsContent">
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> January 1, 2022</span>
                                    <h5>High Quality Treatment For Kids.</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
                                    <a href="">Read more <span><i class="fa fa-angle-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-widgets">
                        <img src="{{asset('img/footerLogo.png')}}" alt="" class="img-fluid">
                        <p>Address Here</p>
                        <div class="socialDiv">
                            <ul>
                            <li>
                                    <a href="">
                                        <img src="{{asset('img/youtube.png')}}" alt="" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{asset('img/facebook.png')}}" alt="" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{asset('img/whatsapp.png')}}" alt="" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widgets">
                        <h4>Company Info</h4>
                        <ul>
                            <li>
                                <a href="">About Us</a>
                            </li>
                            <li>
                                <a href="">Career</a>
                            </li>
                            <li>
                                <a href="">Latest News</a>
                            </li>
                            <li>
                                <a href="">Service Info</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widgets">
                        <h4>Use Links</h4>
                        <ul>
                            <li>
                                <a href="">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widgets">
                        <h4>Contact Info.</h4>
                        <ul>
                            <li>
                                <a href="">+626564465455</a>
                            </li>
                            <li>
                                <a href="">info@company.com</a>
                            </li>
                            <li>
                                <a href="">Tel: +5646544654</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @endsection

