<?php

    $serverPath='https://online5.mixedinkey.com/?wsdl';

try{
    $client = @new SoapClient($serverPath,array("exceptions" => 1));
} catch (SoapFault $E){
    echo $E->faultstring;
}

echo "ok\n";

