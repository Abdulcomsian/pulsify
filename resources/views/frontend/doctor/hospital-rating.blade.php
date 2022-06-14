@extends('layouts.Front.master-front')
@section('content')
<main>
    <div class="commonBanner">
        <div class="backDrop"></div>
        <div class="contentBanner">
            <h4>Search Best Doctors Near You</h4>
            <p><span><i class="fa fa-home" aria-hidden="true"></i></span> Home / Doctors</p>
        </div>
    </div>
    <div class="mainSearch">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    {{-- <p class="numberOfDoctor"><b></b> matches found for :   In</p> --}}
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
                <div class="col-lg-12">
                  <div class="search-result">
                @foreach($tophospitals as $hospital)
                  <div class="doctorCard">
                        <div class="row">
                           
                            <div class="col-lg-9">
                                <div class="doctorInfo">
                                    <img src="{{asset($hospital->image)}}" alt="" class="img-fluid doctor-img" style="width: 18% !important">
                                    <div class="infoDiv">
                                        <h4>{{$hospital->name}}</h4>
                                        <p>{{$hospital->title ?? ''}}</p>
                                        <p class="specility"><img src="{{asset('img/teeth.png')}}" alt="" class="img-fluid" > {{$hospital->sepcial->name ?? ''}}</p>
                                        <div class="ratingDiv">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>({{$hospital->drating}})</span>
                                        </div>
                                        <p class="location"><img src="{{asset('img/location-marker.png')}}" alt="" class="img-fluid">{{$hospital->country->country_name}}</p>
                                    </div>
                                </div>
                                <div class="leatestRating">
                                    <h4>Latest Rating:</h4>
                                    
                                </div>
                            </div>
                           
                            <div class="col-lg-3">
                                <div class="feedBack">
                                    <ul class="feedBackList">
                                        <li><img src="{{asset('img/like.png')}}" alt="" class="img-fluid"> 98%</li>
                                        <li><img src="{{asset('img/feddBack.png')}}" alt="" class="img-fluid"> {{$hospital->drating}} Feedback</li>
                                        <li><img src="{{asset('img/location-pin.png')}}" alt="" class="img-fluid">{{$hospital->city}}</li>
                                    </ul>
                                    <a href="{{route('doctors.feedback',Crypt::encrypt($hospital->id))}}"><button class="commonButton">Give Feedback</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                     <div class="doctorCard">

                        <div class="row">
                            <div class="col-lg-9">
                                <div class="doctorInfo">
                                    <img src="{{asset('img/doctor.png')}}" alt="" class="img-fluid doctor-img">
                                    <div class="infoDiv">
                                        <h4>Dummy data just for matching John Doe</h4>
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
                   <!-- <div class="doctorCard">
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
                    </div> -->
                  </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection