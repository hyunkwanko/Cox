<?php
    define('ROOT', realpath(__DIR__ . '/../..'));

    function addOh($value){
        $retValue = $value .= "!!";
        return $retValue;
    }

    $value = "test value";
    $printValue = call_user_func_array('addOh', array($value));

    echo "<script> document.location.href='$ROOT/view/gan/view_extract.php'; </script>"; // redirection
?>