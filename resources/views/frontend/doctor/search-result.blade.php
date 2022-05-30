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
                    <p class="numberOfDoctor"><b>{{count($serach_doctors)}}</b> matches found for :  {{$speciality[0] ?? ''}} In {{$country[0] ?? ''}}</p>
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
                            <form  action="{{route('search.doctors')}}" method="get">
                                <div class="inputDiv">
                                    <label for="">Name:</label>
                                    <input type="text"  name="name" id="" placeholder="Enter name of doctor">
                                </div>
                                <div class="inputDiv">
                                    <label for="">Specialty:</label>
                                    <select name="speciality" id="" required>
                                        <option value="">Speciality</option>
                                         @foreach($specialities as $spe)
                                         <option value="{{$spe->name.'-'.$spe->id}}">{{$spe->name}}</option>
                                         @endforeach
                                    </select>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Location:</label>
                                    <select name="location" id="" required>
                                       <option value="">Location</option>
                                       @foreach($countries as $country)
                                        <option value="{{$country->country_name.'-'.$country->id}}">{{$country->country_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="inputDiv">
                                    <label for="">Health Insurance:</label>
                                    <select name="hospital" id="">
                                        <option  value="">Health Insurance</option>
                                        @foreach($hospitals as $hospital)
                                        <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="multi-gender">
                                    <p>Gender</p>
                                    <input type="radio" name="gender" id="" value="all"> <label for="">All</label><br>
                                    <input type="radio" name="gender" id="" value="male"> <label for="">Male Doctor</label><br>
                                    <input type="radio" name="gender" id="" value="female"> <label for="">Female Doctor</label>
                                </div>
                                <button class="commonButton">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                  <div class="search-result">
                @foreach($serach_doctors as $doctor)
                  <div class="doctorCard">
                        <div class="row">
                           
                            <div class="col-lg-9">
                                <div class="doctorInfo">
                                    <img src="{{asset($doctor->image)}}" alt="" class="img-fluid doctor-img" style="width: 18% !important">
                                    <div class="infoDiv">
                                        <h4>{{$doctor->full_name}}</h4>
                                        <p>{{$doctor->title}}</p>
                                        <p class="specility"><img src="{{asset('img/teeth.png')}}" alt="" class="img-fluid" > {{$doctor->sepcial->name}}</p>
                                        <div class="ratingDiv">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>({{count($doctor->drating)}})</span>
                                        </div>
                                        <p class="location"><img src="{{asset('img/location-marker.png')}}" alt="" class="img-fluid">{{$doctor->country->country_name}}</p>
                                    </div>
                                </div>
                                <div class="leatestRating">
                                    <h4>Latest Rating:</h4>
                                    <p>
                                      @if(count($doctor->drating)>0)
                                        @php $nrecord=count($doctor->drating);@endphp
                                        {{$doctor->drating[$nrecord-1]->review}}
                                      @else
                                        No Review
                                      @endif
                                    </p>
                                </div>
                            </div>
                           
                            <div class="col-lg-3">
                                <div class="feedBack">
                                    <ul class="feedBackList">
                                        <li><img src="{{asset('img/like.png')}}" alt="" class="img-fluid"> 98%</li>
                                        <li><img src="{{asset('img/feddBack.png')}}" alt="" class="img-fluid"> {{count($doctor->drating)}} Feedback</li>
                                        <li><img src="{{asset('img/location-pin.png')}}" alt="" class="img-fluid">{{$doctor->city}}</li>
                                    </ul>
                                    <button class="commonButton">Give Feedback</button>
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