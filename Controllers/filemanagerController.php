<?php
/**
 * FileName: filemanagercontroller.php
 * Created by Munna Khan.
 * Email: <engrmunnakhan@gmail.com>
 * Date: 1/29/19
 * Time: 1:59 PM
 */

class filemanagerController extends Controller
{
	 function view($param,$dir){
	 	/*var_dump($dir);
	 	die();*/
	 	$this->change_dir($dir['path']);
		$d['dir_list']=$this->dir_list;
		$this->render('filemanager',$d);
	}

	public function edit($param,$path){
		$d['file_data']=htmlentities(file_get_contents($path['file']));
		$d['path']=$path['file'];
		$this->render('editor',$d);
	}
}