<?php
    define('ROOT', realpath(__DIR__ . '/../..'));
    ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s
    
    function extract_process(){
        $video_path = $ROOT.'/view/gan/'.$_GET['file'];; // Input Video
        echo $video_path . "<br>";
     
        $output_path = $ROOT.'/output/gan/';
        echo $output_path;
     
        // exec("conda activate faceswap && cd C:/Users/kyu/Desktop/gan_repack/ && python video_conversion_ho.py $video_path $output_path");
    }
    
    extract_process();

    echo "<script> document.location.href='$ROOT/view/gan/view_extract.php'; </script>"; // Redirection
?>

