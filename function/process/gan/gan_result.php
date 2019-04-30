<?php
   ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s
   $video_path_A='C:\Users\kyu\Desktop\kth2.mp4'; // Input A Video
   $video_path_B='C:\Users\kyu\Desktop\newtest.mp4'; // Input B Video

//    $output_video_path='C:\Apache24\htdocs\function\results\new_gan.mp4'; // Result
   $output_video_path='http://localhost:8080/function/results/new_gan.mp4'; // changed

   exec("conda activate faceswap && cd C:/Users/kyu/Desktop/gan_repack/ && python video_conversion_ho.py $video_path_A $video_path_B $output_video_path");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require("../../part/head_update.php"); ?>
    </head>
    <!-- HEAD END -->

    <!-- BODY -->
    <body>
        <!-- Top Navigation -->

        <?php require("../../part/nav_update.php"); ?>

        <!-- Page Content -->
        <div class="contents">
            <div class="container" style="text-align:center">
                <div class="row">
                    <div class="col-sm-12">
                        <video width='500' height='500' controls><source src ='http://localhost:8080/function/results/new_gan.mp4' type='video/mp4'></video>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content End -->

        <!-- Footer 파트 -->

        <?php require("../../part/footer_update.php"); ?>

    </body>
</html>
