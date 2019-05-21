<?php
    define('ROOT', realpath(__DIR__ . '/../..'));
    ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s

    function model_process(){
        $video_dir = 'C:/Apache24/htdocs/view/gan/'.$_GET['file'];
        echo $video_dir . "<br>";

        $model_dir = 'D:/models/gan/'.$_GET['model'];
        echo $model_dir . "<br>";

        $output_dir = 'C:/Apache24/htdocs/output/gan/';
        echo $output_dir;
     
        // exec("conda activate faceswap && cd C:/Users/kyu/Desktop/gan_repack/ && python conversion.py $video_path $model_path $output_path");
    }
    
    model_process();

    // echo "<script> document.location.href='../../view/gan/view_result.php?result=out_".$_GET['file']."'; </script>"; // Redirection
?>