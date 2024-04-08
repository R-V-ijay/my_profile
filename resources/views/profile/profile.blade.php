<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- @vite(['resources/scss/app.scss']) --}}
    <link rel="stylesheet" href="{{asset('build/assets/app-B8iUf4aS.css')}}">
</head>

<body ng-app="myApp" ng-controller="MyProfile as profile">
    <div class="hero_section">
        <section class="navbar_section">
            <nav class="navbar navbar-expand-lg fixed-top p-5" id='nav'>
                <div class="container-fluid p-0">
                    <a class="navbar-brand text-white" href="mailto:vijayr.office@gmail.com">vijayr.office@gmail.com</a>
                    <button ng-click="profile.navbarDisplay()" class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon navToggleBtn"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav" >
                        <ul class="navbar-nav navbarItems align-items-center">
                            <li class="nav-item ">
                                <a class="nav-link text-white" aria-current="page" href="#service">Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#my_recent_work">Work</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link text-white" href="#">Resume</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#my_skills">Skils</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#content">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
    </div>
    <div data-bs-spy="scroll" data-bs-target="#nav" data-bs-root-margin="0px 0px -40%" tabindex="0" id="mainDiv">
        <section class="service row scrollspy-example p-5 m-0" id="service">
            <div class="my_details col-md-6 pb-sm-5">
                <h5>I am Vijay</h5>
                <h3 class="color_text">Web Developer+<br>UX Designer</h3>
                <p class="text-secondary">I break down complex user experinece problems to create integritiy focussed
                    solutions that connect billions of people</p>
                <div class="d-flex gap-3 pt-3 align-items-center row">
                    <div class="col p-0">
                        <a class="btn download_cv hoverEff text-nowrap w-100">Download CV</a>
                    </div>
                    <div class="d-flex gap-3 col p-0 ">
                    <a class="btn hoverEff social_btn d-flex justify-content-center align-content-center">
                        <img src="{{ URL::asset('/image/facebook.png') }}" alt="profile ">
                    </a>
                    <a class="btn hoverEff social_btn">
                        <img src="{{ URL::asset('/image/instagram.png') }}" alt="">
                    </a>
                    <a class="btn hoverEff social_btn">
                        <img src="{{ URL::asset('/image/whatsapp.png') }}" alt="">
                    </a>
                </div>
                </div>
            </div>
            <div class="my_picture col-md-6 ">
                <div class="d-flex justify-content-center align-items-center mt-5 mt-md-0">
                    <img width="300px" class="img-fluid rounded" src="{{ URL::asset('/image/profile.jpg') }}"
                        alt="profile">
                </div>
            </div>
        </section>
        <section class="my_recent_work p-5" id="my_recent_work">
            <div class="text-center py-5">
                <h5 class="color_text">My Recent Works</h5>
                <p class="w-75 m-auto text-white">We put your ideas and thus your wishes in the form of a unique web
                    project that
                    inspires you and you customers.</p>
            </div>
            <div class="row my_project pb-5">
                <div class="col-md-6 p-3">
                    <div class="project_1 d-flex justify-content-center align-items-center rounded-3 border">
                        <img class="img-fluid rounded-3 border"
                            src="{{ URL::asset('/image/my_projects/demos.page.png') }}" alt="">
                        <div
                            class="project_1_link w-100 h-100 justify-content-center align-items-center d-flex rounded-3 border flex-column">
                            <a href="https://demos.page" target="_blank" class="btn btn-primary">Demos.page</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-3">
                    <div class="project_1 d-flex justify-content-center align-items-center rounded-3 border">
                        <img class="img-fluid rounded-3 border" src="{{ URL::asset('/image/my_projects/1.page.png') }}"
                            alt="">
                        <div
                            class="project_1_link w-100 h-100 justify-content-center align-items-center d-flex rounded-3 border flex-column">
                            <a href="https://1.page" target="_blank" class="btn btn-primary">1.page</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-3">
                    <div class="project_1 d-flex justify-content-center align-items-center rounded-3 border">
                        <img class="img-fluid rounded-3 border"
                            src="{{ URL::asset('/image/my_projects/golink.ly.png') }}" alt="">
                        <div
                            class="project_1_link w-100 h-100 justify-content-center align-items-center d-flex rounded-3 border flex-column">
                            <a href="https://golink.ly" target="_blank" class="btn btn-primary">Golink.ly</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-3">
                    <div class="project_1 d-flex justify-content-center align-items-center rounded-3 border">
                        <img class="img-fluid rounded-3 border" src="{{ URL::asset('/image/my_projects/kbify.png') }}"
                            alt="">
                        <div
                            class="project_1_link w-100 h-100 justify-content-center align-items-center d-flex rounded-3 border flex-column">
                            <a href="https://kbify.com" target="_blank" class="btn btn-primary">kbify</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my_education p-5">
            <div class="row py-5">
                <div class="col-lg-6">
                    <h3 class="color_text text-center row p-4 m-0 text-nowrap">My Experience</h3>
                    <div class="row text-white details p-3 m-2">
                        <h4 class="z-1">2023 - 2024</h4>
                        <h3 class="m-0 text-nowrap z-1 ">FULL STACK WEB DEVELOPER</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="color_text text-center row p-4 m-0 text-nowrap">My Education</h3>
                    <div class="row text-white details p-3 m-2">
                        <h4 class="z-1">2016 - 2019</h4>
                        <h3 class="m-0 text-nowrap z-1">B.Sc Computer science</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="my_skills pb-5" id="my_skills">
            <div class="text-center py-5">
                <h5 class="color_text">My Skills</h5>
                <p class="w-75 m-auto text-white font-weight-bold w-50">We put your ideas and thus your wishes in the
                    form of a unique web project that inspires you and you customers.</p>
            </div>
            <div class="row  w-100 pb-
            4">
                <ul class="logo d-flex justify-content-center align-items-center gap-5">
                    <li><img class="img-fluid" src="{{ URL::asset('/image/skills/bootstrap.png') }}" alt="">
                        <p class="text-center text-white pt-3">Boostrap</p>
                    </li>
                    <li><img class="img-fluid" src="{{ URL::asset('/image/skills/js.png') }}" alt="">
                        <p class="text-center text-white pt-3">Javascript</p>
                    </li>
                    <li><img class="img-fluid" src="{{ URL::asset('/image/skills/angularjs.png') }}" alt="">
                        <p class="text-center text-white pt-3">Angular js</p>
                    </li>
                    <li><img class="img-fluid" src="{{ URL::asset('/image/skills/php.png') }}" alt="">
                        <p class="text-center text-white pt-3">Php</p>
                    </li>
                    <li><img class="img-fluid" src="{{ URL::asset('/image/skills/laravel.png') }}" alt="">
                        <p class="text-center text-white pt-3">Laravel</p>
                    </li>
                </ul>
            </div>
        </section>
        <section class="content p-5 text-white position-relative" id="content">
            <div class="row ">
                <div class="col-md-6 ">
                    <form action="" ng-submit="profile.formSubmite($event)"
                        class="p-5 form_list border-0 rounded-4" name="clint_deatil_form">
                        <h3 class="color_text pb-3">Let’s work together!</h3>
                        <p class="pb-3">I design and code beautifully simple things and i love what i do. Just simple
                            like that!</p>
                        <div class="row py-2">
                            <div class="col-md-6 mb-sm-3">
                                <input class="form-control " type="text" name="" id=""
                                    placeholder="First Name" ng-model="profile.name"
                                    onkeydown="return /[a-z]/i.test(event.key)">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="" id=""
                                    placeholder="Last Name" ng-model="profile.last_name"
                                    onkeydown="return /[a-z]/i.test(event.key)">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6">
                                <input class="form-control " name="" id=""
                                    placeholder="Email address" ng-model="profile.email"
                                    ng-change="profile.emailValidation($event)">
                                <span class="emailErr text-danger ms-2"></span>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="" id=""
                                    placeholder="Phone number" ng-model="profile.phone"
                                    ng-change="profile.phoneValidation()" maxlength="10"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                <span class="phoneErr text-danger ms-2"></span>
                            </div>
                        </div>
                        <textarea class="form-control mt-2" placeholder="Message" id="floatingTextarea2" style="height: 200px"
                            ng-model="profile.message"></textarea>
                        <button type='submit' class="btn text-white px-5 mt-4 py-3  rounded-5 fw-bold">Send
                            Message</button>
                    </form>
                </div>
                <div class=" col-md-6 p-5 d-flex justify-content-center align-content-center flex-column">
                    <div class=" contentDetails d-flex  justify-content-start mx-md-5 my-3">
                        <div class="gap-3 d-flex  justify-content-start">
                            <div class="icons d-flex justify-content-center align-items-center">
                                <img class="" src="{{ URL::asset('/image/phone-call.png') }}" alt="">
                            </div>
                            <div>
                                <p class="m-0">Phone</p>
                                <h4>7397302034</h4>
                            </div>
                        </div>
                    </div>
                    <div class=" contentDetails d-flex gap-3 justify-content-start mx-md-5 my-3">
                        <div class="icons d-flex justify-content-center align-items-center">
                            <img class="" src="{{ URL::asset('/image/mail.png') }}" alt="">
                        </div>
                        <div>
                            <p class="m-0">Email</p>
                            <h4>vijay.office@gmail.com</h4>
                        </div>
                    </div>
                    <div class=" contentDetails d-flex gap-3 justify-content-start mx-md-5 my-3">
                        <div class="icons d-flex justify-content-center align-items-center">
                            <img class="" src="{{ URL::asset('/image/pin.png') }}" alt="">
                        </div>
                        <div>
                            <p class="m-0">Address</p>
                            <h4>No.81, L block, Azhilnagar, Chennai - 100</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submit_popup position-absolute p-5 rounded-5 border text-center">
                    <img width="50" src="{{ URL::asset('/image/send_mail.png') }}" alt="">
                    <h4 class="m-0">Message send successfully!</h4>
            </div>
        </section>
    </div>
    <footer class="m-auto w-100 d-flex justify-content-center align-items-center flex-column pt-5">
        <ul class="d-flex list-unstyled  m-0 navbarItems">
            <li><a class="nav-link " href="#service">Services</a></li>
            <li><a class="nav-link" href="#my_recent_work">Work</a></li>
            {{-- <li><a class="nav-link" href="">Resume</a></li> --}}
            <li><a class="nav-link" href="#my_skills">Skils</a></li>
            <li><a class="nav-link" href="#content">Contact</a></li>
        </ul>
        <p class="text-white pt-2"> &#169; 2024 All rights reserved by VR</p>
    </footer>
    {{-- @vite(['resources/js/app.js']) --}}
    {{-- <script src="{{asset('js/app-DFMGEaK5.js')}}"></script> --}}
    <script src="{{asset('jQuery/jQuery.js')}}" type="text/javascript"  ></script>
        <script type="module" src="{{asset('build/assets/app--a20tRQ9.js')}}"  ></script>

</body>

</html>
