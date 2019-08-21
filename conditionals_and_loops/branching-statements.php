<?php 
$names = array("Balázs", "Jóska", "Pista", "Géza", "Joli", "Juli");
echo "<pre>";
print_r($names);
echo "<pre>";

for($i=0; $i<=count($names);$i++){
    echo $i+1 . ". " . $names[$i] . "<br>";
    if($names[$i] == "Géza"){        
        break;
    }
    
}