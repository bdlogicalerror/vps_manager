<?php
/**
 * FileName: EditController.php
 * Created by Munna Khan.
 * Email: <engrmunnakhan@gmail.com>
 * Date: 1/29/19
 * Time: 3:11 PM
 */

class EditController extends Controller
{
	public function view($filepath){
		$d['file_data']=htmlentities(file_get_contents($filepath));
		$d['path']=$filepath;
		$this->render('editor',$d);
	}

	public function pp(){
		print_r("here");
		die();
	}
}