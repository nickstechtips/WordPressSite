<?php
require_once('../../../../wp-load.php');
require_once('../../../../wp-load.php');
include_once ('../../../../wp-content/plugins/Techtonic-WPPlugin/utils/DataAccess.php');


global $wpdb;

$id = $_GET["id"];  
$method = $_GET["method"];
 
if(is_callable($method)){
    $method($id, $wpdb);
}else{
    defaultResponse(); //or some kind of error message
}


function Gethomepage(){
    global $wpdb;
    $user = "Test";
    wp_send_json($user);
}












