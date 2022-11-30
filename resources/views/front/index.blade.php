
@extends('front.layout.front')
@section('content')
  <!-- start home main slider -->
  <div class="swiper-container home-main-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slider-img">
          <img src="{{asset('assets/front/./images/home-main-slides/slide-1.jpg')}}" alt="img">
        </div>
        <div class="slider-text">
          <div class="text-buttons">
            <div class="text">
              <p>
                ACDS
              </p>
              <p>
                A bold new concept for healthcare
              </p>
            </div>
            <div class="buttons">
              <a href="./doctors.html">
                <i class="linearicons-finger-tap2"></i>
                <span>
                  Doctors
                </span>
              </a>
              <a href="./about.html">
                <i class="linearicons-pushpin"></i>
                <span>
                  About ACDS
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slider-img">
          <img src="{{asset('assets/front/./images/home-main-slides/slide-2.jpg')}}" alt="img">
        </div>
        <div class="slider-text">
          <div class="text-buttons">
            <div class="text">
              <p>
                ACDS
              </p>
              <p>
                We mean quality
              </p>
            </div>
            <div class="buttons">
              <a href="./services.html">
                <i class="linearicons-finger-tap2"></i>
                <span>
                  services
                </span>
              </a>
              <a href="./about.html">
                <i class="linearicons-pushpin"></i>
                <span>
                  About ACDS
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slider-img">
          <img src="{{asset('assets/front/./images/home-main-slides/slide-3.jpg')}}" alt="img">
        </div>
        <div class="slider-text">
          <div class="text-buttons">
            <div class="text">
              <p>
                ACDS
              </p>
              <p>
                MODULAR OPERATING THEATRES
              </p>
            </div>
            <div class="buttons">
              <a href="./centers.html">
                <i class="linearicons-finger-tap2"></i>
                <span>
                  Offers
                </span>
              </a>
              <a href="./about.html">
                <i class="linearicons-pushpin"></i>
                <span>
                  About ACDS
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slider-img">
          <img src="{{asset('assets/front/./images/home-main-slides/slide-4.jpg')}}" alt="img">
        </div>
        <div class="slider-text">
          <div class="text-buttons">
            <div class="text">
              <p>
                ACDS
              </p>
              <p>
                MODULAR OPERATING THEATRES
              </p>
            </div>
            <div class="buttons">
              <a href="./gallery.html">
                <i class="linearicons-finger-tap2"></i>
                <span>
                  Gallery
                </span>
              </a>
              <a href="./about.html">
                <i class="linearicons-pushpin"></i>
                <span>
                  About ACDS
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- rtl code -->
    <!-- <div class="swiper-button-prev home-main-slider-prev">
          <span class="ion-android-arrow-forward"></span>
        </div>
        <div class="swiper-button-next home-main-slider-next">
          <span class="ion-android-arrow-back"></span>
        </div> -->
    <!-- rtl code -->

    <!-- ltr code -->
    <div class="swiper-button-next home-main-slider-next">
      <span class="ion-android-arrow-forward"></span>
    </div>
    <div class="swiper-button-prev home-main-slider-prev">
      <span class="ion-android-arrow-back"></span>
    </div>
    <!-- ltr code -->

    <div class="swiper-pagination home-main-slider-pagination"></div>
  </div>
  <!-- end home main slider -->

  <!-- after slide section -->
  <div class="after-slide-section">
    <ul class="main-section-ul">
      <li>
        <a href="./about.html">
          <div class="img-div">
            <img src="{{asset('assets/front/./images/after-slide/bx-1.jpg')}}" alt="img">
          </div>
          <div class="content">
            <div class="heading">
              <p>
                Our Mission
              </p>
            </div>
            <div class="body">
              <div class="text">
                <p>
                  Providing compassionate and exceptional healthcare while improving our community's health.
                </p>
              </div>
              <div class="more-btn">
                <span>
                  Read More
                </span>
                <i class="linearicons-chevron-right"></i>
              </div>
            </div>
          </div>
        </a>
      </li>
      <li>
        <a href="./about.html">
          <div class="img-div">
            <img src="{{asset('assets/front/./images/after-slide/bx2.jpg')}}" alt="img">
          </div>
          <div class="content">
            <div class="heading">
              <p>
                Our Vision
              </p>
            </div>
            <div class="body">
              <div class="text">
                <p>
                  We will enhance our superior quality and service with personalized care, information and leading edge
                  technology...
                </p>
              </div>
              <div class="more-btn">
                <span>
                  Read More
                </span>
                <i class="feather icon-chevrons-right"></i>
              </div>
            </div>
          </div>
        </a>
      </li>
      <li>
        <a href="./about.html">
          <div class="img-div">
            <img src="{{asset('assets/front/./images/after-slide/bx3.jpg')}}" alt="img">
          </div>
          <div class="content">
            <div class="heading">
              <p>
                Our Values
              </p>
            </div>
            <div class="body">
              <div class="text">
                <p>
                  Compassion: We believe in providing compassionate care for all.
                  Excellence: We believe in providing the best of care...
                </p>
              </div>
              <div class="more-btn">
                <span>
                  Read More
                </span>
                <i class="feather icon-chevrons-right"></i>
              </div>
            </div>
          </div>
        </a>
      </li>
    </ul>
  </div>
  <!-- after slide section -->

  <!-- appointment working hours  -->
  <div class="appointment-working-hours-wrapper">
    <div class="container">
      <div class="working-hours-wrapper">
        <div class="section-heading">
          <i class="linearicons-clock2"></i>
          <p>
            Working Hours
          </p>
        </div>
        <div class="section-body">
          <ul class="main-section-ul">
            <li>
              <span>
                Sat
              </span>
              <span>
                10AM : 11PM
              </span>
            </li>
            <li>
              <span>
                Sun
              </span>
              <span>
                10AM : 11PM
              </span>
            </li>
            <li>
              <span>
                Mon
              </span>
              <span>
                10AM : 11PM
              </span>
            </li>
            <li>
              <span>
                Tus
              </span>
              <span>
                Closed
              </span>
            </li>
            <li>
              <span>
                Wen
              </span>
              <span>
                10AM : 11PM
              </span>
            </li>
            <li>
              <span>
                Thur
              </span>
              <span>
                10AM : 11PM
              </span>
            </li>
            <li>
              <span>
                Fri
              </span>
              <span>
                10AM : 11PM
              </span>
            </li>
          </ul>
        </div>
      </div>
      <div class="service-appointment-form" data-aos="zoom-in" data-aos-duration="1500">
        <div class="form-heading">
          <p>
            Schedule Your Appointment
          </p>
        </div>
        <form action="">
          <div class="form-div">
            <input type="text" placeholder="Name" id="name">
            <label for="name">
              <i class="ion-ios-personadd-outline"></i>
            </label>
          </div>
          <div class="form-div">
            <input id="email" type="email" placeholder="Email Address">
            <label for="email">
              <i class="ion-ios-email-outline"></i>
            </label>
          </div>
          <div class="form-div">
            <input id="phone" type="text" placeholder="phone number">
            <label for="phone">
              <i class="ion-ios-telephone-outline"></i>
            </label>
          </div>
          <div class="form-div">
            <select name="" id="">
              <option value="">
                Select Specialties
              </option>
              <option value="Dr. Kamal Tawfeeq">
                GIT & HEPATOLOGY
              </option>
              <option value="Dr. Salim Awadh">
                GENERAL SURGERY
              </option>
              <option value="Dr. Sherif Elsaka">
                CARDIOLOGY
              </option>
              <option value="Dr. Makki Fayadh">
                VASCULAR
              </option>
              <option value="Dr.Abdulhadi Quadri">Dr. Abdulhadi Quadri</option>
              <option value="Dr. Tarek Badawi">Dr. Tarek Badawi</option>
            </select>
          </div>
          <div class="form-div">
            <select name="" id="">
              <option value="">
                Select doctor
              </option>
              <option value="Dr. Kamal Tawfeeq">Dr.Kamal Twfeeq</option>
              <option value="Dr. Salim Awadh">Dr. Salim Awadh</option>
              <option value="Dr. Sherif Elsaka">Dr. Sherif Elsaka</option>
              <option value="Dr. Makki Fayadh">Dr. Makki Fayadh</option>
              <option value="Dr.Abdulhadi Quadri">Dr. Abdulhadi Quadri</option>
              <option value="Dr. Tarek Badawi">Dr. Tarek Badawi</option>
            </select>
          </div>
          <div class="form-div">
            <input type="text" id="datepicker" placeholder="Appointment Date">
            <label for="datepicker">
              <i class="ion-ios-calendar-outline"></i>
            </label>
          </div>
          <div class="form-div">
            <textarea name="" id="" placeholder="Message"></textarea>
          </div>
          <div class="form-div submit-div">
            <button type="submit">
              <i class="ion-ios-paperplane"></i>
              <span>
                Submit
              </span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- appointment working hours  -->


  <!-- start home servcies section -->
  <div class="home-services-section">
    <div class="section-heading">
      <p>
        Our Services
      </p>
    </div>
    <div class="section-body">
      <div class="swiper-container home-services-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="./service-details.html">
              <div class="img-div">
                <img src="{{asset('assets/front/./images/services/services/1.png')}}" alt="img">
              </div>
              <div class="service-text">
                <div class="heading">
                  <p>
                    GIT & HEPATOLOGY DEP
                  </p>
                </div>
                <div class="service-content">
                  <ul>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Diagnosis and treatment of GIT diseases, pancreatic diseases,
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        gall stones, stomach and intestinal infections and bleeding
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Celiac diseases and Irritable Bowel Syndrome
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Food allergies and general mild allergies
                      </span>
                    </li>
                  </ul>
                </div>
                <div class="read-more">
                  <i class="linearicons-link"></i>
                  <span>
                    Read more
                  </span>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="./service-details.html">
              <div class="img-div">
                <img src="{{asset('assets/front/./images/services/services/2.png')}}" alt="img">
              </div>
              <div class="service-text">
                <div class="heading">
                  <p>
                    INTERNAL MEDICINE & DIABETES DEP
                  </p>
                </div>
                <div class="service-content">
                  <ul>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Diagnosis and treatment of GIT diseases, pancreatic diseases,
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        gall stones, stomach and intestinal infections and bleeding
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Celiac diseases and Irritable Bowel Syndrome
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Food allergies and general mild allergies
                      </span>
                    </li>
                  </ul>
                </div>
                <div class="read-more">
                  <i class="linearicons-link"></i>
                  <span>
                    Read more
                  </span>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="./service-details.html">
              <div class="img-div">
                <img src="{{asset('assets/front/./images/services/services/3.png')}}" alt="img">
              </div>
              <div class="service-text">
                <div class="heading">
                  <p>
                    OPHTHALMOLOGY DEP
                  </p>
                </div>
                <div class="service-content">
                  <ul>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Diagnosis and treatment of GIT diseases, pancreatic diseases,
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        gall stones, stomach and intestinal infections and bleeding
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Celiac diseases and Irritable Bowel Syndrome
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Food allergies and general mild allergies
                      </span>
                    </li>
                  </ul>
                </div>
                <div class="read-more">
                  <i class="linearicons-link"></i>
                  <span>
                    Read more
                  </span>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="./service-details.html">
              <div class="img-div">
                <img src="{{asset('assets/front/./images/services/services/4.png')}}" alt="img">
              </div>
              <div class="service-text">
                <div class="heading">
                  <p>
                    VASCULAR SURGERY DEP
                  </p>
                </div>
                <div class="service-content">
                  <ul>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Diagnosis and treatment of GIT diseases, pancreatic diseases,
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        gall stones, stomach and intestinal infections and bleeding
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Celiac diseases and Irritable Bowel Syndrome
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Food allergies and general mild allergies
                      </span>
                    </li>
                  </ul>
                </div>
                <div class="read-more">
                  <i class="linearicons-link"></i>
                  <span>
                    Read more
                  </span>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="./service-details.html">
              <div class="img-div">
                <img src="{{asset('assets/front/./images/services/services/5.png')}}" alt="img">
              </div>
              <div class="service-text">
                <div class="heading">
                  <p>
                    VASCULAR SURGERY DEP
                  </p>
                </div>
                <div class="service-content">
                  <ul>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Diagnosis and treatment of GIT diseases, pancreatic diseases,
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        gall stones, stomach and intestinal infections and bleeding
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Celiac diseases and Irritable Bowel Syndrome
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Food allergies and general mild allergies
                      </span>
                    </li>
                  </ul>
                </div>
                <div class="read-more">
                  <i class="linearicons-link"></i>
                  <span>
                    Read more
                  </span>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="./service-details.html">
              <div class="img-div">
                <img src="{{asset('assets/front/./images/services/services/6.png')}}" alt="img">
              </div>
              <div class="service-text">
                <div class="heading">
                  <p>
                    CARDIOLOGY DEP
                  </p>
                </div>
                <div class="service-content">
                  <ul>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Diagnosis and treatment of GIT diseases, pancreatic diseases,
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        gall stones, stomach and intestinal infections and bleeding
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Celiac diseases and Irritable Bowel Syndrome
                      </span>
                    </li>
                    <li>
                      <i class="linearicons-shield-check"></i>
                      <span>
                        Food allergies and general mild allergies
                      </span>
                    </li>
                  </ul>
                </div>
                <div class="read-more">
                  <i class="linearicons-link"></i>
                  <span>
                    Read more
                  </span>
                </div>
              </div>
            </a>
          </div>
        </div>

        <!-- rtl code -->
        <!-- <div class="swiper-button-prev home-services-slider-prev">
            <span class="ion-android-arrow-forward"></span>
          </div>
          <div class="swiper-button-next home-services-slider-next">
            <span class="ion-android-arrow-back"></span>
          </div> -->
        <!-- rtl code -->

        <!-- ltr code -->
        <div class="swiper-button-next home-services-slider-next">
          <span class="ion-android-arrow-forward"></span>
        </div>
        <div class="swiper-button-prev home-services-slider-prev">
          <span class="ion-android-arrow-back"></span>
        </div>
        <!-- ltr code -->

      </div>
    </div>
  </div>
  <!-- end home servcies section -->

  <!-- star home counter section -->
  <div class="home-counter-section">
    <ul class="main-section-ul">
      <li data-aos="zoom-in" data-aos-duration="1500">
        <div class="counter-img">
          <img src="{{asset('assets/front/./images/counter/medal.png')}}" alt="img">
        </div>
        <div class="counter-body">
          <div class="number-div">
            <span class="counter-number">
              15
            </span>
            <span>
              Yr
            </span>
            <span class="ion-ios-plus-empty"></span>
          </div>
          <div class="counter-title">
            <p>
              Experience
            </p>
          </div>
        </div>
      </li>
      <li data-aos="zoom-in" data-aos-duration="1500">
        <div class="counter-img">
          <img src="{{asset('assets/front/./images/counter/heart.png')}}" alt="img">
        </div>
        <div class="counter-body">
          <div class="number-div">
            <span class="counter-number">
              2300
            </span>
            <span class="ion-ios-plus-empty"></span>
          </div>
          <div class="counter-title">
            <p>
              Happy Clients
            </p>
          </div>
        </div>
      </li>
      <li data-aos="zoom-in" data-aos-duration="1500">
        <div class="counter-img">
          <img src="{{asset('assets/front/./images/counter/staff.png')}}" alt="img">
        </div>
        <div class="counter-body">
          <div class="number-div">
            <span class="counter-number">
              280
            </span>
            <span class="ion-ios-plus-empty"></span>
          </div>
          <div class="counter-title">
            <p>
              Staff
            </p>
          </div>
        </div>
      </li>
      <li data-aos="zoom-in" data-aos-duration="1500">
        <div class="counter-img">
          <img src="{{asset('assets/front/./images/counter/patient.png')}}" alt="img">
        </div>
        <div class="counter-body">
          <div class="number-div">
            <span class="counter-number">
              5103
            </span>
            <span>
              / Yr
            </span>
            <span class="ion-ios-plus-empty"></span>
          </div>
          <div class="counter-title">
            <p>
              Patients
            </p>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <!-- end home counter section -->


  <!-- start testimonials section -->
  <div class="home-testimonials-section">
    <div class="section-heading">
      <p>
        Recommendations and Reviews
      </p>
    </div>
    <div class="testimonials-slick-slider">
      <div class="item-wrapper">
        <div class="item-inner">
          <div class="img-div">
            <img src="{{asset('assets/front/./images/testimonials/1.jpg')}}" alt="img">
          </div>
          <div class="text">
            <p>
              Words cannot describe my gratitude from the minute you walk in you are treated like a guest the
              receptionists nurses even cleaners are all caring! Even not knowing you every single one treated as a VIP
              doctors coming personally to escort you to consultation room I want to give special thanks to Dr mekki Dr
              Salem Dr Mahmoud and maissa customer coordinator the lab team the nurses who actually welcome you by name
              coffee tea served at all times and the manager himself walking through egaging with team and patients
              outstanding
            </p>
          </div>
          <div class="title">
            <p>
              farouk fares
            </p>
          </div>
        </div>
      </div>
      <div class="item-wrapper">
        <div class="item-inner">
          <div class="img-div">
            <img src="{{asset('assets/front/./images/testimonials/2.jpg')}}" alt="img">
          </div>
          <div class="text">
            <p>
              Words cannot describe my gratitude from the minute you walk in you are treated like a guest the
              receptionists nurses even cleaners are all caring! Even not knowing you every single one treated as a VIP
              doctors coming personally to escort you to consultation room I want to give special thanks to Dr mekki Dr
              Salem Dr Mahmoud and maissa customer coordinator the lab team the nurses who actually welcome you by name
              coffee tea served at all times and the manager himself walking through egaging with team and patients
              outstanding
            </p>
          </div>
          <div class="title">
            <p>
              Ramy mahmoud
            </p>
          </div>
        </div>
      </div>
      <div class="item-wrapper">
        <div class="item-inner">
          <div class="img-div">
            <img src="{{asset('assets/front/./images/testimonials/3.jpg')}}" alt="img">
          </div>
          <div class="text">
            <p>
              Words cannot describe my gratitude from the minute you walk in you are treated like a guest the
              receptionists nurses even cleaners are all caring! Even not knowing you every single one treated as a VIP
              doctors coming personally to escort you to consultation room I want to give special thanks to Dr mekki Dr
              Salem Dr Mahmoud and maissa customer coordinator the lab team the nurses who actually welcome you by name
              coffee tea served at all times and the manager himself walking through egaging with team and patients
              outstanding
            </p>
          </div>
          <div class="title">
            <p>
              fady rafat
            </p>
          </div>
        </div>
      </div>
      <div class="item-wrapper">
        <div class="item-inner">
          <div class="img-div">
            <img src="{{asset('assets/front/./images/testimonials/4.jpg')}}" alt="img">
          </div>
          <div class="text">
            <p>
              Words cannot describe my gratitude from the minute you walk in you are treated like a guest the
              receptionists nurses even cleaners are all caring! Even not knowing you every single one treated as a VIP
              doctors coming personally to escort you to consultation room I want to give special thanks to Dr mekki Dr
              Salem Dr Mahmoud and maissa customer coordinator the lab team the nurses who actually welcome you by name
              coffee tea served at all times and the manager himself walking through egaging with team and patients
              outstanding
            </p>
          </div>
          <div class="title">
            <p>
              Ahmed ali
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end testimonials section -->

  <!-- start faqs section -->
  <div class="faqs-section">
    <div class="container">
      <div class="section-heading">
        <p>
          Frequently Asked Questions
        </p>
        <p>
          There are a bunch of patiets questions that has been answered by the specialized doctors
          You can find your answer or ask another question
        </p>
      </div>

      <div class="section-body">
        <div class="form-wrapper">
          <div class="form-heading">
            <p>
              Ask a question
            </p>
          </div>
          <form action="">
            <div class="form-div">
              <input type="text" name="name" placeholder="name*">
              <div class="thin-line"></div>
            </div>
            <div class="form-div">
              <input type="email" name="email" placeholder="Email address*">
              <div class="thin-line"></div>
            </div>
            <div class="form-div">
              <input type="text" name="question-title" id="" placeholder="message title*">
              <div class="thin-line"></div>
            </div>
            <div class="form-div">
              <textarea name="question-details" placeholder="Message description"></textarea>
              <div class="thin-line"></div>
            </div>
            <button type="submit">
              <span class="ion-android-send"></span>
              <span>
                Send
              </span>
            </button>
          </form>
        </div>
        <div class="faqs-wrapper">
          <ul class="main-section-ul">
            <li>
              <div class="question-div">
                <div class="q-text">
                  <span class="linearicons-question-circle"></span>
                  <p>
                    Fix a problem
                  </p>
                </div>
                <div class="q-drop">
                  <div class="v-line"></div>
                  <span class="linearicons-chevron-down"></span>
                </div>
              </div>
              <div class="answer-div">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit accusantium dolorem qui voluptas ut
                  ullam veritatis ea porro, aliquam possimus
                </p>
              </div>
            </li>
            <li>
              <div class="question-div">
                <div class="q-text">
                  <span class="linearicons-question-circle"></span>
                  <p>
                    dolor sit amet consectetur adipisic
                  </p>
                </div>
                <div class="q-drop">
                  <div class="v-line"></div>
                  <span class="linearicons-chevron-down"></span>
                </div>
              </div>
              <div class="answer-div">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit accusantium dolorem qui voluptas ut
                  ullam veritatis ea porro, aliquam possimus
                </p>
              </div>
            </li>
            <li>
              <div class="question-div">
                <div class="q-text">
                  <span class="linearicons-question-circle"></span>
                  <p>
                    ur adipisicing elit. Suscipit accusanti
                  </p>
                </div>
                <div class="q-drop">
                  <div class="v-line"></div>
                  <span class="linearicons-chevron-down"></span>
                </div>
              </div>
              <div class="answer-div">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit accusantium dolorem qui voluptas ut
                  ullam veritatis ea porro, aliquam possimus
                </p>
              </div>
            </li>
            <li>
              <div class="question-div">
                <div class="q-text">
                  <span class="linearicons-question-circle"></span>
                  <p>
                    ullam veritatis ea porro, aliquam possimus
                  </p>
                </div>
                <div class="q-drop">
                  <div class="v-line"></div>
                  <span class="linearicons-chevron-down"></span>
                </div>
              </div>
              <div class="answer-div">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit accusantium dolorem qui voluptas ut
                  ullam veritatis ea porro, aliquam possimus
                </p>
              </div>
            </li>
            <li>
              <div class="question-div">
                <div class="q-text">
                  <span class="linearicons-question-circle"></span>
                  <p>
                    dolor sit amet consectetur adipisic
                  </p>
                </div>
                <div class="q-drop">
                  <div class="v-line"></div>
                  <span class="linearicons-chevron-down"></span>
                </div>
              </div>
              <div class="answer-div">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit accusantium dolorem qui voluptas ut
                  ullam veritatis ea porro, aliquam possimus
                </p>
              </div>
            </li>
            <li>
              <div class="question-div">
                <div class="q-text">
                  <span class="linearicons-question-circle"></span>
                  <p>
                    ur adipisicing elit. Suscipit accusanti
                  </p>
                </div>
                <div class="q-drop">
                  <div class="v-line"></div>
                  <span class="linearicons-chevron-down"></span>
                </div>
              </div>
              <div class="answer-div">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit accusantium dolorem qui voluptas ut
                  ullam veritatis ea porro, aliquam possimus
                </p>
              </div>
            </li>
            <li>
              <div class="question-div">
                <div class="q-text">
                  <span class="linearicons-question-circle"></span>
                  <p>
                    dolor sit amet consectetur adipisic
                  </p>
                </div>
                <div class="q-drop">
                  <div class="v-line"></div>
                  <span class="linearicons-chevron-down"></span>
                </div>
              </div>
              <div class="answer-div">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit accusantium dolorem qui voluptas ut
                  ullam veritatis ea porro, aliquam possimus
                </p>
              </div>
            </li>
            <li>
              <div class="question-div">
                <div class="q-text">
                  <span class="linearicons-question-circle"></span>
                  <p>
                    ullam veritatis ea porro, aliquam possimus
                  </p>
                </div>
                <div class="q-drop">
                  <div class="v-line"></div>
                  <span class="linearicons-chevron-down"></span>
                </div>
              </div>
              <div class="answer-div">
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit accusantium dolorem qui voluptas ut
                  ullam veritatis ea porro, aliquam possimus
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- end start faqs section -->

  <!-- blogs section -->
  <div class="blogs-section">
    <div class="container">

      <div class="section-heading">
        <p>
          Lates News
        </p>
      </div>
    </div>
    <div class="section-body">
      <div class="container">
        <div class="section-body">
          <ul class="main-section-ul">
            <li class="news-li" data-aos="zoom-in" data-aos-duration="1500">
              <a class="news-a" href="./news-details.html">
                <div class="news-img">
                  <img src="{{asset('assets/front/./images/news/1.jpg')}}" alt="img">
                </div>
                <div class="news-body">
                  <div class="news-heading-date">
                    <div class="heading">
                      <p>
                        March Is Colon Cancer Awareness Month
                      </p>
                    </div>
                    <div class="date">
                      <i class="ion-ios-calendar-outline"></i>
                      <span>
                        01 / 03
                      </span>
                    </div>
                  </div>
                  <div class="news-text">
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur recusandae velit quis
                      excepturi labore qui nam in culpa nostrum. At numquam
                    </p>
                  </div>
                </div>
              </a>
              <div class="social-div">
                <a href="#">
                  <i class="ion-social-facebook-outline"></i>
                </a>
                <a href="#">
                  <i class="ion-social-twitter-outline"></i>
                </a>
                <a href="#">
                  <i class="ion-social-googleplus-outline"></i>
                </a>
                <a href="#">
                  <i class="ion-social-pinterest-outline"></i>
                </a>
              </div>
            </li>
            <li class="news-li" data-aos="zoom-in" data-aos-duration="1500">
              <a class="news-a" href="./news-details.html">
                <div class="news-img">
                  <img src="{{asset('assets/front/./images/news/2.jpg')}}" alt="img">
                </div>
                <div class="news-body">
                  <div class="news-heading-date">
                    <div class="heading">
                      <p>
                        Rheumatology Department
                      </p>
                    </div>
                    <div class="date">
                      <i class="ion-ios-calendar-outline"></i>
                      <span>
                        28 / 2
                      </span>
                    </div>
                  </div>
                  <div class="news-text">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere corrupti modi reiciendis atque
                      soluta! Distinctio eius ut vel, similique labore libero corporis vero quis ea dolorum iusto? Ex
                    </p>
                  </div>
                </div>
              </a>
              <div class="social-div">
                <a href="#">
                  <i class="ion-social-facebook-outline"></i>
                </a>
                <a href="#">
                  <i class="ion-social-twitter-outline"></i>
                </a>
                <a href="#">
                  <i class="ion-social-googleplus-outline"></i>
                </a>
                <a href="#">
                  <i class="ion-social-pinterest-outline"></i>
                </a>
              </div>
            </li>
            <li class="news-li" data-aos="zoom-in" data-aos-duration="1500">
              <a class="news-a" href="./news-details.html">
                <div class="news-img">
                  <img src="{{asset('assets/front/./images/news/3.jpg')}}" alt="img">
                </div>
                <div class="news-body">
                  <div class="news-heading-date">
                    <div class="heading">
                      <p>
                        Opening Soon
                      </p>
                    </div>
                    <div class="date">
                      <i class="ion-ios-calendar-outline"></i>
                      <span>
                        13 / 02
                      </span>
                    </div>
                  </div>
                  <div class="news-text">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus ratione facilis cumque
                      distinctio quis, doloremque tempore repellat eos odit deserunt illo ullam praesentium sint libero
                      magni laborum itaque recusandae? Expedita
                    </p>
                  </div>
                </div>
              </a>
              <div class="social-div">
                <a href="#">
                  <i class="ion-social-facebook-outline"></i>
                </a>
                <a href="#">
                  <i class="ion-social-twitter-outline"></i>
                </a>
                <a href="#">
                  <i class="ion-social-googleplus-outline"></i>
                </a>
                <a href="#">
                  <i class="ion-social-pinterest-outline"></i>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- blogs section -->

  <!-- start upcoming events section -->
  <div class="upcoming-events-section">
    <div class="container">
      <div class="section-heading">
        <p>
          Upcoming Events
        </p>
      </div>
      <div class="section-body">
        <ul class="main-section-ul">
          <li data-aos="zoom-in" data-aos-duration="1500">
            <a href="./event-details.html">
              <div class="event-img">
                <img src="{{asset('assets/front/./images/events/1.jpg')}}" alt="">
              </div>
              <div class="event-body">
                <div class="event-heading">
                  <p>
                    ACDS weekly (free CME program)
                  </p>
                </div>
                <div class="event-details">
                  <div class="speakers">
                    <div class="heading">
                      <i class="ion-android-microphone"></i>
                      <p>
                        Speakers
                      </p>
                    </div>
                    <ul>
                      <li>
                        <i class="ion-android-checkmark-circle"></i>
                        <span>
                          Dr. Makki fayadh
                        </span>
                      </li>
                      <li>
                        <i class="ion-android-checkmark-circle"></i>
                        <span>
                          Dr. Salim awadh
                        </span>
                      </li>
                    </ul>
                  </div>
                  <div class="text">
                    <p>
                      ACDS Weekly FREE Clinical Meeting (CME PROGRAM)
                      CASE PRESENTATIONS FROM ACDS
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li data-aos="zoom-in" data-aos-duration="1500">
            <a href="./event-details.html">
              <div class="event-img">
                <img src="{{asset('assets/front/./images/events/2.jpg')}}" alt="">
              </div>
              <div class="event-body">
                <div class="event-heading">
                  <p>
                    ACDS weekly (free CME program)
                  </p>
                </div>
                <div class="event-details">
                  <div class="speakers">
                    <div class="heading">
                      <i class="ion-android-microphone"></i>
                      <p>
                        Speakers
                      </p>
                    </div>
                    <ul>
                      <li>
                        <i class="ion-android-checkmark-circle"></i>
                        <span>
                          Dr. Makki fayadh
                        </span>
                      </li>
                      <li>
                        <i class="ion-android-checkmark-circle"></i>
                        <span>
                          Dr. Salim awadh
                        </span>
                      </li>
                    </ul>
                  </div>
                  <div class="text">
                    <p>
                      ACDS Weekly FREE Clinical Meeting (CME PROGRAM)
                      CASE PRESENTATIONS FROM ACDS
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li data-aos="zoom-in" data-aos-duration="1500">
            <a href="./event-details.html">
              <div class="event-img">
                <img src="{{asset('assets/front/./images/events/3.jpg')}}" alt="">
              </div>
              <div class="event-body">
                <div class="event-heading">
                  <p>
                    ACDS weekly (free CME program)
                  </p>
                </div>
                <div class="event-details">
                  <div class="speakers">
                    <div class="heading">
                      <i class="ion-android-microphone"></i>
                      <p>
                        Speakers
                      </p>
                    </div>
                    <ul>
                      <li>
                        <i class="ion-android-checkmark-circle"></i>
                        <span>
                          Dr. Makki fayadh
                        </span>
                      </li>
                      <li>
                        <i class="ion-android-checkmark-circle"></i>
                        <span>
                          Dr. Salim awadh
                        </span>
                      </li>
                    </ul>
                  </div>
                  <div class="text">
                    <p>
                      ACDS Weekly FREE Clinical Meeting (CME PROGRAM)
                      CASE PRESENTATIONS FROM ACDS
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end upcoming events section -->


  <!-- our clients section -->
  <div class="clients-section">
    <div class="section-heading">
      <p>
        Our Clients
      </p>
    </div>
    <div class="swiper-container home-clients-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slider-img">
            <img src="{{asset('assets/front/./images/clients/1.png')}}" alt="img">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-img">
            <img src="{{asset('assets/front/./images/clients/2.png')}}" alt="img">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-img">
            <img src="{{asset('assets/front/./images/clients/3.png')}}" alt="img">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-img">
            <img src="{{asset('assets/front/./images/clients/4.png')}}" alt="img">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-img">
            <img src="{{asset('assets/front/./images/clients/1.png')}}" alt="img">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-img">
            <img src="{{asset('assets/front/./images/clients/2.png')}}" alt="img">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-img">
            <img src="{{asset('assets/front/./images/clients/3.png')}}" alt="img">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-img">
            <img src="{{asset('assets/front/./images/clients/4.png')}}" alt="img">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our clients section -->

  <!-- start survey section -->
  <div class="survey-btn">
    <img src="{{asset('assets/front/./images/icons/survey.png')}}" alt="survey">
    <div class="survey-text">
      <span>
        Take our survey
      </span>
      <span>
        and get a discount!
      </span>
    </div>
  </div>

  <!-- start survey modal -->
  <div class="survey-modal toggle-survey-modal">
    <div class="modal-body container">
      <div class="heading">
        <p>
          Take our survey and get a discount!
        </p>
      </div>
      <div class="survey-wrapper">
        <div class="modal-close">
          <i class="linearicons-cross2"></i>
        </div>

        <form class="survey-form">
          <ul class="main-form-ul">
            <li class="form-li">
              <div class="question">
                <p>
                  How nurses communicate well with patients?
                </p>
              </div>
              <ul class="answers-ul">
                <li>
                  <label for="a-0-1">
                    <input type="radio" name="a-0" id="a-0-1">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Not Sure
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-0-2">
                    <input type="radio" name="a-0" id="a-0-2">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Bad
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-0-3">
                    <input type="radio" name="a-0" id="a-0-3">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Good
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-0-4">
                    <input type="radio" name="a-0" id="a-0-4">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Very Good
                    </span>
                  </label>
                </li>
              </ul>
            </li>
            <li class="form-li">
              <div class="question">
                <p>
                  How doctors communicate well with patients?
                </p>
              </div>
              <ul class="answers-ul">
                <li>
                  <label for="a-1-1">
                    <input type="radio" name="a-1" id="a-1-1">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Not Sure
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-1-2">
                    <input type="radio" name="a-1" id="a-1-2">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Bad
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-1-3">
                    <input type="radio" name="a-1" id="a-1-3">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Good
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-1-4">
                    <input type="radio" name="a-1" id="a-1-4">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Very Good
                    </span>
                  </label>
                </li>
              </ul>
            </li>
            <li class="form-li">
              <div class="question">
                <p>
                  What about the patients' rooms and bathrooms?
                </p>
              </div>
              <ul class="answers-ul">
                <li>
                  <label for="a-2-1">
                    <input type="radio" name="a-2" id="a-2-1">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Not Sure
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-2-2">
                    <input type="radio" name="a-2" id="a-2-2">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Bad
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-2-3">
                    <input type="radio" name="a-2" id="a-2-3">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Good
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-2-4">
                    <input type="radio" name="a-2" id="a-2-4">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Very Good
                    </span>
                  </label>
                </li>
              </ul>
            </li>
            <li class="form-li">
              <div class="question">
                <p>
                  What about the patients' rooms and bathrooms?
                </p>
              </div>
              <ul class="answers-ul">
                <li>
                  <label for="a-3-1">
                    <input type="radio" name="a-3" id="a-3-1">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Not Sure
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-3-2">
                    <input type="radio" name="a-3" id="a-3-2">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Bad
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-3-3">
                    <input type="radio" name="a-3" id="a-3-3">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Good
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-3-4">
                    <input type="radio" name="a-3" id="a-3-4">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Very Good
                    </span>
                  </label>
                </li>
              </ul>
            </li>
            <li class="form-li">
              <div class="question">
                <p>
                  How do patients rate the hospital?
                </p>
              </div>
              <ul class="answers-ul">
                <li>
                  <label for="a-4-1">
                    <input type="radio" name="a-4" id="a-4-1">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Not Sure
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-4-2">
                    <input type="radio" name="a-4" id="a-4-2">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Bad
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-4-3">
                    <input type="radio" name="a-4" id="a-4-3">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Good
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-4-4">
                    <input type="radio" name="a-4" id="a-4-4">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Very Good
                    </span>
                  </label>
                </li>
              </ul>
            </li>
          </ul>

          <div class="name-phone-email">
            <input type="text" placeholder="Name :">
            <input type="email" placeholder="Email :">
            <input type="text" placeholder="Phone :">
          </div>

          <button type="submit">
            Submit
          </button>
        </form>
      </div>
    </div>
  </div>
  <!-- end survey modal -->
  <!-- end survey section -->


 @endsection