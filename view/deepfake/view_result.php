<!-- Root Directory -->
<?php define('ROOT', realpath(__DIR__ . '/../..'));?>

<!DOCTYPE html>
<html lang="en">

    <?php include ROOT."/view/head.php"?>

    <body>
    
    <header class="header-bar d-flex d-lg-flex align-items-center" data-aos="fade-down">
        <div class="site-logo">
            <a href="<?php ROOT?>/">PKNUMIND</a>
        </div>
      
        <div class="d-inline-block d-xl-block ml-md-0 ml-auto py-3" style="position: relative; top: 3px;">
            <?php 
                echo "
                    <a href='../../deepfake.php'>
                        <span class='icon-arrow-right h3'></span>
                    </a>
                ";
            ?>
        </div>
    </header>
    
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <div class="container" style="padding: 100px 0">
                <video width='100%' height='100%' controls><source src ="<?php ROOT?>/output/deepfake/<?php echo $_GET['result'];?>"></video>
            </div>
        </div>
    </div>

    <?php include ROOT."/view/footer.php"?>

    </body>
</html>