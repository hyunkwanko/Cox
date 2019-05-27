<!-- Root Directory -->
<?php define('ROOT', realpath(__DIR__ . '/../..'));?>

<!DOCTYPE html>
<html lang="en">
    <?php include ROOT."/view/head.php"?>

    <body>
    
    <header class="header-bar d-flex d-lg-flex align-items-center inner-page-header" data-aos="fade-down">
        <div class="site-logo">
            <a href="<?php ROOT?>/">COX</a>
        </div>

        <div class="d-inline-block d-xl-block ml-md-0 ml-auto py-3" style="position: relative; top: 3px;">
            <?php 
                echo "
                    <a href='../../pages/deepfake/page_select_dataset.php?file=".$_GET['file']."'>
                        <span class='icon-arrow-right h3'></span>
                    </a>
                ";
                $file = $_GET['file'];
                $file_ext = strtolower(substr(strrchr($file, "."), 1));
                $fileNameWithoutExt = substr($file, 0, strrpos($file, "."));        
            ?>
        </div>
    </header> 
  
    <main class="main-content">
        <div class="container-fluid photos">
            <div class="row align-items-stretch">
                <?php
                    $dir = "C:/Apache24/htdocs/datasets/deepfake/{$fileNameWithoutExt}";
                    
                    // Open a directory, and read its contents      
                    if (is_dir($dir)){                              
                        if ($dh = opendir($dir)){
                            $i = 1;
                            while (($file = readdir($dh)) == true){
                                // echo $file . "<br>";
                                
                                if ($file == '.' || $file == '..')
                                    continue;
                                
                                echo "
                                    <div class='col-6 col-md-6 col-lg-4' data-aos='fade-up'>
                                        <a href='../../datasets/deepfake/{$fileNameWithoutExt}/{$file}' class='d-block photo-item' data-fancybox='gallery'>
                                            <img src='../../datasets/deepfake/{$fileNameWithoutExt}/{$file}' alt='Image' class='img-fluid'>
                                            <div class='photo-text-more'>
                                                <span class='icon icon-search'></span>
                                            </div>
                                        </a>
                                    </div>
                                ";

                                if ($i == 20) // Max Image
                                    break;
                                $i = $i + 1;
                            }
                            closedir($dh);
                        }
                    }
                ?>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 text-center py-5">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </main>

    <?php include ROOT."/view/footer.php"?>

  </body>
</html>