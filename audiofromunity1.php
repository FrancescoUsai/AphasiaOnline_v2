<?php

   $thefile = $_POST['file'];
   $decoded = base64_decode($thefile);

   file_put_contents('test.wav', $decoded);

    //file_put_contents('sound.wav', $thefile);

   if(!empty($thefile))
    {
    echo "Success!";
    }
    else
    {
    echo "Failed!";
    }
?>
