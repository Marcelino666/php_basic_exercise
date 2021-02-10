<?php
    $uang = 10000;
    try {
        if ($uang < 15000)
        {
            throw new Exception ("Uang anda kurang untuk membeli nasi goreng yang harganya 15000");
        }
    }
    catch(Exception $error)
    {
        echo "Exception Uang Kurang : " . $error->getMessage();
    }
?>