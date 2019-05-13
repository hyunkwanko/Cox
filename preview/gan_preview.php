<!DOCTYPE html>
<html lang="en">
  <head>
    <title>COX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.scrollbar.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
  </head>
  <body>
  

  <div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="header-bar d-flex d-lg-flex align-items-center" data-aos="fade-down">
      <div class="site-logo">
          <a href="../index.html">COX</a>
      </div>
    
      <div class="d-inline-block d-xl-block ml-md-0 ml-auto py-3" style="position: relative; top: 3px;">
          <a href="../gan.php">
              <span class="icon-undo h3"></span> 
          </a>
      </div>
  </header> 
  

  <div class="swiper-container gallery-top">
      <div class="swiper-wrapper">
        <?php
          $uploadfile = './'. $_FILES['upload']['name'];
            if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)){
                if($_FILES['upload']['type'] == 'image/jpeg' || $_FILES['upload']['type'] == 'image/png')
                    // echo "<img src ={$uploadfile}>";
                    echo "
                        <div class='swiper-slide cover' style='background-image: url({$uploadfile});'>
                            <a href={$uploadfile} data-fancybox='gallery' class='zoom'><span class='fas fa-search'></span></a>
                        </div>
                    ";
                else if($_FILES['upload']['type'] == 'video/mp4')
                    echo "<video width='100%' height='100%' controls><source src ={$uploadfile}></video>";
                echo "<br><a style='background-color:#ffc10794; border-radius:1rem; border:none;' href='http://210.125.126.112:8080/function/process/gan/gan_result.php?{$_FILES['upload']['name']}'>Result</a>";
                } else {
                echo "File Upload Fail";
            }
        ?>
      </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <!-- <script src="js/jquery.stellar.min.js"></script> -->
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/jquery.scrollbar.js"></script>
  <script src="js/main.js"></script>

  
    
  </body>
</html>