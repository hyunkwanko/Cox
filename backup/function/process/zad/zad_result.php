<?php
    ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s
    $video_path='C:\Users\kyu\Desktop\kth_Trim.mp4'; // Input A Video
    $image_path='C:\Apache24\htdocs\function\process\zad\\'. $_SERVER['QUERY_STRING'];
    // $image_path='http://localhost:8080/function/process/zad//'. $_SERVER['QUERY_STRING']; // Input B image

    $output_path='C:\Apache24\htdocs\function\process\zad\new_zad.mp4';
    // $output_path='http://localhost:8080/function/results/new_zad.mp4'; // Result

    $predictor_path='C:\Users\kyu\Desktop\Zad\data\shape_predictor_68_face_landmarks.dat';
    $candide_path='C:\Users\kyu\Desktop\Zad\data\candide.npz';

    exec("python C:\Users\kyu\Desktop\Zad\zad_main.py $video_path $image_path $predictor_path $candide_path $output_path");

    // ffmpeg MPEG -> H264 코덱 변경
    exec("cd C:/Apache24/htdocs/function/results && C:/Users/kyu/Desktop/ffmpeg/ffmpeg/bin/ffmpeg -i $output_path -c:v libx264 -preset slow -crf 22 -c:a copy result_zad.mp4");
    //echo "Done.\n";
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
                        <video width='500' height='500' controls><source src ='http://210.125.126.112:8080/function/results/result_zad.mp4' type='video/mp4'></video>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content End -->

        <!-- Footer 파트 -->

        <?php require("../../part/footer_update.php"); ?>

    </body>
</html>
