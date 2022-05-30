@extends('layouts.Front.master-front')
@section('content')
<main>
    <div class="commonBanner">
        <div class="backDrop"></div>
        <div class="contentBanner">
            <h4>Search Best Doctors Near You</h4>
            <p><span><i class="fa fa-home" aria-hidden="true"></i></span> Home / Doctors / John Doe</p>
        </div>
    </div>
    <div class="mainSearch">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <p class="numberOfDoctor"><b>1234</b> matches found for : Dentist In New York</p>
                </div>
                <div class="col-lg-6">
                    <div class="sortingDiv">
                        <span>Sort By :</span>
                        <select name="" id="">
                            <option value="Rating">Rating</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="search-filter">
                        <h4><img src="{{asset('img/filter.png')}}" alt="" class="img-fluid"> Search Filter</h4>
                        <div class="formDiv">
                            <form action="">
                                <div class="inputDiv">
                                    <label for="">Name:</label>
                                    <input type="text" placeholder="Enter name of doctor">
                                </div>
                                <div class="inputDiv">
                                    <label for="">Specialty:</label>
                                    <select name="" id="">
                                        <option value="Select Specialty">Select Specialty</option>
                                    </select>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Location:</label>
                                    <select name="" id="">
                                        <option value="Select Specialty">Select Specialty</option>
                                    </select>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Health Insurance:</label>
                                    <select name="" id="">
                                        <option value="Select Specialty">Select Specialty</option>
                                    </select>
                                </div>
                                <div class="multi-gender">
                                    <p>Gender</p>
                                    <input type="checkbox" name="" id=""> <label for="">All</label><br>
                                    <input type="checkbox" name="" id=""> <label for="">Male Doctor</label><br>
                                    <input type="checkbox" name="" id=""> <label for="">Female Doctor</label>
                                </div>
                                <button class="commonButton">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                  <div class="search-result">
                  <div class="doctorCard">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="doctorInfo">
                                    <img src="{{asset('img/doctor.png')}}" alt="" class="img-fluid doctor-img">
                                    <div class="infoDiv">
                                        <h4>John Doe</h4>
                                        <p>MBBS, MS - General Surgery, MCh - Pediatric optometry</p>
                                        <p class="specility"><img src="{{asset('img/teeth.png')}}" alt="" class="img-fluid"> Dentist</p>
                                        <div class="ratingDiv">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(37)</span>
                                        </div>
                                        <p class="location"><img src="{{asset('img/location-marker.png')}}" alt="" class="img-fluid"> New York, NY</p>
                                    </div>
                                </div>
                                <div class="leatestRating">
                                    <h4>Latest Rating:</h4>
                                    <p>Very personable and good listener. Makes you feel comfortable and open immediately. Felt well taken care...</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="feedBack">
                                    <ul class="feedBackList">
                                        <li><img src="{{asset('img/like.png')}}" alt="" class="img-fluid"> 98%</li>
                                        <li><img src="{{asset('img/feddBack.png')}}" alt="" class="img-fluid"> 17 Feedback</li>
                                        <li><img src="{{asset('img/location-pin.png')}}" alt="" class="img-fluid"> New York, NY</li>
                                    </ul>
                                    <button class="commonButton">Give Feedback</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="doctorCard">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="doctorInfo">
                                    <img src="{{asset('img/doctor.png')}}" alt="" class="img-fluid doctor-img">
                                    <div class="infoDiv">
                                        <h4>John Doe</h4>
                                        <p>MBBS, MS - General Surgery, MCh - Pediatric optometry</p>
                                        <p class="specility"><img src="{{asset('img/teeth.png')}}" alt="" class="img-fluid"> Dentist</p>
                                        <div class="ratingDiv">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(37)</span>
                                        </div>
                                        <p class="location"><img src="{{asset('img/location-marker.png')}}" alt="" class="img-fluid"> New York, NY</p>
                                    </div>
                                </div>
                                <div class="leatestRating">
                                    <h4>Latest Rating:</h4>
                                    <p>Very personable and good listener. Makes you feel comfortable and open immediately. Felt well taken care...</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="feedBack">
                                    <ul class="feedBackList">
                                        <li><img src="{{asset('img/like.png')}}" alt="" class="img-fluid"> 98%</li>
                                        <li><img src="{{asset('img/feddBack.png')}}" alt="" class="img-fluid"> 17 Feedback</li>
                                        <li><img src="{{asset('img/location-pin.png')}}" alt="" class="img-fluid"> New York, NY</li>
                                    </ul>
                                    <button class="commonButton">Give Feedback</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="doctorCard">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="doctorInfo">
                                    <img src="{{asset('img/doctor.png')}}" alt="" class="img-fluid doctor-img">
                                    <div class="infoDiv">
                                        <h4>John Doe</h4>
                                        <p>MBBS, MS - General Surgery, MCh - Pediatric optometry</p>
                                        <p class="specility"><img src="{{asset('img/teeth.png')}}" alt="" class="img-fluid"> Dentist</p>
                                        <div class="ratingDiv">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(37)</span>
                                        </div>
                                        <p class="location"><img src="{{asset('img/location-marker.png')}}" alt="" class="img-fluid"> New York, NY</p>
                                    </div>
                                </div>
                                <div class="leatestRating">
                                    <h4>Latest Rating:</h4>
                                    <p>Very personable and good listener. Makes you feel comfortable and open immediately. Felt well taken care...</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="feedBack">
                                    <ul class="feedBackList">
                                        <li><img src="{{asset('img/like.png')}}" alt="" class="img-fluid"> 98%</li>
                                        <li><img src="{{asset('img/feddBack.png')}}" alt="" class="img-fluid"> 17 Feedback</li>
                                        <li><img src="{{asset('img/location-pin.png')}}" alt="" class="img-fluid"> New York, NY</li>
                                    </ul>
                                    <button class="commonButton">Give Feedback</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="doctorCard">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="doctorInfo">
                                    <img src="{{asset('img/doctor.png')}}" alt="" class="img-fluid doctor-img">
                                    <div class="infoDiv">
                                        <h4>John Doe</h4>
                                        <p>MBBS, MS - General Surgery, MCh - Pediatric optometry</p>
                                        <p class="specility"><img src="{{asset('img/teeth.png')}}" alt="" class="img-fluid"> Dentist</p>
                                        <div class="ratingDiv">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(37)</span>
                                        </div>
                                        <p class="location"><img src="{{asset('img/location-marker.png')}}" alt="" class="img-fluid"> New York, NY</p>
                                    </div>
                                </div>
                                <div class="leatestRating">
                                    <h4>Latest Rating:</h4>
                                    <p>Very personable and good listener. Makes you feel comfortable and open immediately. Felt well taken care...</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="feedBack">
                                    <ul class="feedBackList">
                                        <li><img src="{{asset('img/like.png')}}" alt="" class="img-fluid"> 98%</li>
                                        <li><img src="{{asset('img/feddBack.png')}}" alt="" class="img-fluid"> 17 Feedback</li>
                                        <li><img src="{{asset('img/location-pin.png')}}" alt="" class="img-fluid"> New York, NY</li>
                                    </ul>
                                    <button class="commonButton">Give Feedback</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="doctorCard">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="doctorInfo">
                                    <img src="{{asset('img/doctor.png')}}" alt="" class="img-fluid doctor-img">
                                    <div class="infoDiv">
                                        <h4>John Doe</h4>
                                        <p>MBBS, MS - General Surgery, MCh - Pediatric optometry</p>
                                        <p class="specility"><img src="{{asset('img/teeth.png')}}" alt="" class="img-fluid"> Dentist</p>
                                        <div class="ratingDiv">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(37)</span>
                                        </div>
                                        <p class="location"><img src="{{asset('img/location-marker.png')}}" alt="" class="img-fluid"> New York, NY</p>
                                    </div>
                                </div>
                                <div class="leatestRating">
                                    <h4>Latest Rating:</h4>
                                    <p>Very personable and good listener. Makes you feel comfortable and open immediately. Felt well taken care...</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="feedBack">
                                    <ul class="feedBackList">
                                        <li><img src="{{asset('img/like.png')}}" alt="" class="img-fluid"> 98%</li>
                                        <li><img src="{{asset('img/feddBack.png')}}" alt="" class="img-fluid"> 17 Feedback</li>
                                        <li><img src="{{asset('img/location-pin.png')}}" alt="" class="img-fluid"> New York, NY</li>
                                    </ul>
                                    <button class="commonButton">Give Feedback</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="doctorCard">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="doctorInfo">
                                    <img src="{{asset('img/doctor.png')}}" alt="" class="img-fluid doctor-img">
                                    <div class="infoDiv">
                                        <h4>John Doe</h4>
                                        <p>MBBS, MS - General Surgery, MCh - Pediatric optometry</p>
                                        <p class="specility"><img src="{{asset('img/teeth.png')}}" alt="" class="img-fluid"> Dentist</p>
                                        <div class="ratingDiv">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(37)</span>
                                        </div>
                                        <p class="location"><img src="{{asset('img/location-marker.png')}}" alt="" class="img-fluid"> New York, NY</p>
                                    </div>
                                </div>
                                <div class="leatestRating">
                                    <h4>Latest Rating:</h4>
                                    <p>Very personable and good listener. Makes you feel comfortable and open immediately. Felt well taken care...</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="feedBack">
                                    <ul class="feedBackList">
                                        <li><img src="{{asset('img/like.png')}}" alt="" class="img-fluid"> 98%</li>
                                        <li><img src="{{asset('img/feddBack.png')}}" alt="" class="img-fluid"> 17 Feedback</li>
                                        <li><img src="{{asset('img/location-pin.png')}}" alt="" class="img-fluid"> New York, NY</li>
                                    </ul>
                                    <button class="commonButton">Give Feedback</button>
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