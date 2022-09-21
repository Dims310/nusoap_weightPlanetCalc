<?php
require 'vendor/autoload.php';

$namespace = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$namespace = str_replace('client.php','server.php', $namespace);
$client = new nusoap_client($namespace);

$weightOnEarth = 60;

$response = $client->call('get_message', array(
    'name' => 'Hitung Berat di Planet Berbeda'
));
echo $response;

echo '<br>';
$response = $client->call('get_name', array(
    'name' => 'Dimas',
    'weight' => $weightOnEarth,
));
echo $response;

$responseWMerkurius = $client->call('W_onMerkurius', array(
    'weight' => $weightOnEarth,
));

$responseWVenus = $client->call('W_onVenus', array(
    'weight' => $weightOnEarth,
));

$responseWBumi = $client->call('W_onBumi', array(
    'weight' => $weightOnEarth,
));

$responseWMars = $client->call('W_onMars', array(
    'weight' => $weightOnEarth,
));

$responseWJupiter = $client->call('W_onJupiter', array(
    'weight' => $weightOnEarth,
));

$responseWSaturnus = $client->call('W_onSaturnus', array(
    'weight' => $weightOnEarth,
));

$responseWUranus = $client->call('W_onUranus', array(
    'weight' => $weightOnEarth,
));

$responseWNeptunus = $client->call('W_onNeptunus', array(
    'weight' => $weightOnEarth,
));

echo '<ul>
        <li>Merkurius: '. $responseWMerkurius .' kg</li>
        <li>Venus: '. $responseWVenus .' kg</li>
        <li>Mars: '. $responseWMars .' kg</li>
        <li>Bumi: '. $responseWBumi .' kg</li>
        <li>Jupiter: '. $responseWJupiter .' kg</li>
        <li>Saturnus: '. $responseWSaturnus .' kg</li>
        <li>Uranus: '. $responseWUranus .' kg</li>
        <li>Neptunus: '. $responseWNeptunus .' kg</li>
     <ul>';

?>
