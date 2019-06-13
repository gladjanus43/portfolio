<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gijs Bijvoets</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Nunito|Source+Sans+Pro:600&display=swap" rel="stylesheet">

    <script src="js/lottie.js"></script>
    <script src="js/index.js"></script>


</head>

<body>
    <header>
        <div class="head-top">
            <div class="head-logo">
                <img src="{{asset('images/logo-gijs-circle.svg')}}" alt="" srcset="">
            </div>

            <div class="head-container">
                <h1>Gijs Bijvoets</h1>
                <div class="buttons">
                    <a href="#" class="button">My Work</a>
                    <a href="#" class="button">Contact</a>
                </div>

                {{-- <div class="text-c mt-l">This site is a mini summary of my life!</div> --}}

                <div class="icons mt-l">
                    <div class="icon">
                        <img src="{{asset('images/icons/football.png')}}" alt="">
                    </div>
                    <div class="icon">
                        <img src="{{asset('images/icons/web.png')}}" alt="">
                    </div>
                    <div class="icon">
                        <img src="{{asset('images/icons/windsurfing.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="head-bottom">
            <div class="arrow-circle">
                <div class="triangle"></div>
            </div>
        </div>
    </header>

    <div class="about-container">
        <div class="about-items">
            <div class="about-pic">
                <img src="{{asset('images/blackwhite.png')}}" alt="" srcset="">
            </div>

            <div class="about-text">
                <h2>About me</h2>
                <p class="p">
                    I am 20 years old and I am enjoying life to the fullest. Besides studying CMGT at Rotterdam
                    University of applied sciences I also love to go to festivals and enjoy the occasional drink with
                    some friends. I also play soccer 3 times a week. When I still have some time left and there is a
                    breeze I like
                    to go windsurfing!
                </p>
            </div>
        </div>
        <div class="devider">
            <img src="{{asset('images/devider.svg')}}" alt="">
        </div>
    </div>

    <div class="school">
        <div class="vert-align">
            <div class="school-container">
                <h2>School</h2>
                <p class="p">CMGT, Also known as creative media and game technologies is a study based in Rotterdam. The
                    main goal of the study is to learn programming. Each period we learn a new programming language or
                    we
                    continue with something that we’ve already learned. Nothing crazy there! Where our study differs
                    from
                    other studies is that the projects we do are broad. This means that we learn how to design products,
                    choose a target audience, talk to stakeholders, develop, test and often discuss the latest trends in
                    technologies. It is a broad study and it forces you to be very independent.
                </p>
                <div class="cards">
                    @foreach ($cards as $card)
                    <div class="card">
                            <div class="card-img">
                                <img class="card-img" src="{{asset('images/icons/' . $card->cards)}}" />
                            </div>
                            <div class="card-content">
                                <h3>{{$card->title}}</h3>
                                <p class="p-small">
                                    {{$card->description}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</body>

</html>