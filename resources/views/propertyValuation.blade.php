<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Winset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/homemobile.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/aboutus.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/valuation.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
    
</head>
<body>
    <div class="bgimg">
        <img class="imgbg" src="{{ URL::asset('/images/bg/aboutbg.jpg') }}"/>
        <div class="coverbg"></div>
    </div>
    <section class="">
            <div class="phone-cover"></div>
            <div class="phone-links ">
                <div style="background:whitesmoke; margin-bottom:30px;"><img class="logoimg" src="images/logo/logo.png"/></div>
                <div><a href="{{ URL('/') }}">Home</a></div>
                <div><a href="{{ URL('/properties') }}">properties</a></div>
                <div><a href="{{ URL('aboutus') }}">About us</a></div>
                <div><a href="{{ URL('contactus') }}">Contact us</a></div>
            </div>
        <div class="nav-section">
            <div class="desk-nav">
                <div class="logo-container">
                    <img class="logoimg" src="{{ URL::asset('/images/logo/Logo.png') }}"/>
                </div>
                <div class="links-container">
                    <ul>
                        <li><a href="{{ URL('/') }}">Home</a></li>
                        <li><a href="{{ URL('/properties') }}">properties</a></li>
                        <li><a href="{{ URL('/aboutus') }}">About us</a></li>
                        <li><a href="{{ URL('/contactus') }}">Contact us</a></li>
                    </ul>
                </div>
                <div class="bread-cumb">
                    <div class="line-container">
                        <div class="line line1"></div>
                        <div class="line line2"></div>
                        <div class="line line3"></div>
                    </div>                    
                </div>
            </div>        
        </div>
    </section>
    <section class="formSection">
        <header>Valuation Request</header>
        <div class="row">
                @if (session('success'))
                   <p style="color:chartreuse;">{{ session('success') }}</p> 
                @endif
        </div>
        <form action="{{ route('valuation.store') }}" method="POST">
            @csrf
            <div class="formGroup">
                <label>UPI N0:</label>
                <input class="formControl" name="upi"/>
                @if ($errors->has('upi'))
                    <div class="errordisplayer">
                        <ul>
                            @foreach ($errors->get('upi') as $message)
                                {{ $message }}
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="formGroup">
                <label for="">Names:</label>
                <input class="formControl" type="text" name="names"/>
                @if ($errors->has('names'))
                    <div class="errordisplayer">
                        <ul>
                            @foreach ($errors->get('names') as $message)
                                {{ $message }}
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="formGroup">
                <label for="">Tel:</label>
                <input class="formControl" type="text" name="tel"/>
                @if ($errors->has('tel'))
                    <div class="errordisplayer">
                        <ul>
                            @foreach ($errors->get('tel') as $message)
                                {{ $message }}
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="formGroup">
                <label for="">Email Address:</label>
                <input class="formControl" type="text" name="email"/>
                @if ($errors->has('email'))
                    <div class="errordisplayer">
                        <ul>
                            @foreach ($errors->get('email') as $message)
                                {{ $message }}
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="formGroup location">
                <label for="">Property location:</label>
                <div class="row">
                    <div class="inputGroup">
                        <label for="">Province/City:</label>
                        <input class="formControl input1" type="text" name="province"/>
                        @if ($errors->has('province'))
                            <div class="errordisplayer">
                                <ul>
                                    @foreach ($errors->get('province') as $message)
                                        {{ $message }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="inputGroup">
                        <label for="">District:</label>
                        <input class="formControl input2" type="text" name="district"/>
                        @if ($errors->has('district'))
                            <div class="errordisplayer">
                                <ul>
                                    @foreach ($errors->get('district') as $message)
                                        {{ $message }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="inputGroup">
                        <label for="">Sector:</label>
                        <input class="formControl input1" type="text" name="sector"/>
                        @if ($errors->has('sector'))
                            <div class="errordisplayer">
                                <ul>
                                    @foreach ($errors->get('sector') as $message)
                                        {{ $message }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="inputGroup">
                        <label for="">Village:</label>
                        <input class="formControl input2" type="text" name="village"/>
                        @if ($errors->has('village'))
                            <div class="errordisplayer">
                                <ul>
                                    @foreach ($errors->get('village') as $message)
                                        {{ $message }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>                
            </div>
            <div class="formGroup">
                <label for="">Available company to choose:</label>
                <select class="formControl" name="company_id">
                    @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="formGroup">
                <label for="">List of Banks:</label>
                <select class="formControl" name="bank_id">
                    @foreach ($banks as $bank)
                    <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="formGroup">
                <label for="">Valuation purpose:</label>
                <textarea class="formControlTextarea" name="purpose"></textarea>
                @if ($errors->has('purpose'))
                    <div class="errordisplayer">
                        <ul>
                            @foreach ($errors->get('purpose') as $message)
                                {{ $message }}
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="formGroup">
                <button class="submitButton" type="submit">I agree</button>
            </div>
        </form>
    </section>
        <section class="footer-section">
            <div class="footer-top">
                <div class="col-3">
                    <div class="vision-holder">
                        <h4>Our Vision</h4>
                        <p>
                            To become a top ranked African real estate 
                            Company by serving the clients whta can not find 
                            anywhere else.
                        </p>
                    </div>
                    <div class="mission-holder">
                        <h4>Our Mission</h4>
                        <p>
                            Our mission is to be right source for African
                            real estate Market Based in east Africa Committed
                            to passionately exceed our customers' expectations.
                        </p>
                    </div>
                </div>
                <div class="col-3 quicklinks">
                    <h4>Quick links</h4>
                    <ul>
                            <li><a href="{{ route('properties') }}">Properties</a></li>
                            <li><a href="">projects</a></li>
                            <li><a href="{{ route('aboutus') }}">About Us</a></li>
                            <li><a href="">Architecture</a> </li>
                            <li><a href="">Valuation</a></li>
                            <li><a href="">Agency</a></li>
                            <li><a href="">Consultation</a></li>
                    </ul>
                </div>
                <div class="col-3 contacts">
                    <div>
                        <h4>Our Contacts</h4>
                        <p><a href="mailto:info@winset.rw">info@winset.rw</a></p>
                        <p><a href="tel:+250788357058"> +250 788 357 058</a></p>
                        <p><a href="tel:+250788357068"> +250 788 357 068</a></p>
                    </div>
                    <div class="sociallinks">
                        <ul>
                            <li><a href=""><img src="{{ URL::asset('/images/icons/fb.png') }}"/></a></li>
                            <li><a href=""><img src="{{ URL::asset('/images/icons/insta.png') }}"/></a></li>
                            <li><a href=""><img src="{{ URL::asset('/images/icons/linkedin.png') }}"/></a></li>
                            <li><a href=""><img src="{{ URL::asset('/images/icons/twitter.png') }}"/></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>All right reserve &COPY; winset  2016-<span id="yeardisplyer"></span></p>
            </div>
        </section>
        <script src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>