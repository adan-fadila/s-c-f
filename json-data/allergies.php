<?php
   $path = 'data/allergies.json';
   $jsonString = file_get_contents($path);
   $jsonData = json_decode($jsonString);
   $allergies = "";
   foreach ($jsonData as $data) {
     $allergies = $allergies . "<option value= " . $data . ">" . $data . "</option>";
   }

?>