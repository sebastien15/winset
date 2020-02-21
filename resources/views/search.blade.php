<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Winset</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/main.css') }}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/properties.css') }}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/homemobile.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">

</head>
<body>
        <section class="landing-section forContactus">
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
                        <img class="logoimg" src="{{ URL::asset('images/logo/logo.png')}}"/>
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
        <section class="main-section">
            <div class="search-form-container">
                <div class="container">
                    <div class="simple-search-container">
                        <form method="Get" action="{{ route('userSearch.index') }}">
                            <input class="simple-search-input" placeholder="Find your home" name="searchInput"/>
                            <button type="submit">
                                <img src="{{ URL::asset('images/icons/search.png')}}" width="25" height="25"/>
                            </button>
                        </form>
                    </div>
                    <div class="complex-search-container">
                        <p style="font-weight:600">Advanced search</p>
                        <form method="Get" action="{{ route('userSearch.advanced') }}">
                                <div class="formGroup">
                                    <label>Location <span style="font-size:10px;">optional</spans></label>
                                    <select name="location">
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="formGroup">
                                    <label>Property Status <span style="font-size:10px;">optional</spans></label>
                                    <select name="status">
                                        <option value="rent">Rent</option>
                                        <option value="sale">Sale</option>
                                    </select>
                                </div>
                                <div class="formGroup">
                                    <label>Property Type <span style="font-size:10px;">optional</spans></label>
                                    <select name="type">
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="formGroup">
                                    <div class="formGroupRow">
                                        <div class="row6">
                                            <div class="formGroup">
                                                <label>Min Beds <span style="font-size:10px;">optional</spans></label>
                                                <select name="beds">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row6">
                                            <div class="formGroup">
                                                <label>Min Baths <span style="font-size:10px;">optional</spans></label>
                                                <select name="baths">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="formGroupRow">
                                        <div class="row6">
                                            <div class="formGroup">
                                                <label>Min Price <span style="font-size:10px;">optional</spans></label>
                                                <select name="minPrice">
                                                    <option value="30000">rwf. 30,000</option>
                                                    <option value="150000">rwf. 150,000</option>
                                                    <option value="750000">rwf. 750,000</option>
                                                    <option value="3750000">rwf. 3,750,000</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row6">
                                            <div class="formGroup">
                                                <label>Max Price <span style="font-size:10px;">optional</span></label>
                                                <select name="maxPrice">
                                                    <option value="100000000">rwf. 100,000,000</option>
                                                    <option value="10000000">rwf. 10,000,000</option>                                                    
                                                    <option value="1000000">rwf. 1,000,000</option>
                                                    <option value="100000">rwf. 100,000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                                <div class="formGroup">
                                    <button class="btn-search">Search</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
            <div class="properties-container">
                @php
                    $count = $properties->count();
                    if ($count != 0){
                    }
                        else{
                    echo "<p style='font-size: 24px;color:darkblue;'>Sorry we did not find what you are searching but you can check other properties 
                        we have for you!!!</p>";
                    }
                @endphp
                
            @foreach($properties as $property)
                <div class="row">
                    <div class="img-containerProperties">
                        <div class="displayer" id="displayer1">
                            <div class="forBg"></div>
                            <div class="forBg2">
                                <a href=""><span>+</span> View More</a>
                            </div>                                
                        </div>
                        @for ($i = 0; $i < $imageproperties->count(); $i++)
                            @if ($property->id != $imageproperties[$i]->property_id )
                                @else
                            <a href="{{ route('propertyDescription',$property->id) }}"><img src="{{ URL::asset("images/properties/{$imageproperties[$i]->name}") }}" style="height:100%; width:100%;"/></a>    
                                @break
                            @endif                                                                           
                        @endfor
                        
                    </div>
                    <div class="desc-container">                        
                        <div class="paragraphContainer">
                            <header>{{ $property->smallDesc }}</header>
                            <p>{{ $property->location->name }}</p>
                            <p>Belle Harbor, Far Rockaway, NY</p>
                            <p>
                                <span><img src="images/icons/bed.png" height="15" width="15"/>{{ $property->bed }}bd </span> 
                                <span><img src="images/icons/Bath.png" height="15" width="15"/>{{ $property->bath }}ba </span> 
                                <span><img src="images/icons/plot.png" height="15" width="15"/>{{ $property->sqmeter }}sql</span>
                            </p>
                        </div>
                        <div class="buttons-section">
                            <button class="btns">Rwf {{ $property->price }} </button>
                            <a class="btns" href="">Contact agent</a>
                        </div>
                    </div>                    
                </div>
            @endforeach 
            <div>{{ $properties->render() }}</div>               
            </div>
        </section>

                    {{-- property displayer for phone view --}}

        <section class="properties-section">
            <div class="property-row">
                @foreach ($properties as $property)
                <div class="col-5">
                    <div class="img-container">
                        @for ($i = 0; $i < $imageproperties->count(); $i++)
                            @if ($property->id != $imageproperties[$i]->property_id)
                                @else
                                <a href="{{ route('propertyDescription',$property->id) }}"><img src="{{ URL::asset("/images/properties/{$imageproperties[$i]->name}") }}"/></a>
                            @endif
                        @endfor
                       
                        <header>{{ $property->status }}</header>
                    </div>
                    <div class="price-container">
                        <h6>Rwf. {{ $property->price }}</h6>
                    </div>
                    <div class="desc-container">
                        <p class="property-sum">
                            <img src="images/icons/bed.png" height="15" width="15"/> {{ $property->bed }} bd | <img src="images/icons/bath.png" height="15" width="15"/> {{ $property->bath }} ba | <img src="images/icons/plot.png" height="15" width="15"/> {{ $property->sqmeter }} sq.m
                        </p>
                        <p class="property-desc">{{ $property->smallDesc }}</p>
                    </div>
                </div>
                @endforeach
            </div>
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