<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Công ty Cổ phần Tập đoàn MCV - MCV Group - MCV Corporation</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link rel="icon" href="https://mcv.com.vn/wp-content/uploads/2020/02/cropped-MCV-Group-tab-180x180.png" />
    <link href="{{ asset('img/skills-img.jpg') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Eterna - v4.7.1
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <img class="logo" src="{{asset('img/logo.png')}}" alt="">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">info@mcv.com.vn</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+84 28 3910 5142</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="tiktok"><i class="bi bi-tiktok"></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol style="z-index:1" class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">


                    <!-- Slide 2 -->
                    @foreach ($banners as $key=>$banner)

                    <div class="carousel-item {{$key == 0 ? 'active' : ''}}" style="background-image: url({{asset('img/banner')}}/{{$banner->images}})">
                        <a href="{{$banner->link}}">
                        {{-- <img style="width:100%; height: 100%" src="{{asset('img/banner')}}/{{$banner->images}}" alt=""> --}}
                        <div class="carousel-container">
                            <div class="carousel-content">
                                {{-- <h2 class="animate__animated fanimate__adeInDown">
                                    Sáng tạo <span>CREATIVE</span>
                                </h2>
                                <p class="animate__animated animate__fadeInUp">
                                    Không có bất kỳ giới hạn nào cho sự sáng tạo ở MCV. Bất kỳ ý
                                    tưởng mới nào ra đời cũng được chào đón và hiện thực hoá,
                                    sai chỗ nào cùng nhau sửa chỗ ấy.
                                </p> --}}
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </section>
    <!-- End Hero -->
    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        function changeYoutube() {
            $(".datables").load("youtube.html");
        }

        function changeLicense() {
            $(".datables").load("license.html");
        }

        function changeSeeding() {
            $(".datables").load("seeding.html");
        }

        function changeFacebook() {
            $(".datables").load("facebook.html");
        }

        function changeNetBiz() {
            $(".datables").load("netbiz.html");
        }
        $( "table" ).addClass( "styled-table" );

    </script>
</body>

</html>
