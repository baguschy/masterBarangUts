<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    @vite([
        'resources/sass/app.scss',
        'resources/css/app.css'
    ])
</head>
<body>
    @include('layouts.components.navbar')
    {{-- content --}}
    <div class="main-content">
        <section class="hero-banner">
            <div class="row">
                <div class="col-6">
                    <div class="dash"></div>
                    <div class="greeting">
                        Hello <span class="special-greet">There</span>
                    </div>
                    <div class="main-title">
                        <p>I'm Bagus Cahyo</p>
                        <p>QA Engineer</p>
                    </div>
                    <div class="short-desc">
                        <p>I'm quality assurance engineer based in Surabaya, and I'm very passionate <br>
                            and dedicated to my work.
                        </p>
                    </div>
                    <button type="button" class="btn btn-light btn-download-cv">Download CV <i class="bi bi-arrow-right"></i></button>
                </div>
                <div class="col-6">
                    <img src="{{ Vite::asset('resources/images/home/figure-profile.png') }}" class="figure-profile" alt="figure profile">
                </div>
            </div>
        </section>
    </div>



    @vite('resources/js/app.js')
</body>
</html>
