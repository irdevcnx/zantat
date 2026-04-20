<?php include 'ini.inc.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zantat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:300,700&display=swap" rel="stylesheet">
    
        
        <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EDDWTH6XG8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-EDDWTH6XG8');
    </script>
    
    <style>
    
     .logo-size{
        width: 140px;
        margin-left: 0;
        top: 0;
        position: relative
    }
    
    body {
    margin: 0;
/*     font-family: "Heebo",sans-serif; */
    font-family: Avenir,Noto Sans SC;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #52565b;
    background-color: #fff;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}

.navbar .dropdown-toggle::after {
   display:none;
}
.nav-item{
    min-width: 156px;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
     font-family: Avenir,Noto Sans SC;
    background-color: #f1f1f2;
    color: #013d57;
    font-weight: 900;
    padding: 6px 16px;
    font-size: 16px;
    border: none;
    margin-right: 1px;
    cursor: pointer;
    text-align:center;
    
    }
    
    .navbar-light .navbar-nav .nav-link {
    margin-right: 0;
    padding: 0;
    color: #005677;
    font-weight: 600;
    font-size: 15px;
    text-transform: uppercase;
    outline: none;
}
.footer p{color:rgb(0, 86, 119)}


.owl-carousel .owl-item img{
    max-height: 700px;
}
.slidebg {
    display: block;
/*     height: 320px; */
    background: rgba(0, 86, 119,0.7);
/*     mix-blend-mode: multiply; */
    text-align: justify;
    padding: 16px;
     max-width:372px;
}

.blue-box{
    width: 375px;
    position: absolute;
    top: calc(150px + (50vw - 280px)/2);
    right: calc((100vw - 1000px)/2);
    color: #fff;
}

.slidetext {
    background: none;
    text-align: left;
    padding: 30px;
    font-size: 22px;
    line-height: 29px;
    font-weight:600;
    color: #fff;
}

.viewmore{
margin: 7px 0;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF!important;
    background: transparent;
    border: 1px solid #FFFFFF;
    font-size: 22px;
    transition: .5s;
}
.bodyblue, .bodygrey p {
    font-size: 16px;
/*     line-height: 1.27; */
text-align: justify;
}
.bodygrey p {
    color: #6d6e70;
}

.bg-primary {
    background-color: #105677 !important;
}
.btn-primary {
    color: #000;
    background-color: #105677;
    border-color: #105677;
}

.btn-primary:hover {
    color: #fff;
    background-color: #005677;
    border-color: #005677;
}


@media (min-width: 1200px) {
.navbar{
    height:100px

}
}
    </style>
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light  p-0" style="max-width: 1000px;margin:auto;margin-top: 50px;">
        <a href="<?=$co_link?>index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img alt="" src="img/logo.png" class="logo-size">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ABOUT US</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="<?=$co_link?>about-us.php" class="dropdown-item">Who We Are</a>
                        <a href="<?=$co_link?>vision.php" class="dropdown-item">Vision Mission</a>
                        <a href="<?=$co_link?>our-brand.php" class="dropdown-item">Our Brand</a>
                    </div>
                </div>
                 <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">INVESTOR RELATIONS</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="<?=$co_link?>ir-home.php" class="dropdown-item">IR HOME</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                   <a href="<?=$co_link?>contact.php" class="nav-item nav-link">CONTACT</a>
                </div>
                
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
