
 
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
                                                <option value="">Location</option>
                                                @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="inputDiv">
                                            <select name="" id="">
                                                <option value="">Speciality</option>
                                                 @foreach($speciality as $spe)
                                                 <option value="{{$spe->id}}">{{$spe->name}}</option>
                                                 @endforeach
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
                <div class="multiSpecialities d-flex">
                    @foreach($speciality as $spe)
                    <div class="commonBox">
                        <div class="imgBox">
                            <img src="{{asset($spe->image)}}" alt="" class="img-fluid">
                        </div>
                        <p>{{$spe->name}}</p>
                    </div>
                    @endforeach
                </div>
                <div class="multiSpecialities d-flex">
                    <div class="commonBox">
                        <div class="imgBox">
                            <img src="http://127.0.0.1:8000/uploads/specialty/165355068782326.png" alt="" class="img-fluid">
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
                        @foreach( $doctors as $doc)
                        <div class="col-lg-4">
                            <div class="doctorCard">
                                <img src="{{asset($doc->image)}}" alt="" class="img-fluid img-thumbnail w-25 rounded-circle" >
                                <div class="cardBody">
                                    <p>{{$doc->full_name}}</p>
                                    <span>Highly recommended</span>
                                    <div class="doctorSpecialities">
                                        <p>{{$doc->sepcial->name}}</p>
                                        <p>{{$doc->country->country_name}}, {{$doc->city}}</p>
                                        <p class="rating"><i class="fa fa-star"></i>4.54<span>37 reviews</span></p>
                                    </div>
                                    <div class="doctorDetail">
                                        <p>{{ \Illuminate\Support\Str::limit($doc->description, 120, '...') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                         <!--<div class="col-lg-4">
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
                        </div> -->
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
    </main>
    @endsection

