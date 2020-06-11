@extends('layouts.user.app')

@section('content')
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
                        </ul>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
        </header>
        <div class="container">
        <div class="mainTitle">
            <h1 class="cd-headline clip is-full-width"><span>АЖ ҮЙЛДВЭРИЙН ГАВЪЯАТ АЖИЛТАН, МОНГОЛ УЛСЫН ЗӨВЛӨХ ИНЖЕНЕР, ШИЛДЭГ ЗОХИОН БҮТЭЭГЧ</span> <span class="cd-words-wrapper"> <b class="is-visible">Д.Жаргалсайхан</b> </span></h1>
            <span class="line"></span> 
            <p>2020 оны УИХ-н сонгуулийн 26-р тойрог, Баянгол дүүргээс нэр дэвшигч</p>
        </div>
        </div>
        <a href="#about"  id="about" class="scroll ntWayPoint"><i class="fas fa-angle-down bounce animated"></i></a>
    </div>
    <div class="ntInnerSection ntAbout">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h2 style="padding-top: 20px;">Намтар</h2>
            <span class="btm-bar"></span> 
            <p class="col-md-12 text-center block-center">
            @foreach($about as $about)
               {!! $about->body !!}
            @endforeach
            </p>
            </div>
            <div class="col-md-4 ntAboutThumb">
                <img src="images/about-1.png" alt="about-1"/> 
                {{-- <h3>ЗАЛУУЧУУДАА ДЭМЖЬЕ</h3>
                <p>Lorem</p> --}}
            </div>
            <div class="col-md-4 ntAboutThumb">
                <img src="images/about-2.png" alt="about-2"/> 
                {{-- <h3>АЖ ҮЙЛДВЭРЭЭ ХӨГЖҮҮЛЬЕ</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p> --}}
            </div>
            <div class="col-md-4 ntAboutThumb">
                <img src="images/about-3.png" alt="about-3"/> 
                {{-- <h3>ШИНЭ ИРЭЭДҮЙ</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.Aenean massa.</p> --}}
            </div>
        </div>
    </div>
    </div>
    <div class="ntInnerSection ntRegister">
    <a href="#register" class="scroll ntWayPoint"> <i class="fas fa-angle-down"></i> </a> 
    <div class="ntRegisterTitle">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h3><b>МОНГОЛ УЛСАД ЦОО ШИНЭ ИНЖЕНЕРЧЛЭЛ ХИЙХ ЦАГ НЬ БОЛСОН... </b> </h3>
                    {{-- Register early to guarantee your attendance  --}}
                <span class="btm-bar-white" id="speakers"></span> 
                {{-- <p>This is an exclusive event for professionals. Complete the online form to register your interest and you will receive an email acknowledging your registration.</p> --}}
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="ntInnerSection ntSpeaker">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 style="padding-top: 20px;">Мэдээ</h2>
                <span class="btm-bar"></span>
            </div>
            @foreach($posts as $post)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="ntOurSpeakersItem">
                    <img src="{{ asset('images/' . $post->image ) }}" data-toggle="modal" data-target="#myModal{{$post->id}}">
                    <div class="caption">
                    <h3>{{$post->title}}</h3>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal{{$post->id}}">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">{{$post->title}}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <center><img src="{{ asset('images/' . $post->image ) }}" style="width: 300px; height: 300px"></center>
                
                <!-- Modal body -->
                <div class="modal-body p" style="overflow-y:auto;">
                    {!! $post->body !!}
                </div>
                
            </div>
            </div>
        </div>
            @endforeach
        </div>
        </div>
    </div>
    <div class="ntInnerSection ntSchedule">
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="schedule" style="padding-top: 20px;">Бичлэг</h2>
                <div style="padding-top: 20px;" class="row">
                    @foreach($videos as $video)
                    <div class="col-sm-6">
                        <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 2%">
                            {!!$video->embed_code!!}
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pagination_wrapper" style="padding-top: 10px">
                    <ul class="pagination justify-content-center">
                        {{ $videos->appends(['sort' => 'votes'])->links() }}
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
    <footer id="contact" class="ntInnerSection" style="background-color: #f87b07">
        <div class="container">
        <div class="col-md-12">
            <div class="row">                  
                <div>
                    <br>
                    <h3 style="color: white">Холбоо барих</h3><br>
                    
                    <div class="row">
                    <div class="col-sm-12" style="color: white"><span class="glyphicon glyphicon-map-marker"></span> Монгол улс, Улаанбаатар хот</div><br><br>
                    </div>
                    <div class="row">
                    <div class="col-sm-10" style="color: white"><span class="glyphicon glyphicon-earphone"></span> +976 99117292</div><br><br>
                    </div>
                    <div class="row">
                    <div class="col-sm-12" style="color: white"><span class="glyphicon glyphicon-envelope"></span> jargalsaikhan@president.mn</div>
                    </div>
                </div>
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