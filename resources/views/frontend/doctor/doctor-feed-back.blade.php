@extends('layouts.Front.master-front')
@php use App\Utils\HelperFunctions; @endphp
@section('content')
<input type="text" class="d-none" id="latitude" value="{{$doctors_feedback->lat}}">
<input type="text"  class="d-none" id="longitude" value="{{$doctors_feedback->long}}">
<main>
    <div class="commonBanner">
        <div class="backDrop"></div>
        <div class="contentBanner">
            <h4>Search Best Doctors Near You</h4>
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
                                            <img src="{{asset($doctors_feedback->image)}}" alt="" class="img-fluid doctor-img" style="width: 18% !important">
                                            <div class="infoDiv">
                                                <h4>{{$doctors_feedback->full_name}}</h4>
                                                
                                                
                                                <p></p>
                                                <p class="specility">
                                                    <img src="{{asset($doctors_feedback->sepcial->image)}}" alt=""
                                                        class="img-fluid" style="width: 10%;">{{$doctors_feedback->sepcial->name}}</p>
                                                <div class="ratingDiv">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span>({{count($doctors_feedback->drating)}})</span>
                                                </div>
                                                <p class="location"><img src="{{asset('img/location-marker.png')}}"
                                                        alt="" class="img-fluid">{{$doctors_feedback->country->country_name}}, {{$doctors_feedback->city}}</p>
                                            </div>
                                        </div>
                                        <div class="leatestRating">
                                            <h4>Latest Rating:</h4>
                                            <p>
                                                 @if(count($doctors_feedback->drating)>0)
                                                    @php $nrecord=count($doctors_feedback->drating);@endphp
                                                    {{$doctors_feedback->drating[0]->review}}
                                                  @else
                                                    No Review
                                                  @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="feedBack">
                                            <ul class="feedBackList">
                                                <li><img src="{{asset('img/like.png')}}" alt="" class="img-fluid"> 98%
                                                </li>
                                                <li><img src="{{asset('img/feddBack.png')}}" alt="" class="img-fluid">
                                                   {{count($doctors_feedback->drating)}} Feedback</li>
                                                <li><img src="{{asset('img/location-pin.png')}}" alt=""
                                                        class="img-fluid"> {{$doctors_feedback->country->country_name}}, {{$doctors_feedback->city}}</li>
                                                <li>
                                                   <span>Distance:</span> <strong id="distance"></strong><span> KM</span>
                                                </li>
                                                <li><span>Duration:</span><strong id="duration"></strong><span> Minutes</span></li>
                                            </ul>
                                            <div id="route_map" style="height: 16rem;border: 2px solid #bf9c60; border-radius: 14px;"></div>
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
                                        <p>{{$doctors_feedback->description}}</p>
                                        <h3>Education</h3>
                                        <div class="commonList">
                                            <ul>
                                                @if($doctor_educations)
                                                @foreach($doctor_educations as $doctor_education)
                                                <li>
                                                    <p>{{$doctor_education->college_name}}</p>
                                                    <span>{{$doctor_education->degree}}</span>
                                                    <span>{{date('Y', strtotime($doctor_education->from_year))}} - {{date('Y', strtotime($doctor_education->to_year))}}</span>
                                                </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                            
                                        </div>
                                        <h3>Work & Experience</h3>
                                        <div class="commonList workExperience">
                                            <ul> 
                                                @if($doctor_experiences)
                                                @foreach($doctor_experiences as $doctor_experience)
                                                <li>
                                                    <p>{{$doctor_experience->company_name}}</p>
                                                    <span>{{$doctor_experience->designation}}</span>
                                                    <span>{{date('Y', strtotime($doctor_experience->from_year))}} - {{date('Y', strtotime($doctor_experience->to_year))}}</span>
                                                </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                        <h3>Services:</h3>
                                        <div class="common-multi-li-div">
                                            <ul>
                                                @if($doctors_feedback->services)
                                                @foreach(explode(',', $doctors_feedback->services) as $info) 
                                                    <li>{{$info}}</li>
                                                @endforeach 
                                                @endif
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
                                    <div id="reviews" class="tab-pane fade" style=" display: block;height: 0;overflow: hidden;">
                                      <form method="post" action="{{route('patient.feedback-save')}}">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h2><span><i class="fa fa-star"></i></span>{{$doctors_feedback->full_name}}</h2>
                                            </div>
                                           
                                                @csrf
                                                <input type="hidden" name="doctor_detail_id" value="{{$doctors_feedback->id}}">
                                                 <input type="hidden" name="user_id" value="{{Auth::user()->id ?? ''}}">
                                                <div class="col-lg-4">
                                                    <div class="rate-doctor-div">
                                                        
                                                        <ul>
                                                            <li>
                                                                <span>Bedside Manner</span>
                                                                <span>
                                                                    <div class="rating">
                                                                        <input type="radio" id="field1_star5" name="bedside_manner_rating" value="5" /><label class = "full" for="field1_star5"></label>
                                                                        
                                                                        <input type="radio" id="field1_star4" name="bedside_manner_rating" value="4" /><label class = "full" for="field1_star4"></label>
                                                                        
                                                                        <input type="radio" id="field1_star3" name="bedside_manner_rating" value="3" /><label class = "full" for="field1_star3"></label>
                                                                        
                                                                        <input type="radio" id="field1_star2" name="bedside_manner_rating" value="2" /><label class = "full" for="field1_star2"></label>
                                                                        
                                                                        <input type="radio" id="field1_star1" name="bedside_manner_rating" value="1" /><label class = "full" for="field1_star1"></label>
                                                                        
                                                                    </div>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span>Knowledge</span>
                                                                <span>
                                                                    <div class="rating">
                                                                        <input type="radio" id="field1_star5" name="knowledge_rating" value="5" /><label class = "full" for="field1_star5"></label>
                                                                        
                                                                        <input type="radio" id="field1_star4" name="knowledge_rating" value="4" /><label class = "full" for="field1_star4"></label>
                                                                        
                                                                        <input type="radio" id="field1_star3" name="knowledge_rating" value="3" /><label class = "full" for="field1_star3"></label>
                                                                        
                                                                        <input type="radio" id="field1_star2" name="knowledge_rating" value="2" /><label class = "full" for="field1_star2"></label>
                                                                        
                                                                        <input type="radio" id="field1_star1" name="knowledge_rating" value="1" /><label class = "full" for="field1_star1"></label>
                                                                        
                                                                    </div>
                                                                    
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span>Punctuality</span>
                                                                <span>
                                                                    <div class="rating">
                                                                        <input type="radio" id="field1_star5" name="punctuality_rating" value="5" /><label class = "full" for="field1_star5"></label>
                                                                        
                                                                        <input type="radio" id="field1_star4" name="punctuality_rating" value="4" /><label class = "full" for="field1_star4"></label>
                                                                        
                                                                        <input type="radio" id="field1_star3" name="punctuality_rating" value="3" /><label class = "full" for="field1_star3"></label>
                                                                        
                                                                        <input type="radio" id="field1_star2" name="punctuality_rating" value="2" /><label class = "full" for="field1_star2"></label>
                                                                        
                                                                        <input type="radio" id="field1_star1" name="punctuality_rating" value="1" /><label class = "full" for="field1_star1"></label>
                                                                        
                                                                    </div>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span>Scheduling</span>
                                                                <span>
                                                                    <div class="rating">
                                                                        <input type="radio" id="field1_star5" name="scheduling_rating" value="5" /><label class = "full" for="field1_star5"></label>
                                                                        
                                                                        <input type="radio" id="field1_star4" name="scheduling_rating" value="4" /><label class = "full" for="field1_star4"></label>
                                                                        
                                                                        <input type="radio" id="field1_star3" name="scheduling_rating" value="3" /><label class = "full" for="field1_star3"></label>
                                                                        
                                                                        <input type="radio" id="field1_star2" name="scheduling_rating" value="2" /><label class = "full" for="field1_star2"></label>
                                                                        
                                                                        <input type="radio" id="field1_star1" name="scheduling_rating" value="1" /><label class = "full" for="field1_star1"></label>
                                                                        
                                                                    </div>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span>Treatment</span>
                                                                <span>
                                                                    <div class="rating">
                                                                        <input type="radio" id="field1_star5" name="treatment_rating" value="5" /><label class = "full" for="field1_star5"></label>
                                                                        
                                                                        <input type="radio" id="field1_star4" name="treatment_rating" value="4" /><label class = "full" for="field1_star4"></label>
                                                                        
                                                                        <input type="radio" id="field1_star3" name="treatment_rating" value="3" /><label class = "full" for="field1_star3"></label>
                                                                        
                                                                        <input type="radio" id="field1_star2" name="treatment_rating" value="2" /><label class = "full" for="field1_star2"></label>
                                                                        
                                                                        <input type="radio" id="field1_star1" name="treatment_rating" value="1" /><label class = "full" for="field1_star1"></label>
                                                                        
                                                                    </div>
                                                                    
                                                                    <!-- <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i> -->
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="comment-box">
                                                        <div class="inputDiv">
                                                            <label for="">Comments</label>
                                                            <textarea name="review" id="" cols="10" rows="5" placeholder="Please give your reviews about {{$doctors_feedback->full_name}}" required></textarea>
                                                        </div>
                                                        <button class="commonButton">Add Review</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <hr>
                                        <div class="top-review">
                                            <h3>Some Top Reviews About Dr.{{$doctors_feedback->full_name}}</h3>
                                            
                                            <div class="top-reveiw-slider">
                                                @foreach($doctors_feedback->drating as $drat)
                                                <div class="reviewBox">
                                                    <p>{{$drat->review}}</p>
                                                    <div class="infoDiv">
                                                        @if($drat->user->image != null)
                                                        <img src="{{asset($drat->user->image)}}" alt="" class="img-fluid" style="width: 50px;height: 50px;border-radius: 100%;">
                                                        @else
                                                        <img src="{{asset('img/male_icon.jpg')}}" alt="" class="img-fluid" style="width: 50px;height: 50px;border-radius: 100%;">
                                                        @endif
                                                        <div class="contentDiv">
                                                            <h4>{{$drat->user->name}}</h4>
                                                            <p>Patient</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <!-- <div class="reviewBox">
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
                                                </div> -->
                                                 <!-- <div class="reviewBox">
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
                                                </div>  -->
                                            </div>
                                        </div>
                                        <div class="patientReview">
                                            <h3>Patients Reviews ({{count($doctors_feedback->drating)}})</h3>
                                            <hr>
                                            <div class="multi-review">
                                                 @foreach($doctors_feedback->drating as $drat)
                                                <div class="patientBox">
                                                    @if($drat->user->image != null)
                                                    <img src="{{asset($drat->user->image)}}" alt="" class="img-fluid" style="width: 50px;height: 50px;border-radius: 100%;">
                                                    @else
                                                    <img src="{{asset('img/male_icon.jpg')}}" alt="" class="img-fluid" style="width: 50px;height: 50px;border-radius: 100%;">
                                                    @endif
                                                    <div class="contentDiv w-100">
                                                        <h3>{{$drat->user->name}}</h3>
                                                        <span>Reviewed {{$drat->created_at->diffForHumans()}}</span>
                                                        <p class="recommended-text"><img src="{{asset('img/green-like.png')}}" alt="" class="img-fluid"> I recommend the doctor</p>
                                                        <ul>
                                                            <li>
                                                                <p>Bedside Manner</p>
                                                                <p><i class="fa fa-star"></i> {{$drat->bedside_manner_rating}}</p>
                                                            </li>
                                                            <li>
                                                                <p>Knowledge</p>
                                                                <p><i class="fa fa-star"></i> {{$drat->knowledge_rating}}</p>
                                                            </li>
                                                            <li>
                                                                <p>Punctuality</p>
                                                                <p><i class="fa fa-star"></i> {{$drat->punctuality_rating}}</p>
                                                            </li>
                                                            <li>
                                                                <p>Scheduling</p>
                                                                <p><i class="fa fa-star"></i> {{$drat->scheduling_rating}}</p>
                                                            </li>
                                                            <li>
                                                                <p>Treatment</p>
                                                                <p><i class="fa fa-star"></i> {{$drat->treatment_rating}}</p>
                                                            </li>
                                                        </ul>
                                                        <p>{{$drat->review}}.</p>
                                                    </div>
                                                    <div class="overall">
                                                        @php 
                                                        if($drat->overall_rating)
                                                        {
                                                            $overallrat=explode('.', $drat->overall_rating);

                                                        }
                                                        @endphp
                                                        <span>
                                                                @php
                                                                for($i=0;$i <$overallrat[0];$i++)
                                                                {
                                                                @endphp
                                                                <i class="fa fa-star"></i>
                                                                @php }
                                                                @endphp
                                                                @if($overallrat[0]=='4')
                                                                <i class="fa fa-star-o"></i>
                                                                @elseif($overallrat[0]=='3')
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                @elseif($overallrat[0]=='2')
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                @elseif($overallrat[0]=='1')
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                @else
                                                                @endif
                                                        </span>

                                                        <p>Overall ({{$overallrat[0] ?? ''}})</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                @endforeach
                                                 <!-- <div class="patientBox">
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
                                                <hr> -->
                                                <!--<div class="patientBox">
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
                                                <hr> -->
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
@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeHpSgm-hy0_G_NC6PynKEYgASntQIi1Y&libraries=places&callback=initMap" async defer></script>
<script type="text/javascript">
  $("label").click(function(){
  // $(this).parent().find("label").css({"background-color": "#D8D8D8"});
  // $(this).css({"background-color": "#7ED321"});
  // $(this).nextAll().css({"background-color": "#7ED321"});
  $(this).prev().attr('checked','checked');
  $(this).parent().find("label").css({"color": "#D8D8D8"});
  $(this).css({"color": "#7ED321"});
  $(this).nextAll().css({"color": "#7ED321"});
});
</script>
<script>

    

 // Find the Shortest Path From Google map API
 function findShortestRoute() {
    console.log(localStorage.getItem("longitude"));
    var d_lat = $('#latitude').val();
    var d_long = $('#longitude').val();
    let origin = new google.maps.LatLng(localStorage.getItem("latitude"), localStorage.getItem("longitude"));
    let destination = new google.maps.LatLng(d_lat, d_long);
    let directionsService = new google.maps.DirectionsService();
    var request = {
        // origin: 'Berliner Dom, Am Lustgarten, Berlin, Germany',
        // destination: 'Barclaycard Arena, Sylvesterallee, Hamburg, Germany',
        origin: origin,
        destination: destination,
        travelMode: 'DRIVING',
        provideRouteAlternatives : true,
        avoidHighways: false,
        avoidTolls: false,
    };
    directionsService.route(request, function(response, status) {
        if (status === 'OK') {
            let route_options = [];
            for (var i = 0; i < response.routes.length; i++)
            {
                let route = response.routes[i];
                let distance = 0;
                // Total the legs to find the overall journey distance for each route option
                for (var j = 0; j < route.legs.length; j++)
                {
                    distance += route.legs[j].distance.value; // metres
                }
                route_options.push({
                    'route_id': i,
                    'distance': distance
                });
            }
            route_options.sort(function(a, b) {
                return parseInt(a.distance) - parseInt(b.distance);
            });
            let duration = response.routes[0].legs[0].duration.value;
            let shortest_distance = (route_options[0]['distance'] * 0.001); // convert metres to kilometres
            console.log('shortest_distance');
            console.log(route_options[0]['distance']);
            // $('.lat_pck').val(latitude_pick);
            // $('.long_pck').val(longitude_pick);
            // $('.lat_drop').val(latitude_drop);
            // $('.long_drop').val(longitude_drop);
            $('#distance').text(parseInt(route_options[0]['distance']/1000));
            $('#duration').text(parseInt(duration/60));
        }
    });
}




var d_lat = $('#latitude').val();
var d_long = $('#longitude').val();
let pick_latitude = localStorage.getItem("latitude");
let pick_longitude = localStorage.getItem("longitude");
let drop_latitude =d_lat;
let drop_longitude = d_long;

function initMap() {
    let pickLatLong = {lat: pick_latitude, lng: pick_longitude};
    let dropLatLong = {lat: drop_latitude, lng: drop_longitude};
    let directionsService = new google.maps.DirectionsService();
    var directionsRenderer = new google.maps.DirectionsRenderer();
        var map = new google.maps.Map(
            document.getElementById('route_map'),
            {zoom: 12, center: pickLatLong});
        var pickMarker = new google.maps.Marker({position: pickLatLong, map: map});
        var DropMarker = new google.maps.Marker({position: dropLatLong, map: map});

        let originLatLong = new google.maps.LatLng(pick_latitude, pick_longitude);
        let destinationLatLong = new google.maps.LatLng(drop_latitude, drop_longitude);
        findShortestRoute();
      calculateAndDisplayRoute(directionsService , directionsRenderer , originLatLong , destinationLatLong)
     directionsRenderer.setMap(map);
}


function calculateAndDisplayRoute(directionsService, directionsRenderer , pickLatLong ,dropLatLong ) {

    directionsService.route(
        {
            // origin: 'Berlin–Tegel internasjonale lufthavn (TXL), Saatwinkler Damm, Berlin, Germany',
            origin: pickLatLong,
            destination: dropLatLong,
            // destination: 'Berliner Dom, Am Lustgarten, Berlin, Germany',
            travelMode: 'DRIVING'
        },
        function(response, status) {
            if (status === 'OK') {
                directionsRenderer.setDirections(response);
                console.log(response)
            } else {
                console.log('Directions request failed due to ' + status);
            }
        });
}

</script>
@endsection
