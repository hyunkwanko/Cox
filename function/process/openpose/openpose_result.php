<?php
    $video_path='C:\Users\kyu\Desktop\NewPose\medias\sample_01.mp4'; // Input A Video
    $detected_image_path='C:\Users\kyu\Desktop\NewPose\medias\sample_01_detected_image.PNG'; //Input B detect image
    $apply_image_path='C:\Users\kyu\Desktop\NewPose\medias\sample_01_apply_image.jpg'; // Input C apply image

    // $output_path='C:\Apache24\htdocs\function\openpose\new_openpose.mp4';
    $output_path='C:\Apache24\htdocs\function\process\openpose\new_openpose.mp4'; // Result

    $predictor_path='C:\Users\kyu\Desktop\Zad\data\shape_predictor_68_face_landmarks.dat';
    $candide_path='C:\Users\kyu\Desktop\Zad\data\candide.npz';

    exec("python C:\Users\kyu\Desktop\NewPose\\newpose_main.py $video_path $detected_image_path $apply_image_path $predictor_path $candide_path $output_path");
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
                        <video width='500' height='500' controls><source src ='http://210.125.126.112:8080/function/results/new_openpose.mp4' type='video/mp4'></video>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content End -->

        <!-- Footer 파트 -->

        <?php require("../../part/footer_update.php"); ?>

    </body>
</html>
