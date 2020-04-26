<?php
if (!isset($_SESSION['loggedin'])) {
	header('Location: panel.php');
	exit;
}
?>
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Deliverily - Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/iconedeli.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
<link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" rel="stylesheet"><link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet"><link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet"></head>

<body style="overflow: visible;">
    <!-- Preloader Start -->
    <div id="preloader-active" style="display: none;">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/dile.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header">
                <div class="header-bottom  header-sticky sticky-bar">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/dile.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        
        <div class="slider-area slider-bg ">
            <div class="slider-active dot-style slick-initialized slick-slider slick-dotted">
                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1646px;"><div class="single-slider d-flex align-items-center slider-height  slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" style="width: 1646px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="myform form ">
                                    <div class="logo mb-3">
                                        <div class="col-md-12 text-center">
                                           <h1>Login</h1>
                                        </div>
                                   </div>
                                  <form action="login.php" method="post" name="login">
                                          <div class="form-group">
                                             <label for="exampleInputEmail1">Nom d'utilisateur</label>
                                             <input type="text" name="username"  class="form-control" id="username" placeholder="Nom d'utilisateur">
                                          </div>
                                          <div class="form-group">
                                             <label for="exampleInputEmail1">Mot de passe</label>
                                             <input type="password" name="password" id="password"  class="form-control" placeholder="Mot de passe">
                                          </div>
                                          
                                          <div class="col-md-12 text-center ">
                                             <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="submit" id="submit">S'Identifier</button>
                                          </div>
                                       </form>
                                
                               </div>
               
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right">
                                    <img src="assets/img/hero/deliverily5.png" alt="" data-animation="fadeInRight" data-delay="1s" class="" style="animation-delay: 1s;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div></div>


            <ul class="slick-dots" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 1" tabindex="0" aria-selected="true">1</button></li></ul></div>
            <!-- Slider Shape -->
            <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
                <img class="slider-shape2" src="assets/img/hero/right-top-shape.png" alt="">
                <img class="slider-shape3" src="assets/img/hero/left-botom-shape.png" alt="">
            </div>
            
            

        </div>
    </main>
    <footer>
    </footer>
</body></html>