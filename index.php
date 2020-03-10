<?php

error_reporting(E_ALL ^ E_DEPRECATED);
 ini_set('display_errors', true);

require ('vendor/autoload.php');

$instance = new EtherpadLite\Client(
    '6d91130a6c05a660b00b4fb16b30dd9b15d02145bc8012e2972cb88f2a51616f',
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



