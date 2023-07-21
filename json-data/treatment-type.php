<?php
         $path = 'data/treatmentType.json';
         $jsonString = file_get_contents($path);
         $jsonData = json_decode($jsonString);
         $treatmentTypeOptions = '';
         foreach ($jsonData as $data) {
           $treatmentTypeOptions = $treatmentTypeOptions . "<option value= " . $data . ">" . $data . "</option>";
         }
?>