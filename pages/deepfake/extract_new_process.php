<?php
    define('ROOT', realpath(__DIR__ . '/../..'));
    ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s

    // python faceswap.py extract -i ./ko.mp4 -o ./ko_extract

    function extract_process(){     
        $file = $_GET['file1'];
        $file_ext = strtolower(substr(strrchr($file, "."), 1));
        $fileNameWithoutExt = substr($file, 0, strrpos($file, "."));

        $video_path = 'C:/Apache24/htdocs/view/deepfake/'.$_GET['file1']; // Input Video
        // echo $video_path . "<br>";

        $output_path = 'C:/Apache24/htdocs/datasets/deepfake/'.$fileNameWithoutExt;
        // echo $output_path;
     
        exec("conda activate deep && cd C:/Users/kyu/Desktop/deepfake/ && python faceswap.py extract -i $video_path -o $output_path");
    }
    
    extract_process();

    echo "<script> document.location.href='../../view/deepfake/view_new_extract.php?file={$_GET['file']}&file1={$_GET['file1']}'; </script>"; // Redirection

?>