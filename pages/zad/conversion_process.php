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

        $video_dir = 'C:/Apache24/htdocs/view/zad/'.$_GET['file'];
        echo $video_dir . "<br>";

        $image_dir = 'C:/Apache24/htdocs/view/zad/'.$_GET['image'];
        echo $image_dir . "<br>";

        $face_landmarks = 'C:/Users/kyu/Desktop/Zad/data/shape_predictor_68_face_landmarks.dat';
        echo $face_landmarks . "<br>";
        
        $candide = 'C:/Users/kyu/Desktop/Zad/data/candide.npz';
        echo $candide . "<br>";

        $output_file = $imageNameWithoutExt.'_with_'.$fileNameWithoutExt.'.mp4';
        echo $output_file . "<br>";

        $output_dir = 'C:/Apache24/htdocs/output/zad/'.$output_file;
        echo $output_dir . "<br>";
     
        exec("cd C:/Users/kyu/Desktop/zad/ && C:/Users/kyu/Desktop/zad/venv/Scripts/python zad_main.py $video_dir $image_dir $face_landmarks $candide $output_dir");
        
        $change_file_dir = 'C:/Apache24/htdocs/output/zad/result_'.$output_file;

        echo $change_file_dir;
        exec("ffmpeg -i $output_dir -c:v libx264 -preset slow -crf 22 -c:a copy $change_file_dir");

        echo "<script> document.location.href='../../view/zad/view_result.php?result={$output_file}'; </script>"; // Redirection
    }
    
    model_process();


?>