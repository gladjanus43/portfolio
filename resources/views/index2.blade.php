<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gijs Bijvoets</title>
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito|Source+Sans+Pro:600&display=swap" rel="stylesheet">  --}}

    <script src="js/lottie.js"></script>

    <style>
        #logo{
            width: 900px;
            margin: auto;
            
        }
    </style>

</head>
<body>
    <div id="logo"></div>

    <script src="js/lottie.js"></script>
    <script>
        lottie.loadAnimation({
            container: document.getElementById('logo'), // the dom element that will contain the animation
            renderer: 'svg',
            loop: false,
            autoplay: true,
            path: 'logo.json' // the path to the animation json
        });
    </script>
</body>
</html>