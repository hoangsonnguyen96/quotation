@extends('layouts.master')
@section('content')
    <main id="main">
        <!-- ======= Services Section ======= -->
        <!-- End Services Section -->

        <section id="datables" class="datables" style="margin-top:150px">
            <div class="container">
                <div class="col-12 d-flex f-column" style="z-index: 200 !important">
                    <div class="col-3 me-2 menu-data">
                        <div class="d-flex flex-column menu-s">
                            <div class="sidebar-left">
                                <ul class="sidebar-menu" style="padding: 0">
                                    @foreach ($categories as $category)
                                        <li class="has-child pb-3">
                                            <a>{{ $category->name }}<i class="icon"></i></a>
                                            @foreach ($category->credential as $item)
                                                <ul class="menu-sub">
                                                    <li>
                                                        <a href="{{route('frontend.credentials.index',['id' => $item->id])}}">{{ $item->title }}</a>
                                                    </li>
                                                </ul>
                                            @endforeach
                                            @foreach ($category->listQuotations as $item)
                                                <ul class="menu-sub">
                                                    <li>
                                                        <a href="{{route('frontend.quotations.index',['id' => $item->id])}}">{{ $item->name }}</a>
                                                    </li>
                                                </ul>
                                            @endforeach
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div id="services" class="services">
                            <div id="about" class="about">
                                {!! $quotation->description !!}
                            </div>
                            <div style="float:right" class="btn more mt-3"><a href="{{asset('storage/quotation')}}/{{$quotation->file}}" target="_blank">Xem chi tiết</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">
                <div class="section-title">
                    <h2>Clients</h2>
                    <p>
                        Magnam dolores commodi suscipit. Necessitatibus eius consequatur
                        ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
                        quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                        Quia fugiat sit in iste officiis commodi quidem hic quas.
                    </p>
                </div>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center mb-5">
                        <div class="swiper-slide">
                            <img src="{{ asset('img/clients/client-1.png') }}" class="img-fluid" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/clients/client-2.png') }}" class="img-fluid" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/clients/client-3.png') }}" class="img-fluid" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/clients/client-4.png') }}" class="img-fluid" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/clients/client-5.png') }}" class="img-fluid" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/clients/client-6.png') }}" class="img-fluid" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/clients/client-7.png') }}" class="img-fluid" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/clients/client-8.png') }}" class="img-fluid" alt="" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>
                                18Bis/22/1i đường Nguyễn Thị Minh Khai, Phường Đa Kao, Quận 1,
                                TP. HCM.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@mcv.com.vn</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>84 - 28 3910 5142</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.56760086703!2d106.7439958152371!3d10.767769792327428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317525eb0958eb5d%3A0x22bce1f030083a29!2sMCV%20Complex!5e0!3m2!1sen!2s!4v1657529313928!5m2!1sen!2s"
                            frameborder="0" style="border: 0; width: 100%; height: 384px" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required />
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required />
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required />
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->


    <!-- Vendor JS Files -->
@endsection
