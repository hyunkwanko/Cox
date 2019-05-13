<?php
    ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s
    exec("python C:\Users\kyu\Desktop\DeepfakeNew\deepfake_main.py"); // input, output 경로 수정 필요
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
                        <video width='500' height='500' controls><source src ='http://localhost:8080/function/results/new_deepfake.mp4' type='video/mp4'></video>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content End -->

        <!-- Footer 파트 -->

        <?php require("../../part/footer_update.php"); ?>

    </body>
</html>