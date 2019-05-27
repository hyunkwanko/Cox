<?php
    define('ROOT', realpath(__DIR__ . '/../..'));
    ini_set('max_execution_time', 30000); // Web execution time extends 30s -> 30000s
    
    function extract_detail_process(){
        $file = $_GET['file'];
        $file_ext = strtolower(substr(strrchr($file, "."), 1));
        $fileNameWithoutExt = substr($file, 0, strrpos($file, "."));

        $output_path = 'C:/Apache24/htdocs/datasets/gan/'.$fileNameWithoutExt;
        // echo $output_path;
     
        // exec("conda activate faceswap && cd C:/Users/kyu/Desktop/gan_repack/ && python prep.py $output_path");
    }
    
    extract_detail_process();
    
    echo "<script> document.location.href='../../view/gan/view_extract_detail.php?file=".$_GET['file']."'; </script>"; // Redirection
?>