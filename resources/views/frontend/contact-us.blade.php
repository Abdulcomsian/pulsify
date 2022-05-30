@extends('layouts.Front.master-front')
@section('content')
<main>
    <div class="commonBanner">
        <div class="backDrop"></div>
        <div class="contentBanner">
            <h4>Contact Us</h4>
            <p><span><i class="fa fa-home" aria-hidden="true"></i></span> Home / Contact Us</p>
        </div>
    </div>
    <div class="getInTouch">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contactDetail">
                        <div class="commonContactBox">
                            <a href="">
                                <i class="fa fa-phone"></i>
                            </a>
                            <div class="infoDiv">
                                <h5>Phone Number</h5>
                                <p>+5646544654</p>
                            </div>
                        </div>
                        <div class="commonContactBox">
                            <a href="">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <div class="infoDiv">
                                <h5>Email Address</h5>
                                <p>info@pulsify.com</p>
                            </div>
                        </div>
                        <div class="followUs">
                            <h5>Follow Us On:</h5>
                            <a href="">
                                <img src="{{asset('img/youtube-fill.png')}}" alt="" class="img-fluid">
                            </a>
                            <a href="">
                                <img src="{{asset('img/facebook-fill.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="formDiv">
                        <h3>Get In Touch</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lectus tincidunt cras cras ultricies ultrices quam.</p>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="inputDiv">
                                        <input type="text" name="" id="" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="inputDiv">
                                        <input type="text" name="" id="" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="inputDiv">
                                        <input type="text" name="" id="" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="inputDiv">
                                        <input type="text" name="" id="" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="inputDiv">
                                        <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="btnDiv">
                                        <button class="commonButton">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection