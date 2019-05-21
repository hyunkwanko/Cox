<?php
    define('ROOT', realpath(__DIR__ . '/../..'));
    ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s

    function train_process(){
        $file = $_GET['file'];
        $file_ext = strtolower(substr(strrchr($file, "."), 1));
        $fileNameWithoutExt = substr($file, 0, strrpos($file, "."));

        $file1 = $_GET['file1'];
        $file_ext1 = strtolower(substr(strrchr($file1, "."), 1));
        $fileNameWithoutExt1 = substr($file1, 0, strrpos($file1, "."));

        $extract_images_dir = 'C:/Apache24/htdocs/datasets/gan/'.$fileNameWithoutExt;
        echo $extract_images_dir . "<br>";

        $new_model_dir_name = "{$fileNameWithoutExt}_with_{$fileNameWithoutExt1}";
        // echo $new_model_dir_name;

        $models_save_dir = 'D:/models/gan/'.$new_model_dir_name;
        echo $models_save_dir . "<br>";

        $dataset_dir = 'C:/Apache24/htdocs/datasets/gan/'.$fileNameWithoutExt1;
        echo $dataset_dir . "<br>";
     
        // exec("conda activate faceswap && cd C:/Users/kyu/Desktop/gan_repack/ && python train.py $extract_images_dir $models_save_dir $dataset_dir 40000");

        echo "<script> document.location.href='./page_new_conversion.php?file={$_GET['file']}&model={$new_model_dir_name}'; </script>"; // Redirection
    }
    
    train_process();

?>