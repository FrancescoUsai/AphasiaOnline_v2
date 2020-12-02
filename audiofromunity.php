<?php
   $audioBytes = $_POST["name"];
   $sampleRate = $_POST["sampleRate"];

   $byte_array = unpack('C*', $audioBytes);
   var_dump($byte_array);


   if ($audioBytes != "")
   {
       echo("Sample Rate = " . sampleRate);
       //echo("Field 1: " . $audioBytes);

       //$file = fopen("data.r", "a");
       //fwrite($file, $byte_array);
       file_put_contents('sound.wav', $audioBytes);

       //fclose($file);
   } else
   {
       echo("Message delivery failed...");
   }
?>


