<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.app')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Think BD|Registration</title>
    <link rel="stylesheet" href="{{ asset('signuppage/Css/from.css') }}">
    <link rel="stylesheet" href="{{ asset('signuppage/Css/bootstrap.min.css') }}">
   
</head>

<body>
    <div class="sticky-md-top">
        <div class="header-logo">
            <div class="header ">
                <img src="{{ asset('signuppage/img/Logo_Blue_text-removebg-preview.png') }}" alt="">
                <div class="info-item">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Service</a></li>
                        <li><a href="">About us</a></li>
                        <li><a href="">Blog</a></li>
                    </ul>
                </div>
                <div class="loging-items">
                    <ul>
                        <li><a href="{{ route('register') }}">Sign up</a></li>
                        <li><a href="{{ route('login') }}">Log in</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="background-colour">
        <div class="right-from-page">
            <div class="from-page">
                <div class="from-header">
                    <p>Sign up to get your digital <br> Discount Card</p>
                </div>
                <div class="all-from">
                    <form>
                        <div class="over-form">
                            <div class="right-form">
                                <h5>New ID</h5>
                                <input type="id" class="input-box" placeholder="0012-2022-0000-1001">

                                <h5>Name<sup>*</sup></h5>
                                <input type="text" class="input-box" placeholder="">

                                <h5>password<sup>*</sup></h5>
                                <input type="password" class="input-box" placeholder="">

                                <h5>Confirm Pass<sup>*</sup></h5>
                                <input type="password" class="input-box" placeholder="">

                                <h5>Mobile<sup>*</sup></h5>
                                <input type="number" class="input-box" placeholder="">

                                <h5>NID</h5>
                                <input type="id" class="input-box" placeholder="">

                                <h5>Date of Birth<sup>*</sup></h5>
                                <input type="number" class="input-box" placeholder="">


                                <h5>Sponsor ID<sup>*</sup></h5>
                                <input type="id" class="input-box" placeholder="0012-2022-0000-">

                                <div class="Sponsor">
                                    <p>MD.Karim Shekh</p>
                                </div>

                                <h5>Payment ID<sup>*</sup></h5>
                                <input type="id" class="input-box" placeholder="0012-2022-0000-">

                                <div class="Sponsor">
                                    <p>MD.Karim Shekh</p>
                                </div>
                            </div>

                            <div class="left-form">
                                <form runat="server">
                                    <input accept="image/*" type='file' id="imgInp" />
                                    <img id="blah" src="#" alt="your image" height="100px" width="100px" />
                                </form>

                                <div class="payment-info">
                                    <h5>Bikash Number</h5>
                                    <input type="id" class="input-box">
                                    <h5>Bank Name</h5>
                                    <input type="id" class="input-box">
                                    <h5>Branch</h5>
                                    <input type="id" class="input-box">
                                    <h5>Account Number<sub>*</sub></h5>
                                    <input type="id" class="input-box">
                                    <div class="submit-button">
                                        <input type="button" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>

        </div>
        <div class="from-logo">
            <div class="logo-img">
                <img src="{{ asset('signuppage/img/Logo_Blue_text-removebg-preview.png') }}" alt="">
            </div>
        </div>
    </div>
    </header>


    <script defer src="https://friconix.com/cdn/friconix.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.2/umd/popper.min.js"
        integrity="sha512-aDciVjp+txtxTJWsp8aRwttA0vR2sJMk/73ZT7ExuEHv7I5E6iyyobpFOlEFkq59mWW8ToYGuVZFnwhwIUisKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('signuppage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('signuppage/js/jquarry.js') }}"></script>
    <script src="{{ asset('signuppage/js/from.js') }}"></script>
</body>

</html>
