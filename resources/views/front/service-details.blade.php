@extends('front.layout.front')
@section('content')
    <!-- start services details page -->
    <div class="service-details-page">
        <div class="top-section">
            <div class="img-div">
                <img src="{{ URL::asset('./services/' . $service->image) }}" alt="img">
            </div>
            <div class="service-text">
                <div class="service-title">
                    <p>
                        {{ $service->name_en }}
                    </p>
                </div>
                <div class="text">
                    <div class="brief">
                        <p>
                            {{ $service->description_en }}
                        </p>
                    </div>
                    <div class="ul-title">
                        <i class="feather icon-list"></i>
                        <p>
                            Services provided
                        </p>
                    </div>
                    <ul class="provided-ul">
                        <li>
                            <?= $service->titel_en ?>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="bottom-section">
            <div class="container">
                <div class="doctors-section">
                    <p>
                        Doctors
                    </p>
                    <div class="doctors-slick-slider" data-aos="zoom-in-right" data-aos-duration="1500">
                        @foreach ($service->doctor as $value)
                            <a href="{{ route('doctors_show',$value->id) }}">
                                <div class="img-div">
                                    <img src="{{ URL::asset('./doctors/' . $value->image) }}" alt="img">
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="container">
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
    </div>
    <!-- end services details page -->


    <!-- start survey section -->
    <div class="survey-btn">
        <img src="./images/icons/survey.png" alt="survey">
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
    <div class="survey-modal">

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
