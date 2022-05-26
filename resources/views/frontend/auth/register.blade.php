@extends('layouts.Front.master-auth')
@section('content')
<main>
    <div class="signUpDiv">
        <div class="leftDiv">
            <img src="{{asset('img/authLeftImg.png')}}" alt="" class="img-fluid">
        </div>
        <div class="rightDiv">
            <div class="formDiv">
                <h4 class="text-center">Sign Up</h4>
                <p class="text-center">Enter your email and password for signing in. </p>
                <p class="text-center">Already have an account? <a href="/signin">Sign In</a></p>
                <form action="">
                    <div class="inputDiv">
                        <label for="">Name</label>
                        <input type="text" placeholder="Enter Your Name">
                    </div>
                    <div class="inputDiv">
                        <label for="">Email</label>
                        <input type="text" placeholder="Enter Your Email">
                    </div>
                    <div class="inputDiv">
                        <label for="">Password</label>
                        <input type="password" placeholder="********">
                    </div>
                    <div class="inputDiv">
                        <label for="">Confirm Password</label>
                        <input type="password" placeholder="********">
                    </div>
                    <button>Sign Up</button>
                    <div class="socialDiv">
                        <p class="text-center">Or sign up using</p>
                        <div class="multiBtn text-center">
                            <a href="">
                                <img src="{{asset('img/googleLogo.png')}}" alt="" class="img-fluid">
                            </a>
                            <a href="">
                                <img src="{{asset('img/appleLogo.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection