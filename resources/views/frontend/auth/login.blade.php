@extends('layouts.Front.master-auth')
@section('content')
<main>
    <div class="signUpDiv">
        <div class="leftDiv">
            <img src="{{asset('img/authLeftImg.png')}}" alt="" class="img-fluid">
        </div>
        <div class="rightDiv">
            <div class="formDiv">
                <h4 class="text-center">Sign In</h4>
                <p class="text-center">Enter your email and password for signing in. </p>
                <p class="text-center">Don’t have an account? <a href="/signup">Signup</a></p>
                <form action="">
                    <div class="inputDiv">
                        <label for="">Email Address</label>
                        <input type="text" placeholder="Enter Email Address">
                    </div>
                    <div class="inputDiv">
                        <label for="">Password</label>
                        <input type="password" placeholder="********">
                    </div>
                    <div class="forgotDiv">
                        <div class="keepMeSigned">
                            <input type="checkbox">
                            <span>Keep me signed in</span>
                        </div>
                        <span>
                            <a href="">Forgot Your Password</a>
                        </span>
                    </div>
                    <button>Sign In</button>
                    <div class="socialDiv">
                        <p class="text-center">Or sign in using</p>
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