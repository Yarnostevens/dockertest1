<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Sjtank Op</title>
</head>
<body>
<div class="h-36 grid grid-cols-2 content-center bg-black gap-3 lg:grid-cols-3">
    <div class="flex items-center justify-center"><img src="{{URL('/images/Group 104.png')}}"
                                                       class="float-right h-3/5 sm:mr-8 md:h-4/5 xl:h-full"></div>
    <p class="uppercase row-start-1 col-span-2 text-3xl font-bold text-white text-center my-auto lg:col-span-1 lg:row-start-auto">
        Vrijdag 7 oktober benefiet avond</p>
    <div class="flex items-center justify-center"><a
            class="font-bold py-2 text-white h-10 text-center w-44 hover:bg-red-400 active:bg-red-500 bg-red-600 float-left rounded-full sm:py-4 sm:text-2xl sm:ml-8 sm:h-16"
            target="_blank"
            href="https://www.tickettransit.com/nl/webshop/start/Mzk=?fbclid=IwAR392908-x4bg5M_uysPZj26X90iMAiEXU0pJDDz37KzdXCTN1SfJhaBUkY">Tickets</a>
    </div>
</div>

<header class="relative h-full header">
    <img
        class=" w-7/12 absolute top-16 left-1/2 transform -translate-x-1/2 -translate-y-1/2 sm:top-20 md:top-28 lg:top-40 xl:top-44 2xl:top-52"
        src="{{URL('/images/Group 100.png')}}">
    <img class="w-full" src="{{URL('/images/Mask Group 1.png')}}">
    <div class="header__host">
        <p class="text-white uppercase font-bold md:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl">Gastheer <span class="text-red-600">Arie koomen +</span>
            vrienden</p>
        <p class="text-white uppercase text-center font-bold md:text-sm xl:text-base 2xl:text-lg">bekend van de lama's</p>
    </div>


    <div class="header__pop-up">
        <p class="text-red-600 md:text-3xl lg:text-4xl xl:text-6xl 2xl:text-8xl">Tickets?</p>
        <p class="text-red-600 text-normal lg:text-xl xl:text-3xl 2xl:text-5xl">
            Bestel ze
            <a class="underline"
               href="https://www.tickettransit.com/nl/webshop/start/Mzk=?fbclid=IwAR392908-x4bg5M_uysPZj26X90iMAiEXU0pJDDz37KzdXCTN1SfJhaBUkY"
            >hier</a>
        </p>
        <p class="-mt-2 text-red-600 mb-1 lg:mb-4 lg:text-xl xl:text-3xl 2xl:text-5xl">vandaag nog</p>
        <p class="mb-1 md:text-xs lg:mb-2 lg:text-base xl:text-xl 2xl:text-3xl">Vrijdag 7 oktober 2022</p>
        <p class="md:text-xs lg:text-base xl:text-xl 2xl:text-3xl">kasteel daelenbroeck</p>
        <p class="mb-1 md:text-xs lg:mb-2 lg:text-base xl:text-xl 2xl:text-3xl">herkenbosch</p>
        <p class="md:text-xs lg:text-base xl:text-xl 2xl:text-3xl">aanvang 20.00 uur</p>
    </div>
</header>

<body class="content-center text-center">
    <p class="mt-20 font-bold uppercase text-4xl p-20 lg:p-32 lg:text-6xl">Stand up comedy avond<br>
        <span class="text-red-600">lachen voor een goed doel</span>
    </p>
    <p class="font-bold w-fit mx-auto text-center text-4xl lg:text-6xl">Alweer de 6ᵉ editie</p>
    
</body>

<footer class="grid grid-cols-1 gap-10 mt-10">
    <a target="_blank"
       href="https://www.tickettransit.com/nl/webshop/start/Mzk=?fbclid=IwAR392908-x4bg5M_uysPZj26X90iMAiEXU0pJDDz37KzdXCTN1SfJhaBUkY"
       class="footer__button hover:bg-red-400 active:bg-red-500 bg-red-600">Tickets bestel je hier</a>
    <a target="_blank" href="https://www.facebook.com/SjtankOp"
       class="footer__button hover:bg-blue-700 active:bg-blue-800 bg-blue-900">Volg ons op Facebook</a>
    <div class="h-8 lg:h-16 xl:h-24 2xl:h-32"></div>
</footer>
</body>
</html>
