@extends('user.layouts.appUser')

@section('content')
    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img bg-fixed" data-background="{{ asset('') }}assets_user/images/banner/banner01.jpg">
        </div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title cd-headline clip">
                    <span class="d-block">book your</span> tickets for
                    <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible">Movie</b>
                        <b>Event</b>
                        <b>Sport</b>
                    </span>
                </h1>
                <p>
                    Safe, secure, reliable ticketing.Your ticket to live entertainment!
                </p>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Ticket-Search========== -->
    <section class="search-ticket-section padding-top pt-lg-0">
        <div class="container">
            <div class="search-tab bg_img" data-background="{{ asset('') }}assets_user/images/ticket/ticket-bg01.jpg">
                <div class="row align-items-center mb--20">
                    <div class="col-lg-6 mb-20">
                        <div class="search-ticket-header">
                            <h6 class="category">welcome to Boleto</h6>
                            <h3 class="title">what are you looking for</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-20">
                        <ul class="tab-menu ticket-tab-menu">
                            <li class="active">
                                <div class="tab-thumb">
                                    <img src="{{ asset('') }}assets_user/images/ticket/ticket-tab01.png"
                                        alt="ticket" />
                                </div>
                                <span>movie</span>
                            </li>
                            <li>
                                <div class="tab-thumb">
                                    <img src="{{ asset('') }}assets_user/images/ticket/ticket-tab02.png"
                                        alt="ticket" />
                                </div>
                                <span>events</span>
                            </li>
                            <li>
                                <div class="tab-thumb">
                                    <img src="{{ asset('') }}assets_user/images/ticket/ticket-tab03.png"
                                        alt="ticket" />
                                </div>
                                <span>sports</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-area">
                    <div class="tab-item active">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search fo Movies" />
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets_user/images/ticket/city.png" alt="ticket" />
                                </div>
                                <span class="type">city</span>
                                <select class="select-bar">
                                    <option value="london">London</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets_user/images/ticket/date.png" alt="ticket" />
                                </div>
                                <span class="type">date</span>
                                <select class="select-bar">
                                    <option value="26-12-19">23/10/2019</option>
                                    <option value="26-12-19">24/10/2019</option>
                                    <option value="26-12-19">25/10/2019</option>
                                    <option value="26-12-19">26/10/2019</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets_user/images/ticket/cinema.png" alt="ticket" />
                                </div>
                                <span class="type">cinema</span>
                                <select class="select-bar">
                                    <option value="Awaken">Awaken</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="tab-item">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search fo Events" />
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets_user/images/ticket/city.png" alt="ticket" />
                                </div>
                                <span class="type">city</span>
                                <select class="select-bar">
                                    <option value="london">London</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets_user/images/ticket/date.png" alt="ticket" />
                                </div>
                                <span class="type">date</span>
                                <select class="select-bar">
                                    <option value="26-12-19">23/10/2019</option>
                                    <option value="26-12-19">24/10/2019</option>
                                    <option value="26-12-19">25/10/2019</option>
                                    <option value="26-12-19">26/10/2019</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets_user/images/ticket/cinema.png" alt="ticket" />
                                </div>
                                <span class="type">event</span>
                                <select class="select-bar">
                                    <option value="angular">angular</option>
                                    <option value="startup">startup</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="Last-First">Last-First</option>
                                    <option value="wish">wish</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="tab-item">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                <input type="text" placeholder="Search fo Sports" />
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets_user/images/ticket/city.png" alt="ticket" />
                                </div>
                                <span class="type">city</span>
                                <select class="select-bar">
                                    <option value="london">London</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets_user/images/ticket/date.png" alt="ticket" />
                                </div>
                                <span class="type">date</span>
                                <select class="select-bar">
                                    <option value="26-12-19">23/10/2019</option>
                                    <option value="26-12-19">24/10/2019</option>
                                    <option value="26-12-19">25/10/2019</option>
                                    <option value="26-12-19">26/10/2019</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{ asset('') }}assets_user/images/ticket/cinema.png" alt="ticket" />
                                </div>
                                <span class="type">sports</span>
                                <select class="select-bar">
                                    <option value="football">football</option>
                                    <option value="cricket">cricket</option>
                                    <option value="cabadi">cabadi</option>
                                    <option value="madrid">madrid</option>
                                    <option value="gadon">gadon</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Ticket-Search========== -->

    <!-- ==========Movie-Section========== -->
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="left">
                        <h2 class="title">movies</h2>
                        <p>Be sure not to miss these Movies today.</p>
                    </div>
                    <ul class="tab-menu">
                        <li class="active">now showing</li>
                        <li>coming soon</li>
                        <li>exclusive</li>
                    </ul>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/movie/movie01.jpg"
                                                alt="movie" />
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">alone</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/tomato.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/cake.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/movie/movie02.jpg"
                                                alt="movie" />
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">mars</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/tomato.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/cake.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/movie/movie03.jpg"
                                                alt="movie" />
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">venus</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/tomato.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/cake.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/movie/movie04.jpg"
                                                alt="movie" />
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">horror night</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/tomato.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/cake.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/movie/movie01.jpg"
                                                alt="movie" />
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">alone</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/tomato.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/cake.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/movie/movie02.jpg"
                                                alt="movie" />
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">mars</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/tomato.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/cake.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/movie/movie03.jpg"
                                                alt="movie" />
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">venus</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/tomato.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/cake.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/movie/movie04.jpg"
                                                alt="movie" />
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">horror night</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/tomato.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/cake.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/movie/movie01.jpg"
                                                alt="movie" />
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">alone</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/tomato.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/cake.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/movie/movie02.jpg"
                                                alt="movie" />
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">mars</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/tomato.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/cake.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/movie/movie03.jpg"
                                                alt="movie" />
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">venus</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/tomato.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/cake.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/movie/movie04.jpg"
                                                alt="movie" />
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">horror night</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/tomato.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{ asset('') }}assets_user/images/movie/cake.png"
                                                        alt="movie" />
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Movie-Section========== -->

    <!-- ==========Event-Section========== -->
    <section class="event-section padding-top padding-bottom bg-four">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="left">
                        <h2 class="title">events</h2>
                        <p>Be sure not to miss these Event today.</p>
                    </div>
                    <ul class="tab-menu">
                        <li class="active">now showing</li>
                        <li>coming soon</li>
                        <li>exclusive</li>
                    </ul>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/event/event01.jpg"
                                                alt="event" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">Digital Economy Conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/event/event02.jpg"
                                                alt="event" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">web design conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/event/event03.jpg"
                                                alt="event" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">digital thinkers meetup</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/event/event04.jpg"
                                                alt="event" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">world digital conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/event/event01.jpg"
                                                alt="event" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">Digital Economy Conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/event/event02.jpg"
                                                alt="event" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">web design conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/event/event03.jpg"
                                                alt="event" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">digital thinkers meetup</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/event/event04.jpg"
                                                alt="event" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">world digital conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/event/event01.jpg"
                                                alt="event" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">Digital Economy Conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/event/event02.jpg"
                                                alt="event" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">web design conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/event/event03.jpg"
                                                alt="event" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">digital thinkers meetup</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/event/event04.jpg"
                                                alt="event" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">world digital conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Event-Section========== -->

    <!-- ==========Sports-Section========== -->
    <section class="sports-section padding-top padding-bottom">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="left">
                        <h2 class="title">sports</h2>
                        <p>Be sure not to miss these Sports today.</p>
                    </div>
                    <ul class="tab-menu">
                        <li class="active">now showing</li>
                        <li>coming soon</li>
                        <li>exclusive</li>
                    </ul>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/sports/sports01.jpg"
                                                alt="sports" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">football league tournament</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/sports/sports02.jpg"
                                                alt="sports" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">world cricket league 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/sports/sports03.jpg"
                                                alt="sports" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">basket ball league tournament</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/sports/sports04.jpg"
                                                alt="sports" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">world badminton league 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/sports/sports01.jpg"
                                                alt="sports" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">football league tournament</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/sports/sports02.jpg"
                                                alt="sports" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">world cricket league 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/sports/sports03.jpg"
                                                alt="sports" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">basket ball league tournament</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/sports/sports04.jpg"
                                                alt="sports" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">world badminton league 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/sports/sports01.jpg"
                                                alt="sports" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">football league tournament</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/sports/sports02.jpg"
                                                alt="sports" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">world cricket league 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/sports/sports03.jpg"
                                                alt="sports" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">basket ball league tournament</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="{{ asset('') }}assets_user/images/sports/sports04.jpg"
                                                alt="sports" />
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">world badminton league 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Sports-Section========== -->

    <!-- ==========Newslater-Section========== -->
    <footer class="footer-section">
        <div class="newslater-section padding-bottom">
            <div class="container">
                <div class="newslater-container bg_img"
                    data-background="{{ asset('') }}assets_user/images/newslater/newslater-bg01.jpg">
                    <div class="newslater-wrapper">
                        <h5 class="cate">subscribe to Boleto</h5>
                        <h3 class="title">to get exclusive benifits</h3>
                        <form class="newslater-form">
                            <input type="text" placeholder="Your Email Address" />
                            <button type="submit">subscribe</button>
                        </form>
                        <p>We respect your privacy, so we never share your info</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-top">
                <div class="logo">
                    <a href="index-1.html">
                        <img src="{{ asset('') }}assets_user/images/footer/footer-logo.png" alt="footer" />
                    </a>
                </div>
                <ul class="social-icons">
                    <li>
                        <a href="#0">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0" class="active">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-google"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-area">
                    <div class="left">
                        <p>
                            Copyright © 2020.All Rights Reserved By <a href="#0">Boleto </a>
                        </p>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="#0">About</a>
                        </li>
                        <li>
                            <a href="#0">Terms Of Use</a>
                        </li>
                        <li>
                            <a href="#0">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#0">FAQ</a>
                        </li>
                        <li>
                            <a href="#0">Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========Newslater-Section========== -->
@endsection
