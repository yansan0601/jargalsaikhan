@extends('layouts.user.app')

@section('content')
      <div class="preloader">
         <div class="loader"></div>
      </div>
      <div class="ntHome parallax_img" id="home">
         <header class="ntHeader">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <nav class="navbar navbar-expand-lg">
                        <div id="logo_home"><a href="default.html">Event4</a></div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> 
                        <div class="collapse navbar-collapse" id="navbarNav">
                           <ul class="navbar-nav ntNavbar">
                              <li><a href="#home" class="scroll active">Эхлэл</a></li>
                              <li><a href="#about" class="scroll">Намтар</a></li>
                              <li><a href="#speakers" class="scroll">Мэдээ</a></li>
                              <li><a href="#schedule" class="scroll">Бичлэг</a></li>
                              <li><a href="#contact" class="scroll">Холбоо барих</a></li>
                              <li><a href="/login">Нэвтрэх</a></li>
                              {{--<li><a href="#register" class="scroll">Register</a></li>
                              <li><a href="#contact" class="scroll">Contact</a></li> --}}
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </header>
         <div class="container">
            <div class="mainTitle">
               <h1 class="cd-headline clip is-full-width"><span>2019 Business</span> <span class="cd-words-wrapper"> <b class="is-visible">Д.Жаргалсайхан</b> </span></h1>
               <span class="line"></span> 
               <p>АЖ ҮЙЛДВЭРИЙН ГАВЪЯАТ АЖИЛТАН, МОНГОЛ УЛСЫН ЗӨВЛӨХ ИНЖЕНЕР, ШИЛДЭГ ЗОХИОН БҮТЭЭГЧ</p>
               <a href="#speakers" class="btn btn-ntPrimaryFull ntMedium scroll">Мэдээлэл</a> <a href="#contact" class="btn btn-ntPrimaryBorder ntMedium scroll">Холбоо барих</a>
            </div>
         </div>
         <a href="#about" class="scroll ntWayPoint"><i class="fas fa-angle-down bounce animated"></i></a>
      </div>
      <div class="ntInnerSection ntAbout" id="about">
        <div class="container">
           <div class="row">
            <div class="col-md-12">
                <h2>Намтар</h2>
                <span class="btm-bar"></span> 
                <p class="col-md-10 text-center block-center">Даньдай овогтой Жаргалсайхан
                  1964 онд Ховд аймгийн Булган суманд төрсөн. Ам бүл 7, эхнэр хүүхдүүдийн хамт амьдардаг. 1973-1983 онд Ховд аймгийн Булган сумын 10 жилийн дунд сургууль 1983-1988 онд Чехословак улсын Тээвэр харилцаа...</p>
             </div>
              <div class="col-md-4 ntAboutThumb">
                 <img src="images/about-1.jpg" alt="about-1"/> 
                 <h3>ЗАЛУУЧУУДАА ДЭМЖЬЕ</h3>
                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
              </div>
              <div class="col-md-4 ntAboutThumb">
                 <img src="images/about-2.jpg" alt="about-2"/> 
                 <h3>АЖ ҮЙЛДВЭРЭЭ ХӨГЖҮҮЛЬЕ</h3>
                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
              </div>
              <div class="col-md-4 ntAboutThumb">
                 <img src="images/about-3.jpg" alt="about-3"/> 
                 <h3>ШИНЭ ИРЭЭДҮЙ</h3>
                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.Aenean massa.</p>
              </div>
           </div>
        </div>
     </div>
      <div class="ntInnerSection ntRegister" id="register">
        <a href="#register" class="scroll ntWayPoint"> <i class="fas fa-angle-down"></i> </a> 
        <div class="ntRegisterTitle">
           <div class="container">
              <div class="row">
                 <div class="col-md-12">
                    <h3><b>ONLY 300 AVAILABLE SEATS </b> Register early to guarantee your attendance </h3>
                    <span class="btm-bar-white"></span> 
                    <p>This is an exclusive event for professionals. Complete the online form to register your interest and you will receive an email acknowledging your registration.</p>
                 </div>
              </div>
           </div>
        </div>
     </div>
      <div class="ntInnerSection ntSpeaker" id="speakers">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2>Мэдээ</h2>
                  <span class="btm-bar"></span>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="ntOurSpeakersItem">
                     <img src="images/speaker-1.jpg" alt="speaker-1"/> 
                     <div class="caption">
                        <div class="ntSuperTitle">Edil</div>
                        <h3>David </h3>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="ntOurSpeakersItem">
                     <img src="images/speaker-2.jpg" alt="speaker-2"/> 
                     <div class="caption">
                        <div class="ntSuperTitle">Payol</div>
                        <h3>Mark</h3>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="ntOurSpeakersItem">
                     <img src="images/speaker-3.jpg" alt="speaker-3"/> 
                     <div class="caption">
                        <div class="ntSuperTitle">Interactive</div>
                        <h3>Peterson</h3>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="ntOurSpeakersItem">
                     <img src="images/speaker-4.jpg" alt="speaker-4"/> 
                     <div class="caption">
                        <div class="ntSuperTitle">Cards</div>
                        <h3>Barnesn</h3>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="ntOurSpeakersItem">
                     <img src="images/speaker-5.jpg" alt="speaker-5"/> 
                     <div class="caption">
                        <div class="ntSuperTitle">DevTeam</div>
                        <h3>Max</h3>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="ntOurSpeakersItem">
                     <img src="images/speaker-6.jpg" alt="speaker-6"/> 
                     <div class="caption">
                        <div class="ntSuperTitle">Chipper</div>
                        <h3>Donald</h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="ntInnerSection ntSchedule" id="schedule">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2>Бичлэг</h2>
                  <span class="btm-bar"></span> 
                  <div class="col-md-10 ntSubTitle block-center">Below you'll find the schedule for Event4 2018. We'll keep this page regularly updated with all new speakers and sessions, so be sure to keep checking in! </div>
               </div>
            </div>
            {{-- <div class="row">
               <div class="col-md-12">
                  <ul class="nav nav-tabs ntScheduleTab">
                     <li><a data-toggle="tab" href="#day01" class="active">Day 01</a></li>
                     <li><a data-toggle="tab" href="#day02">Day 02</a></li>
                     <li><a data-toggle="tab" href="#day03">Day 03</a></li>
                     <li><a class="ntBtnDownloadSchedule" href="#">Download Full Schedule </a></li>
                  </ul>
                  <div class="tab-content ntTabContent">
                     <div id="day01" class="tab-pane fade in active show">
                        <div class="ntEvent">
                           <div class="ntEventTime">08:30 <span></span></div>
                           <div class="tnEventInfo">
                              <h3>Registration</h3>
                              <hr>
                           </div>
                        </div>
                        <div class="ntEvent extend">
                           <div class="ntEventTime">09:00 - 09:15 <span><i class="fa fa-angle-down"></i></span></div>
                           <div class="tnEventInfo">
                              <h3>Gathering & Welcome Speech</h3>
                              <div class="tnSpeakerName"><strong>David</strong><br>Founder of Edilta</div>
                              <div class="ntCaption">
                                 <div class="ntImage">
                                    <img src="images/speaker-1.jpg" alt="speaker 1"/> 
                                    <div class="ntSocialIcons"><a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="#0" target="_blank"><i class="fab fa-twitter"></i></a> <a href="#0" target="_blank"><i class="fab fa-linkedin-in"></i></a></div>
                                 </div>
                                 <div class="ntCaptionText">
                                    <p>Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla. Nunc commodo tellus diam, sed molestie quam fermentum varius. Etiam finibus lorem vel interdum volutpat. Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla.</p>
                                 </div>
                              </div>
                              <hr>
                           </div>
                        </div>
                        <div class="ntEvent extend">
                           <div class="ntEventTime">08:45 - 09:15 <span><i class="fa fa-angle-down"></i></span></div>
                           <div class="tnEventInfo">
                              <h3>Successful Marketing Strategy</h3>
                              <p class="tnSpeakerName"><strong>Mark</strong><br>Founder of Creative Agency</p>
                              <div class="ntCaption">
                                 <div class="ntImage">
                                    <img src="images/speaker-2.jpg" alt="speaker 2"/> 
                                    <div class="ntSocialIcons"><a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="#0" target="_blank"><i class="fab fa-twitter"></i></a> <a href="#0" target="_blank"><i class="fab fa-linkedin-in"></i></a></div>
                                 </div>
                                 <div class="ntCaptionText">
                                    <p>Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla. Nunc commodo tellus diam, sed molestie quam fermentum varius. Etiam finibus lorem vel interdum volutpat. Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla.</p>
                                 </div>
                              </div>
                              <hr>
                           </div>
                        </div>
                        <div class="ntEvent extend">
                           <div class="ntEventTime">08:45 - 09:15 <span><i class="fa fa-angle-down"></i></span></div>
                           <div class="tnEventInfo">
                              <h3>Getting Back Into The Deliverables Business</h3>
                              <p class="tnSpeakerName"><strong>Robin Meany</strong><br>Senior manager</p>
                              <div class="ntCaption">
                                 <div class="ntImage">
                                    <img src="images/speaker-3.jpg" alt="speaker 3"/> 
                                    <div class="ntSocialIcons"><a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="#0" target="_blank"><i class="fab fa-twitter"></i></a> <a href="#0" target="_blank"><i class="fab fa-linkedin-in"></i></a></div>
                                 </div>
                                 <div class="ntCaptionText">
                                    <p>Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla. Nunc commodo tellus diam, sed molestie quam fermentum varius. Etiam finibus lorem vel interdum volutpat. Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla.</p>
                                 </div>
                              </div>
                              <hr>
                           </div>
                        </div>
                        <div class="ntEvent">
                           <div class="ntEventTime">13:00 <span></span></div>
                           <div class="tnEventInfo">
                              <h3>Networking Break</h3>
                              <hr>
                           </div>
                        </div>
                        <div class="ntEvent extend">
                           <div class="ntEventTime">14:30 - 15:45 <span><i class="fa fa-angle-down"></i></span></div>
                           <div class="tnEventInfo">
                              <h3>Workshop: Successful Marketing Strategy</h3>
                              <p class="tnSpeakerName"><strong>Samantha Jonson</strong><br>Founder of Creative Agency </p>
                              <div class="ntCaption">
                                 <div class="ntImage">
                                    <img src="images/speaker-4.jpg" alt="speaker 4"/> 
                                    <div class="ntSocialIcons"><a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="#0" target="_blank" class="icoTwitter"><i class="fab fa-twitter"></i></a> <a href="#0" target="_blank" class="icoLinkedin"><i class="fab fa-linkedin-in"></i></a></div>
                                 </div>
                                 <div class="ntCaptionText">
                                    <p>Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla. Nunc commodo tellus diam, sed molestie quam fermentum varius. Etiam finibus lorem vel interdum volutpat. Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="day02" class="tab-pane fade">
                        <div class="ntEvent">
                           <div class="ntEventTime">08:30 <span></span></div>
                           <div class="tnEventInfo">
                              <h3>Registration</h3>
                              <hr>
                           </div>
                        </div>
                        <div class="ntEvent extend">
                           <div class="ntEventTime">09:00 - 09:15 <span><i class="fa fa-angle-down"></i></span></div>
                           <div class="tnEventInfo">
                              <h3>Gathering & Welcome Speech</h3>
                              <div class="tnSpeakerName"><strong>David</strong><br>Founder of Edilta</div>
                              <div class="ntCaption">
                                 <div class="ntImage">
                                    <img src="images/speaker-1.jpg" alt="speaker 1"/> 
                                    <div class="ntSocialIcons"><a href="#0" target="_blank" class="icoFacebook"><i class="fab fa-facebook-f"></i></a> <a href="#0" target="_blank" class="icoTwitter"><i class="fab fa-twitter"></i></a> <a href="#0" target="_blank" class="icoLinkedin"><i class="fab fa-linkedin-in"></i></a></div>
                                 </div>
                                 <div class="ntCaptionText">
                                    <p>Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla. Nunc commodo tellus diam, sed molestie quam fermentum varius. Etiam finibus lorem vel interdum volutpat. Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla.</p>
                                 </div>
                              </div>
                              <hr>
                           </div>
                        </div>
                        <div class="ntEvent">
                           <div class="ntEventTime">13:00 <span></span></div>
                           <div class="tnEventInfo">
                              <h3>Lunch Break</h3>
                              <hr>
                           </div>
                        </div>
                        <div class="ntEvent extend">
                           <div class="ntEventTime">08:45 - 09:15 <span><i class="fa fa-angle-down"></i></span></div>
                           <div class="tnEventInfo">
                              <h3>Successful Marketing Strategy</h3>
                              <p class="tnSpeakerName"><strong>Mark</strong><br>Founder of Creative Agency</p>
                              <div class="ntCaption">
                                 <div class="ntImage">
                                    <img src="images/speaker-2.jpg" alt="speaker 2"/> 
                                    <div class="ntSocialIcons"><a href="#0" target="_blank" class="icoFacebook"><i class="fab fa-facebook-f"></i></a> <a href="#0" target="_blank" class="icoTwitter"><i class="fab fa-twitter"></i></a> <a href="#0" target="_blank" class="icoLinkedin"><i class="fab fa-linkedin-in"></i></a></div>
                                 </div>
                                 <div class="ntCaptionText">
                                    <p>Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla. Nunc commodo tellus diam, sed molestie quam fermentum varius. Etiam finibus lorem vel interdum volutpat. Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla.</p>
                                 </div>
                              </div>
                              <hr>
                           </div>
                        </div>
                        <div class="ntEvent extend">
                           <div class="ntEventTime">14:30 - 15:45 <span><i class="fa fa-angle-down"></i></span></div>
                           <div class="tnEventInfo">
                              <h3>Workshop: Successful Marketing Strategy</h3>
                              <p class="tnSpeakerName"><strong>Samantha Jonson</strong><br>Founder of Creative Agency </p>
                              <div class="ntCaption">
                                 <div class="ntImage">
                                    <img src="images/speaker-4.jpg" alt="speaker 4"/> 
                                    <div class="ntSocialIcons"><a href="#0" target="_blank" class="icoFacebook"><i class="fab fa-facebook-f"></i></a> <a href="#0" target="_blank" class="icoTwitter"><i class="fab fa-twitter"></i></a> <a href="#0" target="_blank" class="icoLinkedin"><i class="fab fa-linkedin-in"></i></a></div>
                                 </div>
                                 <div class="ntCaptionText">
                                    <p>Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla. Nunc commodo tellus diam, sed molestie quam fermentum varius. Etiam finibus lorem vel interdum volutpat. Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="day03" class="tab-pane fade">
                        <div class="ntEvent">
                           <div class="ntEventTime">15:30 <span></span></div>
                           <div class="tnEventInfo">
                              <h3>Tea Time</h3>
                              <hr>
                           </div>
                        </div>
                        <div class="ntEvent extend">
                           <div class="ntEventTime">09:00 - 09:15 <span><i class="fa fa-angle-down"></i></span></div>
                           <div class="tnEventInfo">
                              <h3>Gathering & Welcome Speech</h3>
                              <div class="tnSpeakerName"><strong>David</strong><br>Founder of Edilta</div>
                              <div class="ntCaption">
                                 <div class="ntImage">
                                    <img src="images/speaker-1.jpg" alt="speaker 1"/> 
                                    <div class="ntSocialIcons"><a href="#0" target="_blank" class="icoFacebook"><i class="fab fa-facebook-f"></i></a> <a href="#0" target="_blank" class="icoTwitter"><i class="fab fa-twitter"></i></a> <a href="#0" target="_blank" class="icoLinkedin"><i class="fab fa-linkedin-in"></i></a></div>
                                 </div>
                                 <div class="ntCaptionText">
                                    <p>Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla. Nunc commodo tellus diam, sed molestie quam fermentum varius. Etiam finibus lorem vel interdum volutpat. Suspendisse potenti. Duis non sem nisi. Phasellus iaculis placerat neque id fringilla.</p>
                                 </div>
                              </div>
                              <hr>
                           </div>
                        </div>
                        <div class="ntEvent">
                           <div class="ntEventTime">16:00 <span></span></div>
                           <div class="tnEventInfo">
                              <h3>Closing Remarks</h3>
                              <hr>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> --}}
         </div>
      </div>
      {{-- <div class="ntInnerSection ntSponsorship" id="sponsorship">
         <a href="#sponsorship" class="scroll ntWayPoint"><i class="fas fa-angle-down"></i> </a> 
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2>Sponsorship</h2>
                  <span class="btm-bar"></span> 
                  <div class="col-md-10 ntSubTitle block-center">The Event4 Conference has a variety of ticket types to suit the variety of designers out there. Find out the best option for you and your team! </div>
               </div>
               <div class="col-12 col-md-12 col-lg-4">
                  <div class="ntPackages">
                     <div class="ntPackagesSuperTitle">
                        <h4>Silver Sponsor</h4>
                        <h3><i class="fas fa-dollar-sign"></i>25,000</h3>
                        <span>5 member can attend</span>
                     </div>
                     <div class="ntPackagesDetails">
                        <ul>
                           <li><b>Company logo</b> at the main reception</li>
                           <li><b>Opportunity</b> to have your advertisement</li>
                           <li><b>Company logo</b> on presentation screens</li>
                           <li><b>Opportunity</b> to distribute corporate</li>
                        </ul>
                        <a href="#0" class="btn btn-ntPrimaryBorder ntMedium">Contact Us</a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-12 col-lg-4">
                  <div class="ntPackages">
                     <div class="ntPackagesSuperTitle">
                        <h4>Gold Sponsor</h4>
                        <h3><i class="fas fa-dollar-sign"></i>35,000</h3>
                        <span>10 member can attend</span>
                     </div>
                     <div class="ntPackagesDetails">
                        <ul>
                           <li><b>Company logo</b> at the main reception</li>
                           <li><b>Opportunity</b> to have your advertisement</li>
                           <li><b>Company logo</b> on presentation screens</li>
                           <li><b>Opportunity</b> to distribute corporate</li>
                        </ul>
                        <a href="#0" class="btn btn-ntPrimaryBorder ntMedium">Contact Us</a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-12 col-lg-4">
                  <div class="ntPackages">
                     <div class="ntPackagesSuperTitle">
                        <h4>Platinum Sponsor</h4>
                        <h3><i class="fas fa-dollar-sign"></i>50,000</h3>
                        <span>20 member can attend</span>
                     </div>
                     <div class="ntPackagesDetails">
                        <ul>
                           <li><b>Company logo</b> at the main reception</li>
                           <li><b>Opportunity</b> to have your advertisement</li>
                           <li><b>Company logo</b> on presentation screens</li>
                           <li><b>Opportunity</b> to distribute corporate</li>
                        </ul>
                        <a href="#0" class="btn btn-ntPrimaryBorder ntMedium">Contact Us</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      {{-- <div class="ntInnerSection ntSponsors" id="sponsors">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2>Sponsors & Partners</h2>
                  <span class="btm-bar"></span> 
                  <div class="col-md-10 ntSubTitle block-center">We wouldn't be able to host our conference without help from these amazing companies. A huge thanks to all our sponsors and partners! </div>
               </div>
            </div>
            <div class="col-md-12">
               <div class="row">
                  <div class="col-md-3">
                     <div class="ntSponsorList">
                        <a href="#0">
                           <div class="btImage"><img src="images/logo-event-1.png" alt="logo-event-1"/></div>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="ntSponsorList">
                        <a href="#0">
                           <div class="btImage"><img src="images/logo-event-2.png" alt="logo-event-2"/></div>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="ntSponsorList">
                        <a href="#0">
                           <div class="btImage"><img src="images/logo-event-3.png" alt="logo-event-3"/></div>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="ntSponsorList">
                        <a href="#0">
                           <div class="btImage"><img src="images/logo-event-4.png" alt="logo-event-4"/></div>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="ntSponsorList">
                        <a href="#0">
                           <div class="btImage"><img src="images/logo-event-5.png" alt="logo-event-5"/></div>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="ntSponsorList">
                        <a href="#0">
                           <div class="btImage"><img src="images/logo-event-1.png" alt="logo-event-1"/></div>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="ntSponsorList">
                        <a href="#0">
                           <div class="btImage"><img src="images/logo-event-2.png" alt="logo-event-2"/></div>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="ntSponsorList">
                        <a href="#0">
                           <div class="btImage"><img src="images/logo-event-3.png" alt="logo-event-3"/></div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <div class="ntInnerSection ntRegister" id="register">
         <a href="#register" class="scroll ntWayPoint"> <i class="fas fa-angle-down"></i> </a> 
         <div class="ntRegisterTitle">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <h3><b>ONLY 300 AVAILABLE SEATS </b> Register early to guarantee your attendance </h3>
                     <span class="btm-bar-white"></span> 
                     <p>This is an exclusive event for professionals. Complete the online form to register your interest and you will receive an email acknowledging your registration.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      {{-- <div class="ntInnerSection ntRegisterForm">
         <div class="container">
            <h2>Register Now</h2>
            <span class="btm-bar"></span> 
            <div class="col-md-10 ntSubTitle block-center">A limited number of passes are now available for $150 ex. VAT, but for a shot time only. Register now and we'll contact you with more details when it's time to complete your registration. </div>
            <form action="php/form.php" method="post" id="registerForm">
               <div class="row">
                  <div class="col-md-6"><input type="text" name="reg_name" placeholder="Full Name" required/></div>
                  <div class="col-md-6"><input type="text" name="reg_jobtitle" placeholder="Job Title" required/></div>
                  <div class="col-md-6"><input type="email" name="reg_email" placeholder="Email" required/></div>
                  <div class="col-md-6"><input type="text" name="reg_company" placeholder="Company Name" required/></div>
                  <div class="col-md-6"><input type="tel" name="reg_contact" placeholder="Contact No" required></div>
                  <div class="col-md-6"><input type="number" name="reg_quantity" placeholder="Quantity" required/></div>
                  <div class="col-md-12 arrow">
                     <select name="reg_attend" required>
                        <option disabled selected value="">I will attend</option>
                        <option value="Workshop">Workshop</option>
                        <option value="Conference">Conference</option>
                        <option value="Workshop + Conference">Workshop + Conference</option>
                     </select>
                  </div>
                  <div class="col-md-12">
                     <div class="ntSubmit"> <button type="submit" class="btn btn-ntPrimaryFull ntMedium">Register Now</button> <button type="reset" class="btn btn-ntPrimaryBorder ntMedium">Clear</button> </div>
                  </div>
               </div>
            </form>
         </div>
      </div> --}}
      <div class="ntContact" id="contact">
         <div class="ntContactDetails">
            <h2>Copenhagen,<br>Conference <br>hall</h2>
            <span class="line"></span> 
            <div class="ntSubTitle">Events are held in the Main hall, workshops in Second floor meeting rooms</div>
            <h5>Address</h5>
            <p>Times Square, Suite 3301, New York</p>
            <h5>Phone</h5>
            <p>+1 212 619 5200</p>
            <h5>Email</h5>
            <p>info@example.com</p>
         </div>
         <div id="map"></div>
         <div class="ntSubscribe">
            <div class="form">
               {{-- <img src="images/curve-left.svg" class="ntSubscribeLeft" alt="curve-left"/> 
               {{-- <form action="#" method="post"><input type="email" name="email" value="Your Email Address" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/> <button type="submit">notify</button> </form> --}}
               {{-- <img src="images/curve-right.svg" class="ntSubscribeRight" alt="curve-right"/> --}}
            </div>
         </div>
      </div>
      {{-- <div class="ntInnerSection ntCommunity">
         <div class="container">
            <div class="col-md-12">
               <h2>Join Our Community</h2>
               <span class="btm-bar-white"></span> 
               <div class="ntSubTitle col-md-8">At Event4 2018 we create experiences everyday. Join our community and feel free to reach out to us via our social profiles </div>
               <ul class="ntSocialIcons">
                  <li><a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#0" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#0" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a href="#0" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#0" target="_blank"><i class="fab fa-youtube"></i></a></li>
                  <li><a href="#0" target="_blank"><i class="fab fa-instagram"></i></a></li>
               </ul>
            </div>
         </div>
      </div> --}}
      <footer class="ntInnerSection">
         <div class="container">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-md-2 col-lg-1">
                     <nav class="footnav">
                        <ul>
                           <li><a href="#0"> About</a></li>
                           <li><a href="#0"> Contact</a></li>
                           <li><a href="#0"> Privacy</a></li>
                           <li><a href="#0"> Terms</a></li>
                        </ul>
                     </nav>
                  </div>
                  <div class="col-md-4 col-lg-3">
                     <h4>Event4</h4>
                     <p>A homegrown design studio from Berlin. We create beatuful identities & amazing logo for modern business.</p>
                  </div>
                  <div class="col-md-3 col-lg-6">
                     <h4>©</h4>
                     <p>Copyright 2018. All rights reserved.<br><b>Event4</b></p>
                  </div>
                  <div class="col-md-3 col-lg-2"><a href="#0"> <img class="foot-logo" alt="Event4" title="Event4" src="images/foot-logo.png"/> </a></div>
               </div>
            </div>
         </div>
      </footer>
      <script src="js/jquery-3.3.1.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/jquery.countimator.js"></script>
      <script src="js/clip-text.js"></script>
      <script src="js/jquery.validate.js"></script>
      <script src="js/jquery.form.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/map.js"></script>
      <script src="js/parallax.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKpoDj35ccY2QKwMkJKD1qsV9PtOiV5Ss&callback=myMap"></script> 
@endsection