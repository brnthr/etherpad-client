<?php

error_reporting(E_ALL ^ E_DEPRECATED);
 ini_set('display_errors', true);

require ('vendor/autoload.php');

$instance = new EtherpadLite\Client(
    'ca5ca919b6bf1e3cc441ff261a766cc1975f64dd0d77a934f72e224ef89ef2f9',
    'http://localhost:9001/api');



//Utilisateur
$padUsersCount = $instance->padUsersCount('essai');
$padUsersCount = $padUsersCount->padUsersCount;
echo "Nombre d'utilisateur sur le Pad : ". $padUsersCount ."<br>";

//Révisions
$revisionCount = $instance->getRevisionsCount('essai');
$revisionCount = $revisionCount->revisions;
echo ("Nombre de révisions " . $revisionCount . "<br>");

//Groupes
$listAllGroups = $instance->listAllGroups();
if (empty($listAllGroups->groupIDs)){
    echo "Aucun groupes <br>";
} else{
    echo "Groupes : <br>";
    echo "<ul>";
    foreach ($listAllGroups->groupIDs as $groupID){
        echo "<li>".$groupID."</li>";
    }
    echo "</ul>";
}


//Pads
$listAllPads = $instance->listAllPads();
if (empty($listAllPads->padIDs)){
    echo "Aucun Pads <br>";
} else{
    echo "Pads: <br>";
    echo "<ul>";
    foreach ($listAllPads->padIDs as $padID){
        echo "<li>".$padID."</li>";
    }
    echo "</ul>";
}


echo "<hr>";
$getText = $instance->getText('essai');
print_r($getText->text);
echo "<br>";



?>



