<?php
/**
 * Created by JetBrains PhpStorm.
 * User: smccard
 * Date: 7/9/13
 * Time: 7:45 AM
 * To change this template use File | Settings | File Templates.
 */

$ch = curl_init('/spellz/includes/functions/links.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);


$result = curl_exec($ch);
//var_dump($result);
echo($result)

?>