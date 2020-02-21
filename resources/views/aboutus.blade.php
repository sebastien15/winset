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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">

</head>
<body>
    <div class="bgimg">
        <img class="imgbg" src="images/bg/aboutbg.jpg"/>
        <div class="coverbg"></div>
    </div>
    <section class="landing-section">
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
                    <img class="logoimg" style="z-index:100;" src="images/logo/logo.png"/>
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
        <div class="caption-abt">
            <div class="caption-abt-top">
                <h2>About us</h2>
                <p class="caption-p">
                    We are a Rwandan company that offer real estate and related services operating in Rwanda
                    Our vision, with great mission to achieve more is our strong guide to our success. 
                    Our success is delivered from our client’s satisfaction as the main pillars to our business.
                </p>
            </div>
            <div class="caption-abt-bottom">
                <div class="whiteline-container">
                    <div class="whiteline"></div>
                </div>
                <div class="content-container">
                    <div class="vision-container">
                        <h4>Our Vision</h4>
                        <p>                            
                            To become a top ranked African real estate Company by serving 
                            the clients what cannot find anywhere else.
                        </p>
                    </div>
                    <div class="mission-container">
                        <h4>Our Mission</h4>
                        <p>
                            To be right source for African real estate Market Based in east 
                            Africa Committed to passionately exceed our customers’ expectations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ourServices">
        <h4>Our Services</h4>
        <div class="secContainer">
        <div class="sec1">
            <div class="rw1">
                <div class="iconHolder">
                    <img class="icon" src="images/aboutIcons/agency.png"/>
                </div>
                <div class="textHolder">
                    <h5>Architecture</h5>
                    <div></div>
                    <p>Design for your expectation</p>
                </div>
            </div>
            <div class="rw2">
                <div class="iconHolder">
                    <img class="icon" src="images/aboutIcons/arc.png"/>
                </div>
                <div class="textHolder">
                    <h5>Property Agency</h5>
                    <div></div>
                    <p>Design for your expectation</p>
                </div>
            </div>
            <div class="rw3">
                <div class="iconHolder">
                    <img class="icon" src="images/aboutIcons/consultancy.png"/>
                </div>
                <div class="textHolder">
                    <h5>Property Management</h5>
                    <div></div>
                    <p>Design for your expectation</p>
                </div>
            </div>
        </div>
        <div class="sec2">
            <div class="rw1">
                <div class="iconHolder">
                    <img class="icon" src="images/aboutIcons/intdesn.png"/>
                </div>
                <div class="textHolder">
                    <h5>Interior Design</h5>
                    <div></div>
                    <p>Design for your expectation</p>
                </div>
            </div>
            <div class="rw2">
                <div class="iconHolder">
                    {{-- <a href="{{ URL('/propertyValuation') }}"> --}}<img class="icon" src="images/aboutIcons/prop.png"/>{{--</a> --}}
                </div>
                <div class="textHolder">
                    <h5>{{-- <a href="{{ URL('/propertyValuation') }}">--}}valuation{{--</a>--}} </h5> 
                    <div></div>
                    <p>{{--<a href="{{ URL('/propertyValuation') }}">--}}Design for your expectation{{--</a>--}}</p>
                </div>
            </div>
            <div class="rw3">
                <div class="iconHolder">
                    <img class="icon" src="images/aboutIcons/val.png"/>
                </div>
                <div class="textHolder">
                    <h5>Real Estate consultancy</h5>
                    <div></div>
                    <p>Design for your expectation</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="teamSection">
        <div class="head">
            <h4>Our Team</h4>
        </div>
        <div class="team">
            <div class="teamCard">
                <div class="imgHolder">
                    <img class="imgTeam" src="images/agent/2.png"/>
                </div>
                <div class="nameHolder">
                    <h6>NDAYAMBAJE Dany</h6>
                </div>
                <div class="contactHolder">
                    <ul>
                        <li>Chief Executive Officer</li>
                        <li>TEl: +250 788 357 058</li>
                        <li>email: ndadany@gmail.com</li
                    </ul>
                </div>
            </div>
            <div class="teamCard">
                    <div class="imgHolder">
                        <img class="imgTeam" src="images/agent/1.png"/>
                    </div>
                    <div class="nameHolder">
                        <h6>RUKUNDO Jean Bosco</h6>
                    </div>
                    <div class="contactHolder">
                        <ul> 
                            <li>Chief Operations Officer</li>
                            <li>TEl: +250 788 357 068</li>
                            <li>email: rukundobosco45@gmail.com</li
                        </ul>
                    </div>
                </div>
                <div class="teamCard">
                        <div class="imgHolder">
                            <img class="imgTeam" src="images/agent/3.png"/>
                        </div>
                        <div class="nameHolder">
                            <h6>MUKIZA Alleluia</h6>
                        </div>
                        <div class="contactHolder">
                            <ul>
                                <li>Architect</li>
                                <li>TEl: +250 780 591 332</li>
                                <li>email: alleluiamukiza@gmail.com</li>
                            </ul>
                        </div>
                    </div>
        </div>
    </section>
        <section class="partners-section">
            <header>Our Partners</header>
            <div class="partners-div"> 
                <div class="col-8">
                    <img class="partners-img" src="images/partners/bexco.png"/></div>
                <div class="col-8">
                    <img class="partners-img" src="images/partners/landed.png"/></div>
                <div class="col-8">
                    <img class="partners-img" src="images/partners/pro.png" /></div>
                <div class="col-8">
                    <img class="partners-img" src="images/partners/shelter.png"/></div>
                <div class="col-8">
                <img class="partners-img" src="images/partners/tpc.png"/>
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
        <script src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>