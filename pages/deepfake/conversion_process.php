<?php
    define('ROOT', realpath(__DIR__ . '/../..'));
    ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s

    // python faceswap.py convert -i ~/faceswap/src/trump/ -o ~/faceswap/converted/ -m ~/faceswap/trump_cage_model/

    function model_process(){
        $file = $_GET['file'];
        $file_ext = strtolower(substr(strrchr($file, "."), 1));
        $fileNameWithoutExt = substr($file, 0, strrpos($file, "."));

        $video_dir = 'C:/Apache24/htdocs/datasets/deepfake/'.$fileNameWithoutExt;
        echo $video_dir . "<br>";

        $output_dir = 'C:/Apache24/htdocs/output/deepfake/'.$fileNameWithoutExt;
        echo $output_dir . "<br>";

        $model_dir = 'D:/models/deepfake/'.$_GET['model'];
        echo $model_dir;

        // exec("conda activate deep && cd C:/Users/kyu/Desktop/deepfake/ && python faceswap.py convert -i $video_dir -o $output_dir -m $model_dir");
    }
    exec("conda activate deep && cd C:/Users/kyu/Desktop/deepfake/ && python faceswap.py convert -i $video_dir -o $output_dir -m $model_dir");

    model_process();

    // echo "<script> document.location.href='../../view/deepfake/view_result.php?result=output_".$_GET['file']."'; </script>"; // Redirection
?>