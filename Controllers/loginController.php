<?php
/**
 * FileName: loginController.php
 * Created by Munna Khan.
 * Email: <engrmunnakhan@gmail.com>
 * Date: 1/29/19
 * Time: 8:50 PM
 */

class loginController extends Controller
{
	public function index(){
		if($_SESSION['login']){
			header('location:/');
		}else{
			$this->render('login',"");
		}

	}

	public function submit($p,$q){
		if($_POST['uname']=="munna" && $_POST['psw']=="ak47ak47"){
			$_SESSION['login']=true;
			$_SESSION['user']="admin";
			header('location:/');
		}
	}

	public function destroy($p,$q){
		session_destroy();
		header('location:/');
	}
}