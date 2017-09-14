<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]--><head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>@if($profile){{ $profile->name }} - {{ $profile->designation }}@else{{ 'Raju Rayhan - Full Stack Web & Web Application Developer' }}@endif</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--main style-->
<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('frontend/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('frontend/css/style.css') }}">
<!--background slider style-->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/css/slideshow.css') }}" />
<!--google font style-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
<!--font-family: 'Open Sans', sans-serif;-->
<!-- font css style-->
<link rel="stylesheet" href="{{ URL::asset('frontend/css/font-awesome.css') }}">
<!--for slider style-->

<noscript>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/css/fallback.css') }}" />
</noscript>
<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/css/fallback.css') }}" />
		<![endif]-->
</head><body>
<!--wrapper start-->
<div class="wrapper" id="wrapper">
  <header>
    <!--banner start-->
    <div class="banner row" id="banner">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd" style="height:100%">
        <!--background slide show start-->
        <div class="bannerPart"> <img src="http://placehold.it/1600x900&text=image1" alt="" class="bannerImg"> </div>
        <!--background slide show end-->
      </div>
    </div>
    <!--banner end-->
    <div class="bannerText container">
      <h1>I'm @if($profile){{ $profile->name }}@else{{ 'Raju Rayhan' }}@endif</h1>
      <h2>Design & Build Beautiful Crafted Web Experiences</h2>
    </div>
    <!--menu start-->
    <div class="menu">
      <div class="navbar-wrapper">
        <div class="container">
          <div class="navwrapper">
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                  <a class="navbar-brand" href="#">Menu</a> </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li class="menuItem active"><a href="#wrapper">Home</a></li>
                    <li class="menuItem"><a href="#aboutme">About</a></li>
                    <li class="menuItem"><a href="#technical">Skills</a></li>
                    <li class="menuItem"><a href="#exprience">Experience</a></li>
                    <li class="menuItem"><a href="#education">Education</a></li>
                    <li class="menuItem"><a href="#protfolio">Portfolio</a></li>
                    <li class="menuItem"><a href="#contact">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- End Navbar -->
        </div>
      </div>
    </div>
    <!--menu end-->
  </header>
  <!--about me start-->
  <section class="aboutme" id="aboutme">
    <div class="container">
      <div class="heading">
        <h2>About me</h2>
        <p>A small introduction about my self</p>
      </div>
      <div class="row">
        <div class=" col-xs-12 col-sm-12 col-md-7 col-lg-7">
          <h3>@if($profile){{ $profile->name }}@else{{ 'Raju Rayhan' }}@endif</h3>
          <h4 class="subHeading">@if($profile){{ $profile->designation }}@else{{ 'Full Stack Web & Web Application Developer' }}@endif from @if($contact){{ $contact->city }}@else{{ 'Dhaka' }}@endif</h4>
          @if($profile)
          <?php echo htmlspecialchars_decode($profile->bio) ;?> 
          @else
          <p>As a Full-Stack Developer with 3+ years of experience in related fields, I specialize in front-end development and Object Oriented PHP(7) development.<br>
I'm highly motivated, goal-oriented with extensive technical skills such as and experience Laravel, Wordpress, Bootstrap, HTML5/CSS3/PHP/MySQL in web development&nbsp;. My work experience, talents and hard working capability in my projects will help me to accomplish the project fast with quality.</p>
          @endif
          
          <a href="#" class="bntDownload">Download Printable Resume</a> </div>
        <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1 proPic"> <img src="@if($profile){{ url('/') }}{{ '/images/profile/' }}{{ $profile->image }}@else{{ 'http://www.raju-rayhan.com/wp-content/uploads/2016/11/avatar.png' }}@endif" alt="" class="img-circle topmar img-responsive"> </div>
      </div>
    </div>
  </section>
  <!--about me end-->
  <!--technical start-->
  <section class="technical" id="technical">
    <div class="container">
      <div class="heading">
        <h2>Technical Skills</h2>
        <p>I can say i’m quite good at</p>
      </div>
      <div class="row">
      @if(count($skills)==0)
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 skills"> <span class="chart skilBg" data-percent="75"> <span class="percent"></span> </span>
            <h4>Laravel</h4>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 skills"> <span class="chart skilBg" data-percent="70"> <span class="percent"></span> </span>
            <h4>Javascript</h4>
            
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 skills"> <span class="chart skilBg" data-percent="60"> <span class="percent"></span> </span>
            <h4>JQuery</h4>
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 skills"> <span class="chart skilBg" data-percent="90"> <span class="percent"></span> </span>
            <h4>HTML5 / CSS3</h4>
            
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 skills"> <span class="chart skilBg" data-percent="65"> <span class="percent"></span> </span>
            <h4>Wordpress</h4>
            
          </div>
        </div>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 skills"> <span class="chart skilBg" data-percent="65"> <span class="percent"></span> </span>
            <h4>PHP / MySQL</h4>
            
          </div>
        </div>
        @else
        @foreach($skills as $skill)
          <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
            <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 skills"> <span class="chart skilBg" data-percent="{{ $skill->percent }}"> <span class="percent"></span> </span>
              <h4>{{ $skill->name }}</h4>
              <!-- <p>Donec accumsan ligula vitae mag na curabitur id</p> -->
            </div>
          </div>
        @endforeach
        @endif

      </div>
    </div>
  </section>
  <!--technical end-->
  <!--exprience start-->
  <section class="exprience" id="exprience">
    <div class="container">
      <div class="heading">
        <h2>Work Experience</h2>
        <p>My previous associations</p>
      </div>
      @if(count($experience)==0)
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear">Mar,2011<br>
            Present</div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>UIzards</h4>
            <h5>Senior UX Designer</h5>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quom placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui faorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
          </div>
        </div>
      </div>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear">Mar,2011<br>
            Present</div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>Lexind</h4>
            <h5>Visual / UI Designer</h5>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quom placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui faorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
          </div>
        </div>
      </div>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear">Mar,2011<br>
            Present</div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>Matrix Media</h4>
            <h5>Visual / UI Designer</h5>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quom placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui faorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
          </div>
        </div>
      </div>
      @else
      @foreach($experience as $exp)
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear">{{ date("M, Y", strtotime($exp->start)) }}<br>
            @if($exp->end){{  date("d-M-Y", strtotime($exp->end)) }}@else{{ 'Present' }}@endif</div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>{{ $exp->company }}</h4>
            <h5>{{ $exp->designation }}</h5>
            <p>{{ $exp->description }}</p>
          </div>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </section>
  <!--exprience end-->
  <!--education start-->
  <section class="education" id="education">
    <div class="container">
      <div class="heading">
        <h2>Education & Diplomas</h2>
        <p>What I have done in my academic career</p>
      </div>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear">Mar,2010</div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>Master Degree of Design</h4>
            <h5>University of Design</h5>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quom placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui faorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
          </div>
        </div>
      </div>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear">Sept, 2007</div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>Bachelor of Arts</h4>
            <h5>University of Design</h5>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quom placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui faorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
          </div>
        </div>
      </div>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
          <div class="workYear">Feb, 2005</div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4>Master Degree of Design</h4>
            <h5>University of Design</h5>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quom placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui faorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--education end-->
  <!--protfolio start-->
  <section class="protfolio" id="protfolio">
    <div class="container">
      <div class="heading">
        <h2>Portfolio</h2>
        <p>showcase of my latest works</p>
      </div>
      <div class="portfolioFilter">
        <ul>
          <li><a href="#" data-filter="*" class="current">All</a></li>
          <li><a href="#" data-filter=".photos">Photos</a></li>
          <li><a href="#" data-filter=".branding">Branding</a></li>
          <li><a href="#" data-filter=".illustration">Illustration</a></li>
        </ul>
      </div>
      <ul class="portfolioContainer row">
        <li class="photos col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/portfolio/big/1.jpg" title="Project Title1" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/450x450&text=image1" alt=""  > </div>
        </li>
        <li class="branding illustration col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/portfolio/big/2.jpg" title="Project Title2" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/450x450&text=image2" alt="" > </div>
        </li>
        <li class="illustration col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/portfolio/big/3.jpg" title="Project Title3" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/450x450&text=image3" alt="" > </div>
        </li>
        <li class="branding illustration col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/portfolio/big/4.jpg" title="Project Title4" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/450x450&text=image4" alt="" > </div>
        </li>
        <li class="illustration photos col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/portfolio/big/5.jpg" title="Project Title5" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/450x450&text=image5" alt="" > </div>
        </li>
        <li class="branding photos col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/portfolio/big/6.jpg" title="Project Title6" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/450x450&text=image6" alt="" > </div>
        </li>
        <li class="illustration photos col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/portfolio/big/7.jpg" title="Project Title7" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/450x450&text=image7" alt="" > </div>
        </li>
        <li class="branding col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="images/portfolio/big/8.jpg" title="Project Title8" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="http://placehold.it/450x450&text=image8" alt="" > </div>
        </li>
      </ul>
    </div>
  </section>
  <!--protfolio end-->
  <!--contact start-->
  <section class="contact" id="contact">
    <div class="container topCon">
      <div class="heading">
        <h2>Get In Touch</h2>
        <p>Please feel free if you would like to have a chat.</p>
      </div>
    </div>
    <!-- <div class="row mapArea">
      <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=-37.817682,144.957595&amp;spn=0.01134,0.026157&amp;t=m&amp;z=16&amp;output=embed"></iframe>
    </div> -->
  </section>
  <section class="contactDetails">
    <div class="container">
      <!--contact info start-->
      <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
        <h4>Contact details</h4>
<p> <i class="fa fa-map-marker fa-lg"></i> @if($contact){{ $contact->address }} {{ $contact->city }} {{ $contact->country }}@else{{ '19, North Badda, Hazipara, Badda, Dhaka, Bangladesh' }}@endif</p>
        <p> <i class="fa fa-mobile fa-lg"></i> @if($contact){{ $contact->phone }} @else{{ '+880 1913 776667' }}@endif</p>
        <p> <i class="fa fa-envelope-o "></i> <a href="mailto:@if($contact){{ $contact->email }} @else{{ 'me@raju-rayhan.com' }}@endif">@if($contact){{ $contact->email }} @else{{ 'me@raju-rayhan.com' }}@endif</a></p>
        <p> <i class="fa fa-link "></i> <a href="@if($contact){{ url('/') }} @else{{ 'http://raju-rayhan.com' }}@endif">@if($contact){{ url('/') }} @else{{ 'http://raju-rayhan.com' }}@endif</a></p>
      </div>
      <!--contact info end-->
      <!--contact form start-->
      <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8 conForm">
        <h4>Shoot a message!</h4>
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-6 col-md-6 col-lg-6" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 noMarr" placeholder="Your email..." >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your message..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Send message">
          <div id="simple-msg"></div>
        </form>
      </div>
      <!--contact form end-->
    </div>
  </section>
  <!--contact end-->
  <!--footer start-->
  <section class="footer" id="footer">
    <div class="container">
      <ul>
        <li><a href="http://facebook.com/@if($profile){{ $profile->facebook }} @else{{ 'raju.rayhan' }}@endif"><i class="fa fa-facebook fa-2x"></i></a></li>
        <li><a href="http://twitter.com/@if($profile){{ $profile->twitter }} @else{{ 'raju_rayhan' }}@endif"><i class="fa fa-twitter fa-2x"></i></a></li>
        <li><a href="http://linkedin.com/@if($profile){{ $profile->linkedin }} @else{{ 'rajurayhan' }}@endif"><i class="fa fa-linkedin fa-2x"></i></a></li>
        <li><a href="callto:@if($profile){{ $profile->skype }} @else{{ 'raju.rayhan' }}@endif"><i class="fa fa-skype fa-2x"></i></a></li>
      </ul>
    </div>
  </section>
  <!--footer end-->
</div>
<!--wrapper end-->
<!--modernizr js-->
<script type="text/javascript" src="{{ URL::asset('frontend/js/modernizr.custom.26633.js') }}"></script>
<!--jquary min js-->
<script type="text/javascript" src="{{ URL::asset('frontend/js/jquery.min.js') }}"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/js/jquery.gridrotator.js') }}"></script>
<!--for custom jquary-->
<script src="{{ URL::asset('frontend/js/custom.js') }}"></script>
<!--for placeholder jquary-->
<script type="text/javascript" src="{{ URL::asset('frontend/js/jquery.placeholder.js') }}"></script>
<!--for menu jquary-->
<script type="text/javascript" src="{{ URL::asset('frontend/js/stickUp.js') }}"></script>
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
  $('.navbar-wrapper').stickUp({
				parts: {
				  0: 'banner',
				  1: 'aboutme',
				  2: 'technical',
				  3: 'exprience',
				  4: 'education',
				  5: 'protfolio',
				  6: 'contact'
				},
				itemClass: 'menuItem',
				itemHover: 'active',
				topMargin: 'auto'
			  });
});

$( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
  $( ".navbar-collapse" ).addClass( "hideClass" );
});


$( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
  $( ".navbar-collapse" ).addClass( "collapse" );
});


$( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
  $( ".navbar-collapse" ).removeClass( "in" );
});

$( ".navbar-toggle" ).click(function() {
  $( ".navbar-collapse" ).removeClass( "hideClass" );
});


});
</script>
<!--for portfoli filter jquary-->
<script src="{{ URL::asset('frontend/js/jquery.isotope.js') }}" type="text/javascript"></script>
<!--for portfoli lightbox -->
<link type="text/css" rel="stylesheet" id="theme" href="{{ URL::asset('frontend/css/jquery-ui-1.8.16.custom.css') }}">
<link type="text/css" rel="stylesheet" href="{{ URL::asset('frontend/css/lightbox.min.css') }}">
<script type="text/javascript" src="{{ URL::asset('frontend/js/jquery.ui.widget.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/js/jquery.ui.rlightbox.js') }}"></script>
<!--for skill chat jquary-->
<script src="{{ URL::asset('frontend/js/jquery.easing.min.js') }}"></script>
<script src="{{ URL::asset('frontend/js/jquery.easypiechart.js') }}"></script>
<!--contact form js-->
<script type="text/javascript" src="{{ URL::asset('frontend/js/jquery.contact.js') }}"></script>
</body>
</html>