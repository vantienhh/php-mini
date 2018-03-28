<!doctype html>
<html lang="vi">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
         <!-- icon -->
        <script defer="" src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <title>Hello, world!</title>

        <!-- Important Owl stylesheet -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">

        <!-- Default Theme -->
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

    </head>
    <body>
       <div class="wallpaper">
        <?php
            session_start();
         ?>
            <header>
                <!-- laptop  -->
                <div class="d-none d-md-block">
                    <div class="menu background-blue">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="menu-left col-md-3 col-lg-3 background-blue color-white d-none d-md-block">
                                  Blog <span class="font-weight-bold">template</span>
                              </div>
                              <div class="menu-right col-md-9 col-lg-9 background-white">
                                 <nav class="navbar navbar-expand-md navbar-dark menu-navbar">
                                      <span>
                                          <span class="right-search1 d-lg-none d-col-block">
                                              <i class=" fas fa-search color-white "></i>
                                          </span>
                                          <input type="text" name="text" class="search1-input">
                                      </span>
                                    <!-- Toggler/collapsibe Button -->
                                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                      <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <!-- Navbar links -->
                                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                      <div class="row">
                                          <ul class="navbar-nav bar-left mx-auto col-5">
                                             <li class="nav-item li-search2">
                                                <input type="hidden" class="search2-input">
                                             </li>
                                             <li class="nav-item about">
                                                <a class="nav-link" href="#">About</a>
                                             </li>
                                             <li class="nav-item coop">
                                                <a class="nav-link " href="#">Cooperation</a>
                                             </li>
                                             <li class="nav-item contact">
                                               <a class="nav-link" href="#">Contact</a>
                                             </li>
                                          </ul>

                                          <ul class="navbar-nav bar-right ml-auto col-7">
                                              <li class="nav-item">
                                                  <a class="nav-link color-blue" href="#nature">Nature</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" href="#people">People</a>
                                             </li>
                                             <li class="nav-item">
                                                <a class="nav-link" href="#trip">Trips</a>
                                             </li>
                                             <li class="nav-item">
                                               <a class="nav-link" href="#animal">Animals</a>
                                             </li>
                                             <li class="nav-item">
                                               <a class="nav-link" href="#fashion">Fashion</a>
                                             </li>
                                             <li class="nav-item">
                                               <a class="nav-link" href="#tech">Tech</a>
                                             </li>
                                             <li class="nav-item">
                                               <a class="nav-link font-weight-bold" href="#">...</a>
                                             </li>
                                          </ul>
                                      </div>
                                    </div>
                                  </nav>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>

                <!-- mobile -->
                <div class="d-md-none d-block ">
                   <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                     <form class="form-inline">
                      <span class="mobile-icon-search"><i class="fas fa-search color-white "></i></span>
                      <input class="form-control mr-sm-2 mobile-search" type="hidden" placeholder="Search">
                    </form>
                    <!-- Brand -->
                    <a class="navbar-brand color-white mobile-title" href="#">Blog <span class="font-weight-bold">template</span></a>

                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar2">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse mobile-bar m-2" id="collapsibleNavbar2">
                      <div class="row">
                        <ul class="navbar-nav mobile-bar-left col-4">
                         <li class="nav-item about">
                            <a class="nav-link" href="#">About</a>
                         </li>
                         <li class="nav-item coop">
                            <a class="nav-link " href="#">Cooperation</a>
                         </li>
                         <li class="nav-item contact">
                           <a class="nav-link" href="#">Contact</a>
                         </li>
                        </ul>

                        <ul class="navbar-nav mobile-bar-right col-4">
                          <li class="nav-item">
                            <a class="nav-link color-blue" href="#nature">Nature</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#people">People</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#trip">Trips</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="#animal">Animals</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="#fashion">Fashion</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="#tech">Tech</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link font-weight-bold" href="#">...</a>
                         </li>
                      </ul>
                      </div>
                    </div>
                  </nav>
                </div>

                <div class="slider position-relative">
                     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="images/banner.png" alt="First slide">
                                <div class="carousel-caption color-white">
                                   <img src="images/people.png" alt="people">
                                    <h3>Maecenas quis lvtobortis nunc. Nullam sit vel odio</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="images/banner_2.jpg" alt="Second slide">
                                <div class="carousel-caption color-white">
                                   <img src="images/people.png" alt="people">
                                    <h3>Maecenas quis lvtobortis nunc. Nullam sit vel odio</h3>
                                </div>
                            </div>
                            <ul class="slider-ul mb-5 color-white">
                                <li class="slider-people"><span class="tags col-sm-3 background-purple">People</span></li>
                                <li class="slider-Doe"><span class="tags col-sm-9 tags-septemvber">14 septemvber 2016 | <a href="#">John Doe</a></span></li>
                             </ul>
                          </div>

                          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                    </div>
                </div>
            </header>

            <div class="box-1 background-grey-light pt-5">
                <div class="container">
                    <div class="row">
                        <div class="owl-carousel owl-carousel-2">
                            <div class="item">
                                <div class="card">
                                    <img src="images/home_1.png" alt="Home">
                                    <span class="box-1-tag tags-div1 background-red tags">Trips</span>
                                     <div class="card-body">
                                          <p class="card-text">Donec elementum dui semper, prvetium dui quis, pretium nisl. Nunc quis ornare odio.</p>
                                    </div>
                                    <div class="card-footer border-0">
                                          <small class="text-muted"><span class="color-grey">11 septemvber 2016 |</span> <a href="#">John Doe</a> </small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <img src="images/home_2.png" alt="Home">
                                      <span class="box-1-tag tags-div1 background-green tags">Nature</span>
                                     <div class="card-body">
                                          <p class="card-text">Maecenas quis lobortis nunc. Nullam sit amet augue vel odio congue vulputate a ut nisi.</p>
                                    </div>
                                    <div class="card-footer border-0">
                                          <small class="text-muted"><span class="color-grey">11 septemvber 2016 |</span> <a href="#">John Doe</a> </small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <img src="images/home_10.jpg" alt="home">
                                     <span class="box-1-tag tags-div background-green tags">Nature</span>
                                     <div class="card-body">
                                          <p class="card-text">Donec elementum dui semper, prvetium dui quis, pretium nisl. Nunc quis ornare odio.</p>
                                    </div>
                                    <div class="card-footer border-0">
                                          <small class="text-muted"><span class="color-grey">11 septemvber 2016 |</span> <a href="#">John Doe</a> </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-2 background-white pd-5 pt-5">
                <div class="container">
                    <div class="row">
                        <div class="box-2-top position-relative mb-4">
                            <div class="box-2-title color-white">
                                <h2 class="font-48 text-center">Proin congue elit fringilla</h2>
                                <p class="text-center">sodales tellus interdum fermentum nulla. Aliquam vitae arcu condimentum, consectetur diam sed, ultrices urna. </p>
                            </div>
                            <div>
                                <ul class="box2-ul">
                                    <li class="slider-people"><span class="background-red tags-people">Trips</span></li>
                                    <li class="slider-Doe"> <span>11 septemvber 2016 |</span> <a href="#"><u>John Doe</u></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-carousel owl-carousel-3">
                            <div class="item">
                                <div class="card" id="nature">
                                    <img src="images/home_4.png" alt="home">
                                    <span class="tags-div background-green tags">Nature</span>
                                     <div class="card-body">
                                          <p class="card-text">Donec elementum dui semper, prvetium dui quis, pretium nisl. Nunc quis ornare odio.</p>
                                    </div>
                                    <div class="card-footer border-0">
                                          <small class="text-muted"><span class="color-grey">11 septemvber 2016 |</span> <a href="#">John Doe</a> </small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card id="people" ">
                                    <img src="images/home_5.png" alt="home">
                                    <span class="tags-div background-purple tags">People</span>
                                     <div class="card-body">
                                          <p class="card-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                                    </div>
                                    <div class="card-footer border-0">
                                          <small class="text-muted"><span class="color-grey">11 septemvber 2016 |</span> <a href="#">John Doe</a> </small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card" id="tech">
                                    <img src="images/home_6.png" alt="">
                                     <span class="tags-div background-black tags">Tech</span>
                                     <div class="card-body">
                                          <p class="card-text">Sed arcu ipsum, convallis quis porttitor bibendum, convallis non eni.</p>
                                    </div>
                                    <div class="card-footer border-0">
                                          <small class="text-muted"><span class="color-grey">11 septemvber 2016 |</span> <a href="#">John Doe</a> </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel owl-carousel-3">
                            <div class="item">
                                <div class="card" id="trip">
                                    <img src="images/home_7.png" alt="home">
                                    <span class="box-1-tag tags-div background-red tags">Trips</span>
                                     <div class="card-body">
                                          <p class="card-text">Donec elementum dui semper, prvetium dui quis, pretium nisl. Nunc quis ornare odio.</p>
                                    </div>
                                    <div class="card-footer border-0">
                                          <small class="text-muted"><span class="color-grey">11 septemvber 2016 |</span> <a href="#">John Doe</a> </small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card" id="trip">
                                    <img src="images/home_8.png" alt="home">
                                    <span class="box-1-tag tags-div background-red tags">Trips</span>
                                     <div class="card-body">
                                          <p class="card-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                                    </div>
                                    <div class="card-footer border-0">
                                          <small class="text-muted"><span class="color-grey">11 septemvber 2016 |</span> <a href="#">John Doe</a> </small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card" id="fashion">
                                    <img src="images/home_9.png" alt="home">
                                     <span class="tags-div background-purple tags">Fashion</span>
                                     <div class="card-body">
                                          <p class="card-text">Sed arcu ipsum, convallis quis porttitor bibendum, convallis non eni.</p>
                                    </div>
                                    <div class="card-footer border-0">
                                          <small class="text-muted"><span class="color-grey">11 septemvber 2016 |</span> <a href="#">John Doe</a> </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-3 background-grey-light pd-5 pt-5">
                <div class="container">
                    <div class="row">
                        <div class="owl-carousel owl-carousel-2">
                            <div class="item">
                                <div class="card">
                                    <img src="images/home_1.png" alt="home">
                                    <span class="box-1-tag tags-div1 background-red tags">Trips</span>
                                     <div class="card-body">
                                          <p class="card-text">Donec elementum dui semper, prvetium dui quis, pretium nisl. Nunc quis ornare odio.</p>
                                    </div>
                                    <div class="card-footer border-0">
                                          <small class="text-muted"><span class="color-grey">11 septemvber 2016 |</span> <a href="#">John Doe</a> </small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <img src="images/home_2.png" alt="home">
                                     <span class="tags-div1 background-black tags">Tech</span>
                                     <div class="card-body">
                                          <p class="card-text">Maecenas quis lobortis nunc. Nullam sit amet augue vel odio congue vulputate a ut nisi</p>
                                    </div>
                                    <div class="card-footer border-0">
                                          <small class="text-muted"><span class="color-grey">11 septemvber 2016 |</span> <a href="#">John Doe</a> </small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <img src="images/home_10.jpg" alt="home">
                                    <span class="box-1-tag tags-div1 background-red tags">Trips</span>
                                     <div class="card-body">
                                          <p class="card-text">Donec elementum dui semper, prvetium dui quis, pretium nisl. Nunc quis ornare odio.</p>
                                    </div>
                                    <div class="card-footer border-0">
                                          <small class="text-muted"><span class="color-grey">11 septemvber 2016 |</span> <a href="#">John Doe</a> </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="newsletter background-blue text-center mt-4">
                <div class="container-fluid">
                    <h1 class="color-white">Newsletter</h1>
                    <p class="letter-Donec">Donec elementum dui semper, pretium dui quis, pretium nisl.</p>
                    <div class="letter-sign">
                        <div class="input-group ">
                          <input type="text" class="form-control letter-input color-white" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <a href="/login"><span class="input-group-text color-blue letter-sign background-white" id="basic-addon2">Sign Up</span></a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="text-center pt-4 pb-4">
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Try awsome tool for desgners <span class="symo font-weight-bold">symu.co</span></p>
            </footer>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/libs/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/libs/popper.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/libs/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
        <!-- Include js plugin -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Optional JavaScript -->
        <script src="js/main.js" type="text/javascript" charset="utf-8"></script>
    </body>
</html>