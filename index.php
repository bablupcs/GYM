<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>GYM MANAGEMENT</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/adyangym.css">

</head>

<body class="section">

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">GYM<em>MANAGEMENT</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">HOME</a></li>
                            <li class="scroll-to-section"><a href="#features">MEMBERSHIP</a></li>
                            <li class="scroll-to-section"><a href="#trainers">FEATURES</a></li>
                            <li class="scroll-to-section"><a href="#our-classes">MODULE</a></li>
                            <li class="scroll-to-section"><a href="#schedule">SCHEDULE</a></li>
                            <li class="scroll-to-section"><a href="https://gym.adyansolutions.com/users/login">LOGIN</a></li>
                            <!-- <li class="scroll-to-section"><a href="#contact-us">Contact</a></li>  -->
                            <!-- <li class="main-button"><a href="#">Request a demo</a></li> -->
                            <li><button type="button" class="btn btn-danger" style="    background: linear-gradient(145deg, #f77404 0%, #d513d5 100%);" data-bs-toggle="modal" data-bs-target="#myModal">Request a demo</button></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Contact Us</button> -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content section">
                    <div class="modal-header">
                        <h5 class="modal-title">Request A Demo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="number" class="form-control" name="moblie" id="subject" placeholder="Mobile Number" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <!-- <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/adyan_gym.mp4" type="video/mp4" />
        </video>
        

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>work harder, get stronger</h6>
                <h2> adyan<em>gym</em></h2>
                <div class="main-button scroll-to-section">
                </div>
            </div>
        </div>
    </div> -->
    <div class="main-banner" id="top">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/slider0.png" alt="" style="width: 100%; height: 600px; margin-top: 81px;">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/slider2.png" alt="" style="width: 100%; height: 600px; margin-top: 81px;">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/slider3.png" alt="" style="width: 100%; height: 600px; margin-top: 81px;">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/slider4.png" alt="" style="width: 100%; height: 600px; margin-top: 81px;">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/slider5.png" alt="" style="width: 100%; height: 600px; margin-top: 81px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="main-banner" id="top">
            <!-- ***** Main Banner Area End ***** -->
         <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                    <h2>Membership<em> Types</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <!-- <p>Training Studio is free CSS template for gyms and fitness centers. You are allowed to use this layout for your business website.</p> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/6179048.png" alt="First One" class="gym-icon">
                            </div>
                            <div class="right-content">
                                <h4>Platinum Membership</h4>
                                <p>$25 Every month perfect for committed trainers.24/7 GYM access.Custom strength & conditioning program. Weekly mobility training sessions.</p>
                                <a href="#" class="btn btn-danger" style="margin-left: 40%;">1 years</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                            <img src="assets/images/5776621.png" alt="First One" class="gym-icon">
                            </div>
                            <div class="right-content">
                                <h4><br>Golden Membership</h4>
                                <p>$20 Every month Ideal for Advanced trainers.Valid for 12 months.Personallized program.Full nutrition plan.Four online form coaching sessions.</p>
                                <a href="#" class="btn btn-danger" style="margin-left: 40%;">3 Months</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                            <img src="assets/images/prepaid-icon-4.jpg" alt="First One" class="gym-icon">
                            </div>
                            <div class="right-content">
                            <h4>Silver Membership</h4>
                                <p>$15 Every month perfect for beginners.Access to all classes Mon-Fri.Free T-shirt.</p>
                                <a href="#" class="btn btn-danger" style="margin-left: 40%;">1 Days</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/time.png" alt="First One" class="gym-icon">
                            </div>
                            <div class="right-content">
                                <h4>Student Membership</h4>
                                <p>Stduent get up to 30% off membership.To grab a discount on your student membership.24/7 GYM access.</p>
                                <a href="#" class="btn btn-danger" style="margin-left: 40%;">2 Week</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
    
    <section class="section" id="trainers">
                <div class="container"style="margin-top: -10%;">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="section-heading">
                                <h2> TYPE OF<em> LOGIN</em></h2>
                                <img src="assets/images/line-dec.png" alt="">
                                <!-- <p>These daily trainers helped burn calories and stay in shape and complement those regular trips to the gym.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/membersss.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4 class="text-center" style="margin-top: 7%;">MEMBER</h4>
                                    <!-- <p>Lifting weights. Using resistance bands. Using your body weight for resistance, by doing push-ups, pull-ups, crunches, leg squats or push-ups against a wall. Using weight machines at a gym.</p> -->
                                    <ul class="social-icons">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/stf.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4 class="text-center" style="margin-top: 7%;">STAFF MEMBER</h4>
                                    <!-- <p>When it comes to muscle-strengthening exercise, focus on things like dumbbells, resistance bands, resistance machines, and bodyweight exercises such as push-ups, squats and lunges.</p> -->
                                    <ul class="social-icons">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/5606780.png" alt="">
                                </div>
                                <div class="down-content">

                                    <h4 class="text-center" style="margin-top: 7%;"> ACCOUNTANT</h4>
                                    <!-- <p>Yoga is definitely a great choice for improving heart health as it is a process of healing from inside. On the other hand, gym training also works on heart health by burning excess calories.</p> -->
                                    <ul class="social-icons">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="section" id="call-to-action" style="margin-top: -6%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h1 class="call">The client pays a certain sum every month so that he/she may use the gym's services daily.</h1>
                        <div class="main-button scroll-to-section">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- ***** Testimonials Starts ***** -->
            <section class="section" id="trainers">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="section-heading">
                                <h2> Feat<em>ures</em></h2>
                                <img src="assets/images/line-dec.png" alt="">
                                <!-- <p>These daily trainers helped burn calories and stay in shape and complement those regular trips to the gym.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/3344152.png" alt="">
                                </div>
                                <div class="down-content">

                                    <h4 class="text-center" style="margin-top: 7%;">Dashboard</h4>
                                    <!-- <p>Lifting weights. Using resistance bands. Using your body weight for resistance, by doing push-ups, pull-ups, crunches, leg squats or push-ups against a wall. Using weight machines at a gym.</p> -->
                                    <ul class="social-icons">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/workoout.png" alt="">
                                </div>
                                <div class="down-content">

                                    <h4 class="text-center" style="margin-top: 7%;">Workout</h4>
                                    <!-- <p>When it comes to muscle-strengthening exercise, focus on things like dumbbells, resistance bands, resistance machines, and bodyweight exercises such as push-ups, squats and lunges.</p> -->
                                    <ul class="social-icons">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/easy to conf.png" alt="">
                                </div>
                                <div class="down-content">

                                    <h4 class="text-center" style="margin-top: 7%;">Easy to configure</h4>
                                    <!-- <p>Yoga is definitely a great choice for improving heart health as it is a process of healing from inside. On the other hand, gym training also works on heart health by burning excess calories.</p> -->
                                    <ul class="social-icons">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section" id="trainers">
                <div class="container" style="margin-top: 23px;">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/member.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4 class="text-center" style="margin-top: 7%;">Multiple user roles</h4>
                                    <!-- <p>Lifting weights. Using resistance bands. Using your body weight for resistance, by doing push-ups, pull-ups, crunches, leg squats or push-ups against a wall. Using weight machines at a gym.</p> -->
                                    <ul class="social-icons">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/4108042.png" alt="">
                                </div>
                                <div class="down-content">

                                    <h4 class="text-center" style="margin-top: 7%;">Payment mode easy</h4>
                                    <!-- <p>When it comes to muscle-strengthening exercise, focus on things like dumbbells, resistance bands, resistance machines, and bodyweight exercises such as push-ups, squats and lunges.</p> -->
                                    <ul class="social-icons">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/CheckList.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4 class="text-center" style="margin-top: 7%;">Additional features</h4>
                                    <!-- <p>Yoga is definitely a great choice for improving heart health as it is a process of healing from inside. On the other hand, gym training also works on heart health by burning excess calories.</p> -->
                                    <ul class="social-icons">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Testimonials Ends ***** -->
            <section class="section" id="call-to-action" style="margin-top: 30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="cta-content">
                                <h1 class="call">In this fitness phase our motivational trainer will give best motivation. </h1>
                                <div class="main-button scroll-to-section">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Our Classes Start ***** -->
            <section class="section" id="our-classes">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="section-heading">
                                <h2>Our <em>Module</em></h2>
                                <img src="assets/images/line-dec.png" alt="">
                                <!-- <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="row" id="tabs">
                        <div class="col-lg-4" style="margin-top: -42px;">
                            <ul>
                                <li><a href='#tabs-1' class="tab">1.Intuitive Dashboard</a></li>
                                <li><a href='#tabs-2' class="tab">2.Membership Module</a></a></li>
                                <li><a href='#tabs-3' class="tab">3.Workout Module</a></a></li>
                                <li><a href='#tabs-4' class="tab">4.Activity Module</a></a></li>
                                <li><a href='#tabs-5' class="tab">5.Attendance Module</a></a></li>
                                <li><a href='#tabs-6' class="tab">6.Class List Module</a></a></li>
                                <li><a href='#tabs-7' class="tab">7.Trainer Module</a></a></li>
                                <li><a href='#tabs-8' class="tab">8.Message Module</a></a></li>
                                <li><a href='#tabs-9' class="tab">9.General Settings</a></a></li>
                                <!-- <li><a href='#tabs-5'><img src="assets/images/tabs-first-icon.png" alt="">Fiveth Training Class</a></a></li> -->
                                <!-- <div class="main-rounded-button"><a href="#">View All Schedules</a></div> -->
                            </ul>
                        </div>
                        <div class="col-lg-8">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <img src="assets/images/Slide1.png" alt="First Class">
                                </article>
                                <article id='tabs-2'>
                                    <img src="assets/images/Slide2.png" alt="Second Training">
                                </article>
                                <article id='tabs-3'>
                                    <img src="assets/images/Slide3.png" alt="Third Class">
                                </article>
                                <article id='tabs-4'>
                                    <img src="assets/images/Slide4.png" alt="Fourth Training">
                                </article>
                                <article id='tabs-5'>
                                    <img src="assets/images/Slide5.png" alt="Fiveth Training">
                                </article>
                                <article id='tabs-6'>
                                    <img src="assets/images/Slide6.png" alt="Fiveth Training">
                                </article>
                                <article id='tabs-7'>
                                    <img src="assets/images/Slide7.png" alt="Fiveth Training">
                                </article>
                                <article id='tabs-8'>
                                    <img src="assets/images/Slide8.png" alt="Fiveth Training">
                                </article>
                                <article id='tabs-9'>
                                    <img src="assets/images/Slide9.png" alt="Fiveth Training">
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Our Classes End ***** -->

            <section class="section" id="schedule" style="margin-top: -10%;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="section-heading dark-bg">
                                <h2>Classes <em>Schedule</em></h2>
                                <img src="assets/images/line-dec.png" alt="">
                                <!-- <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="filters">
                                <ul class="schedule-filter">
                                    <li class="active" data-tsfilter="monday">Monday</li>
                                    <li data-tsfilter="tuesday">Tuesday</li>
                                    <li data-tsfilter="wednesday">Wednesday</li>
                                    <li data-tsfilter="thursday">Thursday</li>
                                    <li data-tsfilter="friday">Friday</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-10 offset-lg-1">
                            <div class="schedule-table filtering">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="day-time">Fitness Class</td>
                                            <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                            <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                                            <td>William G. Stewart</td>
                                        </tr>
                                        <tr>
                                            <td class="day-time">Muscle Training</td>
                                            <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                            <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                            <td>Paul D. Newman</td>
                                        </tr>
                                        <tr>
                                            <td class="day-time">Body Building</td>
                                            <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                            <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                            <td>Boyd C. Harris</td>
                                        </tr>
                                        <tr>
                                            <td class="day-time">Yoga Training Class</td>
                                            <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                            <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                            <td>Hector T. Daigle</td>
                                        </tr>
                                        <tr>
                                            <td class="day-time">Advanced Training</td>
                                            <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                            <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                            <td>Bret D. Bowers</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ***** Contact Us Area Starts ***** -->
            <section class="section" id="contact-us">
                <div class="container-fluid">
                    <div class="row" style="margin-top: -10%;">
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.661248625448!2d77.38466961440666!3d28.609937591855434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef424308092f%3A0x475b0fe87fd2f022!2sAdyan%20Solutions!5e0!3m2!1sen!2sin!4v1675251730025!5m2!1sen!2sin" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="contact-form">
                            <h5 class="text-white text-center">Request A Demo</h5>
                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <div class="row">
                                        <div class="form-group mt-3">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="number" class="form-control" name="moblie" id="moblie" placeholder="Mobile Number" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="subject" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Contact Us Area Ends ***** -->

            <!-- ***** Footer Start ***** -->
            <footer class="footer_set">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright &copy; 2023 ADYAN GYM
                                - Designed by <a rel="nofollow" href="" class="tm-text-link" target="_parent">ADYAN SOLUTIONS.COM</a><br>
                                Distributed by <a rel="nofollow" href="" class="tm-text-link" target="_blank">adyansolutions.com</a>
                            </p>
                            <!-- You shall support us a little via PayPal to info@templatemo.com -->
                        </div>
                    </div>
                </div>
            </footer>

            <!-- jQuery -->
            <script src="assets/js/jquery-2.1.0.min.js"></script>

            <!-- Bootstrap -->
            <script src="assets/js/popper.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>

            <!-- Plugins -->
            <script src="assets/js/scrollreveal.min.js"></script>
            <script src="assets/js/waypoints.min.js"></script>
            <script src="assets/js/jquery.counterup.min.js"></script>
            <script src="assets/js/imgfix.min.js"></script>
            <script src="assets/js/mixitup.js"></script>
            <script src="assets/js/accordions.js"></script>

            <!-- Global Init -->
            <script src="assets/js/custom.js"></script>

</body>

</html>