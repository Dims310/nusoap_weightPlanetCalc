<?php
require 'vendor/autoload.php';
$server = new soap_server();

$namespace = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$server->configureWSDL('WeightPlanetCalc');
$server->wsdl->schemaTargetNamespace = $namespace;

function get_message($name) {
    return "Selamat datang di $name";
}

function get_name($name, $weight){
    return "Nama Anda $name; Berat badan di Bumi: $weight kg<br> <h3>Berat badan di tiap planet:</h3>";
}

$server->register('get_message',
    array('name' => 'xsd:string'),
    array('return' => 'xsd:string'),
    $namespace,
    false,
    'rpc',
    'encoded',
    'Weight every planet on this galaxy'
);

$server->register('get_name',
    array('name' => 'xsd:string'),
    array('return' => 'xsd:string'),
    $namespace,
    false,
    'rpc',
    'encoded',
    'Weight every planet on this galaxy'
);

$server->register('W_onMerkurius',
    array('name' => 'xsd:float'),
    array('return' => 'xsd:float'),
    $namespace,
    false,
    'rpc',
    'encoded',
    'Weight every planet on this galaxy'
);

function W_onMerkurius($weight){
    return $weight*0.38;
}

$server->register('W_onVenus',
    array('name' => 'xsd:float'),
    array('return' => 'xsd:float'),
    $namespace,
    false,
    'rpc',
    'encoded',
    'Weight every planet on this galaxy'
);

function W_onVenus($weight){
    return $weight*0.91;
}

$server->register('W_onBumi',
    array('name' => 'xsd:float'),
    array('return' => 'xsd:float'),
    $namespace,
    false,
    'rpc',
    'encoded',
    'Weight every planet on this galaxy'
);

function W_onBumi($weight){
    return $weight*1.00;
}

$server->register('W_onMars',
    array('name' => 'xsd:float'),
    array('return' => 'xsd:float'),
    $namespace,
    false,
    'rpc',
    'encoded',
    'Weight every planet on this galaxy'
);

function W_onMars($weight){
    return $weight*0.38;
}

$server->register('W_onJupiter',
    array('name' => 'xsd:float'),
    array('return' => 'xsd:float'),
    $namespace,
    false,
    'rpc',
    'encoded',
    'Weight every planet on this galaxy'
);

function W_onJupiter($weight){
    return $weight*2.34;
}

$server->register('W_onSaturnus',
    array('name' => 'xsd:float'),
    array('return' => 'xsd:float'),
    $namespace,
    false,
    'rpc',
    'encoded',
    'Weight every planet on this galaxy'
);

function W_onSaturnus($weight){
    return $weight*1.06;
}

$server->register('W_onUranus',
    array('name' => 'xsd:float'),
    array('return' => 'xsd:float'),
    $namespace,
    false,
    'rpc',
    'encoded',
    'Weight every planet on this galaxy'
);

function W_onUranus($weight){
    return $weight*0.92;
}

$server->register('W_onNeptunus',
    array('name' => 'xsd:float'),
    array('return' => 'xsd:float'),
    $namespace,
    false,
    'rpc',
    'encoded',
    'Weight every planet on this galaxy'
);

function W_onNeptunus($weight){
    return $weight*1.19;
}

$server->service(file_get_contents("php://input"));
exit();
?>