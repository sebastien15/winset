@extends('layouts.index')
@section('section')
    <section class="landing-section">
        <div class="phone-cover" style=""></div>
        <div class="phone-links" style="display:none;">
            <div style="background:whitesmoke; margin-bottom:30px;"><img class="logoimg" src="images/logo/logo.png"/></div>
            <div><a href="{{ URL('/') }}">Home</a></div>
            <div><a href="{{ URL('/properties') }}">properties</a></div>
            <div><a href="{{ URL('aboutus') }}">About us</a></div>
            <div><a href="{{ URL('contactus') }}">Contact us</a></div>
        </div>
        <img class="imgbg" src="images/bg/bg.jpg"/>
        <div class="nav-section">
            <div class="desk-nav">
                <div class="logo-container">
                    <img class="logoimg" src="images/logo/logo.png"/>
                </div>
                <div class="links-container">
                    <ul>
                        <li><a href="{{ URL('/') }}">Home</a></li>
                        <li><a href="{{ URL('/properties') }}">properties</a></li>
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
        <div class="caption-div">
            <div class="text-caption">
                <h1>Find a property easily with us</h1>
                <h2>it's easy and fits your wishes</h2>
            </div>
            <div class="search-caption">
                <form method="Get" action="{{ route('userSearch.index') }}">                    
                    <div class="radios">
                        <label for="buybtn" class="radiolabels" id="buylabel">Rent</label>
                        <input type="radio" name="status" value="rent" class="radiobtn" id="buybtn">
                        <label for="sellbtn" class="radiolabels" id="selllabel">Sell</label>
                        <input type="radio" name="status" value="sale" class="radiobtn" id="sellbtn">
                    </div>
                    <div class="search-input-div">
                        <input type="text" class="search-input" placeholder="type what to search" name="searchInput" />
                        <button type="submit" id="submitbtn"><img src="images/icons/search.png"/></button>
                    </div>
                    <div class="adv-btn">
                        <button id="advancedbtn">Advanced</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="properties-section">
            <header><h2>Featured Properties</h2></header>
            @foreach($properties->chunk(5) as $row)
            <div class="property-row">  
                @foreach ($row as $property)   
                <div class="col-5">                    
                    <div class="img-container">
                        <a href="{{ route('propertyDescription',$property->id) }}">                          
                            @for ($i = 0; $i < $imageproperties->count(); $i++)
                                @if ($property->id != $imageproperties[$i]->property_id )
                                    @else
                                    <img src="{{ URL::asset("images/properties/{$imageproperties[$i]->name}") }}" style="height:100%; width:100%;"/>
                                    @break
                                @endif                                                                           
                            @endfor
                        </a>
                        <header>{{ $property->status }}</header>
                    </div>
                    <div class="price-container">
                        <h6>{{ $property->currency }}. {{ $property->price }}</h6>
                    </div>
                    <div class="desc-container">
                        <p class="property-sum">
                            <img src="images/icons/bed.png" height="15" width="15"/> {{ $property->bed }} bd | <img src="images/icons/bath.png" height="15" width="15"/> {{ $property->bath }} ba | <img src="images/icons/plot.png" height="15" width="15"/> {{ $property->sqmeter }} sq.m
                        </p>
                        <p class="property-desc"> @php echo substr($property->smallDesc,0,70)."..."  @endphp</p>
                    </div>
                </div>
                @endforeach              
            </div>
            @endforeach
            <div class="property-row">
                {{ $properties->links('pagination.default') }}
            </div>
        </section>
        <section class="reviews-section">
            <header>Client's Review</header>
            <div class="review-row">
                <div>
                    <p class="review-para">"Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Perferendis in incidunt doloribus architecto accusamus officia,
                        dolores minima harum odio"
                    </p>
                </div>
                <img src="{{ URL::asset('/images/agent/3.png') }}"/>
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

    @endsection