<?php 
    // call back (call by value)
    function addOh($value){
        $retValue = $value .= "!!";
        return $retValue;
    }
    
    $value = "test value";
    $printValue = call_user_func_array('addOh', array($value));

    echo "<script> document.location.href='index.php'; </script>"; // redirection
?>