<?php
/**
 * Created by JetBrains PhpStorm.
 * User: smccard
 * Date: 7/10/13
 * Time: 8:41 AM
 * To change this template use File | Settings | File Templates.
 */

$db_host="127.0.0.1";
$db_name="lovespells";
$username="wizard";
$password="castinSpellz";
$db_con=mysql_connect($db_host,$username,$password);
$connection_string=mysql_select_db($db_name);
// Connection
mysql_connect($db_host,$username,$password);
mysql_select_db($db_name);

if(!$db_con){
    echo("<script>alert('The Database is Currently Down')</script>");
}