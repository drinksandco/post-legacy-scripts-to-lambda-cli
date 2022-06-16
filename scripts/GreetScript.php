<?php

include_once 'model/HelloWorld.php';

use LegacyToLambda\Model\HelloWorld;

$script = new HelloWorld();
echo $script->greet();
