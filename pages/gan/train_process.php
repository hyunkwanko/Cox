<?php
    define('ROOT', realpath(__DIR__ . '/../..'));
    ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s

    function train_process(){
        $file = $_GET['file'];
        $file_ext = strtolower(substr(strrchr($file, "."), 1));
        $fileNameWithoutExt = substr($file, 0, strrpos($file, "."));

        $extract_images_dir = 'C:/Apache24/htdocs/datasets/gan/'.$fileNameWithoutExt;
        // echo $extract_images_dir . "<br>";

        $models_save_dir = 'D:/models/gan/'.$fileNameWithoutExt;
        // echo $models_save_dir . "<br>";

        $dataset_dir = 'C:/Apache24/htdocs/datasets/gan/'.$_GET['dataset'];
        // echo $dataset_dir . "<br>";

        $iterations = $_GET['count'];
        // echo $iterations . "<br>";

        // exec("conda activate faceswap && cd C:/Users/kyu/Desktop/gan_repack/ && python train.py $extract_images_dir $models_save_dir $dataset_dir $iterations");
    }
    
    train_process();

    echo "<script> document.location.href='./page_select_model.php?file=".$_GET['file']."'; </script>"; // Redirection
?>