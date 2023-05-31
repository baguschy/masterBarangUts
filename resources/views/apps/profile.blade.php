@extends('layouts.app')
@section('content')
    <section class="hero-banner">
        <div class="row">
            <div class="col-5 mt-5">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ Vite::asset('resources/images/profile/figure-profile-1.png') }}" class="rounded img-fluid figure-profile-about" alt="figure profile about">
                    </div>
                    <div class="col-6">
                        <img src="{{ Vite::asset('resources/images/profile/figure-profile-2.png') }}" class="rounded img-fluid figure-profile-project-qa" alt=""><br>
                        <img src="{{ Vite::asset('resources/images/profile/figure-profile-3.png') }}" class="rounded img-fluid figure-profile-project-develop" alt="">
                    </div>
                </div>
            </div>
            <div class="col-7 custom-margin-left">
                <div class="dash distance-dash-profile"></div>
                <div class="greeting">
                    About <span class="special-greet">Me</span>
                </div>
                <div class="title-profile">
                    <p>I Enjoy Solving Problems <br>
                        With Scalable Solutions
                    </p>
                </div>
                <div class="desc-profile">
                    <p>My name is Bagus Cahyo Sulistiyo, I am currently 21 years old. I live in Sawo Bringin, Surabaya. I currently work in a quality assurance position, but I also have the skills to develop websites using the Laravel framework. In quality assurance, I have experience in testing applications on website learning management systems for repairs</p>
                    <p>I have experience in developing websites for 3 years, during that time I have created a website for cooperatives at the Surabaya Telkom Institute of Technology and currently I am creating a website for data collection at the Surabaya city social service</p>
                    <a href="https://baguscs.github.io/myProfile/" target="_blank" type="button" class="btn btn-light btn-more-about-me">More About Me <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4 mr-4 mt-5">
            <div class="col custom-width-card">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-laravel"></div>
                    </div>
                </div>
            </div>
            <div class="col custom-width-card">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-bs"></div>
                    </div>
                </div>
            </div>
            <div class="col custom-width-card">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-sql"></div>
                    </div>
                </div>
            </div>
            <div class="col custom-width-card">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-react"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js-libraries')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush
@push('js')
    @vite('resources/js/charts.js')
@endpush
