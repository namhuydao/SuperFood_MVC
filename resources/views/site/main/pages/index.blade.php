@extends('site.main.layouts.master')
@section('title'){{'Home'}}@endsection
@section('content')
    <!-- Start Slider-->
    <div class="slider">
        <div class="owl-slider owl-carousel owl-theme">
            @php($animation_arr = [])
            @foreach($animations as $animation)
                @if($animation->location == 'slider-item')
                    @php($animation_arr[] = $animation)
                @endif
            @endforeach
            @php($count = 0)
            @foreach($widgets as $widget)
                @if($widget->location == 'slider-item')
                    @php($count++)
            <div class="slider__item">
                <div class="slider__item-background background-left animate__animated animate__{{$animation_arr[$count - 1]['images']}} wow">
                    <img src="/superFood/backend/assets/images/{{$widget->image}}" alt=""/>
                </div>
                <div class="container h-100">
                    <div class="slider__item-content animate__animated animate__{{$animation_arr[$count - 1]['animation']}} wow" data-wow-delay="{{$animation_arr[$count - 1]['animation_delay']}}">
                        <div class="content__image">
                            <img src="{{BASE_URL.'frontend/assets/images/layout/item-1.png'}}" alt=""/>
                        </div>
                        <div class="content__title">{{$widget->title}}</div>
                        <p class="content__text">
                            {{$widget->description}}
                        </p>
                        <a class="btn btn-color" href="#">Read More</a>
                    </div>
                </div>
            </div>
                @endif
            @endforeach
        </div>
    </div>
    <!-- Start About-->
    <div class="about">
        <div class="container-fluid">
            <div class="row">
                @php($animation_arr = [])
                @foreach($animations as $animation)
                    @if($animation->location == 'about-item')
                        @php($animation_arr[] = $animation)
                    @endif
                @endforeach
                @php($count = 0)
                @foreach($widgets as $widget)
                    @if($widget->location == 'about-item')
                        @php($count++)
                        <div class="col-12 col-lg-4 p-0">
                            <div class="about__box">
                                <div
                                        class=" about__box-image animate__animated animate__{{$animation_arr[$count - 1]['images']}} wow"
                                        data-wow-delay="{{$animation_arr[$count - 1]['images_delay']}}">
                                    <img src="/superFood/backend/assets/images/{{$widget->image}}" alt="about"/>
                                </div>
                                <div class="about__box-item ">
                                    <div class="item__title animate__animated animate__{{$animation_arr[$count - 1]['title']}} wow"
                                         data-wow-delay="{{$animation_arr[$count - 1]['title_delay']}}">
                                        {{$widget->title}}</div>
                                    <p class=" item__text animate__animated animate__{{$animation_arr[$count - 1]['description']}} wow"
                                       data-wow-delay="{{$animation_arr[$count - 1]['description_delay']}}">
                                        {{$widget->description}}</p>
                                    <a class="btn btn-color animate__animated animate__{{$animation_arr[$count - 1]['link']}} wow"
                                       data-wow-delay="{{$animation_arr[$count - 1]['link_delay']}}"
                                       href="{{$widget->link}}">Xem
                                        Thêm</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- End About-->
    <!-- Start Portfolio-->
    <div class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center animate__animated animate__zoomIn wow"
                     data-wow-delay="0.5s">
                    @foreach($widgets as $widget)
                        @if($widget->location == 'portfolio-title')
                            <h2 class="title__heading">{{$widget->title}}</h2>
                            <div class="divider mx-auto"></div>
                            <p class="title__text">{{$widget->description}}</p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach($widgets as $widget)
                    @if($widget->location == 'portfolio-item')
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 p-0">
                            <div class="portfolio__box animate__animated animate__zoomIn wow" data-wow-delay="0.5s">
                                <div class="portfolio__box-image">
                                    <img src="/superFood/backend/assets/images/{{$widget->image}}" alt=""/>
                                </div>
                                <div class="portfolio__box-item">
                                    <div class="item__title">{{$widget->title}}</div>
                                    <div class="item__subtitle">{{$widget->description}}</div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Portfolio-->
    <!-- Start Customize-->
    <div class="customize">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center animate__animated animate__zoomIn wow"
                     data-wow-delay="0.5s">
                    @foreach($widgets as $widget)
                        @if($widget->location == 'customize-title')
                            <h2 class="title__heading">{{$widget->title}}</h2>
                            <div class="divider mx-auto"></div>
                            <p class="title__text">{{$widget->description}}</p>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row">
                @php($animation_arr = [])
                @foreach($animations as $animation)
                    @if($animation->location == 'customize-item')
                        @php($animation_arr[] = $animation)
                    @endif
                @endforeach
                @php($count = 0)
                @foreach($widgets as $widget)
                    @if($widget->location == 'customize-item')
                        @php($count++)
                        <div class="col-12 col-lg-4">
                            <div class="customize__box">
                                <div
                                        class="customize__box-image animate__animated animate__{{$animation_arr[$count - 1]['images']}} wow"
                                        data-wow-delay="{{$animation_arr[$count - 1]['images_delay']}}">
                                    <img src="/superFood/backend/assets/images/{{$widget->image}}" alt=""/>
                                </div>
                                <div class="customize__box-item">
                                    <div class="item__title animate__animated animate__{{$animation_arr[$count - 1]['title']}} wow"
                                         data-wow-delay="{{$animation_arr[$count - 1]['title_delay']}}">{{$widget->title}}</div>
                                    <p class="item__text animate__animated animate__{{$animation_arr[$count - 1]['description']}} wow"
                                       data-wow-delay="{{$animation_arr[$count - 1]['description_delay']}}">
                                        {{$widget->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Customize-->
    <!-- Start Clients-->
    <div class="clients">
        <div class="container-fluid">
            <div class="row">
                @php($animation_arr = [])
                @foreach($animations as $animation)
                    @if($animation->location == 'client-item')
                        @php($animation_arr[] = $animation)
                    @endif
                @endforeach
                @php($count = 0)
                @foreach($widgets as $widget)
                    @if($widget->location == 'client-item')
                        @php($count++)
                        <div class="col-12 col-sm-6 col-lg-3 p-0">
                            <div class="clients__box animate__animated animate__{{$animation_arr[$count - 1]['animation']}} wow"
                                 data-wow-delay="{{$animation_arr[$count - 1]['animation_delay']}}">
                                <div class="clients__box-image">
                                    <img src="/superFood/backend/assets/images/{{$widget->image}}" alt="clients"/>
                                </div>
                                <div class="clients__box-item">
                                    <div class="item__title">{{$widget->title}}</div>
                                    <p class="item__text">
                                        Lorem ipsum dolor sit amet, conset etur sadip scing
                                        elitrsed.
                                    </p>
                                    <div class="item__icon">
                                        <a class="item__icon-link" href="#"><i class="fab fa-instagram"></i></a><a
                                                class="item__icon-link"
                                                href="#"><i class="fab fa-twitter"></i></a><a class="item__icon-link"
                                                                                              href="#"><i
                                                    class="fab fa-facebook-f"></i></a><a class="item__icon-link"
                                                                                         href="#"><i
                                                    class="fab fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Clients-->
    <!-- Start History-->
    <div class="history">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center animate__animated animate__zoomIn wow"
                     data-wow-delay="0.5s">
                    <h2 class="title__heading">Our History</h2>
                    <div class="divider mx-auto"></div>
                    <p class="title__text">
                        We support environmental awareness, just business practices, and
                        health, and our selections illustrate that.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 line">
                    <div class="history__box animate__animated animate__fadeInUp wow" data-wow-delay="1s">
                        <div class="history__box-dot"></div>
                        <div class="history__box-date">1998</div>
                        <div class="history__box-title">Establishment</div>
                        <p class="history__box-text">
                            Ropefish knifefish stickleback Manta Ray, saw shark drum; rohu
                            deepwater stingray
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 line">
                    <div class="history__box animate__animated animate__fadeInUp wow" data-wow-delay="1s">
                        <div class="history__box-dot"></div>
                        <div class="history__box-date">2005</div>
                        <div class="history__box-title">First Partnership</div>
                        <p class="history__box-text">
                            Ropefish knifefish stickleback Manta Ray, saw shark drum; rohu
                            deepwater stingray
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 line">
                    <div class="history__box animate__animated animate__fadeInUp wow" data-wow-delay="1s">
                        <div class="history__box-dot"></div>
                        <div class="history__box-date">2007</div>
                        <div class="history__box-title">Launching the Website</div>
                        <p class="history__box-text">
                            Ropefish knifefish stickleback Manta Ray, saw shark drum; rohu
                            deepwater stingray
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 line">
                    <div class="history__box animate__animated animate__fadeInUp wow" data-wow-delay="1s">
                        <div class="history__box-dot"></div>
                        <div class="history__box-date">2012</div>
                        <div class="history__box-title">Opening New Stores</div>
                        <p class="history__box-text">
                            Ropefish knifefish stickleback Manta Ray, saw shark drum; rohu
                            deepwater stingray
                        </p>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End History-->
    <!-- Start Counter-->
    <div class="counter">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="counter__box animate__animated animate__zoomIn wow" data-wow-delay="1s">
                        <div class="counter__box-image">
                            <img src="/superFood/frontend/assets/images/home/counter-1.png" alt=""/>
                        </div>
                        <div class="counter__box-item">
                            <span class="perccent-item-num counters" data-target="9859">0</span>
                            <div class="item__title">Team energy left</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="counter__box animate__animated animate__zoomIn wow" data-wow-delay="1s">
                        <div class="counter__box-image">
                            <img src="/superFood/frontend/assets/images/home/counter-2.png" alt=""/>
                        </div>
                        <div class="counter__box-item">
                            <span class="perccent-item-num counters" data-target="8197">0</span>
                            <div class="item__title">Lines of code</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="counter__box animate__animated animate__zoomIn wow" data-wow-delay="1s">
                        <div class="counter__box-image">
                            <img src="/superFood/frontend/assets/images/home/counter-3.png" alt=""/>
                        </div>
                        <div class="counter__box-item">
                            <span class="perccent-item-num counters" data-target="1143">0</span>
                            <div class="item__title">Awesome Projects</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="counter__box animate__animated animate__zoomIn wow" data-wow-delay="1s">
                        <div class="counter__box-image">
                            <img src="/superFood/frontend/assets/images/home/counter-4.png" alt=""/>
                        </div>
                        <div class="counter__box-item">
                            <span class="perccent-item-num counters" data-target="2177">0</span>
                            <div class="item__title">Cups of coffe</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counter-->
    <!-- Start Testimonials-->
    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center animate__animated animate__zoomIn wow"
                     data-wow-delay="0.5s">
                    <h2 class="title__heading">Testimonials</h2>
                    <div class="divider mx-auto"></div>
                    <p class="title__text">
                        At vero eos et accusam et justo duo dolores et ea rebum. Stet
                        clita kasd gubergren, no sea takimata sanctus est Lorem.
                    </p>
                </div>
            </div>
            <div class="owl-testimonials owl-carousel owl-theme animate__animated animate__zoomIn wow"
                 data-wow-delay="1s">
                <div class="testimonials__box">
                    <div class="testimonials__box-item">
                        <p class="item__text">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium natus error sit volu ptatem omnis. Sed ut
                            perspiciatis unde omnis iste natus errorsit voluptatem
                            accusantium.
                        </p>
                        <div class="item__info">
                            <div class="item__info-image">
                                <img src="/superFood/frontend/assets/images/layout/testimonials-1.jpg" alt=""/>
                            </div>
                            <div class="item__info-content">
                                <div class="content__name">Sara Newman</div>
                                <div class="content__position">Manager</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials__box">
                    <div class="testimonials__box-item">
                        <p class="item__text">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium natus error sit volu ptatem omnis. Sed ut
                            perspiciatis unde omnis iste natus errorsit voluptatem
                            accusantium.
                        </p>
                        <div class="item__info">
                            <div class="item__info-image">
                                <img src="/superFood/frontend/assets/images/layout/testimonials-2.jpg" alt=""/>
                            </div>
                            <div class="item__info-content">
                                <div class="content__name">James Newbie</div>
                                <div class="content__position">Docter</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials__box">
                    <div class="testimonials__box-item">
                        <p class="item__text">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium natus error sit volu ptatem omnis. Sed ut
                            perspiciatis unde omnis iste natus errorsit voluptatem
                            accusantium.
                        </p>
                        <div class="item__info">
                            <div class="item__info-image">
                                <img src="/superFood/frontend/assets/images/layout/testimonials-3.jpg" alt=""/>
                            </div>
                            <div class="item__info-content">
                                <div class="content__name">David Harrison</div>
                                <div class="content__position">Artist</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials-->
    <!-- Start Contact-->
    <div class="contact">
        <div class="contact__background">
            <img src="/superFood/frontend/assets/images/layout/contact.jpg" alt=""/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-8">
                    <div class="contact__content text-sm-left animate__animated animate__fadeInLeft wow">
                        <div class="contact__content-text">
                            Tìm kiếm sản phẩm chất lượng, đảm bảo sức khỏe!
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-4 my-sm-auto">
                    <div class="contact__button text-sm-right animate__animated animate__fadeInUp wow"
                         data-wow-delay="1s">
                        <a class="btn btn-color" href="#">Liên hệ ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact-->
@endsection