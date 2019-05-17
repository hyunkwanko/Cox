<?php
    define('ROOT', realpath(__DIR__ . '/../..'));
    ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s
    
    function model_process(){
        $save_path = 'C:/Apache24/htdocs/output/gan'; // stored face images
        echo $save_path . "<br>";
        
        $model_path = $_GET['model'];
        echo $model_path . "<br>";

        $output_path = 'C:/Apache24/htdocs/output/gan/';
        echo $output_path;
     
        // exec("conda activate faceswap && cd C:/Users/kyu/Desktop/gan_repack/ && python extract.py $video_path $output_path");
    }
    
    model_process();

    // echo "<script> document.location.href='./pages/gan/page_conversion.php'; </script>"; // Redirection
?>