<?php
    define('ROOT', realpath(__DIR__ . '/../..'));
    ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s

    // python faceswap.py train -A ./ko_extract -B ./ho_extract -m ./ko_ho_model

    function train_process(){
        $file = $_GET['file'];
        $file_ext = strtolower(substr(strrchr($file, "."), 1));
        $fileNameWithoutExt = substr($file, 0, strrpos($file, "."));

        $extract_images_dir = 'C:/Apache24/htdocs/datasets/deepfake/'.$fileNameWithoutExt;
        // echo $extract_images_dir . "<br>";

        $models_save_dir = 'D:/models/deepfake/'.$fileNameWithoutExt;
        // echo $models_save_dir . "<br>";

        $dataset_dir = 'C:/Apache24/htdocs/datasets/deepfake/'.$_GET['dataset'];
        // echo $dataset_dir . "<br>";

        $iterations = $_GET['count'];
        // echo $iterations . "<br>";

        // exec("conda activate deep && cd C:/Users/kyu/Desktop/deepfake/ && python faceswap.py train -A $extract_images_dir -B $dataset_dir -m $models_save_dir -it $iterations");
    }
    
    train_process();

    echo "<script> document.location.href='./page_select_model.php?file=".$_GET['file']."'; </script>"; // Redirection
?>