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
                $file = $_FILES['upload']['name'];
                $file_ext = strtolower(substr(strrchr($file, "."), 1));
                $fileNameWithoutExt = substr($file, 0, strrpos($file, "."));
            
                if ($_FILES['upload']['type'] == 'video/quicktime')
                    $_FILES['upload']['name'] = $fileNameWithoutExt.".mp4";
                echo "
                    <a href='../../pages/deepfake/page_extract.php?file={$_FILES['upload']['name']}'>
                        <span class='icon-arrow-right h3'></span>
                    </a>
                ";
            ?>
        </div>
    </header>
    
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <div class="container" style="padding: 100px 0">
                <?php
                    $uploadfile = './'. $_FILES['upload']['name'];
                    if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)){
                        if($_FILES['upload']['type'] == 'image/jpeg' || $_FILES['upload']['type'] == 'image/png'){
                            echo "
                                <div class='swiper-slide cover' style='background-image: url({$uploadfile});'>
                                    <a href={$uploadfile} data-fancybox='gallery' class='zoom'><span class='fas fa-search'></span></a>
                                </div>
                            ";
                        } else if($_FILES['upload']['type'] == 'video/quicktime'){
                            exec("ffmpeg -i {$uploadfile} -vcodec copy ".$fileNameWithoutExt.".mp4");
                            echo "<video width='100%' height='100%' controls><source src =./".$fileNameWithoutExt.".mp4></video>";
                        } else if($_FILES['upload']['type'] == 'video/mp4'){
                            echo "<video width='100%' height='100%' controls><source src =./".$fileNameWithoutExt.".mp4></video>";
                        } else {
                            echo "File Upload Fail";
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <?php include ROOT."/view/footer.php"?>
    </body>
</html>