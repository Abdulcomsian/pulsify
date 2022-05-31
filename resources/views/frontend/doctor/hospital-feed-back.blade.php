@extends('layouts.Front.master-front')
@section('content')
<main>
    <div class="commonBanner">
        <div class="backDrop"></div>
        <div class="contentBanner">
            <h4>Search Best Hospital Near You</h4>
            <p><span><i class="fa fa-home" aria-hidden="true"></i></span> Home / Doctors / John Doe</p>
        </div>
    </div>
    <div class="mainSearch">
        <div class="doctor-feedBack">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="search-result">
                            <div class="doctorCard">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="doctorInfo">
                                            <img src="{{asset('img/hospital.png')}}" alt="" class="img-fluid doctor-img">
                                            <div class="infoDiv">
                                                <h4>Medical Hospital</h4>
                                                <div class="ratingDiv">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span>(37)</span>
                                                </div>
                                                <p class="location"><img src="{{asset('img/location-marker.png')}}"
                                                        alt="" class="img-fluid"> New York, NY</p>
                                            </div>
                                        </div>
                                        <div class="leatestRating">
                                            <h4>Latest Rating:</h4>
                                            <p>Very personable and good listener. Makes you feel comfortable and open
                                                immediately. Felt well taken care...</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="feedBack">
                                            <ul class="feedBackList">
                                                <li><img src="{{asset('img/like.png')}}" alt="" class="img-fluid"> 98%
                                                </li>
                                                <li><img src="{{asset('img/feddBack.png')}}" alt="" class="img-fluid">
                                                    17 Feedback</li>
                                                <li><img src="{{asset('img/location-pin.png')}}" alt=""
                                                        class="img-fluid"> New York, NY</li>
                                            </ul>
                                            <button class="commonButton">Give Feedback</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="reviews-overview-div">
                            <div class="pills-div">
                                <ul class="nav nav-pills">
                                    <li class="active"><a data-toggle="pill" href="#overview">Overview</a></li>
                                    <li><a data-toggle="pill" href="#reviews">Reviews</a></li>
                                </ul>
                            </div>
                            <div class="tab-div">
                                <div class="tab-content">
                                    <div id="overview" class="tab-pane fade in active show">
                                        <h3>About Me</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <h3>Education</h3>
                                        <div class="commonList">
                                            <ul>
                                                <li>
                                                    <p>American Dental Medical University</p>
                                                    <span>BDS</span>
                                                    <span>1998 - 2003</span>
                                                </li>
                                                <li>
                                                    <p>American Dental Medical University</p>
                                                    <span>MDS</span>
                                                    <span>2003 - 2005</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3>Work & Experience</h3>
                                        <div class="commonList workExperience">
                                            <ul> 
                                                <li>
                                                    <p>Glowing Smiles Family Dental Clinic</p>
                                                    <span>2010 - Present (5 years)</span>
                                                </li>
                                                <li>
                                                    <p>Comfort Care Dental Clinic</p>
                                                    <span>2007 - 2010 (3 years)</span>
                                                </li>
                                                <li>
                                                    <p>Dream Smile Dental Practice</p>
                                                    <span>2005 - 2007 (2 years)</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3>Services:</h3>
                                        <div class="common-multi-li-div">
                                            <ul>
                                                <li>Ultherapy</li>
                                                <li>Q Switch Laser</li>
                                                <li>Carbon Facial</li>
                                                <li>Laser Treatment</li>
                                                <li>Burn Surgery</li>
                                                <li>Removal of Moles & Warts</li>
                                                <li>Double Chin Treatment</li>
                                            </ul>
                                        </div>
                                        <h3>Specialization:</h3>
                                        <div class="common-multi-li-div">
                                            <ul>
                                                <li>Dental Care</li>
                                                <li>Ultherapy</li>
                                                <li>Periodontist</li>
                                                <li>Carbon Facial</li>
                                                <li>Laser Treatment</li>
                                                <li>Orthodontist</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="reviews" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h2><span><i class="fa fa-star"></i></span> Rate Medical Hospital</h2>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="rate-doctor-div">
                                                    
                                                    <ul>
                                                        <li>
                                                            <span>Overall</span>
                                                            <span>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>Cleanliness</span>
                                                            <span>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>Medical Staff</span>
                                                            <span>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>Reciption</span>
                                                            <span>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>Helpfulness</span>
                                                            <span>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>Communication</span>
                                                            <span>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="col-lg-8">
                                                <div class="comment-box">
                                                    <div class="inputDiv">
                                                        <label for="">Comments</label>
                                                        <textarea name="" id="" cols="10" rows="5" placeholder="Please give your reviews about Dr. John Doe"></textarea>
                                                    </div>
                                                    <button class="commonButton">Add Review</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="top-review">
                                            <h3>Some Top Reviews About Medical Hospital</h3>
                                            <div class="top-reveiw-slider">
                                                <div class="reviewBox">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  tincidunt et scelerisque etiam. Blandit hendrerit id nec elementum ligula et.</p>
                                                    <div class="infoDiv">
                                                        <img src="{{asset('img/reviewClient1.png')}}" alt="" class="img-fluid">
                                                        <div class="contentDiv">
                                                            <h4>David Mark</h4>
                                                            <p>Patient</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reviewBox">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  tincidunt et scelerisque etiam. Blandit hendrerit id nec elementum ligula et.</p>
                                                    <div class="infoDiv">
                                                        <img src="{{asset('img/reviewClient1.png')}}" alt="" class="img-fluid">
                                                        <div class="contentDiv">
                                                            <h4>David Mark</h4>
                                                            <p>Patient</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reviewBox">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  tincidunt et scelerisque etiam. Blandit hendrerit id nec elementum ligula et.</p>
                                                    <div class="infoDiv">
                                                        <img src="{{asset('img/reviewClient1.png')}}" alt="" class="img-fluid">
                                                        <div class="contentDiv">
                                                            <h4>David Mark</h4>
                                                            <p>Patient</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reviewBox">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  tincidunt et scelerisque etiam. Blandit hendrerit id nec elementum ligula et.</p>
                                                    <div class="infoDiv">
                                                        <img src="{{asset('img/reviewClient1.png')}}" alt="" class="img-fluid">
                                                        <div class="contentDiv">
                                                            <h4>David Mark</h4>
                                                            <p>Patient</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reviewBox">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  tincidunt et scelerisque etiam. Blandit hendrerit id nec elementum ligula et.</p>
                                                    <div class="infoDiv">
                                                        <img src="{{asset('img/reviewClient1.png')}}" alt="" class="img-fluid">
                                                        <div class="contentDiv">
                                                            <h4>David Mark</h4>
                                                            <p>Patient</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reviewBox">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  tincidunt et scelerisque etiam. Blandit hendrerit id nec elementum ligula et.</p>
                                                    <div class="infoDiv">
                                                        <img src="{{asset('img/reviewClient1.png')}}" alt="" class="img-fluid">
                                                        <div class="contentDiv">
                                                            <h4>David Mark</h4>
                                                            <p>Patient</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="patientReview">
                                            <h3>Patients Reviews (123)</h3>
                                            <hr>
                                            <div class="multi-review">
                                                <div class="patientBox">
                                                    <img src="{{asset('img/reviewClient1.png')}}" alt="" class="img-fluid">
                                                    <div class="contentDiv">
                                                        <h3>John Doe</h3>
                                                        <span>Reviewed 2 Days Ago</span>
                                                        <p class="recommended-text"><img src="{{asset('img/green-like.png')}}" alt="" class="img-fluid"> I recommend the doctor</p>
                                                        <ul>
                                                            <li>
                                                                <p>Cleanliness</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Medical Staff</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Reciption</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Helpfulness</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Communication</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                        </ul>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus.</p>
                                                    </div>
                                                    <div class="overall">
                                                        <span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        <p>Overall (4.5)</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="patientBox">
                                                    <img src="{{asset('img/reviewClient1.png')}}" alt="" class="img-fluid">
                                                    <div class="contentDiv">
                                                        <h3>John Doe</h3>
                                                        <span>Reviewed 2 Days Ago</span>
                                                        <p class="recommended-text"><img src="{{asset('img/green-like.png')}}" alt="" class="img-fluid"> I recommend the doctor</p>
                                                        <ul>
                                                            <li>
                                                                <p>Cleanliness</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Medical Staff</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Reciption</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Helpfulness</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Communication</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                        </ul>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus.</p>
                                                    </div>
                                                    <div class="overall">
                                                        <span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        <p>Overall (4.5)</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="patientBox">
                                                    <img src="{{asset('img/reviewClient1.png')}}" alt="" class="img-fluid">
                                                    <div class="contentDiv">
                                                        <h3>John Doe</h3>
                                                        <span>Reviewed 2 Days Ago</span>
                                                        <p class="recommended-text"><img src="{{asset('img/green-like.png')}}" alt="" class="img-fluid"> I recommend the doctor</p>
                                                        <ul>
                                                            <li>
                                                                <p>Cleanliness</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Medical Staff</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Reciption</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Helpfulness</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Communication</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                        </ul>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus.</p>
                                                    </div>
                                                    <div class="overall">
                                                        <span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        <p>Overall (4.5)</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="patientBox">
                                                    <img src="{{asset('img/reviewClient1.png')}}" alt="" class="img-fluid">
                                                    <div class="contentDiv">
                                                        <h3>John Doe</h3>
                                                        <span>Reviewed 2 Days Ago</span>
                                                        <p class="recommended-text"><img src="{{asset('img/green-like.png')}}" alt="" class="img-fluid"> I recommend the doctor</p>
                                                        <ul>
                                                            <li>
                                                                <p>Cleanliness</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Medical Staff</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Reciption</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Helpfulness</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                            <li>
                                                                <p>Communication</p>
                                                                <p><i class="fa fa-star"></i> 4.5</p>
                                                            </li>
                                                        </ul>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Curabitur non nulla sit amet nisl tempus.</p>
                                                    </div>
                                                    <div class="overall">
                                                        <span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        <p>Overall (4.5)</p>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
