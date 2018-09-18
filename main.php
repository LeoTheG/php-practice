<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=local','root','');
} catch(PDOException $e){
    die('Could not connect: ' . $e->getMessage() . phpinfo());
}



$greeting = '';
if($_GET['id'])
    $greeting =  htmlspecialchars($_GET['id']); 

$person = [
    'age'=>31,
    'hair'=>'brown',
    'cool'=>true,
    'name'=>'Bob'
];

/*
 * prints values
foreach($person as $feature){
    echo "<li>$feature</li>";    
}
 */

/*
 * prints keys and values
foreach($person as $key=>$val){
    <li><strong>($key):</strong> $val</li>;
}
 */



 /*
$body = $doc->getElementsByTagName('body')->item(0);
$el = $doc->createElement('h2','hi');
$body->appendChild($el);
*/

?>