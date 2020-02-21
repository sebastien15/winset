<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Winset</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/contactus.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/homemobile.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">

</head>
<body>
    <section class="landing-section forContactus">
            <div class="phone-cover"></div>
            <div class="phone-links ">
                <div style="background:whitesmoke; margin-bottom:30px;"><img class="logoimg" src="{{ URL::asset('/images/logo/logo.png') }}"/></div>
                <div><a href="{{ URL('/') }}">Home</a></div>
                <div><a href="{{ URL('/properties') }}">properties</a></div>
                <div><a href="{{ URL('aboutus') }}">About us</a></div>
                <div><a href="{{ URL('contactus') }}">Contact us</a></div>
            </div>
            <div class="nav-section">
                <div class="desk-nav">
                    <div class="logo-container">
                        <img class="logoimg" src="{{ URL::asset('images/logo/logo.png') }}"/>
                    </div>
                    <div class="links-container">
                        <ul>
                            <li><a href="{{ URL('/') }}">Home</a></li>
                            <li><a href="{{ URL('') }}">properties</a></li>
                            <li><a href="{{ URL('aboutus') }}">About us</a></li>
                            <li><a href="{{ URL('contactus') }}">Contact us</a></li>
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
        <section>
            @if(session('success'))
            <div style="margin-left:25%; color:brown;">
                <p>{{ session('success') }}</p>
            </div>
            @endif
            <div class="addressContainer">
                <header>Company's Adress</header>
                <p>Tel:+250 788 357 058/ +250 788 357 068</p>
                <p>Email: info@winset.rw</p>
                <p>Amy's House, KG 11 AVE, Gacuriro, 
                   Kigali-Rwanda</p>

                <div class="socialMediaSection">
                    <h5>Find us on social media via:</h5>
                    <div class="links">
                        <a href="" class="linkAnchor">
                            <img src="{{ URL::asset('/images/icons/colored/linkedin.png') }}"/>
                        </a>
                        <a href="" class="linkAnchor">
                            <img src="{{ URL::asset('/images/icons/colored/twitter.png') }}"/>
                        </a>
                        <a href="" class="linkAnchor">
                            <img src="{{ URL::asset('/images/icons/colored/fb.png') }}"/>
                        </a>
                        <a href="" class="linkAnchor">
                            <img src="{{ URL::asset('/images/icons/colored/insta.png') }}"/>
                        </a>
                    </div>
                    <div class="googleMap">
                        <h4>Find here on google map</h4>
                        <div class="googleMapBcolored/ox">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.5626181483544!2d30.096187613791752!3d-1.92673689859528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7d1baab1df9%3A0x6fb4837e0c3650f9!2sWinset%20Real%20estate%20ltd.!5e0!3m2!1sen!2srw!4v1577989256100!5m2!1sen!2srw" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="suggestionArea">
                <header>Suggestion/Enquires Area</header>
                <div class="suggestionForm">
                    
                    <form action="{{ route('contact.index') }}" method="POST">
                        @csrf
                        <div class="formGroup">
                            <label for="">Names *:</label>
                            <input type="text" class="formInput" name="names"/>
                            @if($errors->has('names'))
                            <div class="errordisplayer">
                                <ul>
                                    @foreach ($errors->get('names') as $message)
                                    <li>{{ $message }}</li>                                        
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                        <div class="formGroup">
                            <label for="">Email *:</label>
                            <input type="text" class="formInput" name="email"/>
                            @if($errors->has('email'))
                            <div class="errordisplayer">
                                <ul>
                                @foreach ($errors->get('email') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                                </ul>
                            </div>
                            @endif                            
                        </div>
                        <div class="formGroup">
                            <label for="">Institution:</label>
                            <input type="text" class="formInput" name="institution"/>
                        </div>
                        <div class="formGroup">
                            <label for="">Title/ Occupation:</label>
                            <input type="text" class="formInput" name="title"/>
                        </div>
                        <div class="formGroup">
                            <label for="" >Leave your message:</label>
                            <textarea class="formInput" name="message"></textarea>
                            @if($errors->has('message'))
                            <div class="errordisplayer">
                                <ul>
                                    @foreach ($errors->get('message') as $message)
                                    <li>{{ $message }}</li>                                        
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                        <button class="btn-submit">Send</button>
                    </form>
                </div>
            </div>
        </section>
        <section class="footer-section">
                <div class="footer-top">
                    <div class="col-3">
                        <div class="vision-holder">
                            <h4>Our Vision</h4>
                            <p>                           
                            To become a top ranked African real estate Company by serving 
                            the clients what cannot find anywhere else. 
                            </p>
                        </div>
                        <div class="mission-holder">
                            <h4>Our Mission</h4>
                            <p>
                                    To be right source for African real estate Market Based in east 
                                    Africa Committed to passionately exceed our customers’ expectations.
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
                                <li><a href="https://web.facebook.com/WinSet-Real-Estate-ltd-341259649412348/"><img src="{{ URL::asset('/images/icons/fb.png') }}"/></a></li>
                                <li><a href="https://www.instagram.com/winset_real_estate/"><img src="{{ URL::asset('/images/icons/insta.png') }}"/></a></li>
                                <li><a href="https://www.linkedin.com/in/winset-real-estate-ltd-40a97a147/"><img src="{{ URL::asset('/images/icons/linkedin.png') }}"/></a></li>
                                <li><a href="https://twitter.com/winset_ltd"><img src="{{ URL::asset('/images/icons/twitter.png') }}"/></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>All right reserved  &COPY; WinSet A.R.E ltd. <span id="yeardisplyer"></span></p>
                </div>
            </section>
            <script src="js/main.js"></script>
</body>
</html>