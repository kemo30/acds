<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('assets/front/./css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/linearicons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/ionicons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/featherIcons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/swiper.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/slick.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/fotorama.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/lightgallery.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/aos.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/hamburgers.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/index.css')}}">
  <link rel="shortcut icon" href="./images/favicon.png" type="image/png" sizes="16x16 32x32">
  <title>ACDS</title>
</head>

<body>

  <!-- <div class="loading-div">
    <img src="{{asset('assets/front/./images/icons/loading.gif')}}" alt="img">
  </div> -->

  <!-- start header -->
  <div class="header-md">
    <div class="logo-lines">
      <div class="container">
        <div class="lines hamburger hamburger--elastic">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
        <div class="logo-img">
          <a href="./index.html">
            <img src="{{asset('assets/front/./images/logo/logo.png')}}" alt="img">
          </a>
        </div>
      </div>
    </div>

    <div class="main-header-md-ul-div">
      <ul class="main-header-md-ul">
        <li class="active-li">
          <a href="./index.html">
            <span>
              Home
            </span>
          </a>
        </li>
        <li>
          <a href="./about.html">
            <span>
              About Us
            </span>
          </a>
        </li>
        <li class="drop-li">
          <a href="" class="drop-a">
            <span>
              Services
            </span>
            <i class="ion-chevron-down"></i>
          </a>
          <ul class="dropped-ul">
            <li>
              <a href="./service-details.html">
                <span>
                  GIT & HEPATOLOGY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  INTERNAL MEDICINE & DIABETES DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  PSYCHIATRIST DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  OPHTHALMOLOGY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  VASCULAR SURGERY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  CARDIOLOGY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  UROLOGY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  OBSTETRIC & GYNECOLOGY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  PEDIATRIC DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  ENT DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  DERMATOLOGY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  DENTAL DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  GENERAL SURGERY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  ORTHOPEDIC & SPINAL SURGERY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  ORTHOPEDIC DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  RHEUMATOLOGY & ARTHRITIS DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  PHYSIOTHERAPY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  GENERAL PRACTITIONER DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  HOME CARE DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  LABORATORY
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  RADIOLOGY DEP
                </span>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="{{ route('doctors') }}">
            <span>
              Doctors
            </span>
          </a>
        </li>
        <li>
          <a href="{{route('news_events')}}">
            <span>
              News & Events
            </span>
          </a>
        </li>
        <li>
          <a href="./offers.html">
            <span>
              Offers
            </span>
          </a>
        </li>
        <li>
          <a href="./gallery.html">
            <span>
              Gallary
            </span>
          </a>
        </li>
        <li>
          <a href="./management.html">
            <span>
              Management
            </span>
          </a>
        </li>
        <li>
          <a href="./contact.html">
            <span>
              Contact Us
            </span>
          </a>
        </li>
        <li>
          <a href="./contact.html">
            <span>
              Contact Us
            </span>
          </a>
        </li>
        <li>
          <a href="./careers.html">
            <span>
              careers
            </span>
          </a>
        </li>
        <li>
          <a href="{{ route('front.delma') }}">
            <span>
              DELMA Branch
            </span>
          </a>
        </li>
        <li class="lang-li">
          <a href="#">
            <img src="{{asset('assets/front/./images/icons/ar.png')}}" alt="ar">
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="header-lg">

    <a href="./index.html">
      <img src="{{asset('assets/front/./images/logo/logo.png')}}" alt="img">
    </a>

    <div class="header-content">
      <div class="header-lg-top">
        <div class="phone-email">
          <div class="phone">
            <i class="ion-ios-telephone-outline"></i>
            <span>02-6227700</span>
          </div>
          <div class="email">
            <i class="ion-ios-email-outline"></i>
            <span>imarketing@acds.ae</span>
          </div>
        </div>
        <a href="./appointment.html" class="appointment-link">
          <i class="ion-android-calendar"></i>
          <span>
            Make An Appointment
          </span>
        </a>
        <ul class="social-ul">
          <li>
            <a href="#">
              <i class="ion-social-facebook"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="ion-social-googleplus"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="ion-social-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="ion-social-youtube"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="ion-social-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="ion-social-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="header-lg-bottom">
        <div class="main-ul-wrapper">
          <ul class="main-header-lg-ul">
            <li class="active-li">
              <a href="./index.html">
                <span>
                  Home
                </span>
              </a>
            </li>
            <li class="hover-li">
              <a href="{{ route('front.services') }}" class="hover-a">
                <i class="linearicons-chevron-down"></i>
                <span>
                  Services
                </span>
              </a>
              <ul class="hovered-ul">
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/1.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        GIT & HEPATOLOGY DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/2.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        INTERNAL MEDICINE & DIABETES DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/3.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        PSYCHIATRIST DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/4.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        OPHTHALMOLOGY DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/5.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        VASCULAR SURGERY DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/6.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        CARDIOLOGY DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/7.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        UROLOGY DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/8.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        OBSTETRIC & GYNECOLOGY DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/9.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        PEDIATRIC DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/10.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        ENT DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/11.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        DERMATOLOGY DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/12.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        DENTAL DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/13.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        GENERAL SURGERY DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/14.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        ORTHOPEDIC & SPINAL SURGERY DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/15.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        ORTHOPEDIC DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/16.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        RHEUMATOLOGY & ARTHRITIS DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/17.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        PHYSIOTHERAPY DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/18.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        GENERAL PRACTITIONER DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/19.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        HOME CARE DEP
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/20.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        LABORATORY
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./service-details.html">
                    <div class="img-div">
                      <img src="{{asset('assets/front/./images/services/services/21.png')}}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        RADIOLOGY DEP
                      </p>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="{{ route('front.about') }}">
                <span>
                  About Us
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('doctors') }}">
                <span>
                  Doctors
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('doctors') }}">
                <span>
                  @auth
                  {{Auth::user()->name}}
                  @endauth
                </span>
              </a>
            </li>
            <li>
              <a href="{{route('news_events')}}">
                <span>
                  News & Events
                </span>
              </a>
            </li>
            <li>
              <a href="./offers.html">
                <span>
                  Offers
                </span>
              </a>
            </li>
            <li>
              <a href="./gallery.html">
                <span>
                  Gallary
                </span>
              </a>
            </li>
            <li>
              <a href="./management.html">
                <span>
                  Management
                </span>
              </a>
            </li>
            <li>
              <a href="./contact.html">
                <span>
                  Contact
                </span>
              </a>
            </li>
            <li>
              <a href="./careers.html">
                <span>
                  careers
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('front.delma') }}">
                <span>
                  DELMA Branch
                </span>
              </a>
            </li>
            <li class="lang-li">
              <a href="#">
                <img src="{{asset('assets/front/./images/icons/ar.png')}}" alt="ar">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>







@yield('content')













   <!-- start all footer -->
   <footer>
    <div class="top-footer">
      <div class="container">

        <div class="section-one">
          <div class="section-body">
            <a href="./index.html" class="logo-img">
              <img src="{{asset('assets/front/./images/logo/logo-footer.jpg')}}" alt="img">
            </a>
            <div class="text">
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero at praesentium reprehenderit architecto
                molestiae illo sed velit veniam ad. Nostrum mollitia sapiente molestiae accusantium vero beatae omnis
                fuga dolorem expedita?
              </p>
            </div>
          </div>
        </div>
        <div class="section-two">
          <div class="section-heading">
            <p>
              Quick links
            </p>
          </div>
          <div class="section-body">
            <ul class="main-section-ul">
              <li>
                <a href="./index.html">
                  <span>
                    Home
                  </span>
                </a>
              </li>
              <li>
                <a href="./news.html">
                  <span>
                    News & Events
                  </span>
                </a>
              </li>
              <li>
                <a href="./gallery.html">
                  <span>
                    Gallary
                  </span>
                </a>
              </li>
              <li>
                <a href="./contact.html">
                  <span>
                    Contact Us
                  </span>
                </a>
              </li>
              <li>
                <a href="./about.html">
                  <span>
                    About ACDS
                  </span>
                </a>
              </li>
              @auth
              <li>
                <a href="./about.html">
                  <span>
                    <div>
                      <form method="post" action="/logout">
                          @csrf
                          <button class="btn btn-success" type="submit">Logout</button>
                      </form>
                      </div>
                  </span>
                </a>
              </li>
              @endauth
            </ul>
          </div>
        </div>
        <div class="section-three">
          <div class="section-heading">
            <p>
              Contacts
            </p>
          </div>
          <div class="section-body">
            <ul class="main-section-ul contacts-wrapper">
              <li>
                <div class="phone">
                  <span>
                    Phone
                  </span>
                  <div>
                    <i class="ion-ios-telephone-outline"></i>
                    <p>
                      02-6227700
                    </p>
                  </div>
                </div>
                <div class="address">
                  <span>
                    Location
                  </span>
                  <div>
                    <i class="ion-android-pin"></i>
                    <p>
                      Jasmine Tower Building , Airport Road , Beside RAK Bank , Abu Dhabi , UAE
                    </p>
                  </div>
                </div>
                <div class="email">
                  <span>
                    Email Address
                  </span>
                  <div>
                    <i class="ion-ios-email-outline"></i>
                    <p>
                      imarketing@acds.ae
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="section-four">
          <div class="section-heading">
            <p>
              News Letter
            </p>
            <p>
              Subscribe To ACDS news letter
            </p>
          </div>
          <div class="section-body">
            <div class="news-letter">
              <form action="">
                <input type="email" placeholder="Email Address">
                <button type="submit">Subscribe</button>
              </form>
            </div>

            <ul class="social-links">
              <li>
                <a href="#">
                  <i class="ion-social-facebook-outline"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="ion-social-twitter-outline"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="ion-social-instagram-outline"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="ion-social-youtube-outline"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="bottom-footer">
      <div class="container">
        <p>
          <!-- 2019 &copy; جميع الحقوق محفوظة لشركة بى جروب -->
          2019 &copy Begroup All rights reserved
        </p>
      </div>
    </div>
  </footer>
  <!-- end all footer -->

  <script src="{{asset('assets/front/./js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('assets/front/./js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/front/./js/popper.min.js')}}"></script>
  <script src="{{asset('assets/front/./js/jquery.counterup.js')}}"></script>
  <script src="{{asset('assets/front/./js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/front/./js/jquery-ui.min.js')}}"></script>
  <script src="{{asset('assets/front/./js/swiper.min.js')}}"></script>
  <script src="{{asset('assets/front/./js/slick.min.js')}}"></script>
  <script src="{{asset('assets/front/./js/aos.js')}}"></script>
  <script src="{{asset('assets/front/./js/fotorama.js')}}"></script>
  <script src="{{asset('assets/front/./js/lightgallery.js')}}"></script>
  <script src="{{asset('assets/front/./js/lg-thumbnail.js')}}"></script>
  <script src="{{asset('assets/front/./js/index.js')}}"></script>
  <script>
    const userId= "{{ Auth::guard('web')->user()->id; }}";
 </script>
<script src="{{asset('js/app.js')}}"></script>
</body>

</html>