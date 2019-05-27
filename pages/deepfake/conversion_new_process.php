<?php
    define('ROOT', realpath(__DIR__ . '/../..'));
    ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s

    // python faceswap.py convert -i ./ko.mp4 -o ./output/ -m ./ko_ho_model
    // ffmpeg -i ./output/ko_%06d.png -c:v libx264 -vf "fps=25,format=yuv420p" ./output.mp4

    function model_process(){
        $file = $_GET['file'];
        $file_ext = strtolower(substr(strrchr($file, "."), 1));
        $fileNameWithoutExt = substr($file, 0, strrpos($file, "."));

        $video_dir = 'C:/Apache24/htdocs/view/deepfake/'.$file;
        // echo $video_dir . "<br>";

        $output_dir = 'C:/Apache24/htdocs/output/deepfake/'.$fileNameWithoutExt;
        // echo $output_dir . "<br>";

        $model_dir = 'D:/models/deepfake/'.$_GET['model'];
        // echo $model_dir . "<br>";

        // echo("ffmpeg -i $output_dir/$fileNameWithoutExt".'_'."%06d.png -c:v libx264 -vf ".'"'."fps=25,format=yuv420p".'"'." $output_dir/../output_$file");
        // exec("conda activate deep && cd C:/Users/kyu/Desktop/deepfake/ && python faceswap.py convert -i $video_dir -o $output_dir -m $model_dir");
        // exec("ffmpeg -i $output_dir/$fileNameWithoutExt".'_'."%06d.png -c:v libx264 -vf ".'"'."fps=25,format=yuv420p".'"'." $output_dir/../output_$file");
    }

    model_process();

    echo "<script> document.location.href='../../view/deepfake/view_result.php?result=output_".$_GET['file']."'; </script>"; // Redirection
?>