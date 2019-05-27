<?php
    define('ROOT', realpath(__DIR__ . '/../..'));
    ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s

    function model_process(){
        $file = $_GET['file'];
        $file_ext = strtolower(substr(strrchr($file, "."), 1));
        $fileNameWithoutExt = substr($file, 0, strrpos($file, "."));

        $image = $_GET['image'];
        $image_ext = strtolower(substr(strrchr($image, "."), 1));
        $imageNameWithoutExt = substr($image, 0, strrpos($image, "."));

        $image_dir = 'C:/Apache24/htdocs/view/openpose/'.$_GET['image'];
        // echo $image_dir . "<br>";

        $video_dir = 'C:/Apache24/htdocs/view/openpose/'.$_GET['file'];
        // echo $video_dir . "<br>";

        $output_file = $imageNameWithoutExt.'_with_'.$fileNameWithoutExt.'.mp4';
        // echo $output_file . "<br>";

        $output_dir = 'C:/Apache24/htdocs/output/openpose/'.$output_file;
        // echo $output_dir . "<br>";
     
        exec("conda activate posefaceswap && cd C:/Users/kyu/Desktop/openpose/ && python openpose_face.py $image_dir $video_dir $output_dir");
        
        $change_file_dir = 'C:/Apache24/htdocs/output/openpose/result_'.$output_file;

        // echo $change_file_dir;
        exec("ffmpeg -i $output_dir -c:v libx264 -preset slow -crf 22 -c:a copy $change_file_dir");

        echo "<script> document.location.href='../../view/openpose/view_result.php?result={$output_file}'; </script>"; // Redirection
    }
    
    model_process();


?>