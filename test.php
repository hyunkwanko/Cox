<?php

define('SEM_KEY', 1000);

function noconcurrency() {
    $semRes = sem_get(SEM_KEY, 1, 0666, 0); // get the resource for the semaphore
    echo "test";

    if(sem_acquire($semRes)) { // try to acquire the semaphore. this function will block until the sem will be available
        // do the work 
        // echo sem_release($semRes); // release the semaphore so other process can use it
        echo "<script> 

        document.location.href='index.php'; 
        
        </script>"        
        ;    
    }
}

noconcurrency();
?>

