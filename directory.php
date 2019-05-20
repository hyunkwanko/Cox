<?php
    $dir = "/Users/khk/COX";
    
    // Open a directory, and read its contents      
    if (is_dir($dir)){                              
        if ($dh = opendir($dir)){                     
            while (($file = readdir($dh)) == true){   
                echo $file . "<br>";        
            }
            closedir($dh);                              
        }                                             
    }
?>
