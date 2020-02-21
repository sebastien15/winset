<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Winset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/main.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/homemobile.css') }}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
   
</head>
<body id="forpropertydesc">
    <section nav-section>
            <div class="phone-cover"></div>
            <div class="phone-links ">
                <div style="background:whitesmoke; margin-bottom:30px;"><img class="logoimg" src="{{URL::asset('images/logo/logo.png')}}"/></div>
                <div><a href="{{ URL('/') }}">Home</a></div>
                <div><a href="{{ URL('/properties') }}">properties</a></div>
                <div><a href="{{ URL('aboutus') }}">About us</a></div>
                <div><a href="{{ URL('contactus') }}">Contact us</a></div>
            </div>
        <div class="nav-section">
            <div class="desk-nav">
                <div class="logo-container">
                    <img class="logoimg" src="{{ URL::asset('/images/logo/logo.png') }}"/>
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
    </section>
    <section class="property-full-expo">
        <div class="property-gallery">
            <div class="img-holder">
                <div class="sellCaption" >For {{ $property->status }}</div>
                <div style="">
                @for ($i = 0; $i < $imagesproperties->count(); $i++)
                    @if ($property->id != $imagesproperties[$i]->property_id)
                        @else
                        <img src="{{ URL::asset("images/properties/{$imagesproperties[$i]->name}") }}" class="mySliders"/>
                    @endif
                @endfor   
                </div>                
                <div class="arrow-container">
                    <div class="right-arrow" onclick="plusSlides(-1)"><img height="25" width="25" src="{{ URL::asset('/images/icons/rightarrow.png') }}"/></div>
                    <div class="left-arrow" onclick="plusSlides(+1)"><img height="25" width="25" src="{{ URL::asset('/images/icons/leftarrow.png') }}"/></div>  
                </div>
            </div>
            <div class="more-img">
                @for ($i = 0; $i < $imagesproperties->count(); $i++)
                    @if ($property->id != $imagesproperties[$i]->property_id)
                        @else
                        <div class="more-img-1">
                            <img class="more-img-img" src="{{ URL::asset("images/properties/{$imagesproperties[$i]->name}") }}"/>         
                        </div>                        
                    @endif
                @endfor 
               
            </div>
            <div class="more-details">
                <div class="col2 for1">
                    <p class="stamp">{{ $property->currency }}. {{ $property->price }}</p>
                    <p>{{ $property->location->name }}</p>
                    <p>Remera, Kigali</p>
                </div>
                <div class="col2">
                    <p><span><img src="{{ URL::asset('/images/icons/Bed.png')}}"/></span> {{  $property->bed   }} Bedrooms</p>
                    <p><span><img src="{{ URL::asset('/images/icons/Bath.png')}}"/></span> {{  $property->bath   }} Bathrooms</p>
                    <p><span><img src="{{ URL::asset('/images/icons/plot.png')}}"/></span> {{  $property->sqmeter   }} Sq.m</p>
                </div>
            </div>
        </div>
        <div class="property-contact">
            <div>
                <h4>Interest in property</h4>
                @if (session('success'))
                    <p style="color:chocolate">{{ session('success') }}</p>
                @endif
                <form method="POST" action="{{ route('interest.store') }}">
                    @csrf
                    <input type="hidden" name="property_id" value="{{ $property->id }}">
                    <input type="text" name="customer_name" placeholder="Names"/>
                    @if ($errors->has('customer_name'))
                        @foreach ($errors->get('customer_name') as $message)
                            <p style="color:chocolate">{{ $message }}</p>
                        @endforeach
                    @endif
                    <input type="email" name="customer_email" placeholder="Email"/>
                    @if ($errors->has('customer_email'))
                        @foreach ($errors->get('customer_email') as $message)
                            <p style="color:chocolate">{{ $message }}</p>
                        @endforeach
                    @endif
                    <input type="tel" name="customer_tel" placeholder="tel"/>
                    @if ($errors->has('customer_tel'))
                        @foreach ($errors->get('customer_tel') as $message)
                            <p style="color:chocolate">{{ $message }}</p>
                        @endforeach
                    @endif
                    <textarea placeholder="Your message" cols="40" rows="10" name="customer_message"></textarea>
                    @if ($errors->has('customer_message'))
                        @foreach ($errors->get('customer_message') as $message)
                            <p style="color:chocolate">{{ $message }}</p>
                        @endforeach
                    @endif
                    <button type="submit" id="submitbtn">Send</button>
                </form>
            </div>
        </div>
    </section>
    <section class="property-full-desc">
        <div class="property-details">
            <h4>Property details</h4>
            <p>{!! $detail->detail !!}</p>
        </div>
        <div class="agent-details">
            <div>
                <h6 class="agent-h6">Agent</h6>
                <div class="agent-img-holder"><img class="imgTeam" src="{{URL::asset('images/agent/2.png')}}"/></div>
                <div class="agent-contact">
                    <p>NDAYAMBAJE Dany</p>
                    <p>Real estate Agent</p>
                    <p>dan@winset.rw</p>
                    <p>+250788357058</p>
                </div>            
                <div class="agent-slogan">
                    <p>
                        "Better save in property time will
                        come and property save your future"
                    </p>
                </div>
                <div class="agent-social"> social networks</div>
            </div>
        </div>
        <div class="agent-details-forphone">
            <h6 class="agent-h6-forphone">Contact Agent</h6>
            <div>
                <div class="agent-img-holder-forphone"><img class="imgTeam" src="{{URL::asset('images/agent/2.png')}}"/></div>
                <div class="agent-contact-forphone">
                    <p>NDAYAMBAJE Dany</p>
                    <p>Real estate Agent</p>
                    <p>dan@winset.rw</p>
                    <p>+250788357058</p>
                </div>      
            </div>      
        </div>
        <div class="form-forphone">
            @if (session('success'))
                <p style="color:chocolate; text-align:center;">{{ session('success') }}</p>
            @endif
            <form action="{{ route('interest.store') }}" method="POST">
                @csrf
                <input type="hidden" name="property_id" value="{{ $property->id }}">
                <label>Name:</label>
                <input type="text" name="customer_name"/>
                @if ($errors->has('customer_name'))
                    @foreach ($errors->get('customer_name') as $message)
                        <p style="color:chocolate">{{ $message }}</p>
                    @endforeach
                @endif
                <label>Email:</label>
                <input type="text" name="customer_email"/>
                @if ($errors->has('customer_email'))
                    @foreach ($errors->get('customer_email') as $message)
                        <p style="color:chocolate">{{ $message }}</p>
                    @endforeach
                @endif
                <label>Telephone:</label>
                <input type="text" name="customer_tel"/>
                @if ($errors->has('customer_tel'))
                    @foreach ($errors->get('customer_tel') as $message)
                        <p style="color:chocolate">{{ $message }}</p>
                    @endforeach
                @endif
                <label>Your message:</label>
                <textarea name="customer_message"></textarea>
                @if ($errors->has('customer_message'))
                    @foreach ($errors->get('customer_message') as $message)
                        <p style="color:chocolate">{{ $message }}</p>
                    @endforeach
                @endif
                <button type="send">Send</button>
            </form>
        </div>
    </section>
    <section class="contactSection">
        <div class="btns-div">
            <a href="tel:0788451691">Call</a>
            <a href="mailto:ndase15ba@gmail.com">Email</a>
        </div>
    </section>
    <section class="simiral-property">
        <header>Alike products</header>
        <div class="simirals">
            @foreach ($alikeProperties->chunk(5) as $row)
            <div class="property-row">
                @foreach ($row as $alike)
                <div class="col-5">
                    <a href="{{ route('propertyDescription',$property->id) }}" class="propertyLinks">   
                    <div class="img-container">
                        @for ($i = 0; $i < $imagesproperties->count(); $i++)
                            @if ($alike->id != $imagesproperties[$i]->property_id)
                                @else
                                <img src="{{ URL::asset("images/properties/{$imagesproperties[$i]->name}") }}" style="height:100%; width:100%;"/>
                                @break
                            @endif
                        @endfor
                        
                        <header>{{ $alike->status }}</header>
                    </div>
                    <div class="price-container">
                        <h6>{{ $property->currency }}. {{ $alike->price }}</h6>
                    </div>
                    <div class="desc-container">
                        <p class="property-sum"><i></i>{{ $alike->bed }}bd| <i></i>{{ $alike->bath }}ba| <i></i>{{ $alike->sqmeter }}sqft</p>
                        <p class="property-desc">{{ substr($alike->smallDesc,0,45)."..."  }}</p>
                    </div>
                    </a>
                </div>
                @endforeach    
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
                <p>All right reserve &COPY; winset 2016-<span id="yeardisplyer"></span></p>
            </div>
    </section>
    <section class="model-section">
        <div class="model">
            <div class="row model-closer-container">
                <div class="closing-link">X</div>
            </div>
            <div class="row model-image-container">
                <img class="model-image" src="" alt="image for the property" >
            </div>
            
        </div>
    </section>
    <script src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>