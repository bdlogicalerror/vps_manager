<?php
/**
 * FileName: index.php
 * Created by Munna Khan.
 * Email: <engrmunnakhan@gmail.com>
 * Date: 1/28/19
 * Time: 8:30 PM
 */
define('ROOT', str_replace("index.php", "", $_SERVER["SCRIPT_FILENAME"]));
session_name("vps_manager");
session_start([
	'cookie_lifetime' => 300,
]);
require (ROOT.'request.php');
require (ROOT.'dispatcher.php');
require (ROOT.'router.php');
require_once "Controllers/Controller.php";

$dispatch = new Dispatcher();
$dispatch->dispatch();

?>





