<?php
/**
 * FileName: edit_process.php
 * Created by Munna Khan.
 * Email: <engrmunnakhan@gmail.com>
 * Date: 1/29/19
 * Time: 10:43 AM
 */

if($_SERVER['REQUEST_METHOD']=="POST"){
// Append a new person to the file
	$data_to_write= $_POST['file_content'];
	// Write the contents back to the file
	file_put_contents($_POST['path'], $data_to_write);
	echo "complete";
}