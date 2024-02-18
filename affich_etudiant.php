<?php require 'util.php';

function couleur(float $a){
    if($a<10){ return "#C23020";}
    else{return "#50B060";}
}
echo "<table border=1>";
foreach($tab as $key=>$value){
    echo "<tr>";
    echo "<td style='background-color:".couleur($value)."'>$key</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}
echo "</table>";
?>