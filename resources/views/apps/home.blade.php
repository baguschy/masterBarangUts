@extends('layouts.app')
@section('content')
    <section class="hero-banner">
        <div class="row">
            <div class="col-6">
                <div class="dash top-distance-dash-hero"></div>
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
                    <p>This is the main page for the inventory website, to view inventory data, please click the button below</p>
                </div>
                <a href="{{ route('item.index') }}" type="button" class="btn btn-light btn-view-data">View Data <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-6">
                <img src="{{ Vite::asset('resources/images/home/figure-profile.png') }}" class="figure-profile" alt="figure profile">
            </div>
        </div>
    </section>
@endsection
