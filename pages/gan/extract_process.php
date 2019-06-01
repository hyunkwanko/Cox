<?php
    define('ROOT', realpath(__DIR__ . '/../..'));
    ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s
    
    function extract_process(){     
        $file = $_GET['file'];
        $file_ext = strtolower(substr(strrchr($file, "."), 1));
        $fileNameWithoutExt = substr($file, 0, strrpos($file, "."));

        $video_path = 'C:/Apache24/htdocs/view/gan/'.$_GET['file']; // Input Video
        // echo $video_path . "<br>";

        $output_path = 'C:/Apache24/htdocs/datasets/gan/'.$fileNameWithoutExt;
        // echo $output_path;
     
        exec("conda activate faceswap && cd C:/Users/kyu/Desktop/gan_repack/ && python extract.py $video_path $output_path");
    }
    
    extract_process();

    echo "<script> document.location.href='../../view/gan/view_extract.php?file=".$_GET['file']."'; </script>"; // Redirection
?>