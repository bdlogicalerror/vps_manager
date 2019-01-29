<?php
/**
 * FileName: index.php
 * Created by Munna Khan.
 * Email: <engrmunnakhan@gmail.com>
 * Date: 1/28/19
 * Time: 8:30 PM
 */
require_once "dmap.php";

$dmap = new dmap();
if ($_SERVER['REQUEST_METHOD'] == "GET"){
    if(isset($_GET['path'])){
	    header('location:filemanager.php?path='.$_GET['path']);
    }elseif (isset($_GET['file'])){
	    header('location:editor.php?file='.$_GET['file']);
    }else{
	    echo "Home";
    }

}elseif ($_SERVER['REQUEST_METHOD']=="POST"){
    var_dump($_POST);
}
?>





