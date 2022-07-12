<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Công ty Cổ phần Tập đoàn MCV - MCV Group - MCV Corporation</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link
      rel="icon"
      href="https://mcv.com.vn/wp-content/uploads/2020/02/cropped-MCV-Group-tab-180x180.png"
    />
    <link href="{{asset('img/skills-img.jpg')}}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet" />
    <link
      href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}"
      rel="stylesheet"
    />
    <link
      href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}"
      rel="stylesheet"
    />
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link
      href="{{asset('vendor/glightbox/css/glightbox.min.css')}}"
      rel="stylesheet"
    />
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />

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
      <div
        class="container d-flex justify-content-center justify-content-md-between"
      >
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"
            ><a href="mailto:contact@example.com">cinfo@mcv.com.vn</a></i
          >
          <i class="bi bi-phone d-flex align-items-center ms-4"
            ><span>+84 28 3910 5142</span></i
          >
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="tiktok"><i class="bi bi-tiktok"></i></a>
        </div>
      </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
          <img src="{{asset('img/logo.png')}}" alt="" />
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="{{asset('img/logo.png')}}" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="team.html">Team</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>Drop Down</span> <i class="bi bi-chevron-down"></i
              ></a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown">
                  <a href="#"
                    ><span>Deep Drop Down</span>
                    <i class="bi bi-chevron-right"></i
                  ></a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div class="hero-container">
        <div
          id="heroCarousel"
          data-bs-interval="5000"
          class="carousel slide carousel-fade"
          data-bs-ride="carousel"
        >
          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div
              class="carousel-item active"
              style="background-image: url({{asset('img/slide/slide-4.jpeg')}})"
            >
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown">
                    Hiện đại <span>MODERN</span>
                  </h2>
                  <p class="animate__animated animate__fadeInUp">
                    Sự hiện đại ở MCV là không bao giờ để mình "lỗi thời" mà
                    phải luôn tiên phong và đón đầu các xu thế, không ngừng cập
                    nhật, thay đổi để thích nghi. Mỗi con người tại MCV đều ý
                    thức rằng, bằng lòng với hiện tại là thụt lùi nên luôn phấn
                    đấu để hôm nay tốt hơn hôm qua.
                  </p>
                  <a
                    href="#"
                    class="btn-get-started animate__animated animate__fadeInUp"
                    >Read More</a
                  >
                </div>
              </div>
            </div>

            <!-- Slide 2 -->
            <div
              class="carousel-item"
              style="background-image: url({{asset('img/slide/slide-5.jpeg')}})"
            >
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated fanimate__adeInDown">
                    Sáng tạo <span>CREATIVE</span>
                  </h2>
                  <p class="animate__animated animate__fadeInUp">
                    Không có bất kỳ giới hạn nào cho sự sáng tạo ở MCV. Bất kỳ ý
                    tưởng mới nào ra đời cũng được chào đón và hiện thực hoá,
                    sai chỗ nào cùng nhau sửa chỗ ấy.
                  </p>
                  <a
                    href="#"
                    class="btn-get-started animate__animated animate__fadeInUp"
                    >Read More</a
                  >
                </div>
              </div>
            </div>

            <!-- Slide 3 -->
            <div
              class="carousel-item"
              style="background-image: url({{asset('img/slide/slide-6.webp')}})"
            >
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown">
                    Đạo đức <span>VIRTUOUS</span>
                  </h2>
                  <p class="animate__animated animate__fadeInUp">
                    Sự tử tế và tận tâm là kim chỉ nam trên con đường tiến đến
                    thành công của MCV. Thước đo đạo đức của mỗi Con Người ở MCV
                    luôn gắn liền với từng hành động trong công việc và các sản
                    phẩm của mình. Hoa trái từ gốc rễ đạo đức chính là thành
                    công ngọt ngào mà MCV luôn hướng đến.
                  </p>
                  <a
                    href="#"
                    class="btn-get-started animate__animated animate__fadeInUp"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
          </div>

          <a
            class="carousel-control-prev"
            href="#heroCarousel"
            role="button"
            data-bs-slide="prev"
          >
            <span
              class="carousel-control-prev-icon bi bi-chevron-left"
              aria-hidden="true"
            ></span>
          </a>

          <a
            class="carousel-control-next"
            href="#heroCarousel"
            role="button"
            data-bs-slide="next"
          >
            <span
              class="carousel-control-next-icon bi bi-chevron-right"
              aria-hidden="true"
            ></span>
          </a>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">
          <div class="row">
            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch"
              onclick="changeYoutube()"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-youtube"></i></div>
                <h4><a href="#">YouTube</a></h4>
                <p>
                  MCV Network vlà đối tác MCN của YouTube với hơn 327 triệu lượt
                  theo dõi
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0"
              onclick="changeFacebook()"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-facebook"></i></div>
                <h4><a href="#">Facebook</a></h4>
                <p>
                  DMCV là đối tác chiến lược của Facebook và là một trong số ít
                  đối tác được lựa chọn áp dụng tính năng quảng cáo AdBreaks đầu
                  tiên tại Việt Nam.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0"
              onclick="changeNetBiz()"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-netlify"></i></div>
                <h4><a href="#">NetBiz</a></h4>
                <p>
                  NETBIZ cung cấp dịch vụ Marketing online và offline cho các
                  doanh nghiệp SME bao gồm Internet Marketing và tổ chức sự kiện
                  trong nhà, ngoài trời.
                </p>
              </div>
            </div>

            <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" onclick="changeFacebook()" >
            <div class="icon-box">
              <div class="icon"><i class='bx bxl-facebook'></i></div>
              <h4><a href="#">Facebook</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" onclick="changeNetBiz()">
            <div class="icon-box">
              <div class="icon"><i class='bx bxl-netlify'></i></div>
              <h4><a href="#">NetBiz</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div> -->
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <section id="datables" class="datables">
        <div class="container">
          <div class="col-12 d-flex">
            <div class="col-2 me-2 menu-data">
              <div class="d-flex flex-column menu-s">
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
              </div>
            </div>
            <div class="col-10">
              <div id="services" class="services">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 m-b-5">
                      <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4><a href="">Nemo Enim</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 m-b-5">
                      <div class="icon-box">
                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                        <h4><a href="">Dele cardo</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 m-b-5">
                      <div class="icon-box">
                        <div class="icon"><i class="bx bx-arch"></i></div>
                        <h4><a href="">Divera don</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 m-b-5">
                      <div class="icon-box">
                        <div class="icon"><i class="bx bx-arch"></i></div>
                        <h4><a href="">Divera don</a></h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="about" class="about mt-3">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-6">
                        <img
                          src="{{asset('img/image-about-section.png')}}"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>MCV Group</h3>
                        <p class="fst-italic">
                          là đối tác chiến lược toàn diện của MCV Corporation, là nhà phát
                          hành các chương trình truyền hình thực tế, talkshow, gameshow
                          truyền hình trên nền tảng digital qua hệ thống fanpage và kênh
                          YouTube trực thuộc MCV Network.
                        </p>
                        <ul>
                          <li>
                            <i class="bi bi-check-circle"></i> Sự hiện đại ở MCV là không
                            bao giờ để mình "lỗi thời" mà phải luôn tiên phong và đón đầu
                            các xu thế, không ngừng cập nhật, thay đổi để thích nghi.
                          </li>
                          <li>
                            <i class="bi bi-check-circle"></i> Không có bất kỳ giới hạn
                            nào cho sự sáng tạo ở MCV. Bất kỳ ý tưởng mới nào ra đời cũng
                            được chào đón và hiện thực hoá, sai chỗ nào cùng nhau sửa chỗ
                            ấy.
                          </li>
                          <li>
                            <i class="bi bi-check-circle"></i> Sự tử tế và tận tâm là kim
                            chỉ nam trên con đường tiến đến thành công của MCV. Thước đo
                            đạo đức của mỗi Con Người ở MCV luôn gắn liền với từng hành
                            động trong công việc và các sản phẩm của mình.
                          </li>
                        </ul>
                        <p>
                          MCV Group cũng phân phối và phát hành nội dung của các nhà sản
                          xuất khác, khai thác thương mại và hoạt động kinh doanh dựa trên
                          big data.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
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
                <img
                  src="{{asset('img/clients/client-1.png')}}"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{asset('img/clients/client-2.png')}}"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{asset('img/clients/client-3.png')}}"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{asset('img/clients/client-4.png')}}"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{asset('img/clients/client-5.png')}}"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{asset('img/clients/client-6.png')}}"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{asset('img/clients/client-7.png')}}"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{asset('img/clients/client-8.png')}}"
                  class="img-fluid"
                  alt=""
                />
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Clients Section -->
      <section id="services" class="services">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4><a href="">Lorem Ipsum</a></h4>
                <p>
                  Voluptatum deleniti atque corrupti quos dolores et quas
                  molestias excepturi
                </p>
              </div>
            </div>
            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="">Sed ut perspiciatis</a></h4>
                <p>
                  Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore
                </p>
              </div>
            </div>
            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0"
            >
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4><a href="">Magni Dolores</a></h4>
                <p>
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa
                  qui officia
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4><a href="">Nemo Enim</a></h4>
                <p>
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui
                  blanditiis
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                <h4><a href="">Dele cardo</a></h4>
                <p>
                  Quis consequatur saepe eligendi voluptatem consequatur dolor
                  consequuntur
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-arch"></i></div>
                <h4><a href="">Divera don</a></h4>
                <p>
                  Modi nostrum vel laborum. Porro fugit error sit minus sapiente
                  sit aspernatur
                </p>
              </div>
            </div>
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
              <iframe
                class="mb-4 mb-lg-0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.56760086703!2d106.7439958152371!3d10.767769792327428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317525eb0958eb5d%3A0x22bce1f030083a29!2sMCV%20Complex!5e0!3m2!1sen!2s!4v1657529313928!5m2!1sen!2s"
                frameborder="0"
                style="border: 0; width: 100%; height: 384px"
                allowfullscreen
              ></iframe>
            </div>

            <div class="col-lg-6">
              <form
                action="forms/contact.php"
                method="post"
                role="form"
                class="php-email-form"
              >
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Subject"
                    required
                  />
                </div>
                <div class="form-group mt-3">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    placeholder="Message"
                    required
                  ></textarea>
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

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>
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
    </script>
  </body>
</html>
